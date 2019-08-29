<?php
$servername = "sql209.epizy.com";
$username = "epiz_24131462";
$password = "CIzewt7NzMGYGh";
$dbname = "epiz_24131462_denemethree";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
