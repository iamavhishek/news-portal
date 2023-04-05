<?php
ob_start();
session_start();
$dburl = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "newsportal";

$conn = new mysqli($dburl, $dbuser, $dbpwd, $dbname);

if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
?>