# Blog System - Infinity SoftHub
Complete blogging solution with AI integration ready

## Folder Structure

```
infinitysofthub.com/
├── blog-admin/
│   ├── index.php        # Admin Dashboard (browser-based)
│   ├── data/
│   │   └── posts.json   # All blog posts stored here
│   └── api/
│       ├── posts.php    # REST API for external connections
│       └── export.php   # Export posts as JSON
│
├── blog/
│   └── index.php        # Public blog display page
│
└── local-blog-writer/
    └── index.html       # Local tool to post from your computer
```

## How to Use

### 1. Admin Dashboard
Open in browser: `http://localhost/infinitysofthub.com/blog-admin/`

Features:
- Create/Edit/Delete blog posts
- Beautiful UI matching your site
- Category & tags support
- Draft/Published status
- AI-ready fields for future integration

### 2. Local Blog Writer
Open in browser: `http://localhost/infinitysofthub.com/local-blog-writer/index.html`

Or copy this file to your local computer and open it in browser!

Features:
- Write posts from your local machine
- Connect to your blog remotely
- Perfect for offline writing

### 3. Public Blog Page
Open in browser: `http://localhost/infinitysofthub.com/blog/`

Shows all published posts to visitors.

### 4. REST API
Endpoint: `http://localhost/infinitysofthub.com/blog-admin/api/posts.php`

**GET** - Fetch all posts
```
GET /api/posts.php
GET /api/posts.php?status=published
GET /api/posts.php?category=Technology
```

**POST** - Create new post
```json
{
  "title": "My Post",
  "content": "Content here...",
  "category": "Technology",
  "tags": ["web", "ai"],
  "status": "published"
}
```

**PUT** - Update post
**DELETE** - Remove post

---

## AI Integration Guide (Future)

### Option 1: Pre-Publish AI Processing
Edit `blog-admin/api/posts.php` to add AI before saving:

```php
// Add your AI processing here
$newPost['ai_summary'] = generateAISummary($input['content']);
$newPost['ai_keywords'] = extractAIKeywords($input['content']);
$newPost['ai_sentiment'] = analyzeAISentiment($input['content']);
$newPost['ai_analyzed'] = true;
```

### Option 2: External AI Tool
Create a Python/Node.js script that:
1. Fetches your posts from the API
2. Sends content to ChatGPT/Claude for processing
3. Updates the post with AI results

### Option 3: Auto-Blogging
Create a scheduled script that:
1. Fetches content from RSS feeds or other sources
2. Uses AI to rewrite/summarize content
3. Automatically posts to your blog

---

## Connecting from External/Local Machine

If you want to post from a different computer:

1. Update the server URL in local-blog-writer to your public domain
2. Or use the API directly with curl:

```bash
curl -X POST https://yourdomain.com/blog-admin/api/posts.php \
  -H "Content-Type: application/json" \
  -d '{"title":"New Post","content":"Hello World","status":"draft"}'
```

---

## Support
Questions? Check the API tab in admin dashboard for more details.