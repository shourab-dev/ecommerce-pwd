<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $options = [
            [
                'attribute_id' => 1, // size attribute id
                'name' => 'S',
            ],
            [
                'attribute_id' => 1, // size attribute id
                'name' => 'M',
            ],
            [
                'attribute_id' => 1, // size attribute id
                'name' => 'L',
            ],
            [
                'attribute_id' => 2, // color attribute id
                'name' => 'red',
                'color' => "#f00"
            ],
            [
                'attribute_id' => 2, // color attribute id
                'name' => 'lightblue',
                'color' => "dodgerblue"
            ],
        ];
        foreach ($options as $option) {
            Option::create($option);
        }
    }
}
