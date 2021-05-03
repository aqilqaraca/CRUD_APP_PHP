<?php
if($_GET){
    $id = $_GET["id"];
}
require_once ("Sql_Connect.php");
$rows = $db->prepare("DELETE FROM users WHERE id=:id");
$rows->execute(array("id"=>$id));
if($rows){
    echo "TRUE";
}
else {
    echo "FALSE";
}

?>