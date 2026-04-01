<?php
/**
 * AJAX Регистрация - INSERT в users 
 * Endpoint для js/regestrashi.js fetch()
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

include_once 'pdo.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (!$input || !isset($input['name'], $input['email'], $input['password'])) {
        echo json_encode(['success' => false, 'message' => 'Недостаточно данных']);
        exit;
    }
    
    $name = htmlspecialchars(trim($input['name']));
    $email = filter_var(trim($input['email']), FILTER_VALIDATE_EMAIL);
    $password = password_hash($input['password'], PASSWORD_DEFAULT); // Хэш пароля!
    $games = htmlspecialchars($input['games'] ?? '');
    
    if (!$email) {
        echo json_encode(['success' => false, 'message' => 'Неверный email']);
        exit;
    }
    
    try {
        $db = new DB();
        $pdo = $db->connect();
        
        // Проверка уникальности email 
        $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            echo json_encode(['success' => false, 'message' => 'Email занят']);
            exit;
        }
        
        // INSERT (users таблица)
        $stmt = $pdo->prepare('INSERT INTO users (name, email, password, games) VALUES (?, ?, ?, ?)');
        $success = $stmt->execute([$name, $email, $password, $games]);
        
        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Регистрация успешна!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Ошибка БД']);
        }
        
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Сервер ошибка: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Только POST']);
}
?>

