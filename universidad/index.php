<?php
require_once 'config/database.php';
require_once 'controllers/UsuarioController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'usuario';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

switch ($controller) {
    case 'usuario':
        $controller = new UsuarioController($pdo);
        break;
    default:
        die('Controlador no encontrado');
}

if (method_exists($controller, $action)) {
    if ($id !== null) {
        $controller->$action($id);
    } else {
        $controller->$action();
    }
} else {
    // Manejar error 404
    die('Acción no encontrada');
}