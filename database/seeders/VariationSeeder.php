<?php

namespace Database\Seeders;

use App\Models\Variation;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VariationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variations = [
            [
                'product_id' => 1,
                'options' => json_encode([1, 4]),
            ],
            [
                'product_id' => 1,
                'options' => json_encode([2, 4]),
            ]
        ];


        foreach ($variations as $variation) {
            Variation::create($variation);
        }
    }
}
