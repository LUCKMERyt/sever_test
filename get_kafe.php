<?php


include_once "pdo.php";

$db = new DB();
$pdo = $db->connect();

$stmt = $pdo->query("SELECT * FROM kafe_menu");
$menu = $stmt->fetchAll();

echo json_encode($menu);

