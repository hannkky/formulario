<?php

class QuestionsModel {
    protected $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=formulario', 'root', '');
    }

    public function getQuestions() {
        $query = $this->db->prepare("SELECT * FROM questions");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateQuestion($id, $newQuestion) {
        $query = $this->db->prepare("UPDATE questions SET question = :question WHERE id = :id");
        $query->bindParam(':question', $newQuestion);
        $query->bindParam(':id', $id);
        $query->execute();
    }
}
?>
