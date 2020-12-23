<?php

namespace App\Repositories;

use App\Models\Product;

class ProductsRepository
{
    public function delete(string $delete, array $checkbox): void
    {

        if (isset($delete)) {
            foreach ($checkbox as $sku) {
                query()
                    ->delete('products')
                    ->where('sku = :sku')
                    ->setParameter('sku', $sku)
                    ->execute();
            }
        }

    }

    public function store(array $data): void
    {

        $product = Product::create($data);

        query()
            ->insert('products')
            ->values([
                'sku' => ':sku',
                'name' => ':name',
                'price' => ':price',
                'size' => ':size',
                'weight' => ':weight',
                'height' => ':height',
                'width' => ':width',
                'length' => ':length'
            ])
            ->setParameters($product->toArray())
            ->execute();

    }

    public function getAll(): array
    {

        $productQuery = query()
            ->select('*')
            ->from('products')
            ->execute()
            ->fetchAllAssociative();

        $products = [];

        foreach ($productQuery as $product) {
            $products[] = Product::create($product);
        }

        return $products;
    }

    public function getBySku(string $sku)
    {

       return $productQuery = query()
            ->select('sku')
            ->from('products')
            ->where('sku = :sku')
            ->setParameter('sku', $sku)
            ->execute()
            ->fetchAssociative();

    }


}