<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function loginPage(){
        return view('auth.logins');
    }


    public function Login(Request $request)
    {
       // dd($request->all());
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',

        ]);

        $credentials = Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]);
//dd($credentials);
        if ($credentials) {
            if (Auth::user()->isVerified()) {
               // dd(Auth::user()->usertypeID());
                if (Auth::user()->usertypeID() == 4 && Auth::user()->isCompleteProfile()){
                    return redirect()->intended('/');
                }elseif(Auth::user()->usertypeID() == 4 && ! Auth::user()->isCompleteProfile()){
                    return redirect()->intended('/student/profile/complete');
                }

                if (Auth::user()->usertypeID() == 3 && Auth::user()->isCompleteProfile()){
                    return redirect()->intended('/');
                }elseif(Auth::user()->usertypeID() == 3 && ! Auth::user()->isCompleteProfile()){
                    return redirect()->intended('/teacher/completeprofile');
                }

            }else{
                Auth::logout();
                return redirect('/login')->with('status', 'تم ارسال رابط التفعيل الى بريدك الالكتروني.قم بتفعيل حسابك لتتمكن من استخدام الموقع');

            }
        }
        return redirect()->back()->with('خطأ في اسم المستخدم او كلمة المرور');

    }

    public function verifyNewUser($token)
    {
        $verifyUser = User::where('token', $token)->first();
        if(isset($verifyUser) ){

            if($verifyUser->is_verified == 0) {
                $verifyUser->is_verified = 1;
                $verifyUser->email_verified_at = now();
                $verifyUser->save();
                $status = "تم تفعيل حسابك. قم بتسجيل الدخول الان";
            }else{
                $status = "حسابك مفعل بالفعل يمكنك استخدام حسابك";
            }
        }else{
            return redirect('/login')->with('warning', "نأسف بريدك الالكتروني المدخل غير موجود لدينا");
        }

        return redirect('/login')->with('status', $status);
    }
}
