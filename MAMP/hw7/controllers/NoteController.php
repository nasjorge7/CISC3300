<?php


class NoteController {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = isset($_POST['title']) ? trim($_POST['title']) : '';
            $description = isset($_POST['description']) ? trim($_POST['description']) : '';

            $errors = [];

            if (strlen($title) <= 3) {
                $errors[] = "Title must be more than 3 characters long.";
            }
            if (strlen($description) <= 10) {
                $errors[] = "Description must be more than 10 characters long.";
            }

            if (!empty($errors)) {
                include __DIR__ . '/../views/error.php';
            } else {
                $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
                $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');

                include __DIR__ . '/../views/success.php';
            }
        } else {
            include __DIR__ . '/../views/note_form.php';
        }
    }
}
