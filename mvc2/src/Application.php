<?php


class Application
{
    public function run()
    {
        $this->index();
    }

    private function index()
    {
        $pageTitle = 'home';
        include __DIR__ . '/../templates/home.php';
    }
}
