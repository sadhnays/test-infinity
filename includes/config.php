<?php
// config.php - Site-wide configuration
define('SITE_NAME', 'Infinity SoftHub Technologies');
define('SITE_URL', 'http://localhost/infinitysofthub.com/');
define('ASSETS_PATH', __DIR__ . '/../assets');
define('INCLUDES_PATH', __DIR__);

// Database configuration (update with your actual credentials)
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_database_user');
define('DB_PASS', 'your_database_password');
define('DB_CHARSET', 'utf8mb4');

// Start session for CSRF tokens
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Error reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
