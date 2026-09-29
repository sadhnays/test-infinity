<?php
// functions.php - Helper functions
require_once 'config.php';

// Sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// Validate email
function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Generate CSRF token
function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Verify CSRF token
function verify_csrf_token($token) {
    if (empty($_SESSION['csrf_token'])) return false;
    return hash_equals($_SESSION['csrf_token'], $token);
}

// Escape output for HTML
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Get base URL
function base_url($path = '') {
    return rtrim(SITE_URL, '/') . '/' . ltrim($path, '/');
}

// Get asset URL
function asset($path) {
    return base_url('assets/' . ltrim($path, '/'));
}

// Add a content timestamp so long-lived browser caches receive updated assets.
function versioned_asset($path) {
    $relativePath = ltrim($path, '/');
    $filePath = ASSETS_PATH . '/' . $relativePath;
    $url = asset($relativePath);

    return is_file($filePath) ? $url . '?v=' . filemtime($filePath) : $url;
}

// Clean canonical URL for the current page: no query string, no index.php,
// always on the production domain. Pages can override with $canonicalPath.
function canonical_url($path = null) {
    if ($path === null) {
        $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    }
    $path = preg_replace('#(^|/)index\.php$#', '$1', $path);
    return base_url(ltrim($path, '/'));
}

// Human-readable breadcrumb label from a file name.
function breadcrumb_label($slug) {
    $slug = preg_replace('/\.php$/', '', $slug);
    $label = ucwords(str_replace(['-', '_'], ' ', $slug));
    $fixes = ['Lms' => 'LMS', 'Ai ' => 'AI ', 'Ml ' => 'ML ', 'Ui Ux' => 'UI/UX', 'Uk' => 'UK', 'Usa' => 'USA', 'Iomad' => 'IOMAD', 'Sql' => 'SQL'];
    return trim(str_replace(array_keys($fixes), array_values($fixes), $label . ' '));
}

// BreadcrumbList schema built from the URL path (Home > Section > Page).
function breadcrumb_schema($pageTitle = '') {
    $path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/');
    $path = preg_replace('#(^|/)index\.php$#', '', $path);
    if ($path === '') {
        return null;
    }
    $items = [[
        '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => base_url(''),
    ]];
    $parts = explode('/', $path);
    $position = 2;
    if (count($parts) > 1 && $parts[0] === 'services') {
        $items[] = ['@type' => 'ListItem', 'position' => $position++, 'name' => 'Services', 'item' => base_url('what-we-do.php')];
    } elseif (count($parts) > 1 && $parts[0] === 'demos') {
        $items[] = ['@type' => 'ListItem', 'position' => $position++, 'name' => 'Demos', 'item' => base_url('what-we-do.php')];
    }
    $name = $pageTitle ? trim(explode('|', $pageTitle)[0]) : breadcrumb_label(end($parts));
    $items[] = ['@type' => 'ListItem', 'position' => $position, 'name' => $name, 'item' => base_url($path)];
    return json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $items,
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}

// FAQ helpers: one array drives both the visible FAQ and its FAQPage schema.
function faq_schema_array($faqs) {
    return [
        '@type' => 'FAQPage',
        'mainEntity' => array_map(function ($f) {
            return [
                '@type' => 'Question',
                'name' => $f['q'],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
            ];
        }, $faqs),
    ];
}

function render_faq($faqs) {
    $html = '<div class="faq-list">';
    foreach ($faqs as $f) {
        $html .= '<details class="faq-item"><summary>' . e($f['q']) . '</summary><p>' . e($f['a']) . '</p></details>';
    }
    return $html . '</div>';
}

// Sanitize GET/POST data
function sanitize_request_data($data) {
    if (is_array($data)) {
        return array_map('sanitize_request_data', $data);
    }
    return sanitize_input($data);
}

// Get PDO database connection
function get_db_connection() {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $pdo = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            throw new Exception("Database connection failed. Please try again later.");
        }
    }
    return $pdo;
}
?>
