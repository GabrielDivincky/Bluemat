<?php 
	$server='localhost';
	$userMySQL='root';
	$passMySQL='';
	$db='bluematdb';

	$conexion=mysqli_connect($server,$userMySQL,$passMySQL,$db) or die("Error de conexion!!");
