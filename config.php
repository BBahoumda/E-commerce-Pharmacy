<?php
$currency = "$";
$db_username = 'larrylu';
$db_password = 'password';
$db_name = 'lular_database';
$db_host = 'localhost';

$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errnor .') '. $mysqli->connect_error);
}
?>
