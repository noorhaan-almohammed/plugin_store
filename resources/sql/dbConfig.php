<?php

function con(){
  $dsn = 'mysql:host=localhost;dbname=plugin_store';
  $username = "root";
  $password = "";
  $options = array(
      PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  );
  try {
      // Create connection
      $conn = new PDO($dsn, $username, $password, $options);
      // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //  echo "Connected successfully" . "<br>";
  } catch (PDOException $e) {
      // echo "Connection failed: " . $e->getMessage();
  }

return $conn;


}
