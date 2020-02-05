<?php


class WebApplication
{
    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');
        $mainController = new MainController();

        switch($action) {
            case 'jokes':
                $mainController->jokes();
                break;

            case 'index':
            default:
                $mainController->index();
        }
    }
}
