<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class,
            CategorySeeder::class,
            AttributeSeeder::class,
            OptionSeeder::class,
            ProductSeeder::class,
            ProductAttributeSeeder::class,
            ProductOptionSeeder::class,
            VariationSeeder::class,
            SkuSeeder::class,
        ]);
    }
}
