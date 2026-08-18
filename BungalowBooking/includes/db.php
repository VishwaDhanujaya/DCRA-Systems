<?php
/**
 * Database Connection Handler (PDO)
 * Department of Christian Religious Affairs
 */

require_once __DIR__ . '/config.php';

function get_db_connection() {
    static $pdo = null;

    if ($pdo === null) {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            if (APP_ENV === 'development') {
                die("Database Connection Failed: " . $e->getMessage());
            } else {
                error_log("DB Connection Error: " . $e->getMessage());
                die("A system error occurred. Please contact system administrator.");
            }
        }
    }

    return $pdo;
}
