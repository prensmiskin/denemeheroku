<?php 

$server="sql7.freemysqlhosting.net";
$username="sql7302807";
$password="iB6QcldJ2N";
$dbname="sql7302807";
try {
	$conn = new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
	$conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "Veri tabanı bağlantısı başarılı";
} catch (PDOException $e) {
	echo "Hata Oluştu:" $e->getMessage();
	
}

 ?>