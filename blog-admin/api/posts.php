<?php
/**
 * Blog API - For external integration and AI
 * Access: GET (all posts), POST (create), PUT (update), DELETE (remove)
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');

$blogFile = __DIR__ . '/../data/posts.json';

// Initialize if not exists
if (!file_exists($blogFile)) {
    file_put_contents($blogFile, json_encode([]));
}

$method = $_SERVER['REQUEST_METHOD'];

// Helper to read posts
function getPosts() {
    global $blogFile;
    return json_decode(file_get_contents($blogFile), true) ?: [];
}

// Helper to save posts
function savePosts($posts) {
    global $blogFile;
    return file_put_contents($blogFile, json_encode($posts, JSON_PRETTY_PRINT));
}

switch ($method) {
    case 'GET':
        // Get all posts or single post
        $posts = getPosts();

        if (isset($_GET['id'])) {
            foreach ($posts as $post) {
                if ($post['id'] === $_GET['id']) {
                    echo json_encode(['success' => true, 'post' => $post]);
                    exit;
                }
            }
            echo json_encode(['success' => false, 'error' => 'Post not found']);
            exit;
        }

        // Filter by status if provided
        if (isset($_GET['status'])) {
            $posts = array_filter($posts, fn($p) => $p['status'] === $_GET['status']);
        }

        // Filter by category
        if (isset($_GET['category'])) {
            $posts = array_filter($posts, fn($p) => $p['category'] === $_GET['category']);
        }

        echo json_encode(['success' => true, 'posts' => array_values($posts), 'count' => count($posts)]);
        break;

    case 'POST':
        // Create new post
        $input = json_decode(file_get_contents('php://input'), true);

        if (!$input) {
            $input = $_POST;
        }

        if (empty($input['title']) || empty($input['content'])) {
            echo json_encode(['success' => false, 'error' => 'Title and content are required']);
            exit;
        }

        $posts = getPosts();

        $newPost = [
            'id' => uniqid('post_'),
            'title' => htmlspecialchars($input['title']),
            'content' => htmlspecialchars($input['content']),
            'excerpt' => htmlspecialchars($input['excerpt'] ?? substr(strip_tags($input['content']), 0, 150) . '...'),
            'category' => htmlspecialchars($input['category'] ?? 'General'),
            'tags' => is_array($input['tags']) ? array_map('htmlspecialchars', $input['tags']) : [],
            'status' => $input['status'] ?? 'draft',
            'featured_image' => htmlspecialchars($input['featured_image'] ?? ''),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'ai_analyzed' => false,
            'ai_summary' => '',
            'ai_keywords' => [],
            'ai_sentiment' => ''
        ];

        // AI HOOK: Add your AI processing here
        // Example: $newPost = processWithAI($newPost);

        $posts[] = $newPost;
        savePosts($posts);

        echo json_encode([
            'success' => true,
            'message' => 'Post created successfully',
            'post_id' => $newPost['id']
        ]);
        break;

    case 'PUT':
        // Update post
        $input = json_decode(file_get_contents('php://input'), true);

        if (empty($input['id'])) {
            echo json_encode(['success' => false, 'error' => 'Post ID is required']);
            exit;
        }

        $posts = getPosts();
        $found = false;

        foreach ($posts as &$post) {
            if ($post['id'] === $input['id']) {
                $post['title'] = htmlspecialchars($input['title'] ?? $post['title']);
                $post['content'] = htmlspecialchars($input['content'] ?? $post['content']);
                $post['excerpt'] = htmlspecialchars($input['excerpt'] ?? $post['excerpt']);
                $post['category'] = htmlspecialchars($input['category'] ?? $post['category']);
                $post['tags'] = is_array($input['tags']) ? array_map('htmlspecialchars', $input['tags']) : $post['tags'];
                $post['status'] = $input['status'] ?? $post['status'];
                $post['featured_image'] = htmlspecialchars($input['featured_image'] ?? $post['featured_image']);
                $post['updated_at'] = date('Y-m-d H:i:s');
                $found = true;
                break;
            }
        }

        if ($found) {
            savePosts($posts);
            echo json_encode(['success' => true, 'message' => 'Post updated successfully']);
        } else {
            echo json_encode(['success' => false, 'error' => 'Post not found']);
        }
        break;

    case 'DELETE':
        // Delete post
        $input = json_decode(file_get_contents('php://input'), true);

        if (empty($input['id'])) {
            echo json_encode(['success' => false, 'error' => 'Post ID is required']);
            exit;
        }

        $posts = getPosts();
        $posts = array_filter($posts, fn($p) => $p['id'] !== $input['id']);

        savePosts(array_values($posts));

        echo json_encode(['success' => true, 'message' => 'Post deleted successfully']);
        break;

    default:
        echo json_encode(['success' => false, 'error' => 'Method not allowed']);
}