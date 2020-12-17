<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Maintopic;
use App\Models\Student;
use App\Models\Studyinglevel;
use App\Models\Subtopic;
use App\Models\User;
use App\Notifications\ActivateNewUserNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

    public function main(){
        dd(Auth::user());
        $user = Auth::user();
        $student = Student::where('user_id' , $user->id)->first();
        return view('website.student.index' , compact('user' , 'student'));

    }
     *  */
    public function index()
    {
        //dd(Auth::user());
        $user = Auth::user();
        $student = Student::where('user_id' , $user->id)->first();
        $studinglevels = Studyinglevel::all();
        $maintopics = Maintopic::all();
        $cities = City::all();
        return view('website.student.index' , compact('user' , 'student' , 'studinglevels' , 'cities' , 'maintopics'));
    }

    public function completeProfile()
    {
      //  dd(Auth::user()->usertypeID());
        try {
            if (Auth::user()){
            if (Auth::user()->isVerified() == 1) {
            $user = Auth::user();
                if ($user->usertypeID() == 4) {
                   // $user = Auth::user();
                    $studinglevels = Studyinglevel::all();
                    $maintopics = Maintopic::all();
                    $subtopics = Subtopic::all();
                    $cities = City::all();
                    if ($user->isCompleteProfile() == 0) {
                        return view('website.student.completeProfile', compact('user' , 'studinglevels' ,
                            'maintopics' , 'subtopics' , 'cities'));
                    } elseif ($user->isCompleteProfile() == 1) {
                        return redirect('/student/index');
                    }
                } else {
                    return redirect('/');
                }
            }else{
                return redirect('/login');
            }
            }else{
                    return redirect('/login');
                }


    } catch (\Exception $exception){

            dd($exception);
        }

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
        //dd($request->all());
        /*
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'gender_id' => 'required',
           // 'description_en' => 'required',
           // 'pdf' => 'file|max:1000000|mimes:doc,pdf,docx',
            'image' => 'required|image|mimes:jpeg,bmp,png|max:11999',
         //   'created_at' => 'required',
        ]);
*/
     //   dd($request->all());
        /************* Complete Student Profile ************************/
        $student = new Student();
        $student->user_id = $request->user_id;
        $student->gender_id = $request->gender_id;
        $student->is_accept_msg = $request->is_accept_msg;
        $student->city_id  = $request->city_id ;
        $student->studyinglevel_id  = $request->studyinglevel_id ;
        $student->address  = $request->address ;
        $student->birth_year = $request->birth_year;
        $student->image  = $request->image ;
        $student->student_fav_teachers_genders = $request->student_fav_teachers_genders;
        $student->save();
        $student->subtopic()->attach($request->topics);

//dd($file = $request->file('image'));
        if ($file = $request->file('image')) {
            $ext = strtolower($file->getClientOriginalExtension());
            $name = $request->user_id . '_' . time() . '_' . $ext;

            $file->move('website/students/images/', $name);
            $student->image = 'website/students/images/' . $name;

        }
        $student->save();

//dd($student);
        $user = User::find($request->user_id);
        //dd($user);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->mobile = $request->mobile;
      //  $user->email = $request->email;
        $user->is_complete_profile = 1;
     //   $user->password =  Hash::make($request->password);
        $user->save();
        session()->flash('message', 'تم اكمال بياناتك بنجاح');
        return redirect()-> route('student_index');

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
    public function update(Request $request)
    {
        dd($request->all());
        /*
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'gender_id' => 'required',
           // 'description_en' => 'required',
           // 'pdf' => 'file|max:1000000|mimes:doc,pdf,docx',
            'image' => 'required|image|mimes:jpeg,bmp,png|max:11999',
         //   'created_at' => 'required',
        ]);
*/
        //   dd($request->all());
        /*******************  Complete Student Profile  *********************/
        $student = Student::find($request->student_id);
        $student->user_id = $request->user_id;
        $student->gender_id = $request->gender_id;
        $student->is_accept_msg = $request->is_accept_msg;
        $student->city_id  = $request->city_id ;
        $student->studyinglevel_id  = $request->studyinglevel_id ;
        $student->address  = $request->address ;
        $student->birth_year = $request->birth_year;
        $student->image  = $request->image ;
        $student->student_fav_teachers_genders = $request->student_fav_teachers_genders;
        $student->save();
        $student->subtopic()->attach($request->topics);

//dd($file = $request->file('image'));
        if ($file = $request->file('image')) {
            $ext = strtolower($file->getClientOriginalExtension());
            $name = $request->user_id . '_' . time() . '_' . $ext;

            $file->move('website/students/images/', $name);
            $student->image = 'website/students/images/' . $name;

        }
        $student->save();

//dd($student);
        $user = User::find($request->user_id);
        //dd($user);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->mobile = $request->mobile;
        //  $user->email = $request->email;
        $user->is_complete_profile = 1;
        //   $user->password =  Hash::make($request->password);
        $user->save();
        session()->flash('message', 'تم اكمال بياناتك بنجاح');
        return redirect()-> route('student_index');

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

    public function register(Request $request){
      //  dd($request->all());
        try {
            /*
        $validator =    $this->validate($request, [
                'name' => 'required|min:2|max:25',
                'email' => 'required|email|unique:users',
                'mobile' => 'required|unique:users',
                'password' => 'required|min:6|max:15',
              //  'accept_use_terms' => 'required'

            ]);*/
//dd($request->_token);
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
                'usertype_id' => '4',
              //  'created_at' => date_timestamp_set(),
            ]);

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
          //  return redirect('/login')->with('status', 'تم ارسال رابط التفعيل الى بريدك الالكتروني.قم بتفعيل حسابك لتتمكن من استخدام الموقع');
          //  auth()->login($user);

        }catch (\Exception $exception){
/*
            return response()->json(['error'=>  $this->validate($request, [
                'name' => 'required|min:2|max:25',
                'email' => 'required|email|unique:users',
                'mobile' => 'required|unique:users',
                'password' => 'required|min:6|max:15',
              //  'accept_use_terms' => 'required'
            ])]);
*/
           // return dd($exception);
        }

    }

    public function test(){
        $fullname = 'Mohmd Zamli';

        if (str_contains($fullname , " ") == true){

            $first_name = strtok( $fullname, ' ' );
            $last_name = substr($fullname, strpos($fullname, " ") + 1);

           echo $firstname= $first_name;
           echo $lastname = $last_name;
        }else{
            echo $firstname = $fullname;
            echo $lastname = null;
        }
    }

    public function messages(){
        return view('website.student.messages');
    }


public function testCity(){
    dd(City::where('id' , '!=' , null)->get());
}

}
