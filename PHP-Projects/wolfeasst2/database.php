<?php
  $dsn = 'mysql:host=localhost;dbname=pcparts';
  $username = 'parts_dude';
  $password = 'P@rtzer';

  try {
    $db = new PDO ($dsn, $username, $password);
  } catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
  }
?>
