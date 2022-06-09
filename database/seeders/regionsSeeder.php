<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class regionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = array(
            array('id' => '1','ar_name' => 'تونس','fr_name' => 'TUNIS','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','ar_name' => 'أريانة','fr_name' => 'ARIANA','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','ar_name' => 'بن عروس','fr_name' => 'BEN AROUS','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','ar_name' => 'زغوان','fr_name' => 'ZAGHOUANE','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','ar_name' => 'منوبة','fr_name' => 'MANOUBA','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','ar_name' => 'بنزرت','fr_name' => 'BIZERTE','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','ar_name' => 'باجة','fr_name' => 'BEJA','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','ar_name' => 'جندوبة','fr_name' => 'JENDOUBA','created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','ar_name' => 'الكاف','fr_name' => 'LE KEF','created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','ar_name' => 'سليانة','fr_name' => 'SILIANA','created_at' => NULL,'updated_at' => NULL),
            array('id' => '11','ar_name' => 'القصرين','fr_name' => 'KASSERINE','created_at' => NULL,'updated_at' => NULL),
            array('id' => '12','ar_name' => 'سيدي بوزيد','fr_name' => 'SIDI BOUZID','created_at' => NULL,'updated_at' => NULL),
            array('id' => '13','ar_name' => 'قفصة','fr_name' => 'GAFSA','created_at' => NULL,'updated_at' => NULL),
            array('id' => '14','ar_name' => 'توزر','fr_name' => 'TOZEUR','created_at' => NULL,'updated_at' => NULL),
            array('id' => '15','ar_name' => 'قبلي','fr_name' => 'KEBILI','created_at' => NULL,'updated_at' => NULL),
            array('id' => '16','ar_name' => 'تطاوين','fr_name' => 'TATAOUINE','created_at' => NULL,'updated_at' => NULL),
            array('id' => '17','ar_name' => 'مدنين','fr_name' => 'MEDNINE','created_at' => NULL,'updated_at' => NULL),
            array('id' => '18','ar_name' => 'قابس','fr_name' => 'GABES','created_at' => NULL,'updated_at' => NULL),
            array('id' => '19','ar_name' => 'صفاقس','fr_name' => 'SFAX','created_at' => NULL,'updated_at' => NULL),
            array('id' => '20','ar_name' => 'القيروان','fr_name' => 'KAIROUAN','created_at' => NULL,'updated_at' => NULL),
            array('id' => '21','ar_name' => 'المهدية','fr_name' => 'MAHDIA','created_at' => NULL,'updated_at' => NULL),
            array('id' => '22','ar_name' => 'المنستير','fr_name' => 'MONASTIR','created_at' => NULL,'updated_at' => NULL),
            array('id' => '23','ar_name' => 'سوسة','fr_name' => 'SOUSSE','created_at' => NULL,'updated_at' => NULL),
            array('id' => '24','ar_name' => 'نابل','fr_name' => 'NABEUL','created_at' => NULL,'updated_at' => NULL),
            array('id' => '25','ar_name' => NULL,'fr_name' => 'AUTRES','created_at' => NULL,'updated_at' => NULL)
          );
          DB::table('regions')->insert($regions);
    }
}
