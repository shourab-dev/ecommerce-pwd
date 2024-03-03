<?php

namespace Database\Seeders;

use App\Models\ProductAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        ProductAttribute::create([
            'product_id' => 1,
            'attribute_id' => 1,
        ]);
        ProductAttribute::create([
            'product_id' => 1,
            'attribute_id' => 2,
        ]);
    }
}
