<?php
class Controller
{
    public function view($view, $data = [], $title = 'Halaman Aja!',)
    {
        require_once '../app/views/templates/header.php';
        require_once '../app/views/' . $view . '.php';
        require_once '../app/views/templates/footer.php';
    }
}
