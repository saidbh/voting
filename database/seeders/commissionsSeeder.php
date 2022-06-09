<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commissions = array(
            array('id' => '1','grades_id' => NULL,'disciplines_id' => NULL,'name' => 'اللجنة الوطنية للانتداب وترقية أستاذ تعليم عال','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','grades_id' => NULL,'disciplines_id' => NULL,'name' => 'اللجنة الوطنية للانتداب وترقية أستاذ محاضر','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','grades_id' => NULL,'disciplines_id' => NULL,'name' => 'اللجنة الوطنية للانتداب وترقية أستاذ مساعد','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','grades_id' => NULL,'disciplines_id' => NULL,'name' => 'اللجنة الوطنية للانتداب وترقية مساعد','created_at' => NULL,'updated_at' => NULL)
          );
        DB::table('commissions')->insert($commissions);
    }
}
