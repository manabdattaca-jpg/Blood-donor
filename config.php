<?php
// config.php

// Path to SQLite database
define('DB_PATH', __DIR__ . '/data/donations.db');

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Database connection (SQLite)
 */
function get_db(): PDO {
    $dbFile = DB_PATH;
    $dir = dirname($dbFile);

    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    $pdo = new PDO('sqlite:' . $dbFile);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
