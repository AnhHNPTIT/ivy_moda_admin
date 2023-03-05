<?php
$connection = new mysqli("66.42.54.109", "hna", "hna271257", "vtca");
mysqli_set_charset($connection,"utf8");
if ($connection->connect_errno) {
    echo $connection->connect_errno;
} 
?>
