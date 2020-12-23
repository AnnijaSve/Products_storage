<?php

namespace App\Services\Products;

use App\Repositories\ProductsRepository;

class DeleteService
{
    public function execute(string $delete, array $checkbox): void
    {

        (new ProductsRepository())->delete($delete, $checkbox);

    }

}