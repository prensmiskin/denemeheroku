<?php

$servername = "localhost:3306";
$username = "usertwo";
$password = "2092641182q";
$dbname = "deneme";
	
	

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully"; 

	$name=$_POST['kisi_ad'];
	$ad=$_POST['kisi_tel'];
	

      



	
	
   
    // use exec() because no results are returned
    

	
	
	
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
	
	
?>
