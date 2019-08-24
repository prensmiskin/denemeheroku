<?php
$user="epiz_24131462";
 $pass="CIzewt7NzMGYGh";
try {
    $dbh = new PDO('mysql:host=sql209.epizy.com;dbname=epiz_24131462_deneme', $user, $pass);
    
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>
