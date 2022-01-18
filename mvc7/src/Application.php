<?php
namespace Tudublin;

class Application
{
    private $mainController;

    public function __construct()
    {
        $this->mainController = new MainController();
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch($action) {
            case 'jokes':
                $this->mainController->jokes();
                break;

            case 'about':
                $this->mainController->about();
                break;

            case 'products':
                $this->mainController->products();
                break;

            case 'index':
            default:
                $this->mainController->index();
        }
    }
}
