<?php

namespace Database\Seeders;

use App\Models\Sku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skus = [
            [
                'product_id' => 1,
                'variation_id' => 1,
                'sku' => 'L-001',
                'is_stock' => true,
                "price" => 550,
                'variation_img' => "https://adminapi.applegadgetsbd.com/storage/media/large/3408-34138.jpg"
            ],
            [
                'product_id' => 1,
                'variation_id' => 2,
                'sku' => 'L-002',
                'is_stock' => true,
                "price" => 700,
                'variation_img' => "https://powermaccenter.com/cdn/shop/files/iPhone_13_Pro_Max_Sierra_Blue_PDP_Image_Position-1A__en-US_1445x.jpg?v=1689789656"
            ],
        ];


        foreach ($skus as $sku) {
            Sku::create($sku);
        }
    }
}
