<form action="../controllers/UsuarioController.php" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required>

    <label for="email">Correo Electrónico:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <label for="comida">Comida Favorita:</label>
    <input type="text" id="comida" name="comida_favorita">

    <label for="artista">Artista Favorito:</label>
    <input type="text" id="artista" name="artista_favorito">

    <label for="lugar">Lugar Favorito:</label>
    <input type="text" id="lugar" name="lugar_favorito">

    <label for="color">Color Favorito:</label>
    <input type="text" id="color" name="color_favorito">

    <label for="imagen">Subir Imagen:</label>
    <input type="file" id="imagen" name="imagen" accept="image/*">

    <button type="submit">Registrarse</button>
</form>
