<?php

namespace App\Models;

class Product
{

    private string $sku;
    private string $name;
    private float $price;
    private ?int $id;
    private ?int $size;
    private ?float $weight;
    private ?int $height;
    private ?int $width;
    private ?int $length;


    public function __construct
    (

        string $sku,
        string $name,
        float $price,
        int $size,
        float $weight,
        int $height,
        int $width,
        int $length,
        ?int $id = null

    )
    {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return number_format($this->price / 100,2) . ' $';
    }

    public function getSize(): string
    {
        return number_format($this->size / 1000) . ' MB';

    }

    public function getWeight(): string
    {
        if (number_format($this->weight/1000, $decimals = 0)){
            return $this->weight / 1000 . 'KG';
        }
        return number_format($this->weight / 1000,2) . 'KG';
    }

    public function getHeight(): int
    {
        return $this->height / 1000;
    }

    public function getWidth(): int
    {
        return $this->width / 1000;
    }

    public function getLength(): int
    {
        return $this->length / 1000;
    }


    public function getDimensions(): string
    {
        return $this->getWidth()
            . 'x' .
            $this->getLength()
            . 'x' .
            $this->getHeight();
    }

    public static function create(array $data): Product
    {
        return new self(
            $data['sku'],
            $data['name'],
            (float)$data['price'],
            (int)$data['size'],
            (float)$data['weight'],
            (int)$data['height'],
            (int)$data['width'],
            (int)$data['length']
        );
    }

    public function toArray(): array
    {
        return [
            'sku' => $this->sku,
            'name' => $this->name,
            'price' => $this->price * 100,
            'size' => $this->size * 1000,
            'weight' => $this->weight * 1000,
            'height' => $this->height * 1000,
            'width' => $this->width * 1000,
            'length' => $this->length * 1000
        ];

    }

}