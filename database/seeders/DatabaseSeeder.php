<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\product;
use Database\Factories\productFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class
        ]);
         Product::factory(1000)->create();
    }
}
