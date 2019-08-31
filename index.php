<?php

$servername = "localhost:3306";
$username = "user";
$password = "2092641182";
$dbname = "deneme";
	
	

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$name=$_POST['kisi_ad'];
	$ad=$_POST['kisi_tel'];
	

      



	
	
    $sql = "INSERT INTO gumus (name, ad)
    VALUES ('$name', '$ad')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
	$Soyad = "John";
	$re = mysql_query("SELECT * FROM gumus WHERE name='$Soyad' LIMIT 1");

	
	
	
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
	
	
?>
