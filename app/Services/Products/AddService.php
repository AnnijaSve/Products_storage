<?php

namespace App\Services\Products;

use App\Models\Product;
use App\Repositories\ProductsRepository;

class AddService
{
    public function execute(array $data)
    {
        $message = "";

        if (isset($data['sku'])) {
            $productQuery = (new ProductsRepository())->getBySku($data['sku']);
        }

        if ($productQuery) {
            $message = 'This SKU exists already!';
        } else {
            (new ProductsRepository())->store($data);
        }

        return $message;

    }
}