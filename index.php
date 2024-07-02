<?php 
  header('Content-Type: application/json; charset=utf-8');
  
  $data = [
    'message' => 'Data loaded successfully',
    'status' => true,
    'records' => $posts
  ];

  echo json_encode($data);
  exit;
?>