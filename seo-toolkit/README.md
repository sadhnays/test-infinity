# SEO Toolkit: Audit & Sitemap Generator

This toolkit is designed to automate website SEO audits and generate XML sitemaps. It can be run on any system (such as a local computer or a remote VPS server) with Python 3.

## Features
1. **Crawl Mode**: Crawls your live website, audits the tags and content of all found pages, and creates a `sitemap.xml`.
2. **Local Mode**: Recursively scans a local directory of source files (`.php` and `.html`) to audit SEO definitions and create a sitemap.

## Setup Instructions

### 1. Prerequisites
Ensure you have Python 3 installed. You can check this by running:
```bash
python --version
```

### 2. Install Dependencies
Navigate to the `seo-toolkit` directory and install the required packages:
```bash
pip install -r requirements.txt
```

---

## How to Run

### Mode A: Crawling the Live Website (Best for VPS running remotely)
Run the crawl mode by passing the live URL. This crawls all internal links, audits rendered HTML pages, and outputs reports:
```bash
python audit.py --url https://infinitysofthub.com
```

### Mode B: Scanning Local Files
If you downloaded the code files onto your VPS or want to run it on your local machine, run the local scanner by passing the path of the project folder:
```bash
python audit.py --dir /path/to/your/website/folder
```

---

## Output Files Generated
When execution completes, two files are created:
1. **`sitemap.xml`**: A valid XML sitemap ready to be uploaded to your website's root folder for Google Search Console indexing.
2. **`seo_report.md`**: A detailed report listing every audited page and highlighting warnings (e.g. missing metadata, titles too long, or images missing ALT text).
