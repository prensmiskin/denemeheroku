<?php 

$link = mysql_connect('ql7.freemysqlhosting.net', 'sql7302807', 'iB6QcldJ2N');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);









 ?>