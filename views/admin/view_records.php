<?php include '../partials/header.php'; ?>

<div class="admin-container">
    <h1>Registros de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Comida Favorita</th>
                <th>Artista Favorito</th>
                <th>Lugar Favorito</th>
                <th>Color Favorito</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro): ?>
            <tr>
                <td><?php echo $registro['nombre']; ?></td>
                <td><?php echo $registro['email']; ?></td>
                <td><?php echo $registro['comida_favorita']; ?></td>
                <td><?php echo $registro['artista_favorito']; ?></td>
                <td><?php echo $registro['lugar_favorito']; ?></td>
                <td><?php echo $registro['color_favorito']; ?></td>
                <td><img src="<?php echo $registro['imagen_path']; ?>" alt="Imagen" width="50"></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../partials/footer.php'; ?>
