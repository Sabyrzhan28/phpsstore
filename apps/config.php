<?php 
//Подключение
$db = new PDO('mysql:host=localhost;dbname=sstore','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);
session_start();

 ?>