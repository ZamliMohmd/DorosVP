<?php

namespace App\Http\Controllers;

//use App\Events\MessageEvent;
use App\Models\City;
use App\Models\Degree;
use App\Models\Mainspecialtie;
use App\Models\Maintopic;
use App\Models\Message;
use App\Models\Price;
use App\Models\Studyinglevel;
use App\Models\Subtopic;
use App\Models\Teacher;
use App\Models\TeacherDegree;
use App\Models\Teacherexperience;
use App\Models\TeacherHourswork;
use App\Models\TeacherPrices;
use App\Models\University;
use App\Models\User;
//use App\Notifications\ActivateNewUserNotification;
use App\Notifications\ActivateNewUserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use function GuzzleHttp\Promise\all;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('website.teacher.index' , compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function registerPage(){

        return view('website.teacher.register');
    }

    public function register(Request $request){
      //  dd($request->all());
        try {
            $this->validate($request, [
                'name' => 'required|min:2|max:25',
                'email' => 'required|email|unique:users',
                'mobile' => 'required|unique:users',
                'password' => 'required|min:6|max:25|confirmed|regex:/^(?=.*[a-z])(?=.*\d).+$/',

                // 'accept_use_terms' => 'required'
            ]);
     /*   dd($this->validate($request, [
            'name' => 'required|min:2|max:25',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|unique:users',
            'password' => 'required|min:6|max:15',
             'accept_use_terms' => 'required'
        ]));*/
            $fullname = $request->name;
            if (str_contains($fullname , " ")  == true){
                $first_name = strtok( $fullname, ' ' );
                $last_name = substr($fullname, strpos($fullname, " ") + 1);
                $firstname= $first_name;
                $lastname = $last_name;
            }else{
                $firstname = $request->name;
                $lastname = null;
            }

            $user =  User::create([
                'name' => $firstname,
                'last_name' => $lastname,
                'email' => strtolower($request->input('email')),
                'mobile' => $request->input('mobile'),
                'password' => bcrypt($request->input('password')),
                'token' => time().$request->_token,
                'is_verified' => 0,
                'usertype_id' => '3',
            ]);
//dd($user->id);
            \Illuminate\Support\Facades\Notification::send($user, new ActivateNewUserNotification($user));
            session()->flash('message', 'Your account is created');
            Auth::logout();
            if ($user)
                return response()->json([
                    'status' => true,
                    'msg' => 'تم تسجيلك بنجاح, تم ارسال رابط التفعيل على بريدك الالكتروني',
                    'redirect' => url('/login')

                ]);

            else
                return response()->json([
                    'status' => false,
                    'msg' => 'فشل الحفظ برجاء المحاوله مجددا',
                ]);

      //      return redirect('/login')->with('status', 'تم ارسال رابط التفعيل الى بريدك الالكتروني.قم بتفعيل حسابك لتتمكن من استخدام الموقع');
            //  auth()->login($user);

        }catch (\Exception $exception){
            return response()->json(['error'=>  $this->validate($request, [
                'name' => 'required|min:2|max:25',
                'email' => 'required|email',
                'mobile' => 'required',
                'password' => 'required|min:6|max:15',
                 // 'accept_use_terms' => 'required'
            ])]);

        }

    }


    public function completeProfile()
    {
        try {
            if(Auth::user()){
              if (Auth::user()->isVerified() == 1) {
                  if ( Auth::user()->usertypeID() == 3) {
                 $user = Auth::user();
                  //    $userID = Auth::user()->id;
                $studinglevels = Studyinglevel::all();
                $maintopics = Maintopic::all();
                $subtopics = Subtopic::all();
                $cities = City::all();
                $universities = University::all();
                $Mainspecialties = Mainspecialtie::all();
                $degrees = Degree::all();
                if ($user->isCompleteProfile() == 0) {
                    return view('website.teacher.complete_profile', compact('user' , 'studinglevels' ,
                        'maintopics' , 'subtopics' , 'cities' , 'universities' , 'Mainspecialties' , 'degrees'));
                } else {
                    return redirect('/teacher/index');
                }
            } else {
                return redirect('/');
            }
             } else{
                  return redirect('/login');
               }
            }
              else{
                return redirect('/login');
            }


        } catch (\Exception $exception){


        }

    }

    public function storeCompleteProfile(Request $request){
       // dd($request->all());

        $teacher = new Teacher();
        $teacher->user_id = $request->user_id;
        $teacher->gender_id = $request->gender_id;
        $teacher->is_accept_appear_mobile_no = $request->is_accept_appear_mobile_no;
        $teacher->is_accept_whatsapp_msg = $request->is_accept_whatsapp_msg;
        $teacher->city_id  = $request->city_id ;
        $teacher->birth_year = $request->birth_year;

        if ($file = $request->file('image')) {
            $ext = strtolower($file->getClientOriginalExtension());
            $name = $request->user_id . '_' . time() . '_' . $ext;

            $file->move('website/teachers/images/', $name);
            $teacher->image = 'website/teachers/images/' . $name;

        }

        $teacher->save();

        $degree = new TeacherDegree();
        $degree->teacher_id  = $teacher->id;
        $degree->user_id = Auth::user()->id;
        $degree->degree_id = $request->degree_id;
        $degree->university_id = $request->university_id;
        $degree->specialty_id = $request->specialization_id;
        $degree->from_year = $request->from_year;
        $degree->to_year = $request->to_year;
        $degree->save();
       // $teacher->subtopic()->attach($request->topics);


//dd($student);
        $user = User::find($request->user_id);
        //dd($user);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->mobile = $request->mobile;
        //  $user->email = $request->email;
        $user->is_complete_profile = 0;
        //   $user->password =  Hash::make($request->password);
        $user->save();
/*
        if ($user)
            return response()->json([
                'status' => true,
                'msg' => 'تم تسجيل البيانات الشخصية بنجاح, الرجاء الانتقال للخطوة التالية',
                //'redirect' => route('teacher_step2')

            ]);

        else
            return response()->json([
                'status' => false,
                'msg' => 'فشل الحفظ برجاء المحاوله مجددا',
            ]);
*/
        session()->flash('message', 'تم اكمال بياناتك بنجاح');
        return redirect()-> back();
    }

    public function addLearningSubjects(Request $request){
       // dd($request->all());
        $user = Auth::user();
        $teacher = Teacher::where('user_id' , $user->id)->first();
        //dd($teacher);
        $teacher->subtopic()->attach($request->topics);
        $teacher->save();
      //  dd($teacher);
        /*
        if ($teacher)
            return response()->json([
                'status' => true,
                'msg' => 'تم تسجيل مواد التعليم بنجاح, الرجاء الانتقال للخطوة التالية',
                //'redirect' => route('teacher_step2')

            ]);

        else
            return response()->json([
                'status' => false,
                'msg' => 'فشل الحفظ برجاء المحاوله مجددا',
            ]);
        */
        session()->flash('message', 'تم اكمال بياناتك بنجاح');
        return redirect()-> back();

    }

    public function storePriceAndCities(Request $request){
     // dd( $request->all());
        $teacher = Teacher::where('user_id' , $request->user_id)->first();
       $teacherPrices = new TeacherPrices();
        $teacherPrices->price_online = $request->price_online;
        $teacherPrices->price_at_teacher = $request->price_at_teacher;
        $teacherPrices->price_at_student = $request->price_at_student;
        $teacherPrices->price_at_others = $request->price_at_others;
        $teacherPrices->user_id = $request->user_id;
        $teacherPrices->is_discount = $request->is_discount;
        $teacherPrices->discount_percentage = $request->discount_percentage;
        $teacherPrices->teacher_id = $teacher->id;
        $teacherPrices->save();

        // dd($teacher);
        $teacher->cities()->attach($request->teacher_city);
        $teacher->save();
/*
        if ($teacher)
            return response()->json([
                'status' => true,
                'msg' => 'تم تسجيل البلدات والاسعار بنجاح, الرجاء الانتقال للخطوة التالية',
                //'redirect' => route('teacher_step2')

            ]);

        else
            return response()->json([
                'status' => false,
                'msg' => 'فشل الحفظ برجاء المحاوله مجددا',
            ]);
*/

        session()->flash('message', 'تم اكمال بياناتك بنجاح');
        return redirect()-> back();

    }

    public function storeExperience(Request $request){


            $this->validate($request, [
                'video' => 'max:102400 | mimes:flv,mp4,wmv,avi,3gp',
            ]);
        $user = Auth::user();
        $userT = User::find(Auth::id());
       $teacher_id =$userT->teacher->id;

        $teacherExperiences = new Teacherexperience();
        $teacherExperiences->school_student_learning = $request->school_student_learning;
        $teacherExperiences->lebsekhiometry = $request->lebsekhiometry;
        $teacherExperiences->lebjrot_preparation = $request->lebjrot_preparation;
        $teacherExperiences->exam_preparation = $request->exam_preparation;
        $teacherExperiences->university_lecturer = $request->university_lecturer;
        $teacherExperiences->teaching_assistant = $request->teaching_assistant;
        $teacherExperiences->no_exprence = $request->no_exprence;
        $teacherExperiences->user_id = $user->id;
        $teacherExperiences->teacher_id = $teacher_id;
        $teacherExperiences->save();

        $teacher = Teacher::find($teacher_id);
        $teacher->marketing_text = strip_tags($request->marketing_text);
        $teacher->cv_text = strip_tags($request->cv_text);

        if ($file = $request->file('video')) {
            $ext = strtolower($file->getClientOriginalExtension());
            $name = $userT->name.$userT->last_name . '_' . time() . '_' . $ext;
           // dd($ext);
            $file->move('website/teachers/video/', $name);
            $teacher->video = 'website/teachers/video/' . $name;
        }
        $teacher->save();

return redirect()-> back();

    }

    public function storeWorkHours(Request $request){
        dd($request->all());
       // dd(Auth::user()->name);
        //dd($request->inputFrom-1-1);
        $userId = Auth::id();
        $teacher = Teacher::where('user_id' , $userId)->first();
      //  dd($request->inputFrom-1-1);
        if ($request->sun_from != null && $request->sun_to){
            $hourWork = new TeacherHourswork();
            $hourWork->from = $request->sun_from;
            $hourWork->to = $request->sun_to;
            $hourWork-> day_id = 1;
            $hourWork-> teacher_id = $teacher->id;
            $hourWork-> user_id = $userId;
            $hourWork->save();
        }

        if ($request->mon_from != null && $request->mon_to){
            $hourWork = new TeacherHourswork();
            $hourWork->from = $request->mon_from;
            $hourWork->to = $request->mon_to;
            $hourWork-> day_id = 2;
            $hourWork-> teacher_id = $teacher->id;
            $hourWork-> user_id = $userId;
            $hourWork->save();
        }

        if ($request->tues_from != null && $request->tues_to){
            $hourWork = new TeacherHourswork();
            $hourWork->from = $request->tues_from;
            $hourWork->to = $request->tues_to;
            $hourWork-> day_id = 3;
            $hourWork-> teacher_id = $teacher->id;
            $hourWork-> user_id = $userId;
            $hourWork->save();
        }

        if ($request->inputFrom-4-1 != null && $request->inputTo-4-1){
            $hourWork = new TeacherHourswork();
            $hourWork->from = $request->inputFrom-4-1;
            $hourWork->to = $request->inputTo-4-1;
            $hourWork-> day_id = 4;
            $hourWork-> teacher_id = $teacher->id;
            $hourWork-> user_id = $userId;
            $hourWork->save();
        }


        if ($request->inputFrom-5-1 != null && $request->inputTo-5-1){
            $hourWork = new TeacherHourswork();
            $hourWork->from = $request->inputFrom-5-1;
            $hourWork->to = $request->inputTo-5-1;
            $hourWork-> day_id = 5;
            $hourWork-> teacher_id = $teacher->id;
            $hourWork-> user_id = $userId;
            $hourWork->save();
        }

        if ($request->inputFrom-6-1 != null && $request->inputTo-6-1){
            $hourWork = new TeacherHourswork();
            $hourWork->from = $request->inputFrom-6-1;
            $hourWork->to = $request->inputTo-6-1;
            $hourWork-> day_id = 6;
            $hourWork-> teacher_id = $teacher->id;
            $hourWork-> user_id = $userId;
            $hourWork->save();
        }

        if ($request->inputFrom-7-1 != null && $request->inputTo-7-1){
            $hourWork = new TeacherHourswork();
            $hourWork->from = $request->inputFrom-7-1;
            $hourWork->to = $request->inputTo-7-1;
            $hourWork-> day_id = 7;
            $hourWork-> teacher_id = $teacher->id;
            $hourWork-> user_id = $userId;
            $hourWork->save();
        }


     //   dd($request->all());
       // $data=$request->all();
    //  dd(  strtok($data, "-"));

      //  $whatIWant = substr($request->all(), strpos($data, "-") + 1);
//dd($whatIWant);



    }

    public function chat(){
        return view('chat');
    }

    public function completeProfileStep2(){
        return view('website.teacher.step2');
    }

    public function storeCompleteProfileStep2(Request $request){
        // dd($request->all());

        $teacher = new Teacher();
        $teacher->user_id = $request->user_id;
        $teacher->gender_id = $request->gender_id;
        $teacher->is_accept_appear_mobile_no = $request->is_accept_appear_mobile_no;
        $teacher->is_accept_whatsapp_msg = $request->is_accept_whatsapp_msg;
        $teacher->city_id  = $request->city_id ;
        $teacher->birth_year = $request->birth_year;

        if ($file = $request->file('image')) {
            $ext = strtolower($file->getClientOriginalExtension());
            $name = $request->user_id . '_' . time() . '_' . $ext;

            $file->move('website/teachers/images/', $name);
            $teacher->image = 'website/teachers/images/' . $name;

        }

        $teacher->save();

        $degree = new TeacherDegree();
        $degree->teacher_id  = $teacher->id;
        $degree->user_id = Auth::user()->id;
        $degree->degree_id = $request->degree_id;
        $degree->university_id = $request->university_id;
        $degree->specialty_id = $request->specialization_id;
        $degree->from_year = $request->from_year;
        $degree->to_year = $request->to_year;
        $degree->save();
        // $teacher->subtopic()->attach($request->topics);


//dd($student);
        $user = User::find($request->user_id);
        //dd($user);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->mobile = $request->mobile;
        //  $user->email = $request->email;
        $user->is_complete_profile = 0;
        //   $user->password =  Hash::make($request->password);
        $user->save();
/*
        if ($user)
            return response()->json([
                'status' => true,
                'msg' => 'تم تسجيل البيانات الشخصية بنجاح, الرجاء الانتقال للخطوة التالية',
                'redirect' => route('teacher_step2')

            ]);

        else
            return response()->json([
                'status' => false,
                'msg' => 'فشل الحفظ برجاء المحاوله مجددا',
            ]);
*/
            session()->flash('message', 'تم اكمال بياناتك بنجاح');
         return redirect()->back() ;
    }

    public function calender(){
        return view('website.teacher.calender');
    }

    public function payment(){
        return view('website.teacher.payment');
    }

    public function subscripe(){
        $prices = Price::all();
        return view('website.teacher.subscripe' , compact('prices'));
    }


    public function payFromNewTeacher($token){
       $price =  Price::where('token' , $token)->first();
        return view('website.teacher.payFromNewTeacher' , compact('price'));
    }

    public function blog(){
        return view('website.teacher.blog');
    }

    public function messages(){
        return view('website.teacher.messages');
    }

    public function fetchMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);

        broadcast(new MessageEvent($user, $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }

}
