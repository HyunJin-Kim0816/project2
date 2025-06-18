<?php

  $sql_host = "localhost";
  $sql_user = "root";
  $sql_pw = "1234";
  $sql_db = "kdt";

  $conn = mysqli_connect($sql_host,$sql_user,$sql_pw,$sql_db);

  if(!$conn) die("연결실패 : " . mysqli_error());

  // ini_set('display_error', 'off');

  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  
?>