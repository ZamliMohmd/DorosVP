@extends('app')

@section('header')
    <style>
        /* new */
        .select2-container--default .select2-selection--multiple {
            padding: 4px 35px 4px 4px;
            font-size: 12px;
        }

        .info .select2-container--default .select2-selection--multiple {
            padding: 4px 4px 8px 4px;
            border: 0;
        }

        .info .select2-container--default .select2-results>.select2-results__options {
            border-top: 1px solid #aaa;
        }

        .contentStudent .secInfo .info {
            flex: 0 0 49%;
        }

        .info .select2-container {
            width: 80% !important;
        }

        .educationSelect2 .select2-container--default .select2-selection--multiple {
            padding: 4px 45px 4px 4px;
        }

        .info .select2-container--default.select2-container .select2-selection--multiple{
            border-bottom: 1px solid var(--colorText2);
            border-radius: 0;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            -ms-border-radius: 0;
            -o-border-radius: 0;
        }

        .info .select2-container--default.select2-container--disabled .select2-selection--multiple {
            background-color: transparent;
            color: var(--colorText2);
            border-bottom: 0;
        }


        .contentStudent .secInfo {
            flex-wrap: wrap;
        }

        .contentStudent .secInfo .btnsForm {
            flex: 0 0 100%;
        }

        .contentStudent .secInfo .btnsForm button {
            display: inline-flex;
            align-items: baseline;
            border: 1px solid #E8E8E8;
            padding: 7px;
            border-radius: 8px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
        }

        .contentStudent .secInfo .btnsForm button:nth-of-type(1) {
            margin-left: 5px;
            color: var(--colorText2);
            background-color: #F8F8F8;
        }

        .contentStudent .secInfo .btnsForm button:nth-of-type(2) {
            border-color: var(--colorText1);
            margin-left: 5px;
            color: #FFF;
            background-color: var(--colorText1);
        }

        /* new */
    </style>
@endsection
@section('content')
    {{--
    <div class="container-fluid">
        <div class="row">
       @include('website.student.sidebar')
            <div class="col contentStudent">
                <div class="row">
                    <form class="col-12 secInfo">
                        <div class="img">
                            <div class="imgUser">
                                <img class="imgFile"
                                     @if($student->image == null)
                                    {{ asset('assets/website/img/user.png')}}
                                         @elseif($student->image != null)
                                     {{ url($student->image)}}
                                         @endif

                                     src="" alt="">
                                <input hidden class="imgFile" type="file" name="imgUser" id="imgUser">
                                <label for="imgUser" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </label>
                            </div>
                            <img src="img/vip.png" alt="" class="vip">
                        </div>
                        <div class="textInfo">
                            <div class="info">
                                <label for="name" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-user"></i>
                                </span>
                                <input disabled type="text" name="name" id="name" value="{{$user->name}}">
                            </div>
                            <div class="info">
                                <label for="date" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-calendar-star"></i>
                                </span>
                                <input disabled type="date" name="date" id="date" value="{{$user->student->birth_year}}">
                            </div>
                            <div class="info">
                                <label for="phone" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-phone-volume"></i>
                                </span>
                                <input disabled type="text" name="mobile" id="phone" value="{{$user->mobile}}">
                            </div>
                            <div class="info">
                                <label for="loaction" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-map-marker-check"></i>
                                </span>
                                <input disabled  name="loaction" id="loaction2"
                                       value="{{$user->student->city->name_ar}}">

                            </div>
                            <div class="info">
                                <label for="school" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-school"></i>
                                </span>
                                <input disabled list="school" name="loaction" id="loaction" value="הרווקים">
                                <datalist id="school">
                                    <option value="הרווקים">
                                    <option value="רוקים">
                                    <option value="הרוו">
                                </datalist>
                            </div>
                            <div class="info">
                                <label for="email" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-envelope"></i>
                                </span>
                                <input disabled type="text" name="email" id="email" value="{{$user->email}}">
                            </div>
                            <div class="info">
                                <label for="password" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fas fa-unlock-alt"></i>
                                </span>
                                <input disabled type="password" name="password" id="password" value="123456789">
                            </div>
                            <div class="col-lg-12 p-0 m-auto">
                                <div class="box row">
                                    <div class="title col-12">
                                        <span class="btnEdit m-0">
                                            <span class="icon px-1">
                                                <i class="fal fa-pen"></i>
                                            </span>
                                        </span>
                                        المواضيع المطلوبة
                                        <div class="btns">
                                            <a class="cancel" href="javascript:void(0)">
                                                إلغاء
                                            </a>
                                            <a class="save" href="javascript:void(0)">
                                                حفظ
                                            </a>
                                        </div>
                                    </div>
                                    <div class="show active col-12 pb-0">
                                        <div class="row">
                                            <div class="col-12 education">
                                                <span>
                                                    <span class="icon">
                                                        <i class="fal fa-book"></i>
                                                    </span>
                                                    رياضيات
                                                </span>
                                                <span>
                                                    <span class="icon">
                                                        <i class="fal fa-book"></i>
                                                    </span>
                                                    حسابات
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit col-12">
                                        <div class="row">
                                            <div class="col-12 education">
                                                <div>
                                                    <label for="education">
                                                        أي مواضيع تود أن تعلم
                                                    </label>
                                                    <div class="position-relative">
                                                        <input autocomplete="off" class="cusInput" list="listEducation"
                                                               name="education" id="education">
                                                        <datalist id="listEducation">
                                                            <option value="علوم">
                                                            <option value="فيزياء">
                                                            <option value="كيمياء">
                                                            <option value="ثقافة">
                                                        </datalist>
                                                        <label for="education" class="icon iconDown">
                                                            <i class="fas fa-chevron-down"></i>
                                                        </label>
                                                        <label for="education" class="icon iconPlace">
                                                            <i class="fal fa-book"></i>
                                                        </label>
                                                    </div>
                                                    <div class="listEducation">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
--}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 sideRightStudent">
                <ul>
                    <li>
                        <a href="javascript:void(0)" class="keyList">
                            <span class="icon">
                                <i class="droosvip-2-small-caps-1"></i>
                            </span>
                            حسابي كمعلم
                            <div class="iconDown">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </a>
                        <ul class="listSideRight">
                            <li>
                                <a href="" class="active">
                                    <span class="icon">
                                        <i class="fad fa-user-tie"></i>
                                    </span>
                                    حسابي
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon">
                                        <i class="fal fa-comment-lines"></i>
                                    </span>
                                    الرسائل
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon">
                                        <i class="fal fa-calendar"></i>
                                    </span>
                                    التقويم
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col contentStudent">
                <div class="row">
                    <form action="{{route('student_update')}}" method="post" class="col-12 secInfo" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <input type="hidden" name="student_id" value="{{$student->id}}">
                        <div class="img">
                            <div class="imgUser">
                                @if($student->image == null)
                                    <img class="imgFile" src="{{url('/assets/website/img/imgInfo.png')}}" alt="">
                                @elseif($student->image != null)
                                    <img class="imgFile" src="{{url($student->image)}}" alt="">
                                @endif

                                <input hidden class="imgFile" type="file" name="imgUser" id="imgUser">
                                <label for="imgUser" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </label>
                            </div>

                            <img src="{{url('/assets/website/img/vip.png')}}" alt="" class="vip">
                        </div>
                        <div class="textInfo">
                            <div class="info">
                                <label for="name" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-user"></i>
                                </span>
                                <input disabled type="text" name="name" id="name" value="{{$user->last_name}} {{$user->name}}">
                            </div>

                            <div class="info">
                                <label for="date" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-calendar-star"></i>
                                </span>
                                <input disabled type="date" name="birth_year" id="date" value="{{$student->birth_year}}">
                            </div>
                            <div class="info">
                                <label for="phone" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-phone-volume"></i>
                                </span>
                                <input disabled type="text" name="mobile" id="phone" value="{{$user->mobile}}">
                            </div>
                            <div class="info">
                                <label for="loaction" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-map-marker-check"></i>
                                </span>
                                <select dir="rtl" id="studyLevel" class="form-control select2" searchable name="city_id"
                                        multiple="multiple">
                                    <option disabled>اختر المدينة</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name_ar}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="info">
                                <label for="school" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-school"></i>
                                </span>
                                <select dir="rtl" id="school" disabled class="form-control select2"  searchable name="studyinglevel_id"
                                        multiple="multiple">
                                    <option disabled>اختر المرحلة التعليمية</option>
                                    @foreach($studinglevels as $level)
                                        <option value="{{$level->id}}">{{$level->name_ar}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="info">
                                <label for="email" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fal fa-envelope"></i>
                                </span>
                                <input disabled type="text" name="email" id="email" value="{{$user->email}}">
                            </div>
                            <div class="info">
                                <label for="password" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <span class="icon">
                                    <i class="fas fa-unlock-alt"></i>
                                </span>
                                <input disabled type="password" name="password" id="password" value="{{$user->password}}">
                            </div>
                            <div class="col-lg-12 p-0 m-auto">
                                <div class="box row">
                                    <div class="title col-12">
                                        <span class="btnEdit m-0">
                                            <span class="icon px-1">
                                                <i class="fal fa-pen"></i>
                                            </span>
                                        </span>
                                        المواضيع المطلوبة

                                    </div>
                                    <div class="show active col-12 pb-0">
                                        <div class="row">
                                            <div class="col-12 education">

                                                <span>
                                                    <span class="icon">
                                                        <i class="fal fa-book"></i>
                                                    </span>
                                                    رياضيات
                                                </span>
                                             

                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit col-12">
                                        <div class="row">
                                            <div class="col-12 education educationSelect2">
                                                <div>
                                                    <label for="education">
                                                        أي مواضيع تود أن تعلم
                                                    </label>
                                                    <div class="position-relative">
                                                        <select dir="rtl" id="subjects" class="form-control select2"
                                                                name="education" multiple="multiple">
                                                            <option value=""></option>
                                                            @foreach($maintopics as $maintopic)
                                                                <optgroup label="{{$maintopic->name_ar}}">
                                                                    @foreach(getsubTopicByMainTopicId($maintopic->id) as $subtopic)
                                                                        <option value="{{$subtopic->id}}">{{$subtopic->name_ar}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                            @endforeach
                                                        </select>
                                                        <label for="education" class="icon iconPlace">
                                                            <i class="fal fa-book"></i>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btnsForm d-none py-3">
                            <button type="button">
                                إلغاء
                            </button>
                            <button type="submit">
                                حفظ
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('footer')
<script>
    import Input from "@/Jetstream/Input";
    export default {
        components: {Input}
    }
</script>

    <script>
        $('.select2').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '1'
        });

        $('.select2#subjects').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '10'
        });
    </script>
@endsection
