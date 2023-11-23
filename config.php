<?php

session_start();

$host = "localhost";
$dbname = "bdvendas";
$user = "root";
$pass = "";

$ligacao_bd = new mysqli($host,$user,$pass,$dbname);

?>