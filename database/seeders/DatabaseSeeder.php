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
        $this->call(UserSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersRolesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(SubCategoriesSeeder::class);
        $this->call(AccessSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(commissionsSeeder::class);
        $this->call(displinesSeeder::class);
        $this->call(universitySeeder::class);
        $this->call(establishmentsSeeder::class);
        $this->call(gradesSeeder::class);
        $this->call(regionsSeeder::class);
        $this->call(userTypeSeeder::class);
    }
}
