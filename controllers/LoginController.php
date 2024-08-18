<?php

class LoginController {
    public function login() {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $usuarioModel = new UsuarioModel();
        $user = $usuarioModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            // Guardar la información en la sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['rol'] = $user['rol']; // Guardar el rol del usuario
            $_SESSION['authenticated'] = true;

            // Redirigir al panel de administración si el rol es admin
            if ($user['rol'] === 'admin') {
                header('Location: index.php?action=admin');
            } else {
                header('Location: index.php?action=panel');
            }
            exit();
        } else {
            header('Location: index.php?action=login&error=invalid_credentials');
            exit();
        }
    }
}
?>
