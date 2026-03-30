<?php
// Взаимодействие с front

include_once "pdo.php";

$db = new DB();
$pdo = $db->connect();

if($_POST !== null){

    $name = $_POST['name'];
    $age =$_POST['age'];
    $surname = $_POST['surname'];





        $stmt = $pdo->prepare("INSERT INTO testik ($name,$age,$surname) VALUES (?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $age);
        $stmt->bindParam(3, $surname);
        $stmt->execute();
}else{
    return false;
    echo "<br>";
    echo "НЕ РАБОТАЕТ";
};



