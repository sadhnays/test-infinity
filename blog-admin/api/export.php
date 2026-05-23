<?php
/**
 * Export Posts as JSON
 */

$blogFile = __DIR__ . '/../data/posts.json';

if (!file_exists($blogFile)) {
    die('No posts found');
}

$posts = json_decode(file_get_contents($blogFile), true);

header('Content-Type: application/json');
header('Content-Disposition: attachment; filename="blog-posts-' . date('Y-m-d') . '.json"');
header('Cache-Control: no-cache');

echo json_encode($posts, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);