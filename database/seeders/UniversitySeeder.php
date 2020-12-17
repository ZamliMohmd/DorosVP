<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $university = new University();
        $university->name_ar = 'جامعة أريئيل في السامرة (جمعية مسجله)';
        $university->name_he = 'אוניברסיטת אריאל שבשומרון';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'جامعة بن جوريون في النقب';
        $university->name_he = 'אוניברסיטת בן-גוריון בנגב';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'جامعة بار إيلان';
        $university->name_he = 'אוניברסיטת בר-אילן';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'جامعة حيفا';
        $university->name_he = 'אוניברסיטת חיפה';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'جامعة تل أبيب';
        $university->name_he = 'אוניברסיטת תל-אביב';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الجامعة العبرية في القدس';
        $university->name_he = 'האוניברסיטה העברית בירושלים';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الجامعة المفتوحة';
        $university->name_he = 'האוניברסיטה הפתוחה';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = '“التخنيون”- المعهد الإسرائيلي للتكنولوجيا';
        $university->name_he = 'הטכניון – מכון טכנולוגי לישראל';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'معهد “فايسمان” للعلوم';
        $university->name_he = 'מכון ויצמן למדע';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = '“أفيكاه”- الكلية الأكاديمية للهندسة في تل أبيب';
        $university->name_he = 'אפקה – המכללה האקדמית להנדסה בתל-אביב';
        $university->user_id = null;
        $university->save();


        $university = new University();
        $university->name_ar = '“باتسليل”- الأكاديمية للفنون والتصميم القدس';
        $university->name_he = 'בצלאל – אקדמיה לאמנות ועיצוב ירושלים';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الأكاديمية للموسيقى والرقص في القدس';
        $university->name_he = 'האקדמיה למוסיקה ולמחול בירושלים';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية “أحفاه”';
        $university->name_he = 'המכללה האקדמית אחוה';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية اشكلون';
        $university->name_he = 'המכללה האקדמית אשקלון';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية الجليل الغربي';
        $university->name_he = 'המכללה האקדמית גליל מערבי';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية “هداسا” القدس';
        $university->name_he = 'המכללה האקדמית הדסה ירושלים';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية “كنيريت” في غور الأردن';
        $university->name_he = 'המכללה האקדמית כנרת בעמק הירדן';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للهندسة “أورط” “براودة”';
        $university->name_he = 'המכללה האקדמית להנדסה אורט ע”ש בראודה';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للهندسة “سامي شيمعون”';
        $university->name_he = 'המכללה האקדמית להנדסה ע”ש סמי שמעון';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية سابير';
        $university->name_he = 'המכללה האקדמית ספיר';
        $university->user_id = null;
        $university->save();


        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية “عيمق يزراعيل” على اسم “ماكس شطيرن”';
        $university->name_he = 'המכללה האקדמית עמק יזרעאל ע”ש מקס שטרן';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية صفد';
        $university->name_he = 'המכללה האקדמית צפת';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية تل أبيب يافا';
        $university->name_he = 'המכללה האקדמית תל-אביב יפו';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية “تال حاي”';
        $university->name_he = 'המכללה האקדמית תל חי';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المركز الاكاديمي "لف"';
        $university->name_he = 'המרכז האקדמי לב';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المركز الأكاديمي “روبين”';
        $university->name_he = 'המרכז האקדמי רופין';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'معهد تكنولوجي حولون';
        $university->name_he = 'מכון טכנולוגי חולון';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للهندسة القدس';
        $university->name_he = 'עזריאלי, המכללה האקדמית להנדסה בירושלים';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = '“شينكار”- المدرسة العليا للهندسة والتصميم';
        $university->name_he = 'שנקר הנדסה. עיצוב. אמנות';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية لإسرائيل في رمات جان';
        $university->name_he = 'המכללה האקדמית לישראל ברמת-גן';
        $university->user_id = null;
        $university->save();


        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية نتانيا';
        $university->name_he = 'המכללה האקדמית נתניה';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المسار الأكاديمي للكلية “لمينهال”';
        $university->name_he = 'המסלול האקדמי של המכללה למינהל';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المركز الأكاديمي للحقوق وإدارة الأعمال';
        $university->name_he = 'המרכז האקדמי למשפט ולעסקים';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المركز الأكاديمي “بيريس”';
        $university->name_he = 'המרכז האקדמי פרס';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'كلية “شعاري ميشباط” – الكلية لتعليم الحقوق';
        $university->name_he = 'המרכז האקדמי שערי מדע ומשפט';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المركز متعدد المجالات “هيرتسليا”';
        $university->name_he = 'המרכז הבינתחומי בהרצליה';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الحرم الأكاديمي أونو';
        $university->name_he = 'הקריה האקדמית אונו';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'معهد “شيخطر” لعلوم اليهودية';
        $university->name_he = 'מכון שכטר למדעי היהדות';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'مركز “شاليم” الأكاديمي';
        $university->name_he = 'מרכז האקדמי שלם';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المركز للتعليم الأكاديمي في أور يهودا';
        $university->name_he = 'המרכז ללימודים אקדמיים באור יהודה';
        $university->user_id = null;
        $university->save();


        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للعلوم الاجتماعية والفنون';
        $university->name_he = 'המכללה האקדמית לחברה ואמנויות';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'القاسمي- كلية أكاديمية للتربية';
        $university->name_he = 'אלקאסמי – מכללה אקדמית לחינוך';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = '“ايمونا” – الكلية الأكاديمية لتعليم الفنون والتربية، من تأسيس كلية “إفراته وأيمونا';
        $university->name_he = 'אמונה-אפרתה- מכללה אקדמית לאמנויות ולחינוך';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية “بيت- بيرل” يشمل المعهد لتأهيل المعلمين العرب)';
        $university->name_he = 'המכללה האקדמית בית-ברל';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للتربية “شأنان”';
        $university->name_he = 'המכללה האקדמית הדתית לחינוך שאנן';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية العربية للتربية في إسرائيل – حيفا';
        $university->name_he = 'המכללה האקדמית הערבית לחינוך בישראל – חיפה';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية للتربية البدنية وللرياضة على اسم “زينمان” في معهد “فينجيط”';
        $university->name_he = 'המכללה האקדמית וינגייט';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للتربية “جيفعات واشنطون”';
        $university->name_he = 'המכללה האקדמית לחינוך גבעת וושינגטון';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للتربية والرياضة “أوهلو” في كتسرين';
        $university->name_he = 'המכללה האקדמית לחינוך ולספורט אוהלו בקצרין';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للتربية على اسم “دافيد يالين”';
        $university->name_he = 'המכללה האקדמית לחינוך ע”ש דוד ילין';
        $university->user_id = null;
        $university->save();


        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للتربية على اسم “كي”';
        $university->name_he = 'המכללה האקדמית לחינוך ע”ש קיי';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للتربية على اسم “أ.د. جرودون”';
        $university->name_he = 'המכללה האקדמית לחינוך ע”ש א.ד. גורדון';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المركز الأكاديمي للتصميم والتربية “فيتسو”- حيفا على اسم “نيري بلومفيلد';
        $university->name_he = 'המרכז האקדמי לעיצוב ולחינוך ויצו-חיפה ע”ש נרי בלומפילד';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = '“حيمدات هاداروم”- الكلية التوراتية للتربية';
        $university->name_he = 'חמדת הדרום – המכללה האקדמית לחינוך';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'أنوار إسرائيل، كلية أكاديمية للتربية من تأسيس كلية أنوار إسرائيل وكلية تراث يعقوب';
        $university->name_he = 'מכללה אקדמית לחינוך – אורות ישראל מיסודן של מכללת אורות ישראל ומכללת מורשת יעקב';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الاكاديمية للتربية- “أورانيم”';
        $university->name_he = 'מכללה אקדמית לחינוך “אורנים”';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'كلية القدس';
        $university->name_he = 'מכללה ירושלים';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'كلية يعقوب “هيرتسوج” (جانب “يشيفات –هار عيتسيون”)';
        $university->name_he = 'מכללת הרצוג מיסודן של מכללת ליפשיץ ומכללת הרצוג';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'كلية “ليفينسكي” للتربية (تشمل كلية الموسيقى)';
        $university->name_he = 'מכללת לוינסקי לחינוך';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'كلية سخنين لتأهيل موظفي سلك التعليم';
        $university->name_he = 'מכללת סכנין – מכללה אקדמית להכשרת עובדי הוראה';
        $university->user_id = null;
        $university->save();


        $university = new University();
        $university->name_ar = '“سمينار هاكيبوتسيم”- الكلية لتعليم التكنولوجيا والفنون';
        $university->name_he = 'סמינר הקיבוצים – המכללה לחינוך לטכנולוגיה ולאמנויות';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للتربية “تلبيوت”';
        $university->name_he = 'תלפיות – המכללה האקדמית לחינוך';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'معهد “ليندر” مركز أكاديمي القدس';
        $university->name_he = 'מכון לנדר ירושלים';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المركز الأكاديمي الكرمل';
        $university->name_he = 'המרכז האקדמי כרמל';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'المؤسسة الأكاديمية الناصرة';
        $university->name_he = 'מכללת נצרת';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الكلية الأكاديمية للهندسة والتكنولوجيا “أورط هارملين”';
        $university->name_he = 'מכללת אורט הרמלין נתניה';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'الجامعه الاميركيه جنين';
        $university->name_he = '';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'جامعه النجاح';
        $university->name_he = '';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'جامعات ومعاهد خارج البلاد';
        $university->name_he = 'אוניברסיטה/מכללה בחו"ל';
        $university->user_id = null;
        $university->save();

        $university = new University();
        $university->name_ar = 'اخر';
        $university->name_he = 'אחר';
        $university->user_id = null;
        $university->save();


    }
}
