@extends('app')

@section('header')
<style>
    /* style completeData.html */

    .completeData {
        margin: 40px auto;
        border: 1px solid #E8E8E8;
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
    }

    .completeData .rowHeadPage {
        padding: 15px;
        border-bottom: 1px solid #E8E8E8;
    }

    .completeData .titlePage {
        font-size: 20px;
        color: var(--colorText2);
    }

    .completeData .titlePage span.icon {
        font-size: 24px;
        margin-left: 9px;
    }

    form.dataStudent {
        padding: 20px 0;
    }

    form.dataStudent .row>div {
        margin: 20px 0 0;
        padding-bottom: 10px;
    }

    form.dataStudent .divInput {
        position: relative;
    }

    form.dataStudent label {
        color: #979797;
        font-size: 14px;
    }

    form.dataStudent small {
        font-size: 12px;
        color: #979797;
        position: absolute;
        bottom: -12px;
    }

    form.dataStudent input {
        border: 1px solid #E8E8E8;
        display: block;
        width: 100%;
        margin-top: 7px;
        padding: 6px 40px 6px 6px;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        font-size: 15px;
    }

    form.dataStudent input:focus {
        border: 1px solid #E8E8E8;
    }

    form.dataStudent .chx {
        display: flex;
        align-items: center;
    }

    form.dataStudent .chx label {
        flex: 0 0 auto;
        border: 1px solid #E8E8E8;
        margin-top: 7px;
        padding: 3px 8px;
    }

    form.dataStudent .chx label:first-of-type {
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px;
        border-left: 0;
    }

    form.dataStudent .chx label:last-of-type {
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
    }

    form.dataStudent div:not(.agree) i {
        position: absolute;
        bottom: 8px;
        right: 11px;
        font-size: 20px;
    }

    form.dataStudent input[type="checkbox"]+label,
    form.dataStudent input[type="radio"]+label {
        display: flex;
        align-items: center;
        font-size: 14px;
    }

    form.dataStudent input[type="checkbox"]+label::before,
    form.dataStudent input[type="radio"]+label::before {
        content: "\f111";
        font-family: 'Font Awesome 5 Pro';
        font-weight: 300;
        font-size: 18px;
        margin-left: 7px;
    }

    form.dataStudent input[type="checkbox"]:checked+label::before,
    form.dataStudent input[type="radio"]:checked+label::before {
        content: "\f058";
        font-family: 'Font Awesome 5 Pro';
        font-weight: 900;
        font-size: 18px;
        margin-left: 7px;
        color: var(--colorText1);
    }

    .dataStudent .colImg>div {
        border: 1px solid #E8E8E8;
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
        background-color: #F8F8F8;
        overflow: hidden;
    }

    .dataStudent .colImg .img {
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .dataStudent .colImg .img img {
        max-width: 100%;
    }

    .dataStudent .colImg a {
        background-color: #FFF;
        padding: 8px;
        border-top: 1px solid #E8E8E8;
    }

    form .ok button {
        border: 1px solid var(--colorText1);
        background-color: var(--colorText1);
        color: #FFF;
        padding: 7px;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
    }

    input.error {
        border-color: #DC3545 !important;
    }

    input.correct {
        border-color: #28A745 !important;
    }

    small.error {
        color: #DC3545 !important;
    }

    button[disabled] {
        opacity: 0.7;
    }

    @media (min-width: 0.1px) and (max-width: 575.9px) {
        .completeData {
            width: 94%;
        }
    }

    /* animation @keyFrames */

    @keyframes opacityShow {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }
    .select2{
        border-radius: 5%;
    }
</style>


@endsection


@section('content')
    <div class="container completeData">
        <div class="row rowHeadPage">
            <div class="col-12 titlePage">
                <span class="icon">
                    <i class="fal fa-copy"></i>
                </span>
                بناء البروفايل الخاص بك
            </div>
        </div>
        <form action="{{route('store_completeProfile')}}" method="post" class="row dataStudent" enctype="multipart/form-data" >
            {{csrf_field()}}
            <input type="hidden" name="user_id" value="{{$user->id}}" >
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div>
                            <label for="firstName">
                                الاسم الشخصي
                            </label>
                            <div class="divInput">
                                <input requiredX="yes" name="name" min="3" max="25" errorMin="يجب على الأقل أن يكون 3 حروف"
                                       errorMax="يجب ألا يزيد عن 25 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                       autocomplete="off" id="firstName" type="text" value="{{$user->name}}">
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
                                <input requiredX="yes" name="last_name" min="3" max="25" errorMin="يجب على الأقل أن يكون 3 حروف"
                                       errorMax="يجب ألا يزيد عن 25 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                       autocomplete="off" id="lastName" type="text" value="{{$user->last_name}}">
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
                                <input type="radio" name="gender_id" hidden id="gender1" value="1" required>
                                <label for="gender1">
                                    ذكر
                                </label>
                                <input type="radio" name="gender_id" hidden id="gender2" value="2" required>
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
                                <select requiredX="yes" dir="rtl" id="cities" class="form-control select2" searchable name="city_id"
                                        multiple="multiple">
                                    <option value=""></option>
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
                                <input requiredX="yes" name="birth_year" errorEmpty="يجب ألا يترك الحقل فارغ" autocomplete="off" id="date"
                                       type="date" value="">
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
                                <input requiredX="yes" mobile min="8" max="999999999999" errorMin="يجب على الأقل أن يكون 8 ارقام"
                                       errorMax="يجب ألا يزيد عن 12 ارقام" errorEmpty="يجب ألا يترك الحقل فارغ"
                                       autocomplete="off" id="phone" type="number" value="{{$user->mobile}}">
                                <i class="fal fa-phone"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div>
                            <label for="email">
                                البريد الإلكتروني
                            </label>
                            <div class="divInput">
                                <input requiredX="no" name="email" value="{{$user->email}}" errorEmpty="يجب ألا يترك الحقل فارغ" autocomplete="off"
                                       id="email" type="email" disabled>
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div>
                                <input requiredX="yes" checked type="checkbox" name="is_accept_msg" value="1"  hidden id="agree2">
                                <label for="agree2" style="font-size: 13px;">
                                    أوافق على استلام البيانات
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div>
                            <label for="pass">
                                كلمة المرور
                            </label>
                            <div class="divInput">
                                <input requiredX="no" min="8" max="25" errorMin="يجب على الأقل أن يكون 8 حروف"
                                       errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                       autocomplete="off" id="pass" type="password" value="" disabled>
                                <i class="fal fa-lock-alt"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div>
                            <label for="education">
                                المرحلة التعليمية
                            </label>
                            <div class="divInput">
                                <select requiredX="yes" dir="rtl" id="studyLevel" class="form-control select2" searchable name="studyinglevel_id"
                                        multiple="multiple">
                                    <option disabled>اختر المرحلة التعليمية</option>
                                    @foreach($studinglevels as $level)
                                        <option value="{{$level->id}}">{{$level->name_ar}}</option>
                                    @endforeach
                                </select>

                                <i class="fal fa-school"></i>
                            </div>
                        </div>
                    </div>

                   {{--
                   <div class="col-xl-3 col-md-6">
                        <div>
                            <label for="subjects">
                                مواضيع مطلوبة
                            </label>
                            <div class="divInput">

                  <select requiredX="yes" name="subjects_id[]" class="mdb-select  md-form" multiple searchable="ابحث هنا">
                                    @foreach($maintopics as $maintopic)
                                    <optgroup label="{{$maintopic->name_ar}}">
                                        @foreach(getsubTopicByMainTopicId($maintopic->id) as $subtopic)
                                            <option value="{{$subtopic->id}}">{{$subtopic->name_ar}}</option>
                                                @endforeach
                                    </optgroup>
                                        @endforeach

                                </select>

                            </div>
                        </div>
                    </div>
                   --}}

                    <div class="col-xl-3 col-md-6">
                        <div>
                            <label for="subjects">
                                مواضيع مطلوبة
                            </label>
                            <div class="divInput mt-2">
                                <select requiredX="yes" dir="rtl" id="subjects" class="form-control select2" searchable name="topics[]"
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
                                <i style="top: 10px;" class="fal fa-book"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="teachers">
                                أفضلية المعلمين
                            </label>
                            <div class="divInput chx">
                                <input type="radio" name="student_fav_teachers_genders" hidden id="teachers1" value="1">
                                <label for="teachers1">
                                    ذكر
                                </label>
                                <input type="radio" name="student_fav_teachers_genders" hidden id="teachers2" value="2">
                                <label for="teachers2">
                                    انثى
                                </label>
                                <input type="radio" name="student_fav_teachers_genders" hidden id="teachers3" value="3">
                                <label for="teachers3">
                                    كلاهما
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col colImg">
                <div>
                    <input class="imgFile" hidden type="file" name="image" id="img">
                    <label class="img" for="img">
                        <img class="imgFile" src="{{asset('assets/website/img/camera.svg')}}" alt="">
                    </label>
                    <a href="" class="btn btn-block">
                        ارفع صورتك من
                        <img class="px-3" src="{{asset('assets/website/img/facebook.svg')}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 text-right">
                <div class="ok">
                    <button class="submit"  type="submit">
                        حفظ
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection


@section('footer')

    <script>
        import Input from "@/Jetstream/Input";
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        export default {
            components: {Input}
        }
    </script>

<script>
    $(document).on("change", ".imgFile", function () {
        readURL(this)
    })

    // change img
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('img.imgFile').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }


    $(document).on("change", "input", function () {
        if ($(this).next("datalist").length == 1) {
            // console.log($(this).next("datalist"))
            $(this).attr("data-value", $($($(this).next("datalist")).find("option[value='" + $(this).val() + "']")).attr("data-value"))
        }
    });

</script>

    <script src="{{asset('assets/website/js/jquery.amsifyselect.js')}}"></script>

    <script type="text/javascript">
        /*
        $('select').amsifySelect({
            type: 'amsify'
        });*/
    </script>

   <script>
       /*
       $(document).ready(function() {
           $('.mdb-select').materialSelect();
       });
*/
       $('.select2#subjects').select2({
           placeholder: "اختر...",
           dir: 'rtl',
           maximumSelectionLength: '20'
       });
       $('.select2#cities').select2({
           placeholder: "اختر...",
           dir: 'rtl',
           maximumSelectionLength: '1'
       });

       $('.select2#studyLevel').select2({
           placeholder: "اختر...",
           dir: 'rtl',
           maximumSelectionLength: '1'
       });

   </script>

@endsection
