<?php

namespace Database\Seeders;

use App\Models\Subspecialties;
use Illuminate\Database\Seeder;

class SubspecialtiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /******************************* الهندسة **************************************/
        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الهندسة الطبية الحيوية';
        $subspecialties->name_he = 'הנדסה ביורפואית';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الهندسة الكيميائية';
        $subspecialties->name_he = 'הנדסה כימית';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الهندسة البيوتكنولوجية';
        $subspecialties->name_he = 'הנדסת ביוטכנולוגיה';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'هندسة البناء';
        $subspecialties->name_he = 'הנדסת בניין';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'هندسة المواد';
        $subspecialties->name_he = 'הנדסת חומרים';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الهندسة الكهربائية';
        $subspecialties->name_he = 'הנדסת חשמל';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'هندسة الحاسوب';
        $subspecialties->name_he = 'הנדסת מחשבים';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الهندسة الميكانيكية';
        $subspecialties->name_he = 'הנדסת מכונות';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'هندسة نظم البيانات';
        $subspecialties->name_he = 'הנדסת מערכות מידע';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'هندسة برامج';
        $subspecialties->name_he = 'הנדסת תוכנה';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'هندسة صناعة وإدارة';
        $subspecialties->name_he = 'הנדסת תעשיה וניהול';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'هندسة الاتصالات';
        $subspecialties->name_he = 'הנדסת תקשורת';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'اخر';
        $subspecialties->name_he = 'אחר';
        $subspecialties->mainspecialtie_id = 1;
        $subspecialties->user_id = null;
        $subspecialties->save();


        /********************************العلوم الصحية*************************************/

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'المختبر الطبي';
        $subspecialties->name_he = 'מעבדה רפואית';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'إدارة النظم الصحية';
        $subspecialties->name_he = 'ניהול מערכות בריאות';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'التمريض';
        $subspecialties->name_he = 'סיעוד';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'العلاج الطبيعي';
        $subspecialties->name_he = 'פיזיוטרפיה';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الصيدلة';
        $subspecialties->name_he = 'רוקחות';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الطب العام';
        $subspecialties->name_he = 'רפואה';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'طب الطوارئ';
        $subspecialties->name_he = 'רפואת חירום';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'العلاج الوظيفي';
        $subspecialties->name_he = 'ריפוי בעיסוק';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'اخر';
        $subspecialties->name_he = 'אחר';
        $subspecialties->mainspecialtie_id = 2;
        $subspecialties->user_id = null;
        $subspecialties->save();

        /********************************علم الاجتماع والإدارة*************************************/

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الجغرافيا';
        $subspecialties->name_he = 'גיאוגרפיה';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'التربية والتعليم';
        $subspecialties->name_he = 'חינוך';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'اقتصاد ومحاسبة';
        $subspecialties->name_he = 'כלכלה וחשבונאות';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'إدارة الأعمال الاقتصادية';
        $subspecialties->name_he = 'כלכלה מנהל עסקים';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'علوم السلوك';
        $subspecialties->name_he = 'מדעי ההתנהגות';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'علوم الإدراك';
        $subspecialties->name_he = 'מדעי הגוגניציה';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'علوم الإدراك والدماغ + اللغويات';
        $subspecialties->name_he = 'מדעי הגוגניציה והמוח + בלשנות';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'إدارة الفنادق والسياحة';
        $subspecialties->name_he = 'ניהול  מלונאות ותיירות';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'علم الاجتماع والأنثروبولوجيا';
        $subspecialties->name_he = 'סוציולוגיה ואנתרופולוגיה';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الإحصاء';
        $subspecialties->name_he = 'סטטיסטיקה';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الخدمة الاجتماعية';
        $subspecialties->name_he = 'עבודה סוציאלית';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'السياسة والحكومة';
        $subspecialties->name_he = 'פוליטיקה וממשל';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'علم النفس';
        $subspecialties->name_he = 'פסכולוגיה';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'علم الجريمة';
        $subspecialties->name_he = 'קרימינולוגיה';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'التخمينات والعقارات';
        $subspecialties->name_he = 'שמאות ומקרקעין';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الاتصال';
        $subspecialties->name_he = 'תקשורת';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();


        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'اخر';
        $subspecialties->name_he = 'אחר';
        $subspecialties->mainspecialtie_id = 3;
        $subspecialties->user_id = null;
        $subspecialties->save();

        /********************************العلوم *************************************/

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الجيولوجبا';
        $subspecialties->name_he = 'גיאולוגיה';
        $subspecialties->mainspecialtie_id = 4;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الكيمياء';
        $subspecialties->name_he = 'כימיה';
        $subspecialties->mainspecialtie_id = 4;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'علم الاحياء';
        $subspecialties->name_he = 'מדעי החיים';
        $subspecialties->mainspecialtie_id = 4;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'علم الحاسوب';
        $subspecialties->name_he = 'מדעי המחשב';
        $subspecialties->mainspecialtie_id = 4;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الرياضيات';
        $subspecialties->name_he = 'מתמטיקה';
        $subspecialties->mainspecialtie_id = 4;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'الفيزياء';
        $subspecialties->name_he = 'פיסיקה';
        $subspecialties->mainspecialtie_id = 4;
        $subspecialties->user_id = null;
        $subspecialties->save();

        $subspecialties = new Subspecialties();
        $subspecialties->name_ar = 'اخر';
        $subspecialties->name_he = 'אחר';
        $subspecialties->mainspecialtie_id = 4;
        $subspecialties->user_id = null;
        $subspecialties->save();

    }
}
