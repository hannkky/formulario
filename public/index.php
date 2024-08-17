<?php
require '../config/database.php';
require '../controllers/UsuarioController.php';

$usuarioController = new UsuarioController($db);

// Redirigir según la acción solicitada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'registrar') {
        $usuarioController->registrarUsuario();
    } elseif (isset($_POST['accion']) && $_POST['accion'] === 'login') {
        $usuarioController->loginUsuario();
    }
}
?>
