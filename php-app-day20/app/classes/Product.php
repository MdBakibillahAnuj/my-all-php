<?php


namespace App\classes;


class Product
{
    protected function getAllProduct()
    {
        return [
            0 =>[
                'id' => 1,
                'name' => 'New Product',
                'price' => '4500',
                'description' => 'description',
                'image' => '1.jpg'
            ],
            1 =>[
                'id' => 2,
                'name' => 'New T-shirt',
                'price' => '5500',
                'description' => 'description',
                'image' => '2.jpg'
            ],
            2 =>[
                'id' => 3,
                'name' => 'New Shari',
                'price' => '14500',
                'description' => 'description',
                'image' => '3.jpg'
            ]

        ];
    }
}