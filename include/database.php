<?php
//Connect database
require_once 'config.php';
//$db = mysqli_connect('DATABASE_HOSTNAME', 'DATABASE_USERNAME', 'DATABASE_PASSWORD', 'DATABASE_DATABASE') or die(mysqli_error($db));
$db = mysqli_connect("127.1.1.0", "root", "", "blog") or die(mysqli_error($db));
//mysqli_query($db, "SET NAMES 'utf8'");
?>