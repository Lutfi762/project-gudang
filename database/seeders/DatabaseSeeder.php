<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class); // \App\Models\User::factory(10)->create();
        $this->call(PermissionsTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }

}
