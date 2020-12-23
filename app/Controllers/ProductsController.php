<?php

namespace App\Controllers;

use App\Models\Product;
use App\Services\Products\AddService;
use App\Services\Products\DeleteService;
use App\Services\Products\GetAllService;

class ProductsController
{
    public function index()
    {

        $products = (new GetAllService())->execute();

        return require_once __DIR__ . '/../Views/ProductsIndexView.php';

    }

    public function add()
    {

        return require_once __DIR__ . '/../Views/AddProductView.php';

    }

    public function store()
    {

        $message = (new AddService())->execute($_POST);
        if ($message){
            return require_once __DIR__ . '/../Views/AddProductView.php';
        }

        header('Location: /product');

    }

    public function delete()
    {
        (new DeleteService())->execute($_POST['delete'], $_POST['checkbox']);

        header('Location: /product');

    }

}