<?php
// init_db.php
require_once __DIR__ . '/config.php';

try {
    $pdo = get_db();

    $sql = "CREATE TABLE IF NOT EXISTS donations (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name TEXT NOT NULL,
                age INTEGER NOT NULL,
                blood_group TEXT,
                contact TEXT,
                created_at TEXT NOT NULL
            );";

    $pdo->exec($sql);

    echo "✅ Database initialized successfully!";
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
