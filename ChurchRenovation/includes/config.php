<?php
/**
 * Global Configuration Settings
 * Department of Christian Religious Affairs - Priesthood System
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
    session_start();
}

// Environment & Debug Mode
define('APP_ENV', 'development'); // 'development' or 'production'
define('APP_NAME', 'Church Renovation Information System');
define('APP_ORG', 'Department of Christian Religious Affairs');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'priesthood_db');
define('DB_CHARSET', 'utf8mb4');

// URL & File Paths
// Dynamically determine BASE_URL based on the request context
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || ($_SERVER['SERVER_PORT'] ?? 80) == 443) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$script_name = $_SERVER['SCRIPT_NAME'] ?? '';
$dir = str_replace('\\', '/', dirname($script_name));
$base_path = ($dir === '/') ? '/' : rtrim($dir, '/') . '/';
define('BASE_URL', $protocol . $host . $base_path);

define('ROOT_PATH', dirname(__DIR__) . '/');

// Primary Theme Colors
define('COLOR_PRIMARY', '#4E0000');   // Deep Maroon
define('COLOR_SECONDARY', '#13273F'); // Navy Blue
define('COLOR_ACCENT', '#D4AF37');    // Government Gold

// Timezone Setup
date_default_timezone_set('Asia/Colombo');

