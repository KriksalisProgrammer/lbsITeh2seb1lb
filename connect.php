<?php
error_reporting(E_ALL);
$db_driver="mysql";
$host="localhost";
$database="work_db";
$dch="$db_driver:host=$host;dbname=$database";
$username="mysql";
$password="mysql";
try
{
$pdo=new PDO($dch,$username,$password);
}
catch(PDOException $e)
{
	print "Error";
	die();
}
?>