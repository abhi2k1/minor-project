<?php
//$link = mysqli_connect("localhost","root","");
//mysqli_select_db($link,"online_quiz");
/*$host="localhost";
$dbusername="root";
$dbPassword="";
$dbname="online_quiz";*/
  DEFINE('DB_USERNAME', 'root');
  DEFINE('DB_PASSWORD', 'root');
  DEFINE('DB_HOST', 'localhost');
  DEFINE('DB_DATABASE', 'online_quiz');

  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }

  //echo 'DataBase Connected successfully.';

 // $mysqli->close();
?>