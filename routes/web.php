<?php

if ($_SERVER['REQUEST_URI'] === '/registro') {
    include '../views/registro.php';
} elseif ($_SERVER['REQUEST_URI'] === '/login') {
    include '../views/login.php';
} elseif ($_SERVER['REQUEST_URI'] === '/panel') {
    include '../views/panel.php';
} else {
    echo "Página no encontrada";
}
?>
