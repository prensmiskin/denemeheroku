<?php 

$dbhost = 'ql7.freemysqlhosting.net';
         $dbuser = 'sql7302807';
         $dbpass = 'iB6QcldJ2N';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
         
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         echo 'Connected successfully';
         mysql_close($conn);








 ?>