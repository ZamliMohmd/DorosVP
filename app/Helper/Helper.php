<?php
function customRequestCaptcha(){
    return new \ReCaptcha\RequestMethod\Post();
}

function testCap(){
    return  'light'
    ;
}

function getMainSpecialties($id){

   return \App\Models\Mainspecialtie::where('id' , $id)->first()->name_ar;
}

function getSerachTopic($id){

    return \App\Models\Maintopic::where('id' , $id)->first()->name_ar;
}

function getsubTopicByMainTopicId($id){

    return \App\Models\Subtopic::where('maintopic_id' , $id)->get();
}

function getsubSpecialtiesByMainSpecialtiesId($id){

    return \App\Models\Subspecialties::where('mainspecialtie_id' , $id)->get();
}

 function getPriceSubscripeByToken($id){
    return \App\Models\Price::where('id' , $id)->first()->token;
}

function getNoOfInstallments(){
    return \App\Models\Price::all();
}

function getUserByID($id){
    return \App\Models\User::where('id' , $id)->first();
}

function getTeacherProfileStatusByUserId(){
    $user = \Illuminate\Support\Facades\Auth::user();
    $teacher = \App\Models\Teacher::where('user_id' , $user->id)->first();
    $TeacherDegree =  \App\Models\TeacherDegree::where('user_id' , $user->id)->first();
    $TeacherPrices =  \App\Models\TeacherPrices::where('user_id' , $user->id)->first();
    $teacherCities =  $teacher->cities()->count();
    $teacherExperience = \App\Models\Teacherexperience::where('teacher_id' , $teacher->id)->first();
    //dd($teacherExperience);
        //  dd($TeacherPrices);
        //dd($user);

    if ($teacherExperience != null){
            return 5;
    }
    elseif ($TeacherPrices != null && $teacherCities > 0){
        return 4;
    }
    elseif ($teacher->subtopic()->count() > 0){
        return 3;
    }elseif ($teacher  != null && $TeacherDegree != null){
        return 2;
    }elseif ($user && $teacher == null){
            return 1;
        }
   // }
    //return 1;
//    $userId = Illuminate\Support\Facades\Auth::user()->id;
//    $teacher = \App\Models\Teacher::where('user_id' , $userId)->first();
//
  //  if ($teacher->subtopic()->count > 0)
   //

//    if($teacher->cities() != null){
//    if ( $teacher->cities()->count() > 0){
//        return 4;
//    }}
//if ($teacher->subtopic()->count() >0){
//        return 3;
//    }
//elseif (isset($teacher)){
//       return 2;
//   }


 //   $teacher->cities()->get();

   // \App\Models\TeacherPrices::where('user_id' , $userId)->first();

   // dd(\App\Models\TeacherPrices::where('user_id' , $userId)->first());
}

