<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Mobile'
        ]);

        Category::create([
            'name' => 'Laptop'
        ]);

        Category::create([
            'name' => 'Speaker'
        ]);
    }
}
