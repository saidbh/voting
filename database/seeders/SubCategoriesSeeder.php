<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_categories = array(
            array('id' => '1','categories_id' => '2','title' => 'Liste des Utilisateurs','link' => 'users-accounts.list','icon' => NULL,'created_at' => NULL,'updated_at' => NULL),
            
            array('id' => '2','categories_id' => '3','title' => 'liste des Sessions','link' => 'sessions-list','icon' => NULL,'created_at' => NULL,'updated_at' => NULL),

            array('id' => '3','categories_id' => '4','title' => 'Liste des Candidats','link' => 'votes-list','icon' => NULL,'created_at' => NULL,'updated_at' => NULL),

            array('id' => '4','categories_id' => '5','title' => 'Liste des resultats','link' => 'results-list','icon' => NULL,'created_at' => NULL,'updated_at' => NULL),

            array('id' => '5','categories_id' => '6','title' => 'Rôles et permissions','link' => 'system-role-permission','icon' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','categories_id' => '6','title' => 'Attribution Rôle','link' => 'system-assign-role','icon' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','categories_id' => '6','title' => 'Configurations','link' => 'system-dictionary','icon' => NULL,'created_at' => NULL,'updated_at' => NULL)
        );

        DB::table('sub_categories')->insert($sub_categories);
    }
}
