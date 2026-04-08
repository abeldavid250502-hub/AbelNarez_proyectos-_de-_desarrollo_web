<?php
try {
    $pdo = new PDO("sqlite:test.db");
    echo "SQLite FUNCIONA ✔️";
} catch (Exception $e) {
    echo "SQLite NO funciona ❌<br><br>";
    echo $e->getMessage();
}
