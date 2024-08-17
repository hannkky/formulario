<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['rol'] != 'administrador') {
    header('Location: login.php');
    exit();
}
?>

<h1>Panel de Administración</h1>
<p>Bienvenido, <?php echo $_SESSION['usuario']['nombre']; ?>.</p>

