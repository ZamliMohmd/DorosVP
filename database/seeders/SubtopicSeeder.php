<?php

namespace Database\Seeders;

use App\Models\Subtopic;
use Illuminate\Database\Seeder;

class SubtopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*********************************  GMAT  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'كمي';
        $subtopic->name_he = 'כמותי';
        $subtopic->maintopic_id = 1;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'كلامي';
        $subtopic->name_he = 'מילולי';
        $subtopic->maintopic_id = 1;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'انشاء';
        $subtopic->name_he = 'חיבור';
        $subtopic->maintopic_id = 1;
        $subtopic->user_id = null;
        $subtopic->save();


        /*********************************  هندسة معمارية  **************************************/

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 2;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'REVIT';
        $subtopic->name_he = 'רוויט REVIT';
        $subtopic->maintopic_id = 2;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'TURBOCAD';
        $subtopic->name_he = 'טורבוקאד TURBOCAD';
        $subtopic->maintopic_id = 2;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ARCHICAD';
        $subtopic->name_he = 'ארכיקאד ARCHICAD';
        $subtopic->maintopic_id = 2;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'WINDOOR';
        $subtopic->name_he = 'ווינדור WINDOOR';
        $subtopic->maintopic_id = 2;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الهندسة النظرية';
        $subtopic->name_he = 'הנדסה תיאורית';
        $subtopic->maintopic_id = 2;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التواصل الجرافيكي';
        $subtopic->name_he = 'תקשורת גרפית';
        $subtopic->maintopic_id = 2;
        $subtopic->user_id = null;
        $subtopic->save();


        /*********************************  الفنون التمثيلية  **************************************/

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مسرح';
        $subtopic->name_he = 'תאטרון';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اخراج';
        $subtopic->name_he = 'בימוי';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'سينما';
        $subtopic->name_he = 'קולנוע';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'انتاج';
        $subtopic->name_he = 'הפקה';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الدبلجة';
        $subtopic->name_he = 'דיבוב';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'السرد';
        $subtopic->name_he = 'קריינות';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'سيناريوهات';
        $subtopic->name_he = 'תסריטאות';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ارتجال';
        $subtopic->name_he = 'אימפרוביזציה';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التحضير للاختبارات';
        $subtopic->name_he = 'הכנה לאודישנים';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مختلفة';
        $subtopic->name_he = 'שונות';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تمثيل';
        $subtopic->name_he = 'משחק';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'دراما';
        $subtopic->name_he = 'דרמה';
        $subtopic->maintopic_id = 3;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  الفنون  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابتدائي';
        $subtopic->name_he = 'יסודי ';
        $subtopic->maintopic_id = 4;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = ' اعدادي';
        $subtopic->name_he = ' חטיבת ביניים';
        $subtopic->maintopic_id = 4;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اثراء ';
        $subtopic->name_he = 'העשרה ';
        $subtopic->maintopic_id = 4;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي ';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 4;
        $subtopic->user_id = null;
        $subtopic->save();

        /*********************************  مدنيات  **************************************/

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي ';
        $subtopic->name_he = 'חטיבת ביניים ';
        $subtopic->maintopic_id = 5;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = ' תיכון';
        $subtopic->maintopic_id = 5;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية ';
        $subtopic->name_he = 'אקדמיה ';
        $subtopic->maintopic_id = 5;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة الايطالية  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمبتدئين ';
        $subtopic->name_he = ' מתחילים';
        $subtopic->maintopic_id = 6;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمتقدمين';
        $subtopic->name_he = 'מתקדמים ';
        $subtopic->maintopic_id = 6;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  ماكياج  **************************************/

        $subtopic = new Subtopic();
        $subtopic->name_ar = ' أساسي';
        $subtopic->name_he = 'בסיסי ';
        $subtopic->maintopic_id = 7;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = ' محترفين';
        $subtopic->name_he = ' מקצועי';
        $subtopic->maintopic_id = 7;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'أمسيات والمناسبات ';
        $subtopic->name_he = 'ערב ואירועים ';
        $subtopic->maintopic_id = 7;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = ' عرائس';
        $subtopic->name_he = 'כלות ';
        $subtopic->maintopic_id = 7;
        $subtopic->user_id = null;
        $subtopic->save();

        /*********************************  الكترونيكا **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 8;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 8;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 8;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اثراء';
        $subtopic->name_he = 'העשרה';
        $subtopic->maintopic_id = 8;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'هندسة';
        $subtopic->name_he = 'הנדסאים';
        $subtopic->maintopic_id = 8;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة الإنجليزية  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اثراء';
        $subtopic->name_he = 'העשרה';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابتدائي';
        $subtopic->name_he = 'יסודי';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اقتصاد واعمال';
        $subtopic->name_he = 'עסקית';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '4 وحدات - ثانوي';
        $subtopic->name_he = '4 יח"ל - תיכון';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'انجليزي "امير"';
        $subtopic->name_he = 'מבחן אמיר';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'TOEFL';
        $subtopic->name_he = 'TOEFL';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'GRE';
        $subtopic->name_he = 'GRE';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'IELTS';
        $subtopic->name_he = 'IELTS';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'محادثة';
        $subtopic->name_he = 'מדוברת';
        $subtopic->maintopic_id = 9;
        $subtopic->user_id = null;
        $subtopic->save();
        /********************************* المعلوماتية الحيوية  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 10;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 10;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  بيولوجيا  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اساسيات الوراثة';
        $subtopic->name_he = 'יסודות הגנטיקה';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'حامي البروتين';
        $subtopic->name_he = 'מגן לחלבון';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'بيوكيمياء A';
        $subtopic->name_he = 'ביוכימיה א';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'بيوكيمياء B';
        $subtopic->name_he = 'ביוכימיה ב';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'هندسة وراثية';
        $subtopic->name_he = 'הנדסה גנטית';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الخلية';
        $subtopic->name_he = 'התא';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الجزيئية';
        $subtopic->name_he = 'מולקולרית';
        $subtopic->maintopic_id = 11;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  الطبخ **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اساسيات';
        $subtopic->name_he = 'יסודות';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكلات شعبية';
        $subtopic->name_he = 'מטבחי עמים';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'كوندوتوريا/حلويات';
        $subtopic->name_he = 'קונדיטוריה';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ماكولات/وصفات بيتية';
        $subtopic->name_he = 'ביתי';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'وصفات صحيّة';
        $subtopic->name_he = 'בריאות';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مخبوزات';
        $subtopic->name_he = 'אפייה ובצקים';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'سمك';
        $subtopic->name_he = 'דגים';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مأكولات بحرية';
        $subtopic->name_he = 'פירות ים';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'دواجن ولحوم';
        $subtopic->name_he = 'עופות ובשר';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التحلية';
        $subtopic->name_he = 'קינוחים ומנות אחרונות';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اخر';
        $subtopic->name_he = 'שונות';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مهارات التقطيع';
        $subtopic->name_he = 'מיומנויות חיתוך';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'النباتي';
        $subtopic->name_he = 'צמחוני';
        $subtopic->maintopic_id = 12;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  جغرافيا  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 13;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 13;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابتدائي';
        $subtopic->name_he = 'יסודי';
        $subtopic->maintopic_id = 13;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 13;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 13;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة الالمانية  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمبتدئين';
        $subtopic->name_he = 'מתחילים';
        $subtopic->maintopic_id = 14;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمتقدمين';
        $subtopic->name_he = 'מתקדמים';
        $subtopic->maintopic_id = 14;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  تعليم مصحح **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قراءة';
        $subtopic->name_he = 'קריאה';
        $subtopic->maintopic_id = 15;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'كتابة';
        $subtopic->name_he = 'כתיבה';
        $subtopic->maintopic_id = 15;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'حساب';
        $subtopic->name_he = 'חשבון';
        $subtopic->maintopic_id = 15;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'إمكانيات عامة';
        $subtopic->name_he = 'יכולת כללית';
        $subtopic->maintopic_id = 15;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  تاريخ **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابتدائي';
        $subtopic->name_he = 'יסודי';
        $subtopic->maintopic_id = 16;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 16;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 16;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 16;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  تحضير للصف الأول  **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'حساب';
        $subtopic->name_he = 'חשבון';
        $subtopic->maintopic_id = 17;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قراءة وكتابة';
        $subtopic->name_he = 'קריאה וכתיבה';
        $subtopic->maintopic_id = 17;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  الهندسة الطبية الحيوية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قوة المواد';
        $subtopic->name_he = 'חוזק חומרים';
        $subtopic->maintopic_id = 18;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'في المواد الحيوية';
        $subtopic->name_he = 'ביוחומרים';
        $subtopic->maintopic_id = 18;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  الهندسة الكيميائية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة';
        $subtopic->name_he = 'מבוא';
        $subtopic->maintopic_id = 19;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اسس';
        $subtopic->name_he = 'עקרונות';
        $subtopic->maintopic_id = 19;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'توازن المواد والطاقة';
        $subtopic->name_he = 'מאזני חומר ואנרגיה';
        $subtopic->maintopic_id = 19;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'عمليات الفصل';
        $subtopic->name_he = 'תהליכי הפרדה';
        $subtopic->maintopic_id = 19;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  الهندسة البيوتكنولوجية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 20;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 20;
        $subtopic->user_id = null;
        $subtopic->save();

        /*********************************  هندسة البناء **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ميكانيكا البناء';
        $subtopic->name_he = 'מכניקת מבנים';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثوابت المباني 1';
        $subtopic->name_he = 'סטטיקת מבנים 1';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مبنى باطون';
        $subtopic->name_he = 'מבנה בטון';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مبنى حديد';
        $subtopic->name_he = 'מבנה פלדה';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'إدارة الإنشاءات';
        $subtopic->name_he = 'ניהול הבנייה';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'هندسة الأرض';
        $subtopic->name_he = 'הנדסת קרקע';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تصميم المباني';
        $subtopic->name_he = 'תכן מבנים';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ديناميات المباني';
        $subtopic->name_he = 'דינמיקת מבנים';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية القوة';
        $subtopic->name_he = 'תורת החוזק';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثوابت المباني 2';
        $subtopic->name_he = 'סטטיקת מבנים 2';
        $subtopic->maintopic_id = 21;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  هندسة المواد **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية المواد 1';
        $subtopic->name_he = 'תורת החומרים 1';
        $subtopic->maintopic_id = 22;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية المواد 2';
        $subtopic->name_he = 'תורת החומרים 2';
        $subtopic->maintopic_id = 22;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مناهج 1';
        $subtopic->name_he = 'תהליכים';
        $subtopic->maintopic_id = 22;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مناهج 2';
        $subtopic->name_he = 'תהליכים 2';
        $subtopic->maintopic_id = 22;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الخواص الميكانيكية للمواد';
        $subtopic->name_he = 'תכונות מכניות של חומרים';
        $subtopic->maintopic_id = 22;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نقل الحرارة والمواد';
        $subtopic->name_he = 'מעבר חום וחומר';
        $subtopic->maintopic_id = 22;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'توصيف المواد';
        $subtopic->name_he = 'אפיון חומרים';
        $subtopic->maintopic_id = 22;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  هندسة الكهرباء **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة';
        $subtopic->name_he = 'מבוא';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'أنظمة ديجاتلية';
        $subtopic->name_he = 'מערכות ספרתיות';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في الدوائر الانالوجية';
        $subtopic->name_he = 'מבוא למעגלים אנלוגיים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الدوائر الانالوجية';
        $subtopic->name_he = 'מעגלים אנלוגיים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'محولات DC';
        $subtopic->name_he = 'ממירי DC';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الأنظمة الخطية';
        $subtopic->name_he = 'מערכות לינאריות';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'معالجة الإشارات';
        $subtopic->name_he = 'עיבוד אותות';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'موجات';
        $subtopic->name_he = 'גלים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'حقول كهرومغناطيسية';
        $subtopic->name_he = 'שדות אלקטרומגנטיים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في العمليات العشوائية';
        $subtopic->name_he = 'מבוא לתהליכים אקראיים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تحويل الطاقة';
        $subtopic->name_he = 'המרת אנרגיה';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في الحاسوب';
        $subtopic->name_he = 'מבוא למחשבים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في أشباه الموصلات';
        $subtopic->name_he = 'מבוא להתקני מוליכים למחצה';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ميكرو الحاسوب';
        $subtopic->name_he = 'מיקרו מחשבים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في البصريات الكهربائية';
        $subtopic->name_he = 'מבוא לאלקטרואופטיקה';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'دوائر VLSI المتكاملة';
        $subtopic->name_he = 'מעגלי VLSI משולבים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في التحكم';
        $subtopic->name_he = 'מבוא לבקרה';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'المعالجة المتوازية';
        $subtopic->name_he = 'עיבוד מקבילי';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مبنى الحاسوب الرقمي';
        $subtopic->name_he = 'מבנה מחשבים ספרתיים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الدوائر الإلكترونية الرقمية';
        $subtopic->name_he = 'מעגלים אלקטרוניים ספרתיים';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية المصفوفة';
        $subtopic->name_he = 'תורת המטריצות';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التصميم المنطقي';
        $subtopic->name_he = 'תכן לוגי';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الاتصال البصري';
        $subtopic->name_he = 'תקשורת אופטית';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اتصال رقمي';
        $subtopic->name_he = 'תקשורת ספרתית';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية الكهرباء';
        $subtopic->name_he = 'תורת החשמל';
        $subtopic->maintopic_id = 23;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  هندسة الميكانيكيات **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الرسومات الهندسية';
        $subtopic->name_he = 'גרפיקה הנדסית';
        $subtopic->maintopic_id = 24;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ديناميات';
        $subtopic->name_he = 'דינמיקה';
        $subtopic->maintopic_id = 24;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'احصائيات';
        $subtopic->name_he = 'סטטיקה';
        $subtopic->maintopic_id = 24;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الأجهزة والقياسات';
        $subtopic->name_he = 'מכשור ומדידות';
        $subtopic->maintopic_id = 24;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  هندسة الصناعية والإدارة **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تخطيط, تطوير وإنتاج';
        $subtopic->name_he = 'תפ"י';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'NMI';
        $subtopic->name_he = 'נמ"י';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'محاكاة';
        $subtopic->name_he = 'סימולציה';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تحليل الأداء';
        $subtopic->name_he = 'חקר ביצועים';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'هندسة الجودة';
        $subtopic->name_he = 'הנדסת איכות';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تقدير واختبارات الفرضيات';
        $subtopic->name_he = 'אמידה ומבחני השערות';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'عمل بحثي';
        $subtopic->name_he = 'חקר עבודה';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التشغيل الآلي';
        $subtopic->name_he = 'אוטומציה';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الانحدارالخطي';
        $subtopic->name_he = 'רגרסיה לינארית';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'arena';
        $subtopic->name_he = 'arena';
        $subtopic->maintopic_id = 25;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  هندسة الاتصالات **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'شبكات الاتصالات';
        $subtopic->name_he = 'רשתות תקשורת';
        $subtopic->maintopic_id = 26;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'شبكات الاتصالات 2';
        $subtopic->name_he = 'רשתות תקשורת 2';
        $subtopic->maintopic_id = 26;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اتصال رقمي';
        $subtopic->name_he = 'תקשורת ספרתית';
        $subtopic->maintopic_id = 26;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تصميم الشبكات';
        $subtopic->name_he = 'תכן רשתות';
        $subtopic->maintopic_id = 26;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اتصال WIFI';
        $subtopic->name_he = 'תקשורת אלחוטית';
        $subtopic->maintopic_id = 26;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'دوائر الاتصال';
        $subtopic->name_he = 'מעגלי תקשורת';
        $subtopic->maintopic_id = 26;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظم الاتصالات';
        $subtopic->name_he = 'מערכות תקשורת';
        $subtopic->maintopic_id = 26;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  التربية الخاصة **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'روضات';
        $subtopic->name_he = 'גנים';
        $subtopic->maintopic_id = 27;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابتدائي';
        $subtopic->name_he = 'יסודי';
        $subtopic->maintopic_id = 27;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 27;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 27;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  حسابات **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مشاكل القياس أ';
        $subtopic->name_he = 'בעיות מדידה א';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مشاكل القياس ب';
        $subtopic->name_he = 'בעיות מדידה ב';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'أساسيات المحاسبة أ';
        $subtopic->name_he = 'יסודות החשבונאות א';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'أساسيات المحاسبة ب';
        $subtopic->name_he = 'יסודות החשבונאות ב';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الميزانيات الموحدة';
        $subtopic->name_he = 'מאזנים מאוחדים';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'المحاسبة الإدارية';
        $subtopic->name_he = 'חשבונאות ניהולית';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'المحاسبة المالية';
        $subtopic->name_he = 'חשבונאות פיננסית';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'امتحانات المجلس';
        $subtopic->name_he = 'בחינות מועצה';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الضرائب';
        $subtopic->name_he = 'מיסים';
        $subtopic->maintopic_id = 28;
        $subtopic->user_id = null;
        $subtopic->save();

        /*********************************  اللغة اليابانية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمبتدئين';
        $subtopic->name_he = 'מתחילים';
        $subtopic->maintopic_id = 29;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمتقدمين';
        $subtopic->name_he = 'מתקדמים';
        $subtopic->maintopic_id = 29;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  صناعة **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نجارة';
        $subtopic->name_he = 'נגרות';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نحت';
        $subtopic->name_he = 'פיסול';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'سيراميك وفخار';
        $subtopic->name_he = 'קרמיקה וקדרות';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تنسيق الزهور';
        $subtopic->name_he = 'שזירת פרחים';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'خياطه';
        $subtopic->name_he = 'תפירה';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'حياكة';
        $subtopic->name_he = 'סריגה';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قالب ورقي';
        $subtopic->name_he = 'עיסת נייר';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'صناعة المجوهرات';
        $subtopic->name_he = 'צורפות';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تصميم المجوهرات';
        $subtopic->name_he = 'תכשיטנות';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'زجاج';
        $subtopic->name_he = 'זכוכית';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'فن قص وتشكيل الورق';
        $subtopic->name_he = 'קיפולי נייר';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'فن تصميم الزجاج';
        $subtopic->name_he = 'פסיפס';
        $subtopic->maintopic_id = 30;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  رياضة شخصية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تدريب للرجال';
        $subtopic->name_he = 'אימון גברים';
        $subtopic->maintopic_id = 31;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تدريب للنساء';
        $subtopic->name_he = 'אימון נשים';
        $subtopic->maintopic_id = 31;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تدريب للاولاد';
        $subtopic->name_he = 'אימון ילדים';
        $subtopic->maintopic_id = 31;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تدريب للمحترفين';
        $subtopic->name_he = 'אימון ספורטאים';
        $subtopic->maintopic_id = 31;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'TRX تدريب';
        $subtopic->name_he = 'TRX אימון ';
        $subtopic->maintopic_id = 31;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تدريب نساء بعد الولادة';
        $subtopic->name_he = 'אימון נשים לאחר לידה';
        $subtopic->maintopic_id = 31;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'CrossFit تدريب';
        $subtopic->name_he = 'CrossFit אימון';
        $subtopic->maintopic_id = 31;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  كيمياء **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة';
        $subtopic->name_he = 'מבוא';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'العضوية 1';
        $subtopic->name_he = 'אורגנית 1';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'العضوية 2';
        $subtopic->name_he = 'אורגנית 2';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التحليلية';
        $subtopic->name_he = 'אנליטית';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الفيزيائية 1';
        $subtopic->name_he = 'פיסיקלית 1';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الفيزيائية 2';
        $subtopic->name_he = 'פיסיקלית 2';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الكم';
        $subtopic->name_he = 'קוונטית';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الكم 2';
        $subtopic->name_he = 'קוונטית 2';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اللاعضوية';
        $subtopic->name_he = 'כימיה אי אורגנית';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الرباط الكيميائي';
        $subtopic->name_he = 'קשר כימי';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'المراحل المكثفة';
        $subtopic->name_he = 'פאזות מעובות';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'العامة';
        $subtopic->name_he = 'כללית';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تحضيرية';
        $subtopic->name_he = 'מכינה';
        $subtopic->maintopic_id = 32;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اقتصاد **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון ';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון ';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ماكرو';
        $subtopic->name_he = 'מאקרו';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ميكرو';
        $subtopic->name_he = 'מיקרו';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية التسعير';
        $subtopic->name_he = 'תורת המחירים';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تمويل';
        $subtopic->name_he = 'מימון';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الاقتصاد القياسي';
        $subtopic->name_he = 'אקונומטריקה';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية التسعير ب';
        $subtopic->name_he = 'תורת המחירים ב';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية التسعير ج';
        $subtopic->name_he = 'תורת המחירים ג';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'سوق المال';
        $subtopic->name_he = 'שוק ההון';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية الاستثمار';
        $subtopic->name_he = 'תורת ההשקעות';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'رياضيات لطلاب الاقتصاد';
        $subtopic->name_he = 'מתמטיקה לכלכלנים';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في الاقتصاد أ';
        $subtopic->name_he = 'מבוא לכלכלה א';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في الاقتصاد ب';
        $subtopic->name_he = 'מבוא לכלכלה ב';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'إحصاء لطلاب الاقتصاد';
        $subtopic->name_he = 'סטטיסטיקה לכלכלנים';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'أساسيات';
        $subtopic->name_he = 'יסודות';
        $subtopic->maintopic_id = 33;
        $subtopic->user_id = null;
        $subtopic->save();

        /********************************* العلوم الصحية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'علم المناعة';
        $subtopic->name_he = 'אימונולוגיה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تشريح';
        $subtopic->name_he = 'אנטומיה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'علم الأوبئة';
        $subtopic->name_he = 'אפידמיולוגיה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الصحة العامة';
        $subtopic->name_he = 'בריאות הציבור';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'علم الأنسجة';
        $subtopic->name_he = 'היסטולוגיה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اقتصاديات الصحة';
        $subtopic->name_he = 'כלכלת בריאות';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'علم الاحياء المجهري';
        $subtopic->name_he = 'מיקרוביולוגיה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اسعاف اولي';
        $subtopic->name_he = 'עזרה ראשונה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'علم وظائف الأعضاء';
        $subtopic->name_he = 'פיזיולוגיה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'علم العقاقير';
        $subtopic->name_he = 'פרמקולוגיה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'علم الأمراض';
        $subtopic->name_he = 'פתולוגיה';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'وسائل البحث';
        $subtopic->name_he = 'שיטות מחקר';
        $subtopic->maintopic_id = 34;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  علم وبرمجة الحاسوب **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'CPP';
        $subtopic->name_he = 'CPP';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'C';
        $subtopic->name_he = 'C';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Java';
        $subtopic->name_he = 'Java';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Dot.Net';
        $subtopic->name_he = 'Dot.Net';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'C Sharp';
        $subtopic->name_he = 'C Sharp';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Assembler';
        $subtopic->name_he = 'Assembler';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Flash';
        $subtopic->name_he = 'Flash';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Java Script';
        $subtopic->name_he = 'Java Script';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Pascal';
        $subtopic->name_he = 'Pascal';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'SQL';
        $subtopic->name_he = 'SQL';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Objective C';
        $subtopic->name_he = 'Objective C';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'PHP';
        $subtopic->name_he = 'PHP';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'HTML';
        $subtopic->name_he = 'HTML';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Css';
        $subtopic->name_he = 'Css';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قواعد بيانات';
        $subtopic->name_he = 'בסיסי נתונים';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تطوير مواقع';
        $subtopic->name_he = 'בניית אתרים';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Python';
        $subtopic->name_he = 'Python';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الخوارزميات';
        $subtopic->name_he = 'אלגוריתמים';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية الأوتوماتا';
        $subtopic->name_he = 'אוטומטים';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'هياكل البيانات';
        $subtopic->name_he = 'מבני נתונים';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'أنظمة التشغيل';
        $subtopic->name_he = 'מערכות הפעלה';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التحويل البرمجي';
        $subtopic->name_he = 'קומפילציה';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'VB';
        $subtopic->name_he = 'VB';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تطبيقات ايفون';
        $subtopic->name_he = 'אפליקציות אייפון';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تطبيقات الأندرويد';
        $subtopic->name_he = 'אפליקציות אנדרואיד';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في التحليل العددي';
        $subtopic->name_he = 'מבוא לאנליזה נומרית';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Scheme';
        $subtopic->name_he = 'Scheme';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Rubi';
        $subtopic->name_he = 'Rubi';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في علم الحاسوب';
        $subtopic->name_he = 'מבוא למדעי המחשב';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'SEO تسويق';
        $subtopic->name_he = 'קידום אתרים SEO';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تطبيقات فيسبوك';
        $subtopic->name_he = 'אפליקציות פייסבוק';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الحوسبة';
        $subtopic->name_he = 'חישוביות';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'برمجة 3 وحدات';
        $subtopic->name_he = 'תכנות הכנה לבגרות 3 יח"ל';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'برمجة 5 وحدات';
        $subtopic->name_he = 'תכנות הכנה לבגרות 5 יח"ל';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'برمجة ابتدائي';
        $subtopic->name_he = 'תכנות יסודי';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'برمجة اعدادي';
        $subtopic->name_he = 'תכנות חטיבת ביניים';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اسس لغات البرمجة';
        $subtopic->name_he = 'עקרונות שפות תכנות';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'البرمجة الشيئية';
        $subtopic->name_he = 'תכנות מונחה עצמים';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'فوتوشوب';
        $subtopic->name_he = 'פוטושופ';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'امن/حماية البيانات';
        $subtopic->name_he = 'אבטחת מידע';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ادارة الشبكة';
        $subtopic->name_he = 'ניהול רשת';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اخر';
        $subtopic->name_he = 'מחשבים אחר';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تصميم جرافيكا';
        $subtopic->name_he = 'עיצוב גרפי';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'معرفة الحاسوب';
        $subtopic->name_he = 'הכרת המחשב';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الرسام';
        $subtopic->name_he = 'שרטוט';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الهندسة المعمارية';
        $subtopic->name_he = 'ארכיטקטורה';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'انترنت';
        $subtopic->name_he = 'אינטרנט';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'محاكاة';
        $subtopic->name_he = 'סימולטורים';
        $subtopic->maintopic_id = 35;
        $subtopic->user_id = null;
        $subtopic->save();

        /********************************* ادارة اعمال **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 36;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ادارة مالية';
        $subtopic->name_he = 'ניהול המימון';
        $subtopic->maintopic_id = 36;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ادارة التسويق';
        $subtopic->name_he = 'ניהול השיווק';
        $subtopic->maintopic_id = 36;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ادارة الانتاج';
        $subtopic->name_he = 'ניהול הייצור';
        $subtopic->maintopic_id = 36;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ادارة نظم المعلومات';
        $subtopic->name_he = 'ניהול מערכות מידע';
        $subtopic->maintopic_id = 36;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ادارة الاداء';
        $subtopic->name_he = 'חקר ביצועים';
        $subtopic->maintopic_id = 36;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ادارة الموارد البشرية';
        $subtopic->name_he = 'משאבי אנוש';
        $subtopic->maintopic_id = 36;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ادارة الاستراتيجيات المنافسة';
        $subtopic->name_he = 'אסטרטגיה עסקית תחרותית';
        $subtopic->maintopic_id = 36;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  حقوق **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'امتحانات نقابة المحامين';
        $subtopic->name_he = 'בחינות לשכה';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة في القانون';
        $subtopic->name_he = 'מבוא למשפט';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون العقود';
        $subtopic->name_he = 'דיני חוזים';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون جنائي';
        $subtopic->name_he = 'דיני עונשין';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون الأسرة';
        $subtopic->name_he = 'דיני משפחה';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون العمل';
        $subtopic->name_he = 'דיני עבודה';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون الشركات';
        $subtopic->name_he = 'דיני תאגידים';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون الاثبات';
        $subtopic->name_he = 'דיני ראיות';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون الاضرار';
        $subtopic->name_he = 'דיני נזיקין';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون الضريبة';
        $subtopic->name_he = 'דיני מיסים';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'قانون الملكية';
        $subtopic->name_he = 'דיני קניין';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الإجراءات الجنائية';
        $subtopic->name_he = 'סדר דין פלילי';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الإجراءات المدنية';
        $subtopic->name_he = 'סדר דין אזרחי';
        $subtopic->maintopic_id = 37;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  رياضيات **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابتدائي (حساب)';
        $subtopic->name_he = 'יסודי (חשבון)';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تحضيرية';
        $subtopic->name_he = 'מכינה';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '4 وحدات - ثانوي';
        $subtopic->name_he = '4 יח"ל - תיכון';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'حساب التفاضل والتكامل ״حدفا״';
        $subtopic->name_he = 'חדו"א';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الجبر الخطي';
        $subtopic->name_he = 'אלגברה לינארית';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'احتمال';
        $subtopic->name_he = 'הסתברות';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'المتقطعة';
        $subtopic->name_he = 'בדידה';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'منطق';
        $subtopic->name_he = 'לוגיקה';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'دوال مركبة';
        $subtopic->name_he = 'פונקציות מרוכבות';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مباني جبرية';
        $subtopic->name_he = 'מבנים אלגבריים';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الجبر 2';
        $subtopic->name_he = 'אלגברה 2';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'حساب التفاضل والتكامل ״حدفا״ 2';
        $subtopic->name_he = 'חדו"א 2';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'حساب التفاضل والتكامل ״حدفا״ 3';
        $subtopic->name_he = 'חדו"א 3';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التحليلية';
        $subtopic->name_he = 'אנליזה';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التوافقية';
        $subtopic->name_he = 'קומבינטוריקה';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية قراءة الرسوم البيانية';
        $subtopic->name_he = 'תורת הגרפים';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التحليلية المتقدمة';
        $subtopic->name_he = 'אנליזה מתקדמת';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الاعمدة والتحولات';
        $subtopic->name_he = 'טורים והתמרות';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'رياضيات لطلاب الاقتصاد';
        $subtopic->name_he = 'מתמטיקה לכלכלנים';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'طوبولوجيا';
        $subtopic->name_he = 'טופולוגיה';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اينفي 1';
        $subtopic->name_he = 'אינפי 1';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اينفي 2';
        $subtopic->name_he = 'אינפי 2';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التفاضل والتكامل';
        $subtopic->name_he = 'קלקולוס';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'المعادلات التفاضلية';
        $subtopic->name_he = 'משוואות דיפרנציאליות';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'نظرية المجموعات';
        $subtopic->name_he = 'תורת הקבוצות';
        $subtopic->maintopic_id = 38;
        $subtopic->user_id = null;
        $subtopic->save();

        /*********************************  علم الاجتماع **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 39;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 39;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 39;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  الاحصاء **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ثانوي';
        $subtopic->name_he = 'תיכון';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الاحصاء أ';
        $subtopic->name_he = 'סטטיסטיקה א';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الاحصاء ب';
        $subtopic->name_he = 'סטטיסטיקה ב';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'spss';
        $subtopic->name_he = 'spss';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الاستنتاج الاحصائي';
        $subtopic->name_he = 'הסקה סטטיסטית';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'احصائيات الانحدار الخطي';
        $subtopic->name_he = 'סטטיסטיקה רגרסיה לינארית';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'مقدمة';
        $subtopic->name_he = 'מבוא';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اساليب البحث';
        $subtopic->name_he = 'שיטות מחקר';
        $subtopic->maintopic_id = 40;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة الصينية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمبتدئين';
        $subtopic->name_he = 'מתחילים';
        $subtopic->maintopic_id = 41;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمتقدمين';
        $subtopic->name_he = 'מתקדמים';
        $subtopic->maintopic_id = 41;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة الاسبانية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمبتدئين';
        $subtopic->name_he = 'מתחילים';
        $subtopic->maintopic_id = 42;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمتقدمين';
        $subtopic->name_he = 'מתקדמים';
        $subtopic->maintopic_id = 42;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة العبرية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابتدائي';
        $subtopic->name_he = 'יסודי';
        $subtopic->maintopic_id = 43;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 43;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اثراء';
        $subtopic->name_he = 'העשרה';
        $subtopic->maintopic_id = 43;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'محادثة';
        $subtopic->name_he = 'מדוברת';
        $subtopic->maintopic_id = 43;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 43;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '4 وحدات - ثانوي';
        $subtopic->name_he = '4 יח"ל - תיכון';
        $subtopic->maintopic_id = 43;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 43;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  تصميم **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'فوتوشوب';
        $subtopic->name_he = 'פוטושופ';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'جرافيكا';
        $subtopic->name_he = 'עיצוב גרפי';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التصميم الخارجي';
        $subtopic->name_he = 'עיצוב פנים';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'التصميم الصناعي';
        $subtopic->name_he = 'עיצוב תעשייתי';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تصميم برامج الرسم';
        $subtopic->name_he = 'עיצוב תוכנות שרטוט';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'سوليدروكس';
        $subtopic->name_he = 'סולידוורקס';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اوتوكاد';
        $subtopic->name_he = 'אוטוקאד';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اليستريتور';
        $subtopic->name_he = 'אילוסטרייטור';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'انديزاين';
        $subtopic->name_he = 'אינדיזיין';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'فلاش';
        $subtopic->name_he = 'פלאש';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'سكتش اب';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تصميم الازياء';
        $subtopic->name_he = 'עיצוב אופנה';
        $subtopic->maintopic_id = 44;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة العربية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابتدائي';
        $subtopic->name_he = 'יסודי';
        $subtopic->maintopic_id = 45;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 45;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 45;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 45;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 45;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اثراء';
        $subtopic->name_he = 'העשרה';
        $subtopic->maintopic_id = 45;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'محادثة';
        $subtopic->name_he = 'מדוברת';
        $subtopic->maintopic_id = 45;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  تحرير الفيديو **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Illustrator';
        $subtopic->name_he = 'Illustrator';
        $subtopic->maintopic_id = 46;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Avid';
        $subtopic->name_he = 'Avid';
        $subtopic->maintopic_id = 46;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Premiere';
        $subtopic->name_he = 'Premiere';
        $subtopic->maintopic_id = 46;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Edius';
        $subtopic->name_he = 'Edius';
        $subtopic->maintopic_id = 46;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'Final Cut Pro';
        $subtopic->name_he = 'Final Cut Pro';
        $subtopic->maintopic_id = 46;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'After Effects';
        $subtopic->name_he = 'After Effects';
        $subtopic->maintopic_id = 46;
        $subtopic->user_id = null;
        $subtopic->save();

        /*********************************  اللغة البرتغالية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمبتدئين';
        $subtopic->name_he = 'מתחילים';
        $subtopic->maintopic_id = 47;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'للمتقدمين';
        $subtopic->name_he = 'מתקדמים';
        $subtopic->maintopic_id = 47;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  الفيزياء**************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اعدادي';
        $subtopic->name_he = 'חטיבת ביניים';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '4 وحدات - ثانوي';
        $subtopic->name_he = '4 יח"ל - תיכון';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'تحضيرية';
        $subtopic->name_he = 'מכינה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'فيزياء 1';
        $subtopic->name_he = 'פיסיקה 1';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'فيزياء 2';
        $subtopic->name_he = 'פיסיקה 2';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'فيزياء 3';
        $subtopic->name_he = 'פיסיקה 3';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الثقيلة';
        $subtopic->name_he = 'כבידה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الفلك';
        $subtopic->name_he = 'אסטרונומיה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الفيزياء الفلكية';
        $subtopic->name_he = 'אסטרו פיסיקה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ابحاث الفضاء';
        $subtopic->name_he = 'חקר החלל';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ميكانيكا الكم';
        $subtopic->name_he = 'מכניקה קוואנטית';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اساليب رياضية في الفيزياء';
        $subtopic->name_he = 'שיטות מתמטיות בפיזיקה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'البصريات الكهربائية';
        $subtopic->name_he = 'אלקטרואופטיקה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الكلاسيكية';
        $subtopic->name_he = 'קלאסית';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الديناميكا الحرارية';
        $subtopic->name_he = 'תרמודינמיקה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الميكانيكا التحليلية';
        $subtopic->name_he = 'מכניקה אנליטית';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الديناميكا الكهربائية';
        $subtopic->name_he = 'אלקטרודינמיקה';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الذرية';
        $subtopic->name_he = 'אטומית';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'ميكانيكا التدفق';
        $subtopic->name_he = 'מכניקת זורמים';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'الكهرباء والمغناطيسية';
        $subtopic->name_he = 'חשמל ומגנטיות';
        $subtopic->maintopic_id = 48;
        $subtopic->user_id = null;
        $subtopic->save();

        /*********************************  علم النفس **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '3 وحدات - ثانوي';
        $subtopic->name_he = '3 יח"ל - תיכון';
        $subtopic->maintopic_id = 49;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '5 وحدات - ثانوي';
        $subtopic->name_he = '5 יח"ל - תיכון';
        $subtopic->maintopic_id = 49;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'اكاديمية';
        $subtopic->name_he = 'אקדמיה';
        $subtopic->maintopic_id = 49;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = 'امتحان "متئام"';
        $subtopic->name_he = 'מתא"ם';
        $subtopic->maintopic_id = 49;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  بسيخومتري **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = 'كلامي';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 50;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 50;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 50;
        $subtopic->user_id = null;
        $subtopic->save();

        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 50;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  تصوير **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 51;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة الفرنسية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 52;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اللغة الروسية **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 53;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  سباحة **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 54;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  لغات اخرى **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 55;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  براومج الاوفيس **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 56;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  اتصال **************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 57;
        $subtopic->user_id = null;
        $subtopic->save();
        /*********************************  دين**************************************/
        $subtopic = new Subtopic();
        $subtopic->name_ar = '';
        $subtopic->name_he = '';
        $subtopic->maintopic_id = 58;
        $subtopic->user_id = null;
        $subtopic->save();
    }
}
