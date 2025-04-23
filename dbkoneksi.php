<?php
$host = "localhost";
$dbnama = "db_puskesmas";
$username = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbnama";

$dbh = new PDO($dsn, $username, $password);

?>