<?php
/**
 * Blog Admin Panel - Infinity SoftHub
 * Beautiful UI for managing blog posts with AI integration ready
 */

session_start();

// Configuration
$blogFile = __DIR__ . '/data/posts.json';

// Create data directory if not exists
if (!is_dir(__DIR__ . '/data')) {
    mkdir(__DIR__ . '/data', 0755, true);
}

// Initialize posts file if not exists
if (!file_exists($blogFile)) {
    file_put_contents($blogFile, json_encode([]));
}

// Handle form submission
$message = '';
$messageType = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'create') {
        $title = trim($_POST['title'] ?? '');
        $content = trim($_POST['content'] ?? '');
        $excerpt = trim($_POST['excerpt'] ?? '');
        $category = trim($_POST['category'] ?? 'General');
        $tags = array_filter(array_map('trim', explode(',', $_POST['tags'] ?? '')));
        $status = $_POST['status'] ?? 'draft';
        $featuredImage = trim($_POST['featured_image'] ?? '');

        if (empty($title) || empty($content)) {
            $message = 'Title and content are required!';
            $messageType = 'error';
        } else {
            $posts = json_decode(file_get_contents($blogFile), true) ?: [];

            $newPost = [
                'id' => uniqid('post_'),
                'title' => $title,
                'content' => $content,
                'excerpt' => $excerpt ?: substr(strip_tags($content), 0, 150) . '...',
                'category' => $category,
                'tags' => $tags,
                'status' => $status,
                'featured_image' => $featuredImage,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                // AI Integration Ready Fields
                'ai_analyzed' => false,
                'ai_summary' => '',
                'ai_keywords' => [],
                'ai_sentiment' => ''
            ];

            // AI PRE-PUBLISH HOOK - Add AI processing here in future
            // Example: $newPost = applyAIPreProcessing($newPost);

            $posts[] = $newPost;
            file_put_contents($blogFile, json_encode($posts, JSON_PRETTY_PRINT));

            $message = $status === 'published' ? 'Blog post published successfully!' : 'Blog post saved as draft!';
            $messageType = 'success';
        }
    }

    if ($action === 'delete') {
        $postId = $_POST['post_id'] ?? '';
        $posts = json_decode(file_get_contents($blogFile), true) ?: [];
        $posts = array_filter($posts, function($p) use ($postId) {
            return $p['id'] !== $postId;
        });
        file_put_contents($blogFile, json_encode(array_values($posts), JSON_PRETTY_PRINT));
        $message = 'Post deleted successfully!';
        $messageType = 'success';
    }

    if ($action === 'edit') {
        $postId = $_POST['post_id'] ?? '';
        $posts = json_decode(file_get_contents($blogFile), true) ?: [];

        foreach ($posts as &$post) {
            if ($post['id'] === $postId) {
                $post['title'] = trim($_POST['title'] ?? $post['title']);
                $post['content'] = trim($_POST['content'] ?? $post['content']);
                $post['excerpt'] = trim($_POST['excerpt'] ?? $post['excerpt']);
                $post['category'] = trim($_POST['category'] ?? $post['category']);
                $post['tags'] = array_filter(array_map('trim', explode(',', $_POST['tags'] ?? '')));
                $post['status'] = $_POST['status'] ?? $post['status'];
                $post['featured_image'] = trim($_POST['featured_image'] ?? $post['featured_image']);
                $post['updated_at'] = date('Y-m-d H:i:s');
                break;
            }
        }

        file_put_contents($blogFile, json_encode($posts, JSON_PRETTY_PRINT));
        $message = 'Post updated successfully!';
        $messageType = 'success';
    }
}

// Get all posts
$posts = json_decode(file_get_contents($blogFile), true) ?: [];
usort($posts, function($a, $b) {
    return strtotime($b['created_at']) - strtotime($a['created_at']);
});

$editPost = null;
if (isset($_GET['edit'])) {
    foreach ($posts as $p) {
        if ($p['id'] === $_GET['edit']) {
            $editPost = $p;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin - Infinity SoftHub</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #062B6F;
            --primary-dark: #041E4D;
            --secondary: #0B3D91;
            --accent: #2563EB;
            --accent-light: #3B82F6;
            --bg-light: #F5F7FB;
            --white: #FFFFFF;
            --border: #E5EAF3;
            --text-dark: #0F172A;
            --text-gray: #64748B;
            --success: #10B981;
            --error: #EF4444;
            --warning: #F59E0B;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.08);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 30px rgba(0,0,0,0.12);
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 20px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--bg-light);
            color: var(--text-dark);
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 260px;
            height: 100vh;
            background: linear-gradient(180deg, var(--primary-dark) 0%, var(--primary) 100%);
            padding: 30px 20px;
            z-index: 100;
            box-shadow: 4px 0 20px rgba(0,0,0,0.15);
        }

        .logo {
            color: var(--white);
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo i {
            font-size: 28px;
            color: var(--accent-light);
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            margin-bottom: 8px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 18px;
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            border-radius: var(--radius-md);
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .nav-link:hover, .nav-link.active {
            background: rgba(255,255,255,0.15);
            color: var(--white);
            transform: translateX(5px);
        }

        .nav-link i {
            width: 20px;
            text-align: center;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px;
            padding: 30px 40px;
            min-height: 100vh;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .header-actions {
            display: flex;
            gap: 15px;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border: none;
            border-radius: var(--radius-md);
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent) 0%, var(--secondary) 100%);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
        }

        .btn-secondary {
            background: var(--white);
            color: var(--text-dark);
            border: 2px solid var(--border);
        }

        .btn-secondary:hover {
            border-color: var(--accent);
            color: var(--accent);
        }

        .btn-danger {
            background: var(--error);
            color: var(--white);
        }

        .btn-danger:hover {
            background: #DC2626;
        }

        .btn-sm {
            padding: 8px 16px;
            font-size: 13px;
        }

        /* Cards */
        .card {
            background: var(--white);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            padding: 25px;
            margin-bottom: 25px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--border);
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--primary-dark);
        }

        /* Form Styles */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-dark);
        }

        .form-label i {
            margin-right: 8px;
            color: var(--accent);
        }

        .form-control {
            width: 100%;
            padding: 14px 18px;
            border: 2px solid var(--border);
            border-radius: var(--radius-md);
            font-family: inherit;
            font-size: 14px;
            transition: all 0.3s ease;
            background: var(--white);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2364748B'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 20px;
            padding-right: 45px;
        }

        /* Status Badge */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }

        .status-published {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }

        .status-draft {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
        }

        /* Posts Table */
        .posts-table {
            width: 100%;
            border-collapse: collapse;
        }

        .posts-table th,
        .posts-table td {
            padding: 16px;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }

        .posts-table th {
            font-weight: 600;
            color: var(--text-gray);
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .posts-table tr:hover {
            background: var(--bg-light);
        }

        .post-title {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .post-category {
            display: inline-block;
            padding: 4px 12px;
            background: var(--bg-light);
            border-radius: 20px;
            font-size: 12px;
            color: var(--text-gray);
        }

        .action-btns {
            display: flex;
            gap: 8px;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: none;
            border-radius: var(--radius-sm);
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-edit {
            background: rgba(37, 99, 235, 0.1);
            color: var(--accent);
        }

        .btn-edit:hover {
            background: var(--accent);
            color: var(--white);
        }

        .btn-delete {
            background: rgba(239, 68, 68, 0.1);
            color: var(--error);
        }

        .btn-delete:hover {
            background: var(--error);
            color: var(--white);
        }

        /* Message */
        .message {
            padding: 16px 24px;
            border-radius: var(--radius-md);
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
        }

        .message-success {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
            border-left: 4px solid var(--success);
        }

        .message-error {
            background: rgba(239, 68, 68, 0.1);
            color: var(--error);
            border-left: 4px solid var(--error);
        }

        /* AI Ready Badge */
        .ai-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            background: linear-gradient(135deg, #8B5CF6 0%, #6366F1 100%);
            color: white;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
        }

        /* Tabs */
        .tabs {
            display: flex;
            gap: 5px;
            margin-bottom: 25px;
            background: var(--bg-light);
            padding: 6px;
            border-radius: var(--radius-md);
            width: fit-content;
        }

        .tab-btn {
            padding: 12px 24px;
            border: none;
            background: transparent;
            font-family: inherit;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-gray);
            cursor: pointer;
            border-radius: var(--radius-sm);
            transition: all 0.3s ease;
        }

        .tab-btn.active {
            background: var(--white);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Stats */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: var(--white);
            padding: 25px;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-icon.published {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }

        .stat-icon.draft {
            background: rgba(245, 158, 11, 0.1);
            color: var(--warning);
        }

        .stat-icon.total {
            background: rgba(37, 99, 235, 0.1);
            color: var(--accent);
        }

        .stat-icon.ai {
            background: rgba(139, 92, 246, 0.1);
            color: #8B5CF6;
        }

        .stat-info h3 {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .stat-info p {
            color: var(--text-gray);
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .sidebar {
                width: 80px;
                padding: 20px 10px;
            }

            .logo span, .nav-link span {
                display: none;
            }

            .main-content {
                margin-left: 80px;
                padding: 20px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .main-content {
                margin-left: 0;
            }

            .header {
                flex-direction: column;
                gap: 15px;
            }

            .posts-table {
                font-size: 13px;
            }
        }

        /* Toggle Form */
        .toggle-form {
            display: none;
        }

        .toggle-form.show {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="logo">
            <i class="fas fa-blog"></i>
            <span>Blog Admin</span>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#" class="nav-link active" onclick="showTab('posts')">
                    <i class="fas fa-file-alt"></i>
                    <span>All Posts</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="showTab('create')">
                    <i class="fas fa-plus-circle"></i>
                    <span>Create Post</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="showTab('api')">
                    <i class="fas fa-robot"></i>
                    <span>AI Integration</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="showTab('settings')">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <div class="header">
            <h1 class="page-title">Blog Dashboard</h1>
            <div class="header-actions">
                <button class="btn btn-secondary" onclick="showTab('api')">
                    <i class="fas fa-robot"></i> AI Setup
                </button>
                <button class="btn btn-primary" onclick="showTab('create')">
                    <i class="fas fa-plus"></i> New Post
                </button>
            </div>
        </div>

        <!-- Messages -->
        <?php if ($message): ?>
            <div class="message message-<?= $messageType ?>">
                <i class="fas fa-<?= $messageType === 'success' ? 'check-circle' : 'exclamation-circle' ?>"></i>
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon total">
                    <i class="fas fa-blog"></i>
                </div>
                <div class="stat-info">
                    <h3><?= count($posts) ?></h3>
                    <p>Total Posts</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon published">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="stat-info">
                    <h3><?= count(array_filter($posts, fn($p) => $p['status'] === 'published')) ?></h3>
                    <p>Published</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon draft">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="stat-info">
                    <h3><?= count(array_filter($posts, fn($p) => $p['status'] === 'draft')) ?></h3>
                    <p>Drafts</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon ai">
                    <i class="fas fa-brain"></i>
                </div>
                <div class="stat-info">
                    <h3>Ready</h3>
                    <p>AI Integration</p>
                </div>
            </div>
        </div>

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab-btn active" onclick="showTab('posts')">All Posts</button>
            <button class="tab-btn" onclick="showTab('create')">Create Post</button>
            <button class="tab-btn" onclick="showTab('api')">AI Integration</button>
            <button class="tab-btn" onclick="showTab('settings')">Settings</button>
        </div>

        <!-- All Posts Tab -->
        <div id="posts" class="tab-content active">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">All Blog Posts</h2>
                    <span class="post-category"><?= count($posts) ?> Posts</span>
                </div>
                <?php if (empty($posts)): ?>
                    <p style="text-align: center; color: var(--text-gray); padding: 40px;">
                        <i class="fas fa-inbox" style="font-size: 48px; margin-bottom: 15px; display: block; opacity: 0.5;"></i>
                        No posts yet. Create your first post!
                    </p>
                <?php else: ?>
                    <table class="posts-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>AI</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $post): ?>
                                <tr>
                                    <td class="post-title"><?= htmlspecialchars($post['title']) ?></td>
                                    <td><span class="post-category"><?= htmlspecialchars($post['category']) ?></span></td>
                                    <td>
                                        <span class="status-badge status-<?= $post['status'] ?>">
                                            <i class="fas fa-<?= $post['status'] === 'published' ? 'check' : 'edit' ?>"></i>
                                            <?= ucfirst($post['status']) ?>
                                        </span>
                                    </td>
                                    <td><?= date('M d, Y', strtotime($post['created_at'])) ?></td>
                                    <td>
                                        <?php if ($post['ai_analyzed']): ?>
                                            <span class="ai-badge"><i class="fas fa-brain"></i> Ready</span>
                                        <?php else: ?>
                                            <span style="color: var(--text-gray); font-size: 12px;">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="action-btns">
                                            <a href="?edit=<?= $post['id'] ?>#create" class="btn-icon btn-edit" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form method="POST" style="display: inline;" onsubmit="return confirm('Delete this post?');">
                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
                                                <button type="submit" class="btn-icon btn-delete" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>

        <!-- Create/Edit Post Tab -->
        <div id="create" class="tab-content">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><?= $editPost ? 'Edit Post' : 'Create New Post' ?></h2>
                    <?php if ($editPost): ?>
                        <a href="?" class="btn btn-secondary btn-sm">Cancel Edit</a>
                    <?php endif; ?>
                </div>
                <form method="POST" id="postForm">
                    <input type="hidden" name="action" value="<?= $editPost ? 'edit' : 'create' ?>">
                    <?php if ($editPost): ?>
                        <input type="hidden" name="post_id" value="<?= $editPost['id'] ?>">
                    <?php endif; ?>

                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label"><i class="fas fa-heading"></i> Post Title *</label>
                            <input type="text" name="title" class="form-control"
                                   placeholder="Enter your blog title..."
                                   value="<?= $editPost ? htmlspecialchars($editPost['title']) : '' ?>" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label"><i class="fas fa-folder"></i> Category</label>
                            <select name="category" class="form-control form-select">
                                <option value="General" <?= ($editPost && $editPost['category'] === 'General') ? 'selected' : '' ?>>General</option>
                                <option value="Technology" <?= ($editPost && $editPost['category'] === 'Technology') ? 'selected' : '' ?>>Technology</option>
                                <option value="AI & Machine Learning" <?= ($editPost && $editPost['category'] === 'AI & Machine Learning') ? 'selected' : '' ?>>AI & Machine Learning</option>
                                <option value="Web Development" <?= ($editPost && $editPost['category'] === 'Web Development') ? 'selected' : '' ?>>Web Development</option>
                                <option value="Cloud Computing" <?= ($editPost && $editPost['category'] === 'Cloud Computing') ? 'selected' : '' ?>>Cloud Computing</option>
                                <option value="Business" <?= ($editPost && $editPost['category'] === 'Business') ? 'selected' : '' ?>>Business</option>
                                <option value="Tips & Guides" <?= ($editPost && $editPost['category'] === 'Tips & Guides') ? 'selected' : '' ?>>Tips & Guides</option>
                            </select>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label"><i class="fas fa-align-left"></i> Content *</label>
                            <textarea name="content" class="form-control" rows="12"
                                      placeholder="Write your blog content here..." required><?= $editPost ? htmlspecialchars($editPost['content']) : '' ?></textarea>
                        </div>

                        <div class="form-group full-width">
                            <label class="form-label"><i class="fas fa-summary"></i> Excerpt (Optional)</label>
                            <textarea name="excerpt" class="form-control" rows="3"
                                      placeholder="A short summary for the blog preview..."><?= $editPost ? htmlspecialchars($editPost['excerpt']) : '' ?></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label"><i class="fas fa-tags"></i> Tags</label>
                            <input type="text" name="tags" class="form-control"
                                   placeholder="web, ai, technology (comma separated)"
                                   value="<?= $editPost ? htmlspecialchars(implode(', ', $editPost['tags'])) : '' ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label"><i class="fas fa-image"></i> Featured Image URL</label>
                            <input type="url" name="featured_image" class="form-control"
                                   placeholder="https://example.com/image.jpg"
                                   value="<?= $editPost ? htmlspecialchars($editPost['featured_image']) : '' ?>">
                        </div>

                        <div class="form-group">
                            <label class="form-label"><i class="fas fa-toggle-on"></i> Status</label>
                            <select name="status" class="form-control form-select">
                                <option value="draft" <?= ($editPost && $editPost['status'] === 'draft') ? 'selected' : '' ?>>Save as Draft</option>
                                <option value="published" <?= ($editPost && $editPost['status'] === 'published') ? 'selected' : '' ?>>Publish Now</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label"><i class="fas fa-magic"></i> AI Processing</label>
                            <div style="padding: 15px; background: var(--bg-light); border-radius: var(--radius-md);">
                                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                    <input type="checkbox" name="ai_process" checked style="width: 20px; height: 20px;">
                                    <span style="font-weight: 500;">Enable AI Enhancement (Future)</span>
                                </label>
                                <p style="font-size: 12px; color: var(--text-gray); margin-top: 8px;">
                                    When AI integration is enabled, content will be auto-processed before publishing.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 25px; display: flex; gap: 15px;">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-<?= $editPost ? 'save' : '-paper-plane' ?>"></i>
                            <?= $editPost ? 'Update Post' : 'Publish Post' ?>
                        </button>
                        <button type="button" class="btn btn-secondary" onclick="document.getElementById('postForm').reset()">
                            <i class="fas fa-reset"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- AI Integration Tab -->
        <div id="api" class="tab-content">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><i class="fas fa-robot" style="color: #8B5CF6;"></i> AI Integration Setup</h2>
                </div>

                <div class="form-group full-width">
                    <h3 style="margin-bottom: 15px; color: var(--primary-dark);">REST API Endpoint</h3>
                    <div style="background: var(--bg-light); padding: 20px; border-radius: var(--radius-md);">
                        <code style="display: block; font-size: 14px; color: var(--accent); word-break: break-all;">
                            <?= (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) ?>/api/posts.php
                        </code>
                    </div>
                </div>

                <div class="form-group full-width">
                    <h3 style="margin-bottom: 15px; color: var(--primary-dark);">API Features (Future Ready)</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 12px; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px;">
                            <i class="fas fa-check-circle" style="color: var(--success);"></i>
                            <span>GET /api/posts.php - Get all posts</span>
                        </li>
                        <li style="padding: 12px; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px;">
                            <i class="fas fa-check-circle" style="color: var(--success);"></i>
                            <span>POST /api/posts.php - Create post programmatically</span>
                        </li>
                        <li style="padding: 12px; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px;">
                            <i class="fas fa-clock" style="color: var(--warning);"></i>
                            <span>AI Content Generation - Coming Soon</span>
                        </li>
                        <li style="padding: 12px; border-bottom: 1px solid var(--border); display: flex; align-items: center; gap: 12px;">
                            <i class="fas fa-clock" style="color: var(--warning);"></i>
                            <span>AI Auto-Blogging - Coming Soon</span>
                        </li>
                        <li style="padding: 12px; display: flex; align-items: center; gap: 12px;">
                            <i class="fas fa-clock" style="color: var(--warning);"></i>
                            <span>AI Sentiment Analysis - Coming Soon</span>
                        </li>
                    </ul>
                </div>

                <div class="form-group full-width">
                    <h3 style="margin-bottom: 15px; color: var(--primary-dark);">Example: Add Post from Local/External</h3>
                    <div style="background: #1E293B; padding: 20px; border-radius: var(--radius-md); overflow-x: auto;">
                        <pre style="color: #E2E8F0; font-size: 13px; margin: 0;">// JavaScript Example
fetch('https://yourdomain.com/blog-admin/api/posts.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        title: 'My New Blog Post',
        content: 'Post content here...',
        category: 'Technology',
        tags: ['ai', 'tech'],
        status: 'draft'
    })
})
.then(res => res.json())
.then(data => console.log(data));</pre>
                    </div>
                </div>
            </div>
        </div>

        <!-- Settings Tab -->
        <div id="settings" class="tab-content">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Blog Settings</h2>
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-globe"></i> Blog URL</label>
                    <input type="text" class="form-control" value="<?= (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-database"></i> Storage</label>
                    <input type="text" class="form-control" value="JSON File (posts.json)" readonly>
                </div>
                <div class="form-group">
                    <label class="form-label"><i class="fas fa-export"></i> Export Posts</label>
                    <button class="btn btn-secondary" onclick="exportPosts()">
                        <i class="fas fa-download"></i> Download JSON
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        function showTab(tabId) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
            });

            // Remove active from all buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });

            // Show selected tab
            document.getElementById(tabId).classList.add('active');

            // Add active to clicked button
            event.target.classList.add('active');

            // Scroll to top
            window.scrollTo(0, 0);
        }

        function exportPosts() {
            window.location.href = 'api/export.php';
        }

        // Check for edit parameter on load
        if (window.location.hash === '#create' && new URLSearchParams(window.location.search).get('edit')) {
            showTab('create');
        }
    </script>
</body>
</html>