<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grades = array(
            array('id' => '1','ar_name' => 'باحث بالخارج','fr_name' => 'باحث بالخارج','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','ar_name' => 'باحث بتونس','fr_name' => 'باحث بتونس','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','ar_name' => 'مدرس بالخارج','fr_name' => 'مدرس بالخارج','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','ar_name' => 'مدرس بوزارة التربية','fr_name' => 'مدرس بوزارة التربية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','ar_name' => 'ملحق لدى وكالة التعاون الفني','fr_name' => 'ملحق لدى وكالة التعاون الفني','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','ar_name' => 'موظف بالقطاع العام','fr_name' => 'موظف بالقطاع العام','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','ar_name' => 'يعمل بالقطاع الخاص','fr_name' => 'يعمل بالقطاع الخاص','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','ar_name' => 'بدون شغل','fr_name' => 'بدون شغل','created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','ar_name' => 'أ-ت-ث ملحق بوزارة التعليم العالي','fr_name' => 'أ-ت-ث ملحق بوزارة التعليم العالي','created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','ar_name' => 'أستاذ مبرز بوزارة التعليم العالي والبحث العلم','fr_name' => 'أستاذ مبرز بوزارة التعليم العالي','created_at' => NULL,'updated_at' => NULL),
            array('id' => '11','ar_name' => 'أستاذ مبرز أول بوزارة التعليم العالي','fr_name' => 'أستاذ مبرز أول بوزارة التعليم العالي','created_at' => NULL,'updated_at' => NULL),
            array('id' => '12','ar_name' => 'مدرس تربية بدنية بمؤسسة تعليم عالي للرياضة','fr_name' => 'مدرس تربية بدنية بمؤسسة تعليم عالي للرياضة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '13','ar_name' => 'موظف بوزارة التعليم العالي والبحث العلمي(سلك ','fr_name' => 'موظف بوزارة التعليم العالي(سلك إداري)','created_at' => NULL,'updated_at' => NULL),
            array('id' => '14','ar_name' => 'واعظ بالشؤون الدينية','fr_name' => 'واعظ بالشؤون الدينية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '15','ar_name' => 'واعظ أول بالشؤون الدينية','fr_name' => 'واعظ أول بالشؤون الدينية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '16','ar_name' => 'واعظ أول فوق الرتبة بالشؤون الدينية','fr_name' => 'واعظ أول فوق الرتبة بالشؤون الدينية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '17','ar_name' => 'يشتغل','fr_name' => 'يشتغل','created_at' => NULL,'updated_at' => NULL),
            array('id' => '18','ar_name' => 'أخرى','fr_name' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '19','ar_name' => 'مساعد','fr_name' => 'ASSISTANT','created_at' => NULL,'updated_at' => NULL),
            array('id' => '20','ar_name' => 'مساعد متعاقد','fr_name' => 'ASSISTANT','created_at' => NULL,'updated_at' => NULL),
            array('id' => '21','ar_name' => 'مهندس','fr_name' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '22','ar_name' => 'أستاذ مساعد','fr_name' => 'MAITRE ASSISTANT','created_at' => NULL,'updated_at' => NULL),
            array('id' => '23','ar_name' => 'أستاذ مساعد متعاقد','fr_name' => 'MAITRE ASSISTANT','created_at' => NULL,'updated_at' => NULL),
            array('id' => '24','ar_name' => 'أستاذ محاضر','fr_name' => 'MAITRE DE CONFERENCES','created_at' => NULL,'updated_at' => NULL),
            array('id' => '25','ar_name' => 'أستاذ سلك مشترك بوزارة التعليم العالي والبحث ','fr_name' => NULL,'created_at' => NULL,'updated_at' => NULL),
            array('id' => '26','ar_name' => 'أستاذ تعليم ثانوي','fr_name' => 'PROFESSEUR D\'ENSEIGNEMENT SECONDAIRE','created_at' => NULL,'updated_at' => NULL),
            array('id' => '27','ar_name' => 'أستاذ تعليم عالي','fr_name' => 'PROFESSEUR D\'ENSEIGNEMENT SUPERIEUR','created_at' => NULL,'updated_at' => NULL),
            array('id' => '28','ar_name' => 'تكنولوجي','fr_name' => 'TECHNOLOGUE','created_at' => NULL,'updated_at' => NULL),
            array('id' => '29','ar_name' => 'تكنولوجي متعاقد','fr_name' => 'TECHNOLOGUE','created_at' => NULL,'updated_at' => NULL)
          );
          DB::table('grades')->insert($grades);
    }
}
