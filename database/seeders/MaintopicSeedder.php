<?php

namespace Database\Seeders;

use App\Models\Maintopic;
use Illuminate\Database\Seeder;

class MaintopicSeedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maintopic = new Maintopic();
        $maintopic->name_ar = 'GMAT';
        $maintopic->name_he = 'GMAT';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'هندسة معمارية';
        $maintopic->name_he = 'אדריכלות';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'الفنون التمثيلية';
        $maintopic->name_he = 'אומנויות הבמה';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'فنون';
        $maintopic->name_he = 'אומנות';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'مدنيات';
        $maintopic->name_he = 'אזרחות';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة الايطالية';
        $maintopic->name_he = 'איטלקית';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'ماكياج';
        $maintopic->name_he = 'איפור';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'الكترونيكا';
        $maintopic->name_he = 'אלקטרוניקה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة الإنجليزية';
        $maintopic->name_he = 'אנגלית';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'المعلوماتية الحيوية';
        $maintopic->name_he = 'ביואינפורמטיקה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'بيولوجيا';
        $maintopic->name_he = 'ביולוגיה';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'الطبخ';
        $maintopic->name_he = 'בישול';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'جغرافيا';
        $maintopic->name_he = 'גיאוגרפיה';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة الالمانية';
        $maintopic->name_he = 'גרמנית';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'تعليم مصحح';
        $maintopic->name_he = 'הוראה מתקנת';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'تاريخ';
        $maintopic->name_he = 'היסטוריה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'تحضير للصف الأول';
        $maintopic->name_he = 'הכנה לכיתה א';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'الهندسة الطبية الحيوية';
        $maintopic->name_he = 'הנדסה ביורפואית';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'الهندسة الكيميائية';
        $maintopic->name_he = 'הנדסה כימית';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'الهندسة البيوتكنولوجية';
        $maintopic->name_he = 'הנדסת ביוטכנולוגיה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'هندسة البناء';
        $maintopic->name_he = 'הנדסת בניין';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'هندسة المواد';
        $maintopic->name_he = 'הנדסת חומרים';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'هندسة الكهرباء';
        $maintopic->name_he = 'הנדסת חשמל';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'هندسة الميكانيكيات';
        $maintopic->name_he = 'הנדסת מכונות';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'هندسة الصناعية والإدارة';
        $maintopic->name_he = 'הנדסת תעשיה וניהול';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'هندسة الاتصالات';
        $maintopic->name_he = 'הנדסת תקשורת';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'التربية الخاصة';
        $maintopic->name_he = 'חינוך מיוחד';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'حسابات';
        $maintopic->name_he = 'חשבונאות';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة اليابانية';
        $maintopic->name_he = 'יפנית';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'صناعة';
        $maintopic->name_he = 'יצירה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'رياضة شخصية';
        $maintopic->name_he = 'ספורט אישי';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'كيمياء';
        $maintopic->name_he = 'כימיה';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اقتصاد';
        $maintopic->name_he = 'כלכלה';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'العلوم الصحية';
        $maintopic->name_he = 'מדעי הבריאות';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'علم وبرمجة الحاسوب';
        $maintopic->name_he = 'מדעי המחשב תכנות';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'ادارة اعمال';
        $maintopic->name_he = 'מנהל עסקים';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'حقوق';
        $maintopic->name_he = 'משפטים';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'رياضيات';
        $maintopic->name_he = 'מתמטיקה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'علم الاجتماع';
        $maintopic->name_he = 'סוציולוגיה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'الاحصاء';
        $maintopic->name_he = 'סטטיסטיקה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة الصينية';
        $maintopic->name_he = 'סינית';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة الاسبانية';
        $maintopic->name_he = 'ספרדית';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة العبرية';
        $maintopic->name_he = 'עברית';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'تصميم';
        $maintopic->name_he = 'עיצוב';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة العربية';
        $maintopic->name_he = 'ערבית';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'تحرير الفيديو';
        $maintopic->name_he = 'עריכת וידאו';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة البرتغالية';
        $maintopic->name_he = 'פורטוגזית';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'الفيزياء';
        $maintopic->name_he = 'פיסיקה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'علم النفس';
        $maintopic->name_he = 'פסיכולוגיה';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'بسيخومتري';
        $maintopic->name_he = 'פסיכומטרי';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = '';
        $maintopic->name_he = '';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'تصوير';
        $maintopic->name_he = 'צילום';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة الفرنسية';
        $maintopic->name_he = 'צרפתית';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اللغة الروسية';
        $maintopic->name_he = 'רוסית';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'سباحة';
        $maintopic->name_he = 'שחיה';
        $maintopic->user_id = null;
        $maintopic->save();

        $maintopic = new Maintopic();
        $maintopic->name_ar = 'لغات اخرى';
        $maintopic->name_he = 'שפות נוספות';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'براومج الاوفيس';
        $maintopic->name_he = 'תוכנות Office';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'اتصال';
        $maintopic->name_he = 'תקשורת';
        $maintopic->user_id = null;
        $maintopic->save();


        $maintopic = new Maintopic();
        $maintopic->name_ar = 'دين';
        $maintopic->name_he = 'דת';
        $maintopic->user_id = null;
        $maintopic->save();

    }
}
