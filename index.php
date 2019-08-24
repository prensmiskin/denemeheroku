<?php 


<?php
$user="sql7302807";
 $pass="iB6QcldJ2N";
try {
    $dbh = new PDO('sql7.freemysqlhosting.net;dbname=sql7302807', $user, $pass);
    
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>