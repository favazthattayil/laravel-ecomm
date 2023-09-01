<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        Admin::create
        ([
            'name' => 'jacob',
            'username' => 'manager',
            'password' => bcrypt('project123'),
        ]);

    }
}
