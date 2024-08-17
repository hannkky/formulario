<?php
class UsuarioModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function registrarUsuario($nombre, $apellido, $email, $password, $imagen, $comida, $artista, $lugar, $color) {
        $sql = "INSERT INTO usuarios (nombre, apellido, email, contraseña, comida_favorita, artista_favorito, lugar_favorito, color_favorito, imagen) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt->execute([$nombre, $apellido, $email, $hashedPassword, $comida, $artista, $lugar, $color, $imagen]);
    }

    public function autenticarUsuario($email, $password) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($password, $usuario['contraseña'])) {
            return $usuario;
        } else {
            return false;
        }
    }

}
?>
