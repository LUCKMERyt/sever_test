<?php
// Взаимодействие с front - Регистрация пользователей PC Club

include_once "pdo.php";

$db = new DB();
$pdo = $db->connect();

if($_POST !== null){

//        $nickname = $_POST['nickname'];
//        $pass = $_POST['pass'];

    $name = "nickname";
    $email = "email";
    $password="password";
    $games="games";


        // INSERT в users
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, games) VALUES (?, ?, ?, ?)");
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $password);
        $stmt->bindParam(4, $games);

        $stmt->execute();

    }else{
    return false;
}

?>

