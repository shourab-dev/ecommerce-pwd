<?php

namespace Database\Seeders;

use App\Models\ProductOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productOptions = [
            [
                "product_attribute_id" => 1,
                "attribute_id" => 1,
                "option_id" => 1,
            ],
            [
                "product_attribute_id" => 1,
                "attribute_id" => 1,
                "option_id" => 2,
            ],
            [
                "product_attribute_id" => 2,
                "attribute_id" => 2,
                "option_id" => 4,
            ],
            [
                "product_attribute_id" => 2,
                "attribute_id" => 2,
                "option_id" => 5,
            ],
        ];

        foreach ($productOptions as &$item) {
            ProductOption::create($item);
        }
    }
}
