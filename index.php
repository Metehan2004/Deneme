<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    
    $accounts_file = 'accounts.json';
    $existing_data = json_decode(file_get_contents($accounts_file), true);
    
    $existing_data = $data;
    file_put_contents($accounts_file, json_encode($existing_data, JSON_PRETTY_PRINT));

    echo json_encode(['status' => 'success' , $existing_data]);
}
?>