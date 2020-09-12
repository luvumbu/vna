<?php 
session_start(); 
header("Access-Control-Allow-Origin: *");
$_SESSION["id"]=$_POST["id"];
echo $_SESSION["id"] ; 
?>