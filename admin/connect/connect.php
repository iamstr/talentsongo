<?php

session_start();

$hostname="localhost";
$UserID="root";
$passwrd="";
$dbname="talents";

//global $connect;

$connection=mysqli_connect($hostname,$UserID,$passwrd,$dbname) OR die("couldn't connect to database error: ".mysqli_connect_error());


mysqli_set_charset($connection,"utf8");







?>