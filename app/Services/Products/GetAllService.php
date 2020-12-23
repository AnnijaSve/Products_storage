<?php

namespace App\Services\Products;


use App\Repositories\ProductsRepository;

class GetAllService
{

    public function execute(): array
    {

      return $products = (new ProductsRepository())->getAll();

    }

}