<?php
header('Content-Type: application/json');

// Simple file-based queue (or use MySQL)
$queueFile = '/tmp/queue.txt';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Get current queue number
    if (file_exists($queueFile)) {
        $current = trim(file_get_contents($queueFile));
    } else {
        $current = '0';
    }
    echo $current;
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Increment queue number
    $current = file_exists($queueFile) ? (int)trim(file_get_contents($queueFile)) : 0;
    $current++;
    file_put_contents($queueFile, $current);
    echo $current;
}
?>
