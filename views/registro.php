<?php include 'partials/header.php'; ?>

<div class="container">
    <div class="left-section">
        <img src="../public/images/fondo.jpeg" alt="Imagen WePlot">
    </div>
    <div class="right-section">
        <form action="../controllers/UsuarioController.php" method="post" enctype="multipart/form-data">
            <h1>Regístrate <span class="brand">aquí</span></h1>

            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre*:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="email">Correo Electrónico*:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono*:</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais">
                </div>
                <div class="form-group">
                    <label for="comida">Comida Favorita:</label>
                    <input type="text" id="comida" name="comida_favorita">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="artista">Artista Favorito:</label>
                    <input type="text" id="artista" name="artista_favorito">
                </div>
                <div class="form-group">
                    <label for="lugar">Lugar Favorito:</label>
                    <input type="text" id="lugar" name="lugar_favorito">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="color">Color Favorito:</label>
                    <input type="text" id="color" name="color_favorito">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="password">Contraseña*:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmar Contraseña*:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
            </div>

            <div class="form-group photo-upload">
                <label for="imagen" class="upload-label">
                    <i class="fas fa-user-circle profile-icon"></i>
                    <span>Foto de perfil</span>
                    <i class="fas fa-arrow-up upload-arrow"></i>
                    <input type="file" id="imagen" name="imagen" accept="image/jpeg, application/pdf">
                    <small>jpg o PDF de máximo 10 MB</small>
                </label>
            </div>

            <button type="submit">Registrarse</button>
            <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a></p>
        </form>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
