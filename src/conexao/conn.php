<?php

$HOSTNAME = "localhost";
$DATABASE = "bancao";
$USERNAME = "root";
$PASSWORD = "";

try {
    $pdo = new PDO("mysql:host=$HOSTNAME;dbname=bancao", $USERNAME, $PASSWORD);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
