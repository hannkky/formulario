<?php

class AdminController {
    public function dashboard() {
        // Verificar si el usuario es administrador
        if ($_SESSION['rol'] !== 'admin') {
            header('Location: index.php?action=login');
            exit();
        }

        // Mostrar el panel de administración
        include '../views/panel.php';
    }

    public function modifyQuestions() {
        // Verificar si el usuario es administrador
        if ($_SESSION['rol'] !== 'admin') {  // Asegúrate de usar el campo correcto 'rol'
            header('Location: index.php?action=login');
            exit();
        }
    
        // Obtener las preguntas actuales de la base de datos
        $questionsModel = new QuestionsModel();
        $questions = $questionsModel->getQuestions();
    
        // Incluir la vista para modificar preguntas
        include '../views/admin/modify_questions.php';
    }

    // Otros métodos del administrador para ver registros, modificar preguntas, etc.
}

?>
