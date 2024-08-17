<?php
require_once '../models/UsuarioModel.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct($db) {
        $this->usuarioModel = new UsuarioModel($db);
    }

    public function registrarUsuario() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtener datos del formulario
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $imagen = $_FILES['imagen']['name'];
            $comida = $_POST['comida_favorita'];
            $artista = $_POST['artista_favorito'];
            $lugar = $_POST['lugar_favorito'];
            $color = $_POST['color_favorito'];

            // Subir imagen
            move_uploaded_file($_FILES['imagen']['tmp_name'], "../public/uploads/$imagen");

            $this->usuarioModel->registrarUsuario($nombre, $apellido, $email, $password, $imagen, $comida, $artista, $lugar, $color);

            echo "Registro exitoso";
        }
    }

    public function loginUsuario() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $usuario = $this->usuarioModel->autenticarUsuario($email, $password);

            if ($usuario) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: ../views/panel.php');
            } else {
                echo "Credenciales incorrectas";
            }
        }
    }
}
?>
