<?php
header('Content-Type: application/json');

$response = [
    'status' => 'success',
    'message' => 'API funcionando correctamente',
];

echo json_encode($response);
?>