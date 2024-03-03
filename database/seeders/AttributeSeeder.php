<?php

namespace Database\Seeders;


use App\Models\Attribute;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $attributes = [
            [
                'name' => 'Size',
            ],
            [
                'name' => 'Color',
            ],
            [
                'name' => 'Country',
            ],
        ];
        foreach ($attributes as $attribute) {
            Attribute::create($attribute);
        }
    }
}
