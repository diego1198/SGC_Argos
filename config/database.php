<?php
$server   = "localhost";
$username = "sgipro_sgc_argos";
$password = "202009argos";
$database = "sgc_argos";
$mysqli = new mysqli($server, $username, $password, $database);
if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>