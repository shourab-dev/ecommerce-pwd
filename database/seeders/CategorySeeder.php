<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => "Electronics",
                'slug' => str('Electronics')->slug(),
            ],
            [
                'title' => "Toys",
                'slug' => str('Toys')->slug(),
            ],
            [
                'title' => "Fashion",
                'slug' => str('Fashion')->slug(),
            ],
            [
                'title' => "Accessories",
                'slug' => str('Accessories')->slug(),
            ],
            [
                'title' => "Others",
                'slug' => str('Others')->slug(),
            ],
        ];


        foreach ($categories as &$category) {
            Category::create($category);
        }
    }
}
