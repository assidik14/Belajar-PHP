<?php
  $host = 'localhost';
  $uname = 'crud';
  $pass = 'password';
  $db = 'db_crud';
  $conn = mysqli_connect($host,$uname,$pass,$db);
  mysqli_select_db($conn,$db);
?>