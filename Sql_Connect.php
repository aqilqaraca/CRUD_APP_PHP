<?php

$username = "root";
$password = "";

try{
    $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8',$username,$password);
}catch (PDOException $e){
    echo $e->getMessage();
}


?>