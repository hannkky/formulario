<?php include '../partials/header.php'; ?>

<div class="admin-container">
    <h1>Modificar Preguntas Personalizadas</h1>
    <form action="/routes/web.php?action=update_questions" method="post">
        <?php foreach ($questions as $question): ?>
        <div class="form-group">
            <label for="question_<?php echo $question['id']; ?>"><?php echo $question['question']; ?></label>
            <input type="text" name="questions[<?php echo $question['id']; ?>]" value="<?php echo $question['question']; ?>">
        </div>
        <?php endforeach; ?>
        <button type="submit">Guardar Cambios</button>
    </form>
</div>

<?php include '../partials/footer.php'; ?>
