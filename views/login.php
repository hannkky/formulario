<?php include 'partials/header.php'; ?>

<div class="container">
    <div class="left-section">
        <img src="../public/images/fondo.jpeg" alt="Imagen WePlot">
    </div>
    <div class="right-section">
        <form action="/routes/web.php?action=login" method="post" class="login-form">
            <h1>Iniciar <span class="brand">Sesión</span></h1>

            <div class="form-group">
                <label for="email">Correo Electrónico*:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña*:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Iniciar Sesión</button>
            <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p> <!-- Enlace corregido -->
        </form>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
