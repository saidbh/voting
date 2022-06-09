<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class displinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $disciplines = array(
            array('id' => '1','sessions_id' => NULL,'ar_name' => 'بدون مادة','fr_name' => 'بدون مادة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','sessions_id' => NULL,'ar_name' => 'علوم القرآن والتفسير','fr_name' => 'علوم القرآن والتفسير','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','sessions_id' => NULL,'ar_name' => 'علوم الحديث','fr_name' => 'علوم الحديث','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','sessions_id' => NULL,'ar_name' => 'الفقه','fr_name' => 'الفقه','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','sessions_id' => NULL,'ar_name' => 'أصول الدين','fr_name' => 'أصول الدين','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','sessions_id' => NULL,'ar_name' => 'الحضارة الإسلامية','fr_name' => 'الحضارة الإسلامية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '7','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة العربية','fr_name' => 'اللغة والآداب والحضارة العربية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة الفرنسية','fr_name' => 'اللغة والآداب والحضارة الفرنسية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة الإنقليزية','fr_name' => 'اللغة والآداب والحضارة الإنقليزية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة الألمانية','fr_name' => 'اللغة والآداب والحضارة الألمانية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '11','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة الإيطالية','fr_name' => 'اللغة والآداب والحضارة الإيطالية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '12','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة الإسبانية','fr_name' => 'اللغة والآداب والحضارة الإسبانية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '13','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة الروسية','fr_name' => 'اللغة والآداب والحضارة الروسية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '14','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة الصينية','fr_name' => 'اللغة والآداب والحضارة الصينية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '15','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة اليابانية','fr_name' => 'اللغة والآداب والحضارة اليابانية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '16','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة التركية','fr_name' => 'اللغة والآداب والحضارة التركية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '17','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة العبرية','fr_name' => 'اللغة والآداب والحضارة العبرية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '18','sessions_id' => NULL,'ar_name' => 'اللسانيات العامة','fr_name' => 'اللسانيات العامة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '19','sessions_id' => NULL,'ar_name' => 'الفلسفة','fr_name' => 'الفلسفة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '20','sessions_id' => NULL,'ar_name' => 'علم الإجتماع','fr_name' => 'علم الإجتماع','created_at' => NULL,'updated_at' => NULL),
            array('id' => '21','sessions_id' => NULL,'ar_name' => 'علم النفس','fr_name' => 'علم النفس','created_at' => NULL,'updated_at' => NULL),
            array('id' => '22','sessions_id' => NULL,'ar_name' => 'علوم التربية وتعليمية المواد','fr_name' => 'علوم التربية وتعليمية المواد','created_at' => NULL,'updated_at' => NULL),
            array('id' => '23','sessions_id' => NULL,'ar_name' => 'التاريخ','fr_name' => 'التاريخ','created_at' => NULL,'updated_at' => NULL),
            array('id' => '24','sessions_id' => NULL,'ar_name' => 'الجغرافيا','fr_name' => 'الجغرافيا','created_at' => NULL,'updated_at' => NULL),
            array('id' => '25','sessions_id' => NULL,'ar_name' => 'علوم الترجمة والمصطلحات','fr_name' => 'علوم الترجمة والمصطلحات','created_at' => NULL,'updated_at' => NULL),
            array('id' => '26','sessions_id' => NULL,'ar_name' => 'اللغة والآداب والحضارة الفارسية','fr_name' => 'اللغة والآداب والحضارة الفارسية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '27','sessions_id' => NULL,'ar_name' => 'الرياضيات','fr_name' => 'الرياضيات','created_at' => NULL,'updated_at' => NULL),
            array('id' => '28','sessions_id' => NULL,'ar_name' => 'الرياضيات التطبيقيّة','fr_name' => 'الرياضيات التطبيقيّة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '29','sessions_id' => NULL,'ar_name' => 'الإعلاميّة','fr_name' => 'الإعلاميّة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '30','sessions_id' => NULL,'ar_name' => 'الفيزياء','fr_name' => 'الفيزياء','created_at' => NULL,'updated_at' => NULL),
            array('id' => '31','sessions_id' => NULL,'ar_name' => 'الكيمياء','fr_name' => 'الكيمياء','created_at' => NULL,'updated_at' => NULL),
            array('id' => '32','sessions_id' => NULL,'ar_name' => 'العلوم الجيولوجيّة','fr_name' => 'العلوم الجيولوجيّة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '33','sessions_id' => NULL,'ar_name' => 'علوم المواد','fr_name' => 'علوم المواد','created_at' => NULL,'updated_at' => NULL),
            array('id' => '34','sessions_id' => NULL,'ar_name' => 'الجيوماتيك','fr_name' => 'الجيوماتيك','created_at' => NULL,'updated_at' => NULL),
            array('id' => '35','sessions_id' => NULL,'ar_name' => 'البيولوجيا والفيزيولوجيا الحيوانية','fr_name' => 'البيولوجيا والفيزيولوجيا الحيوانية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '36','sessions_id' => NULL,'ar_name' => 'البيولوجيا والفيزيولوجيا النباتية','fr_name' => 'البيولوجيا والفيزيولوجيا النباتية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '37','sessions_id' => NULL,'ar_name' => 'البيولوجيا الجزيئية والخلوية','fr_name' => 'البيولوجيا الجزيئية والخلوية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '38','sessions_id' => NULL,'ar_name' => 'الهندسة الميكانيكيّة','fr_name' => 'الهندسة الميكانيكيّة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '39','sessions_id' => NULL,'ar_name' => 'الهندسة المدنية','fr_name' => 'الهندسة المدنية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '40','sessions_id' => NULL,'ar_name' => 'الهندسة الكيميائية','fr_name' => 'الهندسة الكيميائية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '41','sessions_id' => NULL,'ar_name' => 'الهندسة الصناعية','fr_name' => 'الهندسة الصناعية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '42','sessions_id' => NULL,'ar_name' => 'الهندسة البيولوجيـة','fr_name' => 'الهندسة البيولوجيـة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '43','sessions_id' => NULL,'ar_name' => 'الهندسة المائية','fr_name' => 'الهندسة المائية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '44','sessions_id' => NULL,'ar_name' => 'هندسة النسيج','fr_name' => 'هندسة النسيج','created_at' => NULL,'updated_at' => NULL),
            array('id' => '45','sessions_id' => NULL,'ar_name' => 'الإتصالات','fr_name' => 'الإتصالات','created_at' => NULL,'updated_at' => NULL),
            array('id' => '46','sessions_id' => NULL,'ar_name' => 'هندسة الطاقة','fr_name' => 'هندسة الطاقة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '47','sessions_id' => NULL,'ar_name' => 'تقنيات السمعي البصري والسينما','fr_name' => 'تقنيات السمعي البصري والسينما','created_at' => NULL,'updated_at' => NULL),
            array('id' => '48','sessions_id' => NULL,'ar_name' => 'علوم النقل واللوجستيك','fr_name' => 'علوم النقل واللوجستيك','created_at' => NULL,'updated_at' => NULL),
            array('id' => '49','sessions_id' => NULL,'ar_name' => 'الهندسة الطبية الحيوية','fr_name' => 'الهندسة الطبية الحيوية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '50','sessions_id' => NULL,'ar_name' => 'الآلية والإعلامية الصناعية','fr_name' => 'الآلية والإعلامية الصناعية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '51','sessions_id' => NULL,'ar_name' => 'الإلكترونيك والمكروالكترونيك','fr_name' => 'الإلكترونيك والمكروالكترونيك','created_at' => NULL,'updated_at' => NULL),
            array('id' => '52','sessions_id' => NULL,'ar_name' => 'معالجة الإشارة والصورة','fr_name' => 'معالجة الإشارة والصورة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '53','sessions_id' => NULL,'ar_name' => 'الأنظمة الكهربائية','fr_name' => 'الأنظمة الكهربائية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '54','sessions_id' => NULL,'ar_name' => 'الطرق الكميّـة','fr_name' => 'الطرق الكميّـة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '55','sessions_id' => NULL,'ar_name' => 'الإعلامية في التصرّف','fr_name' => 'الإعلامية في التصرّف','created_at' => NULL,'updated_at' => NULL),
            array('id' => '56','sessions_id' => NULL,'ar_name' => 'العلوم الاقتصاديّـة','fr_name' => 'العلوم الاقتصاديّـة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '57','sessions_id' => NULL,'ar_name' => 'القانون الخاص وعلوم الإجرام','fr_name' => 'القانون الخاص وعلوم الإجرام','created_at' => NULL,'updated_at' => NULL),
            array('id' => '58','sessions_id' => NULL,'ar_name' => 'القانون العام','fr_name' => 'القانون العام','created_at' => NULL,'updated_at' => NULL),
            array('id' => '59','sessions_id' => NULL,'ar_name' => 'العلوم السياسية','fr_name' => 'العلوم السياسية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '60','sessions_id' => NULL,'ar_name' => 'التوثيق والمكتبات والأرشيف','fr_name' => 'التوثيق والمكتبات والأرشيف','created_at' => NULL,'updated_at' => NULL),
            array('id' => '61','sessions_id' => NULL,'ar_name' => 'الموسيقى والعلوم الموسيقية','fr_name' => 'الموسيقى والعلوم الموسيقية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '62','sessions_id' => NULL,'ar_name' => 'علوم الشغل','fr_name' => 'علوم الشغل','created_at' => NULL,'updated_at' => NULL),
            array('id' => '63','sessions_id' => NULL,'ar_name' => 'علوم الإخبار والإتصال','fr_name' => 'علوم الإخبار والإتصال','created_at' => NULL,'updated_at' => NULL),
            array('id' => '64','sessions_id' => NULL,'ar_name' => 'المالية والمحاسبة','fr_name' => 'المالية والمحاسبة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '65','sessions_id' => NULL,'ar_name' => 'إدارة الأعمال','fr_name' => 'إدارة الأعمال','created_at' => NULL,'updated_at' => NULL),
            array('id' => '66','sessions_id' => NULL,'ar_name' => 'التسويق','fr_name' => 'التسويق','created_at' => NULL,'updated_at' => NULL),
            array('id' => '67','sessions_id' => NULL,'ar_name' => 'علوم التغذية','fr_name' => 'علوم التغذية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '68','sessions_id' => NULL,'ar_name' => 'العلوم الصيدلية','fr_name' => 'العلوم الصيدلية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '69','sessions_id' => NULL,'ar_name' => 'البيوفيزياء','fr_name' => 'البيوفيزياء','created_at' => NULL,'updated_at' => NULL),
            array('id' => '70','sessions_id' => NULL,'ar_name' => 'العلوم البيولوجيّة الصيدلية','fr_name' => 'العلوم البيولوجيّة الصيدلية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '71','sessions_id' => NULL,'ar_name' => 'الهندسة المعمارية','fr_name' => 'الهندسة المعمارية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '72','sessions_id' => NULL,'ar_name' => 'الفنون التشكيلية','fr_name' => 'الفنون التشكيلية','created_at' => NULL,'updated_at' => NULL),
            array('id' => '73','sessions_id' => NULL,'ar_name' => 'التعميـر','fr_name' => 'التعميـر','created_at' => NULL,'updated_at' => NULL),
            array('id' => '74','sessions_id' => NULL,'ar_name' => 'المسرح وفنون العرض','fr_name' => 'المسرح وفنون العرض','created_at' => NULL,'updated_at' => NULL),
            array('id' => '75','sessions_id' => NULL,'ar_name' => 'تقنيات التنشيط والوساطة','fr_name' => 'تقنيات التنشيط والوساطة','created_at' => NULL,'updated_at' => NULL),
            array('id' => '76','sessions_id' => NULL,'ar_name' => 'التصميم','fr_name' => 'التصميم','created_at' => NULL,'updated_at' => NULL),
            array('id' => '77','sessions_id' => NULL,'ar_name' => 'نظريات الفن','fr_name' => 'نظريات الفن','created_at' => NULL,'updated_at' => NULL),
            array('id' => '78','sessions_id' => NULL,'ar_name' => 'العلوم البيولوجية المطبقة في ميدان الأنشطة ال','fr_name' => 'العلوم البيولوجية المطبقة في ميدان الأنشطة ال','created_at' => NULL,'updated_at' => NULL),
            array('id' => '79','sessions_id' => NULL,'ar_name' => 'العلوم الإنسانية المطبقة في ميدان الأنشطة الب','fr_name' => 'العلوم الإنسانية المطبقة في ميدان الأنشطة الب','created_at' => NULL,'updated_at' => NULL),
            array('id' => '80','sessions_id' => NULL,'ar_name' => 'تعليمية الأنشطة البدنية والرياضية','fr_name' => 'تعليمية الأنشطة البدنية والرياضية','created_at' => NULL,'updated_at' => NULL)
          );
        DB::table('disciplines')->insert($disciplines);
    }
}
