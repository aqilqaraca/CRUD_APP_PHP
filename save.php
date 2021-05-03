<?php

if($_GET){
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $id = $_GET["id"];
}

$datas = array(
    "name"=>$name,
    "surname"=>$surname,
    "phone"=>$phone,
    "email"=>$email,
    "id"=>$id
);
    require_once ("Sql_Connect.php");

    $rows = $db -> prepare("INSERT INTO users SET name=:name,surname=:surname,email=:email,phone=:phone,id=:id");
    $result = $rows -> execute($datas);
    if($result){
        echo "TRUE";
    }
    else {
        echo "FALSE";
    }

?>