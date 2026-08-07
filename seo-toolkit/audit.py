#!/usr/bin/env python3
"""
SEO Audit & Sitemap Generator Toolkit
Supports:
  1. Crawl Mode: Crawls a live website URL, audits SEO on crawled pages, and outputs sitemap.xml.
  2. Local Mode: Scans a local codebase directory for HTML/PHP pages, audits SEO variables, and outputs sitemap.xml.
"""

import os
import sys
import re
import argparse
from urllib.parse import urlparse, urljoin
import xml.etree.ElementTree as ET
from xml.dom import minidom

# Try importing requests and BeautifulSoup (standard libraries will fallback or guide user)
try:
    import requests
    from bs4 import BeautifulSoup
except ImportError:
    print("Error: Required libraries missing. Please run: pip install requests beautifulsoup4")
    sys.exit(1)

class SEOAuditor:
    def __init__(self, base_url=None, local_dir=None):
        self.base_url = base_url
        self.local_dir = local_dir
        self.visited_urls = set()
        self.pages_data = {}  # URL/Path -> dict of audit info
        
    def clean_text(self, text):
        if not text:
            return ""
        return " ".join(text.split())

    # ================= CRAWL MODE =================
    def crawl_site(self, current_url):
        parsed_base = urlparse(self.base_url)
        parsed_curr = urlparse(current_url)
        
        # Stay on the same domain
        if parsed_curr.netloc != parsed_base.netloc:
            return
            
        if current_url in self.visited_urls:
            return
            
        print(f"Crawling: {current_url}")
        self.visited_urls.add(current_url)
        
        try:
            headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) SEO-Audit-Toolkit/1.0'}
            response = requests.get(current_url, headers=headers, timeout=10)
            if response.status_code != 200:
                print(f"Warning: Non-200 status code ({response.status_code}) for {current_url}")
                return
                
            content_type = response.headers.get('content-type', '')
            if 'text/html' not in content_type:
                return
                
            html = response.text
            soup = BeautifulSoup(html, 'html.parser')
            
            # Run audit on page
            self.audit_html(current_url, soup)
            
            # Find internal links to crawl further
            for link in soup.find_all('a', href=True):
                href = link['href']
                full_url = urljoin(current_url, href)
                # Remove anchors
                full_url = full_url.split('#')[0]
                
                # Verify it's an internal link
                parsed_full = urlparse(full_url)
                if parsed_full.netloc == parsed_base.netloc:
                    # Ignore common assets or media files in links
                    ext = os.path.splitext(parsed_full.path)[1].lower()
                    if ext not in ['.jpg', '.jpeg', '.png', '.gif', '.pdf', '.zip', '.css', '.js']:
                        self.crawl_site(full_url)
                        
        except Exception as e:
            print(f"Error crawling {current_url}: {e}")

    def audit_html(self, identifier, soup):
        title_tag = soup.find('title')
        title = self.clean_text(title_tag.text) if title_tag else ""
        
        desc_meta = soup.find('meta', attrs={'name': lambda x: x and x.lower() == 'description'})
        description = self.clean_text(desc_meta['content']) if desc_meta and desc_meta.has_attr('content') else ""
        
        keywords_meta = soup.find('meta', attrs={'name': lambda x: x and x.lower() == 'keywords'})
        keywords = self.clean_text(keywords_meta['content']) if keywords_meta and keywords_meta.has_attr('content') else ""
        
        canonical_tag = soup.find('link', rel='canonical')
        canonical = canonical_tag['href'] if canonical_tag and canonical_tag.has_attr('href') else ""
        
        h1s = [self.clean_text(h.text) for h in soup.find_all('h1')]
        
        # Check images
        images = soup.find_all('img')
        images_missing_alt = []
        for img in images:
            alt = img.get('alt')
            src = img.get('src', 'unknown-src')
            if alt is None or alt.strip() == "":
                images_missing_alt.append(src)
                
        # Analyze issues
        warnings = []
        if not title:
            warnings.append("Missing <title> tag")
        elif len(title) > 60:
            warnings.append(f"Title is too long ({len(title)} chars, target: 50-60)")
            
        if not description:
            warnings.append("Missing meta description")
        elif len(description) < 120 or len(description) > 160:
            warnings.append(f"Description length is {len(description)} chars (target: 120-160 for optimal search snippets)")
            
        if not canonical:
            warnings.append("Missing canonical tag")
            
        if len(h1s) == 0:
            warnings.append("Missing <h1> tag")
        elif len(h1s) > 1:
            warnings.append(f"Multiple <h1> tags found: {h1s}")
            
        self.pages_data[identifier] = {
            'title': title,
            'description': description,
            'keywords': keywords,
            'h1': h1s[0] if h1s else "None",
            'images_count': len(images),
            'missing_alt_count': len(images_missing_alt),
            'missing_alt_images': images_missing_alt,
            'warnings': warnings
        }

    # ================= LOCAL MODE =================
    def scan_local_dir(self):
        print(f"Scanning local directory recursively: {self.local_dir}")
        
        blacklisted_dirs = {
            '.git', 'node_modules', 'includes', 'blog-admin', 'wp-plugins',
            'blog2', 'blog', 'local-blog-writer', 'assets', 'font-awesome',
            'fonts', 'svg', 'wp-admin', 'wp-includes', 'wp-content', 'html',
            'blogold serv', 'signals'
        }
        blacklisted_files = {
            'config.php', 'functions.php', 'smtps.php', 'chatbot-lead.php',
            'wp-header.html', 'wp-footer.html', 'html-header.html', 'html-footer.html',
            'sitemap.php', 'privacy-policy.php', 'terms.php'
        }
        
        for root, dirs, files in os.walk(self.local_dir):
            # Skip blacklisted directories from descending
            dirs[:] = [d for d in dirs if d not in blacklisted_dirs]
            
            for file in files:
                if file.endswith('.php') or file.endswith('.html'):
                    filepath = os.path.join(root, file)
                    rel_path = os.path.relpath(filepath, self.local_dir)
                    
                    # Extra safety check on the full relative path
                    parts = rel_path.replace('\\', '/').split('/')
                    if any(part in blacklisted_dirs for part in parts[:-1]):
                        continue
                    if parts[-1] in blacklisted_files:
                        continue
                        
                    # Read file content and audit it
                    try:
                        with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
                            content = f.read()
                        self.audit_local_file(rel_path, content)
                    except Exception as e:
                        print(f"Error reading file {rel_path}: {e}")

    def audit_local_file(self, rel_path, content):
        # Find PHP variables for title and description
        title_match = re.search(r'\$pageTitle\s*=\s*["\'](.*?)["\'];', content)
        desc_match = re.search(r'\$pageDescription\s*=\s*["\'](.*?)["\'];', content)
        keywords_match = re.search(r'\$pageKeywords\s*=\s*["\'](.*?)["\'];', content)
        
        title = title_match.group(1) if title_match else ""
        description = desc_match.group(1) if desc_match else ""
        keywords = keywords_match.group(1) if keywords_match else ""
        
        # Clean HTML parsing for structural checks
        soup = BeautifulSoup(content, 'html.parser')
        
        h1s = [self.clean_text(h.text) for h in soup.find_all('h1')]
        
        # Check images
        images = soup.find_all('img')
        images_missing_alt = []
        for img in images:
            alt = img.get('alt')
            src = img.get('src', 'unknown-src')
            if alt is None or alt.strip() == "":
                images_missing_alt.append(src)
                
        # Analyze issues
        warnings = []
        if not title:
            warnings.append("Missing $pageTitle definition or tag")
        elif len(title) > 60:
            warnings.append(f"Title is too long ({len(title)} chars, target: 50-60)")
            
        if not description:
            warnings.append("Missing $pageDescription definition")
        elif len(description) < 120 or len(description) > 160:
            warnings.append(f"Description length is {len(description)} chars (target: 120-160)")
            
        if len(h1s) == 0:
            warnings.append("Missing <h1> tag in HTML structure")
        elif len(h1s) > 1:
            warnings.append(f"Multiple <h1> tags found: {h1s}")
            
        self.pages_data[rel_path] = {
            'title': title,
            'description': description,
            'keywords': keywords,
            'h1': h1s[0] if h1s else "None",
            'images_count': len(images),
            'missing_alt_count': len(images_missing_alt),
            'missing_alt_images': images_missing_alt,
            'warnings': warnings
        }

    # ================= OUTPUT GENERATION =================
    def generate_sitemap(self, output_path):
        print(f"Generating sitemap.xml to {output_path}...")
        urlset = ET.Element("urlset", xmlns="http://www.sitemaps.org/schemas/sitemap/0.9")
        
        for identifier in sorted(self.pages_data.keys()):
            # Determine canonical URL
            if self.base_url:
                page_url = identifier
            else:
                # Local scan
                clean_path = identifier.replace('\\', '/')
                if clean_path == 'index.php':
                    page_url = "https://infinitysofthub.com/"
                else:
                    page_url = f"https://infinitysofthub.com/{clean_path}"
            
            url_node = ET.SubElement(urlset, "url")
            ET.SubElement(url_node, "loc").text = page_url
            ET.SubElement(url_node, "changefreq").text = "monthly"
            ET.SubElement(url_node, "priority").text = "0.8" if "index" in page_url else "0.6"
            
        # Format XML nicely
        xml_str = ET.tostring(urlset, encoding="utf-8")
        parsed = minidom.parseString(xml_str)
        pretty_xml = parsed.toprettyxml(indent="  ")
        
        with open(output_path, 'w', encoding='utf-8') as f:
            f.write(pretty_xml)
        print("Sitemap successfully written.")

    def generate_report(self, report_path):
        print(f"Writing SEO Audit Report to {report_path}...")
        with open(report_path, 'w', encoding='utf-8') as f:
            f.write("# SEO Audit Report\n\n")
            f.write("This report displays the status of all scanned website pages, identifying critical areas for search ranking optimization.\n\n")
            
            f.write("## Summary\n")
            total_pages = len(self.pages_data)
            warnings_total = sum(len(data['warnings']) for data in self.pages_data.values())
            missing_alts = sum(data['missing_alt_count'] for data in self.pages_data.values())
            
            f.write(f"- **Total Pages Scanned:** {total_pages}\n")
            f.write(f"- **Total SEO Warnings:** {warnings_total}\n")
            f.write(f"- **Total Images Missing ALT tags:** {missing_alts}\n\n")
            
            f.write("## Detailed Page Audit\n\n")
            for page, data in self.pages_data.items():
                f.write(f"### Page: `{page}`\n")
                f.write(f"- **Title:** `{data['title'] or 'MISSING'}`\n")
                f.write(f"- **Meta Description:** `{data['description'] or 'MISSING'}`\n")
                f.write(f"- **H1 Tag:** `{data['h1']}`\n")
                f.write(f"- **Images Audited:** {data['images_count']} (Missing ALT: {data['missing_alt_count']})\n")
                
                if data['warnings']:
                    f.write("- **Warnings:**\n")
                    for warning in data['warnings']:
                        f.write(f"  - ⚠️ {warning}\n")
                else:
                    f.write("- **Status:** ✅ SEO Setup Correct\n")
                
                if data['missing_alt_images']:
                    f.write("- **Images Missing ALT attributes:**\n")
                    for img_src in data['missing_alt_images'][:5]:  # show max 5
                        f.write(f"  - 🖼️ `{img_src}`\n")
                    if len(data['missing_alt_images']) > 5:
                        f.write(f"  - *And {len(data['missing_alt_images']) - 5} more images...*\n")
                f.write("\n---\n\n")
                
        print("SEO Audit Report successfully written.")

def main():
    parser = argparse.ArgumentParser(description="SEO Audit & Sitemap Generator Toolkit")
    group = parser.add_mutually_exclusive_group(required=True)
    group.add_argument('--url', help="Crawl and audit a live website URL (e.g., https://infinitysofthub.com)")
    group.add_argument('--dir', help="Audit local codebase files recursively (e.g., C:/wamp64/www/infinitysofthub.com)")
    parser.add_argument('--out-sitemap', default='sitemap.xml', help="Path to write the generated sitemap.xml")
    parser.add_argument('--out-report', default='seo_report.md', help="Path to write the generated SEO audit report")
    
    args = parser.parse_args()
    
    if args.url:
        print(f"--- Running SEO Toolkit in Crawl Mode for: {args.url} ---")
        auditor = SEOAuditor(base_url=args.url)
        auditor.crawl_site(args.url)
    else:
        print(f"--- Running SEO Toolkit in Local Mode for: {args.dir} ---")
        auditor = SEOAuditor(local_dir=args.dir)
        auditor.scan_local_dir()
        
    print("\n--- Generating Outputs ---")
    auditor.generate_sitemap(args.out_sitemap)
    auditor.generate_report(args.out_report)
    print("\n--- Tool Execution Finished! ---")

if __name__ == '__main__':
    main()
