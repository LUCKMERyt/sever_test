<?php
include_once "pdo.php";

$db = new DB();
$pdo = $db->connect();

header('Content-Type: application/json; charset=utf-8');
if (!empty($_GET['id'])) { // Безопасная проверка

    // Получение данных из таблицы student по полю id
    $id = intval($_GET['id']);
    $stmt = $pdo->prepare("SELECT name FROM users WHERE id=?");
    $stmt->bindParam(1, $id);
    $stmt->execute();

    $results = $stmt->fetchAll();

    $result = json_encode($results);
    echo $result;
}else{
    return false;
}

