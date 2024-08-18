<?php
require_once '../routes/web.php';

session_start();
$isAuthenticated = $_SESSION['authenticated'] ?? false;

$action = $_GET['action'] ?? 'login'; // Por defecto, mostrar el formulario de login

switch ($action) {
    case 'login':
        include '../views/login.php';
        break;
    case 'register':
        include '../views/registro.php';
        break;
    default:
        include '../views/login.php'; // Si no se especifica ninguna acción, mostrar el login
        break;
}
?>
