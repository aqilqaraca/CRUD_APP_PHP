<?php

require_once ("Sql_Connect.php");

if($_GET){
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    $email = $_GET["email"];
    $phone = $_GET["phone"];
    $id = $_GET["id"];
}

$datas = array(
    "name" => $name,
    "surname" => $surname,
    "email" =>$email,
    "phone" =>$phone,
    "id"=>$id
);

$rows = $db->prepare("UPDATE users SET name=:name,surname=:surname,email=:email,phone=:phone WHERE id=:id");
$rows = $rows->execute($datas);
if($rows){
    echo "TRUE";
}
else {
    echo "FALSE";
}

?>