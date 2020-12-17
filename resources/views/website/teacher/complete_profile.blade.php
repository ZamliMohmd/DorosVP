@extends('app')
@section('header')
    <link rel="stylesheet" href="{{--url('assets/website/css/completeDateTeacher.css')--}}">
    <link rel="stylesheet" href="{{--url('assets/website/css/amsify.select.css')--}}">


    <link rel="stylesheet" href="{{url('assets/website/css/flatpickr.min.css')}}">
    <style>
        .select2-selection__arrow{
            margin-right: 20px;
        }
        input.timepicker {
            width: 100px !important;
            text-align: center !important;
            margin: auto;
        }

        .step2 .education>span:not(.icon) {
            color: #696871;
            border: 1px solid #E8E8E8;
            padding: 4px 12px;
            font-size: 14px;
            border-radius: 8px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            margin: 5px 0 5px 5px;
            display: inline-flex;
            align-items: center;
        }

        .step2 .education>span:not(.icon) {
            color: #FFF;
            background-color: var(--colorText1);
        }

        .step2 .education>span {
            color: var(--colorText2);
        }

        .step2 .education>span i {
            font-size: 18px;
            vertical-align: middle;
            display: none;
        }

        .step2 .education>span i {
            font-size: 19px;
            color: #FFF;
            display: inline-block;
            position: static !important;
            margin-left: 5px;
        }

        .step3 .education>span:not(.icon) {
            color: #696871;
            border: 1px solid #E8E8E8;
            padding: 4px 12px;
            font-size: 14px;
            border-radius: 8px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            margin: 5px 0 5px 5px;
            display: inline-flex;
            align-items: center;
        }

        .step3 .education>span:not(.icon) {
            color: #FFF;
            background-color: var(--colorText1);
        }

        .step3 .education>span {
            color: var(--colorText2);
        }

        .step3 .education>span i {
            font-size: 18px;
            vertical-align: middle;
            display: none;
        }

        .step3 .education>span i {
            font-size: 19px;
            color: #FFF;
            display: inline-block;
            position: static !important;
            margin-left: 5px;
        }


        #universities+span.select2 .select2-selection--single {
           height: 43px;
            margin-top: 0px;
        }
        #specializations+span.select2 .select2-selection--single {
           height: 43px;
            margin-top: 0px;
        }

        .completeDataTeacher .step5 .tableHour tr.rowTo td {
            position: relative;
        }

        .btnDeleteHour {
            position: absolute!important;
            left: 7px;
            bottom: -12px;
            background-color: #FF4747;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            border-radius: 8px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            padding: 2px 7px;
            margin: 0;
            font-size: 12px;
        }

        .completeDataTeacher .step5 .tableHour tr:nth-of-type(3) td .btnDeleteHour {
            display: none;
        }

    </style>
@endsection
@section('content')

    <div class="container completeData completeDataTeacher">

        <div class="row rowHeadPage">
            <div class="col-12 titlePage">
                <span class="icon">
                    <i class="fal fa-copy"></i>
                </span>
                بناء البروفايل الخاص بك
            </div>
        </div>
        <div class="row rowStep" step="{{getTeacherProfileStatusByUserId()}}">
            <span class="step1">1</span>
            <span class="space">
                <b>
                    التفاصيل الشخصية
                </b>
            </span>
            <span class="step2">2</span>
            <span class="space">
                <b>
                    مواضيع التعليم
                </b>
            </span>
            <span class="step3">3</span>
            <span class="space">
                <b>
                    مكان التعليم والسعر
                </b>
            </span>
            <span class="step4">4</span>
            <span class="space">
                <b>
                   خبرة وتسويق
                </b>
            </span>
            <span class="step5">5</span>
        </div>
         <div class="dataTeacher">
              <form action="{{ route('teacher_storeCompleteProfile') }}" id="teacherCompleteProfileStep1_1"  method="post" enctype="multipart/form-data" class="dataTeacher" >
                  {{csrf_field()}}
                  <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
              <div class="row step1">
                      <div class="col-12 mt-0">
                    <span class="titleStep">
                        التفاصيل الشخصية
                    </span>
                      </div>
                      <div class="col-lg-9 mt-0">
                          <div class="row">
                              <div class="col-xl-3 col-md-6">
                                  <div>
                                      <label for="firstName">
                                          الاسم الشخصي
                                      </label>
                                      <div class="divInput">
                                          <input requiredX="yes" class="input" min="2" max="25" errorMin="يجب على الأقل أن يكون 3 حروف"
                                                 errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                                 autocomplete="off" id="firstName" type="text" name="name" value="{{$user->name}}">
                                          <i class="fal fa-user-circle"></i>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div>
                                      <label for="lastName">
                                          الاسم العائلة
                                      </label>
                                      <div class="divInput">
                                          <input requiredX="yes" class="input" min="2" max="25" errorMin="يجب على الأقل أن يكون 3 حروف"
                                                 errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                                 autocomplete="off" id="lastName" type="text" name="last_name" value="{{$user->last_name}}">
                                          <i class="fal fa-user-circle"></i>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div>
                                      <label for="gender">
                                          الجنس
                                      </label>
                                      <div class="divInput chx">
                                          <input type="radio" class="input" name="gender_id" hidden id="gender1" value="1">
                                          <label for="gender1">
                                              ذكر
                                          </label>
                                          <input type="radio" class="input" name="gender_id" hidden id="gender2" value="2">
                                          <label for="gender2">
                                              انثى
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div>
                                      <label for="location">
                                          البلد
                                      </label>
                                      <div class="divInput">
                                          <select requiredX="yes" dir="rtl" id="cities" class="form-control select2 input"  searchable name="city_id"
                                          >
                                              <option value="0"></option>
                                              @foreach($cities as $city)
                                                  <option value="{{$city->id}}">{{$city->name_ar}}</option>
                                              @endforeach
                                          </select>
                                          <i class="fal fa-map-marker-alt"></i>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div>
                                      <label for="date">
                                          سنة الميلاد
                                      </label>
                                      <div class="divInput">
                                          <input requiredX="yes" class="input" errorEmpty="يجب ألا يترك الحقل فارغ" autocomplete="off"
                                                 id="date" type="date" name="birth_year" value="">
                                          <i class="fal fa-calendar"></i>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div>
                                      <label for="phone">
                                          رقم الهاتف
                                      </label>
                                      <div class="divInput">
                                          <input requiredX="yes" min="2" max="9999999999999" errorMin="يجب على الأقل أن يكون 3 حروف"
                                                 errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                                 autocomplete="off" class="input" id="phone" name="mobile" type="number" value="{{$user->mobile}}">
                                          <i class="fal fa-phone"></i>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div>
                                      <label for="email">
                                          رقم الواتساب
                                      </label>
                                      <div class="divInput">
                                          <input requiredX="yes" errorEmpty="يجب ألا يترك الحقل فارغ" autocomplete="off"
                                                 id="email" type="number" class="input" name="whatsapp" value="">
                                          <i class="fal fa-phone"></i>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <!-- <div>
                                      &nbsp;
                                  </div> -->
                                  <div>
                                      <input checked type="checkbox" class="input" name="is_accept_appear_mobile_no" hidden id="agreeShow" value="1">
                                      <label for="agreeShow" style="font-size: 13px;">
                                          أوافق على ظهور رقمي عند الطلاب
                                      </label>
                                  </div>
                                  <div>
                                      <input checked type="checkbox" class="input" name="is_accept_whatsapp_msg" hidden id="agreeWhatsapp" value="1">
                                      <label for="agreeWhatsapp" style="font-size: 13px;">
                                          أوافق على استلام رسائل الواتساب
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col colImg mt-0">
                          <div>
                              <input class="imgFile"  hidden type="file" name="image" id="img">
                              <label class="img" for="img">
                                  <img class="imgFile"  src="{{asset('assets/website/img/camera.svg')}}" alt="">
                              </label>
                              <a href="" class="btn btn-block">
                                  ارفع صورتك من
                                  <img class="px-3" src="{{asset('assets/website/img/facebook.svg')}}" alt="">
                              </a>
                          </div>
                      </div>
                      <div class="col-12 completeDataPart mt-0">
                          <div class="row edit">
                              <div class="col-12 eduCol mt-0">
                                  <div class="row rowTitleTeacher m-0">
                                <span class="col-lg-3 mt-3 col-md-6 col-12 px-2">
                                    <label for="edu1-01">
                                        اللقب
                                    </label>
                                    <br>

                                  <select name="degree_id" id="degree" class="input">
                                      <option  selected value="0">اختر... </option>
                                      @foreach($degrees as $degree)
                                          <option value="{{$degree->id}}">{{$degree->name_ar}}</option>
                                      @endforeach
                                    </select>
                                    <span class="icon">
                                        <i style="bottom: 3px;" class="fal fa-book-alt"></i>
                                    </span>
                                </span>
                                      <span class="col-lg-3 mt-3 col-md-6 col-12 px-2">
                                    <label for="edu1-02">
                                        اسم مؤسسة التعليم
                                    </label>
                                    <br>
                                     <select requiredX="yes" dir="rtl" id="universities" class="form-control
                                     select2 input" searchable name="university_id"
                                     >
                                        <option  style="    margin-right: 31px;
" value="0" selected >اختر مؤسسة التعليم</option>

                                         @foreach($universities as $university)
                                             <option value="{{$university->id}}">{{$university->name_ar}}</option>
                                         @endforeach
                                    </select>
                                    <span class="icon">
                                        <i  class="fal fa-user-graduate"></i>
                                    </span>
                                </span>
                                      <span class="col-lg-3 mt-3 col-md-6 col-12 px-2">
                                    <label for="edu1-03">
                                        التخصص
                                    </label>
                                    <br>
                                   <select requiredX="yes" dir="rtl" id="specializations" style="" class="form-control select2 input"
                                           searchable name="specialization_id"
                                   >
                                        <option selected value="0">اختر التخصص</option>
                                        @foreach($Mainspecialties as $specialty)
                                           <optgroup label="{{$specialty->name_ar}}">
                                               @foreach(getsubSpecialtiesByMainSpecialtiesId($specialty->id) as $subSpecialty)
                                                   <option value="{{$subSpecialty->id}}">{{$subSpecialty->name_ar}}</option>
                                               @endforeach
                                               </optgroup>
                                       @endforeach
                                    </select>
                                    <span class="icon">
                                        <i class="fal fa-school"></i>
                                    </span>
                                </span>
                                      <span class="col-lg-3 mt-3 col-md-6 col-12 px-2">
                                    <label>
                                        سنوات
                                    </label>
                                    <br>
                                   <div class="date">
                                        <input style="border-radius: 5px 5px 5px 5px; width: 120px;" type="date" class="input" name="" >


                                        <input type="date" style="border-radius: 5px 5px 5px 5px; width: 120px;" name="" class="input" dataformatas="yy" >


                                    </div>
                                </span>
                                      <a class="Delete" href="javascript:void(0)">
                                          <i class="fal fa-trash-alt"></i>
                                          حذف
                                      </a>
                                  </div>
                              </div>
                              <div class="col-12 addEduCol noBT">
                                  <a href="javascript:void(0)">
                                <span class="icon">
                                    <i style="bottom: unset; right: unset;" class="fal fa-plus"></i>
                                </span>
                                      أضف لقب أخر
                                  </a>
                              </div>
                          </div>
                      </div>
                  <div class="col-12 mt-0 text-right">
                      <div class="ok">
                          <button class="firstStep_submit submit next" disabled active type="submit">
                              حفظ
                          </button>
{{--                          <button class="nextStep1 next" type="button">الخطوة التالية</button>--}}

                      </div>

                  </div>


                  {{--
                      <div class="col-12 mt-0 text-right">
                          <div class="ok">
                              <button class="firstStep_submit" active type="submit">
                                  حفظ
                              </button>
                              <button class="nextStep1 submit"  type="button" >الخطوة التالية</button>

                          </div>

                      </div>
--}}
              </div>
              </form>

              <form action="{{route('addLearningSubjects')}}" method="post"  name="step2" id="teacherCompleteProfileStep2" class="dataTeacher" >
                  {{csrf_field()}}

              <div class="row step2" >
                      <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                      <div class="col-12">
                    <span class="titleStep">
                        مواضيع التعليم
                    </span>
                      </div>
                      <div class="col-12 education2">
                          <div>
                              <label for="requiredSubject">
                                  المواضيع المطلوبة
                              </label>
                              <div class="divInput mt-2">
                                  <select requiredX="yes" dir="rtl" id="subjects" class="form-control select2 input" searchable name="topics[]"
                                          multiple="multiple">
                                      <option value=""></option>
                                      @foreach($maintopics as $maintopic)
                                          <optgroup label="{{$maintopic->name_ar}}">
                                              @foreach(getsubTopicByMainTopicId($maintopic->id) as $subtopic)
                                                  <option value="{{$subtopic->id}}">{{$maintopic->name_ar}}- {{$subtopic->name_ar}}</option>
                                              @endforeach
                                          </optgroup>
                                      @endforeach
                                  </select>
                                  <i style="top: 10px;" class="fal fa-map-marker-alt"></i>
                              </div>

                          </div>

                          <div>
                              <p>
                                  لم تجد موضوعك ؟
                              </p>
                              <a href="javascript:void(0)" class="addSubjectBtn">
                                  أضف موضوع
                              </a>

                          </div>

                      </div>
                      <div class="col-12 mt-3 text-right">
                          <div class="ok">
                              <button class="secondStep_submit next submit" disabled type="submit">
                                  حفظ
                              </button>
                              <button class="nextStep2 next"  type="button">
                                  للخطوة التالية
                              </button>
                          </div>
                      </div>

              </div>
              </form>

              <form method="post" action="{{route('storePriceAndCities')}}" id="teacherCompleteProfileStep3"  class="dataTeacher" >
                  {{csrf_field()}}
              <div class="row step3">
                  <div class="col-12">
                    <span class="titleStep">
                        مكان التعليم والسعر
                    </span>
                  </div>

                      <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                  <div class="col-12 country2">
                      <label for="city2">
                          اختر بلدات التعليم
                      </label>
                      <div class="position-relative">

                          <select requiredX="yes" dir="rtl" id="cities2" class="form-control select2 input" searchable name="teacher_city[]"
                                  multiple="multiple">

                              @foreach($cities as $city)
                                  <option value="{{$city->id}}">{{$city->name_ar}}</option>
                              @endforeach
                          </select>


                          <label for="city2" class="icon iconDown">
                              <i class="fas fa-chevron-down"></i>
                          </label>
                          <label for="city2" class="icon iconPlace">
                              <i class="fad fa-map-marked-alt" style="bottom: unset;
    top: 12px;"></i>
                          </label>
                      </div>

                  </div>
                  <div class="col-12 m-0 p-0 px-3 mt-2">
                    <span style="display: inline-block; font-size: 15px; color: #696871;">
                        مكان الدرس والسعر
                    </span>
                  </div>
                  <div class="col-12 lesson mt-2">
                      <div>
                        <span>
                            <input checked type="checkbox" name="lesson" id="lesson1" hidden>
                            <label for="lesson1">
                                <i class="notcheck fal fa-circle"></i>
                                <i class="check fas fa-check-circle"></i>
                                بيت المعلم
                            </label>
                            <div class="inputPrice">
                                <input type="text" name="price_at_teacher" class="input" placeholder="أدخل السعر للساعة" id="">
                                <i class="fal fa-shekel-sign"></i>
                            </div>
                        </span>
                      </div>
                      <div>
                        <span>
                            <input checked type="checkbox" name="lesson" id="lesson2" hidden>
                            <label for="lesson2">
                                <i class="notcheck fal fa-circle"></i>
                                <i class="check fas fa-check-circle"></i>
                                بيت الطالب
                            </label>
                            <div class="inputPrice">
                                <input type="text" name="price_at_student" class="input" placeholder="أدخل السعر للساعة" id="">
                                <i class="fal fa-shekel-sign"></i>
                            </div>
                        </span>
                      </div>
                      <div>
                        <span>
                            <input type="checkbox" name="lesson" id="lesson3" hidden>
                            <label for="lesson3">
                                <i class="notcheck fal fa-circle"></i>
                                <i class="check fas fa-check-circle"></i>
                                أون لاين
                            </label>
                            <div class="inputPrice">
                                <input type="text" name="price_online" class="input" placeholder="أدخل السعر للساعة" id="">
                                <i class="fal fa-shekel-sign"></i>
                            </div>
                        </span>
                      </div>
                      <div>
                        <span>
                            <input type="checkbox" name="lesson" id="lesson4" hidden>
                            <label for="lesson4">
                                <i class="notcheck fal fa-circle"></i>
                                <i class="check fas fa-check-circle"></i>
                                مكتبة أو مكان أخر
                            </label>
                            <div class="inputPrice">
                                <input type="text" name="price_at_others" class="input" placeholder="أدخل السعر للساعة" id="">
                                <i class="fal fa-shekel-sign"></i>
                            </div>
                        </span>
                      </div>
                      <div class="ifDiscount">
                          <p>
                              خصم لدرسين أو أكثر؟
                          </p>
                          <span>
                            <input checked type="checkbox" name="is_discount" class="input" id="discount0" value="1"  hidden>
                            <label for="discount0">
                                <i class="notcheck fal fa-circle"></i>
                                <i class="check fas fa-check-circle"></i>
                                نعم
                            </label>
                            <div class="inputPrice">
                                <input type="text" name="discount_percentage" class="input" placeholder="أدخل نسبة الخصم" name="" id="">
                                <i class="fal fa-badge-percent"></i>
                            </div>
                        </span>
                      </div>
                  </div>
                  <div class="col-12 mt-0 text-right">
                      <div class="ok">
                          <button class="thirdStep_submit submit" disabled type="submit">
                              حفظ
                          </button>
                          <button class="nextStep3 next"  type="button">
                              الخطوة التالية
                          </button>
                      </div>
                  </div>

              </div>
              </form>

              <form action="{{route('storeExperience')}}"  method="post" id="teacherCompleteProfileStep4" enctype="multipart/form-data"  class="dataTeacher" >
                  {{csrf_field()}}
                  <div class="row step4">
                  <div class="col-12 mt-0 mb-1">
                    <span class="titleStep">
                        خبرة وتسويق
                    </span>
                  </div>
                      <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                  <div class="col-12 mb-2">
                      <p class="subTitle">
                          الخبرة
                      </p>
                  </div>
                  <div class="col-12 mt-0 exp">
                      <div>

                          <input id="exp1" type="checkbox" class="input" hidden name="school_student_learning" value="1">
                          <label for="exp1">
                              <i class="notcheck fal fa-circle"></i>
                              <i class="check fas fa-check-circle"></i>
                              تعليم طلاب مدارس
                          </label>
                      </div>
                      <div>
                          <input id="exp2" type="checkbox" class="input" hidden name="lebsekhiometry" value="1">
                          <label for="exp2">
                              <i class="notcheck fal fa-circle"></i>
                              <i class="check fas fa-check-circle"></i>
                              تحضير لبسيخومتري
                          </label>
                      </div>
                      <div>
                          <input id="exp3" type="checkbox" class="input" hidden name="lebjrot_preparation" value="1">
                          <label for="exp3">
                              <i class="notcheck fal fa-circle"></i>
                              <i class="check fas fa-check-circle"></i>
                              تحضير لبجروت
                          </label>
                      </div>
                      <div>
                          <input id="exp4" type="checkbox" class="input" hidden name="exam_preparation" value="1">
                          <label for="exp4">
                              <i class="notcheck fal fa-circle"></i>
                              <i class="check fas fa-check-circle"></i>
                              تحضير لامتحانات
                          </label>
                      </div>
                      <div>
                          <input id="exp5" type="checkbox" class="input" hidden name="university_lecturer" value="1">
                          <label for="exp5">
                              <i class="notcheck fal fa-circle"></i>
                              <i class="check fas fa-check-circle"></i>
                              محاضر
                          </label>
                      </div>
                      <div>
                          <input id="exp6" type="checkbox" class="input" hidden name="teaching_assistant" value="1">
                          <label for="exp6">
                              <i class="notcheck fal fa-circle"></i>
                              <i class="check fas fa-check-circle"></i>
                              معيد
                          </label>
                      </div>
                      <div>
                          <input id="exp7" type="checkbox" class="input" hidden name="no_exprence" value="1">
                          <label for="exp7">
                              <i class="notcheck fal fa-circle"></i>
                              <i class="check fas fa-check-circle"></i>
                              لا يوجد خيرة
                          </label>
                      </div>
                  </div>
                  <div class="col-12">
                      <p class="subTitle float-left mb-2">
                          التسويق
                      </p>
                      <span class="limitText float-right">
                        <b>
                            0
                        </b>
                        /
                        120
                    </span>
                  </div>
                  <div class="col-12 mt-0">
                      <div class="input">
                          <input type="text" maxlength="120" name="marketing_text" class="py-2 textMarketStep4"
                                 placeholder="ادخل جملة تسويقية 120 حرف بدون رقم جوال أو موقع">
                          <i style="bottom: 18px; right: 25px;" class="fal fa-sticky-note"></i>
                      </div>
                  </div>
                  <div class="col-lg-12 d-flex mt-3">
                      <div class="video">
                          <p class="subTitle">
                              <i style="position: static;" class="fas fa-film"></i>
                              فيديو تعريفي
                          </p>
                          <input type="file" name="video" accept="" hidden id="video">
                          <label for="video">
                              <div id="video_here">
                                  <video style="display: none;" width="100%" height="240" controls>
                                      <source src="">
                                  </video>
                                  <i class="fal fa-cloud-upload"></i>
                              </div>
                              <p>
                                  قم برفع فيديو تعريفي
                              </p>
                          </label>
                      </div>
                      <div class="aboutMe">
                          <label for="about" class="subTitle d-block">
                              <i class="fal fa-sticky-note"></i>
                              الشرح المفصل
                          </label>
                          <textarea name="cv_text" id="about"></textarea>
                      </div>
                  </div>
                  <div class="col-12 text-right mt-3">
                      <div class="ok">
                          <button class="fourthStep_submit submit" disabled type="submit">
                              حفظ
                          </button>
                          <button class="nextStep4 next"  type="button">
                              للخطوة التالية
                          </button>
                      </div>

                  </div>

              </div>
              </form>


              <form method="post" action="{{route('storeWorkHours')}}" id="teacherCompleteProfileStep5"  class="dataTeacher" >
                  {{csrf_field()}}
                  <div class="row step5">
                  <div class="col-12 mt-0 mb-1">
                    <span class="titleStep">
                        ساعات وأيام التدريس
                    </span>
                  </div>

                      <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                  <div class="col-12 mt-0">
                      <div class="table-responsive">
                          <table class="table tableHour">
                              <tr>
                                  <td></td>
                                  <td>الأحد</td>
                                  <td>الإثنين</td>
                                  <td>الثلاثاء</td>
                                  <td>الأربعاء</td>
                                  <td>الخميس</td>
                                  <td>الجمعة</td>
                                  <td>السبت</td>
                              </tr>
                              <tr class="rowFrom">
                                  <td>من الساعة</td>
                                  <td class="sun">
                                      <input class="" name="sun_from[]"  type="time">

                                  </td>
                                  <td class="mon">
                                      <input class="" name="mon_from[]"  type="time">

                                  </td>
                                  <td class="tues">
                                      <input class="" name="tues_from[]"  type="time">

                                  </td>
                                  <td class="wed">
                                      <input class="" name="wed_from"  type="time">

                                  </td>
                                  <td class="thr">
                                      <input class="" name="thr_from"  type="time">

                                  </td>
                                  <td class="fri">
                                      <input class="" name="fri_from" type="time">

                                  </td>
                                  <td class="sat">
                                      <input class="" name="sat_from"   type="time">

                                  </td>
                              </tr>
                              <tr class="rowTo">
                                  <td>إلى الساعة</td>
                                  <td class="sun">
                                      <input class="" name="sun_to[]"  type="time">
                                  </td>
                                  <td class="mon">
                                      <input class="" name="mon_to[]"  type="time">

                                  </td>
                                  <td class="tues">
                                      <input class="" name="tues_to[]"  type="time">

                                  </td>
                                  <td class="wed">
                                      <input class="" name="wed_to[]"  type="time">

                                  </td>
                                  <td class="thr">
                                      <input class="" name="thr_to"  type="time">

                                  </td>
                                  <td class="fri">
                                      <input class="" name="fri_to"  type="time">

                                  </td>
                                  <td class="sat">
                                      <input class="" name="sat_to"   type="time">
                                            <p class="btnDeleteHour">حذف</p>
                                  </td>
                              </tr>
                              <tr class="addHours">
                                  <td colspan="8" data-day="sun">
                                    <span>
                                        <i class="fal fa-plus"></i>
                                        أضف ساعات أخرى
                                    </span>
                                  </td>
                              </tr>


                              <tr class="noActive">
                                  <td></td>
                                  <td>
                                      <input type="checkbox" hidden name="" id="sun">
                                      <label for="sun">
                                          غير متاح
                                      </label>
                                  </td>
                                  <td>
                                      <input type="checkbox" hidden name="" id="mon">
                                      <label for="mon">
                                          غير متاح
                                      </label>
                                  </td>
                                  <td>
                                      <input type="checkbox" hidden name="" id="tues">
                                      <label for="tues">
                                          غير متاح
                                      </label>
                                  </td>
                                  <td>
                                      <input type="checkbox" hidden name="" id="wed">
                                      <label for="wed">
                                          غير متاح
                                      </label>
                                  </td>
                                  <td>
                                      <input type="checkbox" hidden name="" id="thr">
                                      <label for="thr">
                                          غير متاح
                                      </label>
                                  </td>
                                  <td>
                                      <input type="checkbox" hidden name="" id="fri">
                                      <label for="fri">
                                          غير متاح
                                      </label>
                                  </td>
                                  <td>
                                      <input type="checkbox" hidden name="" id="sat">
                                      <label for="sat">
                                          غير متاح
                                      </label>
                                  </td>
                              </tr>
                          </table>
                      </div>
                  </div>
                  <div class="col-12 text-right">
                      <div class="ok">
                          <button class="fivthStep_submit submit" disabled type="submit">
                              حفظ
                          </button>
                          <button class="nextStep5 next"  type="button">
                             <a href="{{url('/teacher/payment/subscribe')}}"> الخطوة التالية</a>
                          </button>
                      </div>
                  </div>

              </div>
              </form>
          </div>
    </div>
    <div class="popUp popUpFromTeacher popUpAddSubject">
        <div>
            <div class="headerPopUp">
                <i class="fal fa-user-circle"></i>
                اضف الموضوع الذي تريد تعليمه
                <span class="closeX">
                    <i class="fal fa-times"></i>
                </span>
            </div>
            <div class="bodyPopUp">
                <form class="formAddSubject" numCorrect="0" action="">
                    <div class="inputSub">
                        <label for="title">
                            اكتب الموضوع هنا
                        </label>
                        <div class="divInput">
                            <input id="title" type="text" value="">
                            <i class="fal fa-user-circle"></i>
                        </div>
                    </div>
                    <div class="addAnotherInputSub">
                        <i style="position: static!important;" class="fal fa-plus"></i>
                        أضف موضوع أخر
                    </div>
                    <p class="note">
                        سيتم إضافة الموضوع بعد الموافقة عليه
                    </p>
                    <div class="ok">
                        <button type="button" class="closeX">
                            إلغاء
                        </button>
                        <button class="submit" type="button">
                            إضافة
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


@section('footer')
<script>
    /*
    import Input from "@/Jetstream/Input";
    export default {
        components: {Input}
    }
    */

</script>
    <script src="{{--asset('assets/website/js/jquery.amsifyselect.js')--}}"></script>

    <script type="text/javascript">
        /*
        $('select').amsifySelect({
            type: 'amsify'
        });*/
    </script>
    <script src="{{asset('assets/website/js/flatpickr.min.js')}}"></script>
    <script>
        $('.timepicker').flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            defaultDate: "16:30",
            disableMobile: true
        });

        $(document).on("click", ".completeDataTeacher .addAnotherInputSub", function () {
            $('.timepicker').flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
                defaultDate: "16:30",
                disableMobile: true
            });
        })
    </script>

    <script>
        $('.select2#requiredSubject').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '20'
        });
        $('.select2#cities').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '20'
        });

        $('.select2#universities').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '2'
        });

        $('.select2#specializations').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '2'
        });
        $('.select2').select2({
            placeholder: "اختر...",
            dir: 'rtl',

        });

    </script>


    <script>
        $(document).on("keyup change blur", ".completeDataTeacher .input[requiredX]", function () {


            if ($(this).attr("requiredX") == "yes") {
                if (this.nodeName.toLowerCase() == "input") {
                    if ($(this).val().length == 0) {
                        $(this).addClass("error").removeClass("correct");
                        $($($(this).parent(".divInput")).next("small.error")).show();
                        $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorEmpty"));
                        $(this).attr("true", "no");
                    } else if ($(this).val().length < $(this).attr("min")) {
                        if ($(this).attr("min")) {
                            $(this).addClass("error").removeClass("correct");
                            $($($(this).parent(".divInput")).next("small.error")).show();
                            $($($(this).parent(".divInput")).next("small.error")).text($(this).attr(
                                "errorMin"));
                            $(this).attr("true", "no");
                        }
                    } else if ($(this).val().length > $(this).attr("max")) {
                        if ($(this).attr("max")) {
                            $(this).addClass("error").removeClass("correct");
                            $($($(this).parent(".divInput")).next("small.error")).show();
                            $($($(this).parent(".divInput")).next("small.error")).text($(this).attr(
                                "errorMax"));
                            $(this).attr("true", "no");
                        }
                    } else {
                        $(this).addClass("correct").removeClass("error");
                        $($($(this).parent(".divInput")).next("small.error")).hide();
                        $($($(this).parent(".divInput")).next("small.error")).text();
                        $(this).attr("true", "yes");
                    }
                } else if (this.nodeName.toLowerCase() == "select") {
                    if ($(this).val() == 0) {
                        $(this).addClass("error").removeClass("correct");
                        $($($(this).parent(".divInput")).next("small.error")).show();
                        $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorEmpty"));
                        $(this).attr("true", "no");
                    }    else if ($(this).val() != 0){
                        $(this).addClass("correct").removeClass("error");
                        $($($(this).parent(".divInput")).next("small.error")).hide();
                        $($($(this).parent(".divInput")).next("small.error")).text();
                        $(this).attr("true", "yes");
                    }
                }

                if ($(this).attr("type") == "email") {
                    if (IsEmail($(this).val()) == false) {
                        $(this).addClass("error").removeClass("correct");
                        $($($(this).parent(".divInput")).next("small.error")).show();
                        $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorType"));
                        $(this).attr("true", "no");
                        return false;
                    } else {
                        $(this).addClass("correct").removeClass("error");
                        $($($(this).parent(".divInput")).next("small.error")).hide();
                        $($($(this).parent(".divInput")).next("small.error")).text();
                        $(this).attr("true", "yes");
                        return true;
                    }
                }

                if ($(this).attr("type") == "checkbox") {
                    if ($(this).is(':checked')) {
                        $(this).attr("true", "yes");
                    } else {
                        $(this).attr("true", "no");
                    }
                }
            } else {
                $(this).attr("true", "yes")
            }

            for (var i = 0; i < $(".completeDataTeacher form.formToJoinTeacher input").length; i++) {
                if ($($(".completeDataTeacher form.formToJoinTeacher input")[i]).attr("true") != "yes") {
                    x++;
                }
                if (i == $(".completeDataTeacher form.formToJoinTeacher input").length - 1) {

                    if (x != 0) {
                        $($(".completeDataTeacher form.formToJoinTeacher").find(".submit")).attr("disabled",
                            "disabled");
                    } else {
                        $($(".completeDataTeacher form.formToJoinTeacher").find(".submit")).removeAttr(
                            "disabled");
                    }
                    x = 0;
                }
            }

        })
        var x = 0;

        $(document).on("change keyup", ".step1 .input", function () {
            console.log("red")
            for (var i = 0; i < $(".completeDataTeacher .dataTeacher .step1 .input").length; i++) {
                if ($($(".completeDataTeacher .dataTeacher .step1 .input")[i]).attr("true") != "yes") {
                    x++;
                }
                if (i == $(".completeDataTeacher .dataTeacher .step1 .input").length - 1) {

                    if (x != 0) {
                        $($(".completeDataTeacher .dataTeacher .step1").find(".submit")).attr("disabled",
                            "disabled");
                    } else {
                        $($(".completeDataTeacher .dataTeacher .step1").find(".submit")).removeAttr("disabled");
                        console.log("ews")
                    }
                    console.log(x)
                    x = 0;
                }
            }
        })

        for (var i = 0; i < $(".completeDataTeacher .dataTeacher .input").length; i++) {

            if ($($(".completeDataTeacher .dataTeacher .input")[i]).attr("requiredX") == "yes") {
                $($(".completeDataTeacher .dataTeacher .input")[i]).attr("true", "no");
            } else {
                $($(".completeDataTeacher .dataTeacher .input")[i]).attr("true", "yes");
            }
        };

        /*
        setTimeout(function () {
            $(".step1 .input").trigger("keyup")
        }, 500)
*/
        //////////////////Step 2///////////////////
        var x2 = 0;

        $(document).on("change keyup", ".step2 .input", function () {
            console.log("red")
            for (var i = 0; i < $(".completeDataTeacher .dataTeacher .step2 .input").length; i++) {
                if ($($(".completeDataTeacher .dataTeacher .step2 .input")[i]).attr("true") != "yes") {
                    x2++;
                }
                if (i == $(".completeDataTeacher .dataTeacher .step2 .input").length - 1) {

                    if (x2 != 0) {
                        $($(".completeDataTeacher .dataTeacher .step2").find(".submit")).attr("disabled",
                            "disabled");
                    } else {
                        $($(".completeDataTeacher .dataTeacher .step2").find(".submit")).removeAttr("disabled");
                    }
                    console.log(x2)
                    x2 = 0;
                }
            }
        })

        /////////////////////////////step3///////////////////////////
        var y = 0;

    //    $(document).on("mousemove", ".completeDataTeacher .step3", function () {
      //      $(".completeDataTeacher .step3 .input[requiredx='yes']").trigger("keyup");
     //   })

        $(document).on("change keyup", ".completeDataTeacher .step3 .input[requiredx='yes']", function () {


            for (var i = 0; i < $(".completeDataTeacher .dataTeacher .step3 .input[type='text']").length; i++) {
                if ($($(".completeDataTeacher .dataTeacher .step3 .input[requiredx='yes']")[i]).val() == '') {
                    $($(".completeDataTeacher .dataTeacher .step3 .input[requiredx='yes']")[i]).attr("true",
                        "no");
                    y++;
                } else {
                    $($(".completeDataTeacher .dataTeacher .step3 .input[requiredx='yes']")[i]).attr("true",
                        "yes");
                }
                if (i == $(".completeDataTeacher .dataTeacher .step3 .input[type='text']").length - 1) {
                    if (y != 0) {
                        $($(".completeDataTeacher .dataTeacher .step3").find(".submit")).attr("disabled",
                            "disabled");
                    } else if (y == 0) {
                        $($(".completeDataTeacher .dataTeacher .step3").find(".submit")).removeAttr("disabled");
                    }
                    console.log(y)
                    y = 0;
                }
            }

        })

        //////////////////////////////Step4///////////////////////
        $(document).on("keyup", ".completeDataTeacher .textMarketStep4", function () {
            $(".completeDataTeacher .step4 .limitText b").text($(this).val().length)
            if ($(this).val().length == 0) {
                check2Step4 = 0;
            } else {
                check2Step4 = 1;
            }
        })

        var z = 0;

        $(document).on("change", ".completeDataTeacher .step4 .exp .input", function () {

            if ($($(".completeDataTeacher .step4 .exp .input")).is(':checked')) {
                check1Step4 = 1;
            } else {
                check1Step4 = 0;
            }

        });

        $(document).on("keyup", ".completeDataTeacher .aboutMe textarea", function () {
            if ($(this).val().length == 0) {
                check4Step4 = 0;
            } else {
                check4Step4 = 1;
            }
        })

        $(document).on("change", ".completeDataTeacher .video input", function (e) {

            var $source = $('.completeDataTeacher #video_here video');
            $source[0].src = URL.createObjectURL(this.files[0]);

            $(".completeDataTeacher #video_here i").hide();
            $('.completeDataTeacher #video_here video').show();

            if ($($(this)[0].files).length == 0) {
                check3Step4 = 1;  // video validation
            } else {
                check3Step4 = 1;
            }
        })

        var check1Step4 = 0;
        var check2Step4 = 0;
        var check3Step4 = 1;
        var check4Step4 = 0;

        $(document).on("mousemove", ".completeDataTeacher .step4 ", function () {
            if (check1Step4 == 1 && check2Step4 == 1 && check3Step4 == 1 && check4Step4 == 1) {
                $($(".completeDataTeacher .dataTeacher .step4").find(".submit")).removeAttr("disabled");
            } else {
                $($(".completeDataTeacher .dataTeacher .step4").find(".submit")).attr("disabled",
                    "disabled");
            }
        })
        ///////////////////////////////
        $(document).on("click", ".completeDataTeacher .dataTeacher .step1 .ok .next:not(:disabled)", function () {
            $(".completeDataTeacher .rowStep").attr("step", "2");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step2 .ok .next:not(:disabled)", function () {
            $(".completeDataTeacher .rowStep").attr("step", "3");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step3 .ok .next:not(:disabled)", function () {
            $(".completeDataTeacher .rowStep").attr("step", "4");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step4 .ok .next:not(:disabled)", function () {
            $(".completeDataTeacher .rowStep").attr("step", "5");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })
    </script>

{{--
  <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".nextStep1").hide(); //this changes the html to Saving...

        $(".firstStep_submit").click(function(e){

            e.preventDefault();
            $(this).html('جاري الحفظ...'); //this changes the html to Saving...
            $(this).attr('disabled', true); //this will disable the button onclick

            var name = $("input[name=name]").val();
            var last_name = $("input[name=last_name]").val();
            var user_id = $("input[name=user_id]").val();
            var gender_id = $("input[name=gender_id]").val();
            var city_id = $("input[name=city_id]").val();
            var birth_year = $("input[name=birth_year]").val();
            var whatsapp = $("input[name=whatsapp]").val();
            var is_accept_appear_mobile_no = $("input[name=is_accept_appear_mobile_no]").val();
            var is_accept_whatsapp_msg = $("input[name=is_accept_whatsapp_msg]").val();
            var image = $("input[name=image]").val();
            var degree_id = $("input[name=degree_id]").val();
            var university_id = $("input[name=university_id]").val();
            var specialization_id = $("input[name=specialization_id]").val();
            var from_year = $("input[name=from_year]").val();
            var to_year = $("input[name=to_year]").val();
           // var email = $("input[name=email]").val();
          //  var password = $("input[name=password]").val();
            var mobile = $("input[name=mobile]").val();
            var _token = $("input[name=_token]").val();
            var url = '{{ route('teacher_storeCompleteProfile') }}';

            $.ajax({
                url:url,
                method:'POST',
                data:{
                    name:name,
                    last_name:last_name,
                    user_id:user_id,
                  //  email:email,
                  //  password:password,
                    gender_id:gender_id,
                    city_id:city_id,
                    birth_year:birth_year,
                    whatsapp:whatsapp,
                    is_accept_appear_mobile_no:is_accept_appear_mobile_no,
                    is_accept_whatsapp_msg:is_accept_whatsapp_msg,
                    image:image,
                    degree_id:degree_id,
                    university_id:university_id,
                    specialization_id:specialization_id,
                    from_year:from_year,
                    to_year:to_year,
                    mobile:mobile,
                    _token:_token,
                },

                success:function(response){
                    if(response.status == true){
                     //   alert(response.msg)
                     //   $(".nextStep1").show()
                     //   if (confirm(response.msg)) {
                            $(".nextStep1").trigger("click")
                      //  }
                    //Message come from controller
                        $('#nameError,#emailError,#mobileError,#passwordError').remove();
                        $("#teacherCompleteProfileStep1").trigger('reset');
                        $(".firstStep_submit").html('انضم').hide(); //this changes the html to Saving...
                        $(".nextStep1").show(); //this changes the html to Saving...
                          $(".nextStep1").show(); //this changes the html to Saving...
                        setTimeout(3000);
                      //  window.location.replace(response.redirect);

                    }else{
                        $(this).html('انضم'); //this changes the html to Saving...

                    }
                },
                /*
                error:function(error){
                   alert(log(error))
                    console.log(error)
                }*/
                error: function( response )
                {
                    if (response.responseJSON.errors.name){
                        $('#nameError').text(response.responseJSON.errors.name)
                        $('#stu_name').addClass("error").removeClass("correct");
                    }
                    if (response.responseJSON.errors.email){
                        $('#emailError').text(response.responseJSON.errors.email);
                        $('#stu_email').addClass("error").removeClass("correct");
                    }
                    if (response.responseJSON.errors.mobile){
                        $('#mobileError').text(response.responseJSON.errors.mobile);
                        $('#stu_mobile').addClass("error").removeClass("correct");
                    }
                    if (response.responseJSON.errors.password){
                        $('#passwordError').text(response.responseJSON.errors.password);
                        $('#stu_password').addClass("error").removeClass("correct");
                    }
                    if (response.responseJSON.errors.accept_use_terms){
                        $('#accept_use_termsError').text(response.responseJSON.errors.accept_use_terms);
                        $('#stu_accept_use_termsError').addClass("error").removeClass("correct");
                    }


                    $(".firstStep_submit").html('انضم');
                    $(".firstStep_submit").attr('disabled', false);

                    // $($($(this).parent(".divInput")).next("small.error")).show();
                    //  $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorEmpty"));
                    //  $(this).attr("true", "no");

                    //  console.log(data);
                    //  alert(this.data.error);
                    //   printErrorMsg(data.error);
                }
            });
            /*
                    function printErrorMsg (msg) {
                        $(".student_submit").find("ul").html('');
                        $(".student_submit").css('display','block');
                        $.each( msg, function( key, value ) {
                            $(".student_submit-msg").find("ul").append('<li>'+value+'</li>');
                        });
                    }
             */
        });

        /////////////////////////////////ٍStep2/////////////////////////////////////

        $(".nextStep2").hide(); //this changes the html to Saving...

        $(".secondStep_submit").click(function(e){

            e.preventDefault();
            $(this).html('جاري الحفظ...'); //this changes the html to Saving...
            $(this).attr('disabled', true); //this will disable the button onclick

            var topics = $("input[name=topics]").val();
            var _token = $("input[name=_token]").val();
            var url = '{{ route('addLearningSubjects') }}';

            var data = $('step2').select2('topics');
            if(data) {
                alert(data.text);
            }

            $.ajax({
                url:url,
                method:'POST',
                data:{
                    topics:topics,
                    _token:_token,
                },

                success:function(response){
                    if(response.status == true){
                      //  alert(response.msg) //Message come from controller

                        $('#nameError').remove();
                        $("#teacherCompleteProfileStep2").trigger('reset');
                        $(".secondStep_submit").html('انضم').attr('disabled', false).hide();
                      //  $(".secondStep_submit").attr('disabled', false);
                     //   $(".secondStep_submit").html('انضم').hide(); //this changes the html to Saving...
                        $(".nextStep2").trigger("click"); //this changes the html to Saving...
                        setTimeout(3000);

                    }else{
                        $(this).html('حفظ'); //this changes the html to Saving...

                    }
                },

                error: function( response )
                {
                    if (response.responseJSON.errors.name){
                        $('#nameError').text(response.responseJSON.errors.name)
                        $('#stu_name').addClass("error").removeClass("correct");
                    }
                    $(".secondStep_submit").html('انضم');
                    $(".secondStep_submit").attr('disabled', false);

                }
            });
        });

        /////////////////////////////////ٍStep3/////////////////////////////////////

        $(".nextStep3").hide(); //this changes the html to Saving...

        $(".thirdStep_submit").click(function(e){

            e.preventDefault();
            $(this).html('جاري الحفظ...'); //this changes the html to Saving...
            $(this).attr('disabled', true); //this will disable the button onclick

            var teacher_city = $("input[name=teacher_city]").val();
            var user_id = $("input[name=user_id]").val();
            var price_at_teacher = $("input[name=price_at_teacher]").val();
            var price_at_student = $("input[name=price_at_student]").val();
            var price_at_others = $("input[name=price_at_others]").val();
            var price_online = $("input[name=price_online]").val();
            var is_discount = $("input[name=is_discount]").val();
            var discount_percentage = $("input[name=discount_percentage]").val();
            var _token = $("input[name=_token]").val();
            var url = '{{ route('storePriceAndCities') }}';

            $.ajax({
                url:url,
                method:'POST',
                data:{
                    teacher_city:teacher_city,
                    user_id:user_id,
                    price_at_teacher:price_at_teacher,
                    price_at_student:price_at_student,
                    price_at_others:price_at_others,
                    price_online:price_online,
                    is_discount:is_discount,
                    discount_percentage:discount_percentage,
                    _token:_token,
                },

                success:function(response){
                    if(response.status == true){
                        alert(response.msg) //Message come from controller
                        $('#nameError').remove();
                        $("#teacherCompleteProfileStep3").trigger('reset');
                        $(".thirdStep_submit").html('انضم').attr('disabled', false).hide();
                        //  $(".secondStep_submit").attr('disabled', false);
                        //   $(".secondStep_submit").html('انضم').hide(); //this changes the html to Saving...
                        $(".nextStep3").show(); //this changes the html to Saving...
                        setTimeout(3000);

                    }else{
                        $(this).html('حفظ'); //this changes the html to Saving...

                    }
                },

                error: function( response )
                {
                    if (response.responseJSON.errors.name){
                        $('#nameError').text(response.responseJSON.errors.name)
                        $('#stu_name').addClass("error").removeClass("correct");
                    }
                    $(".thirdStep_submit").html('انضم');
                    $(".thirdStep_submit").attr('disabled', false);

                }
            });
        });
////////////////////////////step4///////////////////////

        $(".nextStep4").hide(); //this changes the html to Saving...

        $(".fourthStep_submits").click(function(e){

            e.preventDefault();
            $(this).html('جاري الحفظ...'); //this changes the html to Saving...
            $(this).attr('disabled', true); //this will disable the button onclick
            alert('تم تسجيل الخبرات بنجاح. الرجاء الانتقال للخطوة التالية')
            $(".fourthStep_submit").html('انضم').attr('disabled', false).hide();
            $(".nextStep4").show(); //this changes the html to Saving...
            setTimeout(3000);
           // var teacher_city = $("input[name=teacher_city]").val();
           // var user_id = $("input[name=user_id]").val();
            //var price_at_teacher = $("input[name=price_at_teacher]").val();
           // var price_at_student = $("input[name=price_at_student]").val();
          //  var price_at_others = $("input[name=price_at_others]").val();
           // var price_online = $("input[name=price_online]").val();
           // var is_discount = $("input[name=is_discount]").val();
           // var discount_percentage = $("input[name=discount_percentage]").val();
           // var _token = $("input[name=_token]").val();


            $.ajax({
                url:url,
                method:'POST',
                data:{
                   // teacher_city:teacher_city,
                  //  user_id:user_id,
                  //  price_at_teacher:price_at_teacher,
                  ///  price_at_student:price_at_student,
                  //  price_at_others:price_at_others,
                   // price_online:price_online,
                  //  is_discount:is_discount,
                  //  discount_percentage:discount_percentage,
                    _token:_token,
                },

                success:function(response){
                    if(response.status == true){
                        alert(response.msg) //Message come from controller
                        $('#nameError').remove();
                        $("#teacherCompleteProfileStep4").trigger('reset');
                        $(".fourthStep_submit").html('انضم').attr('disabled', false).hide();
                        //  $(".secondStep_submit").attr('disabled', false);
                        //   $(".secondStep_submit").html('انضم').hide(); //this changes the html to Saving...
                        $(".nextStep4").show(); //this changes the html to Saving...
                        setTimeout(3000);

                    }else{
                        $(this).html('حفظ'); //this changes the html to Saving...

                    }
                },

                error: function( response )
                {
                    if (response.responseJSON.errors.name){
                        $('#nameError').text(response.responseJSON.errors.name)
                        $('#stu_name').addClass("error").removeClass("correct");
                    }
                    $(".thirdStep_submit").html('انضم');
                    $(".thirdStep_submit").attr('disabled', false);

                }
            });

            ////////////////////////////step5///////////////////////

            $(".nextStep5").hide(); //this changes the html to Saving...

            $(".fivthStep_submits").click(function(e) {

                e.preventDefault();
                $(this).html('جاري الحفظ...'); //this changes the html to Saving...
                $(this).attr('disabled', true); //this will disable the button onclick
                alert('تم تسجيل المواعيد بنجاح. الرجاء الانتقال للخطوة التالية')
                $(".fivthStep_submits").html('انضم').attr('disabled', false).hide();
                $(".nextStep5").show(); //this changes the html to Saving...
                setTimeout(3000);
            });
        });





    </script>
--}}

<script>
    setTimeout(function () {
        for (var i = 0; i < $($(".step1 .input")).length; i++) {
            if ($($(".step1 .input")[i]).val() != "") {
                $($(".step1 .input")[i]).trigger("keyup")
            }
        }
    }, 500)

    var inputSub = $(".inputSub .divInput").html();

    $(document).on("click", ".addAnotherInputSub", function () {
        $(".inputSub").append('<div class="divInput"> ' + inputSub + '</div>')
    })


    // btnDeleteHour

    $(document).on("click", ".btnDeleteHour", function () {
        $($($(this).parents("tr.rowTo")[0]).prev()).remove();
        $($(this).parents("tr.rowTo")[0]).remove();
    })

</script>
@endsection
