<?php
require_once '../controllers/LoginController.php';
require_once '../controllers/RegisterController.php';
require_once '../controllers/AdminController.php'; // Incluye AdminController si no está incluido
require_once '../models/QuestionsModel.php'; // Incluye QuestionsModel si no está incluido

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'login':
        $controller = new LoginController();
        $controller->login();
        break;

    case 'register':
        $controller = new RegisterController();
        $controller->register();
        break;

    case 'admin':
        $adminController = new AdminController();
        $adminController->dashboard();
        break;

    case 'view_records':
        $adminController = new AdminController();
        $adminController->viewUserRecords();
        break;

    case 'modify_questions':
        $adminController = new AdminController();
        $adminController->modifyQuestions();
        break;

    case 'update_questions':
        $questionsModel = new QuestionsModel();
        foreach ($_POST['questions'] as $id => $newQuestion) {
            $questionsModel->updateQuestion($id, $newQuestion);
        }
        header('Location: index.php?action=admin');
        break;

    default:
        header('Location: ../public/index.php');
        break;
}
?>
