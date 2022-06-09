<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users_type = array(
            array('id' => '1','name' => 'Enseignant','description' => 'enseignant','created_at' => '2022-06-01 02:11:26','updated_at' => '2022-06-01 02:11:26')
          );
          DB::table('users_type')->insert($users_type);
    }
}
