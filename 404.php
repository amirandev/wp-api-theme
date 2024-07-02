<?php 
  header('Content-Type: application/json; charset=utf-8');
  
  $data = [
    'message' => 'Data coildnt loaded',
    'status' => false,
    'record' => []
  ];

  echo json_encode($data);
  exit;
?>