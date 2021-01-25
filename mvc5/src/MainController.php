<?php


class MainController
{
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