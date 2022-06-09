<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class universitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $university = array(
            array('id' => '27','ar_name' => 'جامعة تونس','fr_name' => 'UNIVERSITE DE TUNIS','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '28','ar_name' => 'جامعة منوبة','fr_name' => 'UNIVERSITE DE MANOUBA','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '29','ar_name' => 'جامعة تونس المنار','fr_name' => 'UNIVERSITE DE TUNIS EL MANAR','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '30','ar_name' => 'جامعة  قرطاج','fr_name' => 'UNIVERSITE DE CARTHAGE','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '31','ar_name' => 'جامعة الزيتونة','fr_name' => 'UNIVERSITE EZ-ZITOUNA','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '32','ar_name' => 'جامعة سوسة','fr_name' => 'UNIVERSITE DU SOUSSE','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '33','ar_name' => 'جامعة صفاقس','fr_name' => 'UNIVERSITE DU SFAX','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '34','ar_name' => 'جامعة جندوبة','fr_name' => 'UNIVERSITE DE JENDOUBA','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '35','ar_name' => 'جامعة قابس','fr_name' => 'UNIVERSITE DE GABES','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '36','ar_name' => 'شبكة المعاهد العليا للدّراسات التّكنولوجيّة','fr_name' => 'DIRECTION GENERALE DES ETUDES TECHNOLOGIQUES','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '37','ar_name' => 'جامعة المنستير','fr_name' => 'UNIVERSITE DE MONASTIR','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '38','ar_name' => 'جامعة القيروان','fr_name' => 'UNIVERSITE DE KAIROUAN','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '39','ar_name' => 'جامعة قفصة','fr_name' => 'UNIVERSITE DE GAFSA','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '285','ar_name' => 'الجامعة الافتراضية','fr_name' => 'UNIVERSITE VIRTUELLE','phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '677','ar_name' => 'جامعة تونس الافتراضية','fr_name' => NULL,'phone' => NULL,'fax' => NULL,'address_line' => NULL,'website' => NULL,'created_at' => NULL,'updated_at' => NULL)
          );
          DB::table('university')->insert($university);
    }
}
