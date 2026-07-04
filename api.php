<?php
header('Content-Type: application/json');

// Simple PHP JSON API for streams management
data = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode(['status' => 'live', 'streams' => ['main' => 'active']]);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle new stream creation etc.
    echo json_encode(['success' => true, 'message' => 'استریم ثبت شد']);
}
?>