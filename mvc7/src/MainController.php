<?php
namespace Tudublin;

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

    public function about()
    {
        $pageTitle = 'about';
        include __DIR__ . '/../templates/about.php';
    }

    public function products()
    {
        $p1 = new Product();
        $p1->setName('hammer');
        $p1->setPrice(9.99);

        $p2 = new Product();
        $p2->setName('short ladder');
        $p2->setPrice(19.99);

        $products = [
            $p1, $p2
        ];

        $pageTitle = 'products';
        include __DIR__ . '/../templates/products.php';
    }


}