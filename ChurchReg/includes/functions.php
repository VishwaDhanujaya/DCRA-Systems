<?php
/**
 * Global Helper Functions
 * Department of Christian Religious Affairs
 */

require_once __DIR__ . '/config.php';

/**
 * Escape HTML output safely
 */
function e($value) {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Generate CSRF Token
 */
function csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Render Hidden CSRF Field
 */
function csrf_field() {
    return '<input type="hidden" name="csrf_token" value="' . csrf_token() . '">';
}

/**
 * Verify CSRF Token
 */
function verify_csrf() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $token = $_POST['csrf_token'] ?? '';
        if (!hash_equals(csrf_token(), $token)) {
            http_response_code(403);
            die("403 Forbidden: Invalid CSRF Token.");
        }
    }
}

/**
 * Redirect to specific path
 */
function redirect($path) {
    header("Location: " . BASE_URL . ltrim($path, '/'));
    exit;
}

/**
 * Set or Get Flash Message
 */
function flash($type = null, $message = null) {
    if ($type !== null && $message !== null) {
        $_SESSION['flash'][$type] = $message;
    } elseif ($type !== null) {
        $msg = $_SESSION['flash'][$type] ?? null;
        unset($_SESSION['flash'][$type]);
        return $msg;
    } else {
        $flashes = $_SESSION['flash'] ?? [];
        unset($_SESSION['flash']);
        return $flashes;
    }
}
