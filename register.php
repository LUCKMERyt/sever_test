<?php
// Взаимодействие с front - Регистрация пользователей PC Club

include_once "pdo.php";

$db = new DB();
$pdo = $db->connect();

if($_POST !== null){

    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $password = $_POST['password'];

//    $name = 'name' ;
//    $email = 'email' ;
//    $password = 'password';


    // INSERT в users
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $password);

    $stmt->execute();


}else{
    return false;
}




?>
