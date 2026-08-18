<?php
/**
 * Authentication & Session Guard Helpers
 * Department of Christian Religious Affairs
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';

/**
 * Check if user is logged in
 */
function is_logged_in() {
    return isset($_SESSION['staff_user_id']) && !empty($_SESSION['staff_user_id']);
}

/**
 * Get logged-in user profile array
 */
function current_user() {
    if (!is_logged_in()) {
        return null;
    }
    return [
        'id'       => $_SESSION['staff_user_id'] ?? null,
        'name'     => $_SESSION['staff_name'] ?? 'Staff Member',
        'email'    => $_SESSION['staff_email'] ?? '',
        'role'     => $_SESSION['staff_role'] ?? 'Officer',
        'dept'     => 'Department of Christian Religious Affairs'
    ];
}

/**
 * Enforce logged-in authentication check
 */
function require_auth() {
    if (!is_logged_in()) {
        flash('error', 'Please sign in to access the staff portal.');
        redirect('login');
    }
}
