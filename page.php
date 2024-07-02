<?php 
  header('Content-Type: application/json; charset=utf-8');
  
  $data = [
    'message' => 'Data loaded successfully',
    'status' => true,
    'record' => $post
  ];

  echo json_encode($data);
  exit;
?>