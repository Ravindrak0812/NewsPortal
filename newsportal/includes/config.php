<?php
define('DB_SERVER','localhost:3308');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','newsportal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>