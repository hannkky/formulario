<?php
require_once '../models/UsuarioModel.php';

class RegisterController {
    public function register() {
        $nombre = $_POST['nombre'] ?? '';
        $apellido = $_POST['apellido'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Validar que se haya ingresado una contraseña
        if (empty($password)) {
            // Redirigir a la estructura MVC con un mensaje de error
            header('Location: ../public/index.php?action=register&error=password_missing');
            exit();
        } else {
            $password = password_hash($password, PASSWORD_BCRYPT);
        }

        // Registrar al usuario
        $usuarioModel = new UsuarioModel();
        $usuarioModel->registerUser($nombre, $apellido, $email, $password);

        // Redirigir al login después de un registro exitoso
        header('Location: ../public/index.php?action=login&registered=1');
        exit();
    }
}
?>
