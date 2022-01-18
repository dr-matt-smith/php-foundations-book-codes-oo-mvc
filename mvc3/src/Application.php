<?php


class Application
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch($action) {
            case 'jokes':
                $this->jokes();
                break;

            case 'index':
            default:
                $this->index();
        }
    }

    public function index()
    {
        $pageTitle = 'home';
        include __DIR__ . '/../templates/home.php';
    }

    public function jokes()
    {
        $pageTitle = 'jokes';
        include __DIR__ . '/../templates/jokes.php';
    }
}
