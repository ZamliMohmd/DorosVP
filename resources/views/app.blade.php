{{--

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>

--}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{-- asset('js/app.js') --}}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{-- asset('css/app.css') --}}" rel="stylesheet">

    <title>{{ config('app.name', 'Doros VIP') }}</title>
    <link rel="stylesheet" href="{{asset('assets/website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/website/css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{url('assets/website/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/website/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/website/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/website/css/slick-theme.css')}}" >
    <link rel="stylesheet" href="{{url('assets/website/css/main.css')}}">

<style>
    .alert-message{
        color: red;
    }
</style>
    @yield('header')

    <title>Droos Vip</title>
</head>

<body>

<header
@if(\Illuminate\Support\Facades\Auth::guest())
class="headerVisitor"
@elseif(\Illuminate\Support\Facades\Auth::user()->usertypeID() == 3)
    class="headerTeacher"
@elseif(\Illuminate\Support\Facades\Auth::user()->usertypeID() == 4)
    class="headerStudent"
@endif
>
    <div class="container">
        <div class="row">
            <div class="first">
                <div class="logo">
                    <a href="">
                        <img src="{{asset('assets/website/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="linkSearch">
                    <a href="">
                        ابحث عن معلم
                    </a>
                </div>
            </div>

        @if(\Illuminate\Support\Facades\Auth::user())
            <div class="last">
                @if(\Illuminate\Support\Facades\Auth::user()->usertypeID() == 4)
                    <div class="user">
                        <div class="img">
                            <img src="{{asset('assets/website/img/user.png')}}" alt="">
                        </div>
                        <div class="name">
                            حسابي
                        </div>
                        <div class="iconDown">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="menuUser">
                            <ul>
                                <li>
                                    <a href="" class="">
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
                                <li>
                                    <a href="{{route('logout')}}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    ><i class="fa fa-sign-in fa-lg" ></i>  تسجيل الخروج</a>
                                </li>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}

                                </form>
                            </ul>
                            <div class="over"></div>
                        </div>
                    </div>
                @elseif(\Illuminate\Support\Facades\Auth::user()->usertypeID() == 3)
                    <div class="user">
                        <div class="img">
                            <img src="{{asset('assets/website/img/user.png')}}" alt="">
                        </div>
                        <div class="name">
                            حسابي
                        </div>
                        <div class="iconDown">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="menuUser">
                            <ul>
                                <li>
                                    <a href="" class="">
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
                                <li>
                                    <a href="">
                                        <span class="icon">
                                            <i class="fal fa-sticky-note"></i>
                                        </span>
                                        مدوناتي
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon">
                                            <i class="fad fa-wallet"></i>
                                        </span>
                                        مدفوعاتي
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('logout')}}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    ><i class="fa fa-sign-in fa-lg" ></i>  تسجيل الخروج</a>
                                </li>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}

                                </form>
                            </ul>
                            <div class="over"></div>
                        </div>
                    </div>
                    @endif

                <div class="notification">
                    <div class="icon">
                        <i class="fal fa-bell-on"></i>
                        <div class="num">
                            3
                        </div>
                    </div>
                    <div class="text">
                        الإشعارات
                    </div>
                    <div class="iconDown">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="menuNotification">
                        <div>
                            <div class="note unRead">
                                    <span class="from">
                                        <span class="icon">
                                            <i class="fad fa-user-tie"></i>
                                        </span>
                                        <small>
                                            حسابي
                                        </small>
                                    </span>
                                <span>
                                        <b>
                                            تنويه
                                        </b>
                                        بياناتك الشخصية مكتملة بنسبة
                                        <b>
                                            70%
                                        </b>
                                        .. قم
                                        <a href="">
                                            بإكمال بياناتك الأن
                                        </a>
                                    </span>
                            </div>
                            <div class="note">
                                    <span class="from">
                                        <span class="icon">
                                            <i class="fal fa-calendar"></i>
                                        </span>
                                        <small>
                                            التقويم
                                        </small>
                                    </span>
                                <img src="{{asset('assets/website/img/user.png')}}" alt="">
                                <span>
                                        عبد الرحمن الطهرواي قام
                                        <b>
                                            بطلب درس
                                        </b>
                                        يوم الأربعاء بتاريخ 17/11/2020 الساعة 14:30
                                    </span>
                            </div>
                            <div class="note unRead">
                                    <span class="from">
                                        <span class="icon">
                                            <i class="fad fa-user-tie"></i>
                                        </span>
                                        <small>
                                            حسابي
                                        </small>
                                    </span>
                                <span>
                                        <b>
                                            تنويه
                                        </b>
                                        بياناتك الشخصية مكتملة بنسبة
                                        <b>
                                            70%
                                        </b>
                                        .. قم
                                        <a href="">
                                            بإكمال بياناتك الأن
                                        </a>
                                    </span>
                            </div>
                            <div class="note">
                                    <span class="from">
                                        <span class="icon">
                                            <i class="fal fa-calendar"></i>
                                        </span>
                                        <small>
                                            التقويم
                                        </small>
                                    </span>
                                <img src="{{asset('assets/website/img/user.png')}}" alt="">
                                <span>
                                        عبد الرحمن الطهرواي قام
                                        <b>
                                            بطلب درس
                                        </b>
                                        يوم الأربعاء بتاريخ 17/11/2020 الساعة 14:30
                                    </span>
                            </div>
                            <div class="note unRead">
                                    <span class="from">
                                        <span class="icon">
                                            <i class="fad fa-user-tie"></i>
                                        </span>
                                        <small>
                                            حسابي
                                        </small>
                                    </span>
                                <span>
                                        <b>
                                            تنويه
                                        </b>
                                        بياناتك الشخصية مكتملة بنسبة
                                        <b>
                                            70%
                                        </b>
                                        .. قم
                                        <a href="">
                                            بإكمال بياناتك الأن
                                        </a>
                                    </span>
                            </div>
                            <div class="note">
                                    <span class="from">
                                        <span class="icon">
                                            <i class="fal fa-calendar"></i>
                                        </span>
                                        <small>
                                            التقويم
                                        </small>
                                    </span>
                                <img src="{{asset('assets/website/img/user.png')}}" alt="">
                                <span>
                                        عبد الرحمن الطهرواي قام
                                        <b>
                                            بطلب درس
                                        </b>
                                        يوم الأربعاء بتاريخ 17/11/2020 الساعة 14:30
                                    </span>
                            </div>
                        </div>
                        <div class="over"></div>
                    </div>
                </div>

                @if(\Illuminate\Support\Facades\Auth::user()->usertypeID() == 4)
                <div class="addRateTeacher">
                    <a href="">
                            <span class="icon">
                                <i class="fas fa-star"></i>
                            </span>
                        <span>
                                قيم معلمك
                            </span>
                    </a>
                </div>
                @endif
                <div class="menuMobile">
                        <span class="icon">
                            <i class="fal fa-bars"></i>
                        </span>
                </div>
            </div>

            @endif
            @if(\Illuminate\Support\Facades\Auth::guest())
                  <div class="last">
                <div class="addToUs">
                    <div>
                        <div class="icon">
                            <i class="fal fa-user-graduate"></i>
                        </div>
                        <div class="name">
                            انضمام
                        </div>
                        <div class="iconDown">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="menuAddToUs">
                        <ul>
                            <li>
                                <a href="{{route('teacher_register_page')}}" class="joinAsTeacher active">
                                    الانضمام كمعلم
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="joinAsStudent">
                                    الانضمام كطالب
                                </a>
                            </li>
                        </ul>
                        <div class="over"></div>
                    </div>
                </div>
                <div class="linkLogin">
                    <a href="#">
                            <span>
                                تسجيل الدخول
                            </span>
                    </a>
                </div>
            </div>
            @endif

        </div>
    </div>
</header>
@yield('teacherAlert')

@include('show_meassage')

@yield('content')

<footer>
    <section class="container">
        <div class="row">

            <div class="footer_right_section mb-5 col-md-5 col-sm-12">
                <div class="">
                    <div class="mb-5">
                        <h3>
                            <span>المنصة الاولى </span>
                            في الوسط العربي التي تجمع الطلاب بالمعلمين
                        </h3>
                    </div>
                    <a href="" class="btnGet">
                        انضمام
                    </a>
                </div>
            </div>
            <div class="footer_left_section col-md-7 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-6">
                        <nav class="nav flex-column">
                            <h5>الاقسام</h5>
                            <a class="nav-link active" href="#">الرئيسية</a>
                            <a class="nav-link" href="#">المعلمين</a>
                            <a class="nav-link" href="#">المدونة</a>
                            <a class="nav-link" href="#">من نحن</a>
                            <a class="nav-link" href="#">تواصل معنا</a>
                        </nav>
                    </div>
                    <div class="col-md-4 col-sm-6 col-6">
                        <nav class="nav flex-column">
                            <h5>روابط سريعة</h5>
                            <a class="nav-link" href="#">انظمام</a>
                            <a class="nav-link" href="#">تسجيل دخول</a>
                            <a class="nav-link" href="#">شروط الاستحدام</a>
                            <a class="nav-link" href="#">سياسة الخصوصية</a>
                        </nav>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="row">
                            <div class="col-6 col-sm-12 col-lg-12 col-xl-12">
                                <nav class="nav flex-column">
                                    <h5>تواصل معنا</h5>
                                    <a class="nav-link" href="#">info@dorosvip.com</a>
                                </nav>
                            </div>
                            <div class="col-6 col-sm-12 col-lg-12 col-xl-12">
                                <div class="follow_us">
                                    <h5 class="d-inline-block">follow us</h5>
                                    <div class="social_media_bottom d-inline-block">

                                        <a href="#" class="right">
                                            <img src="{{asset('assets/website/img/Instagram.svg')}}" alt="Instagram">
                                        </a>

                                        <a href="#">
                                            <img src="{{asset('assets/website/img/facebook.svg')}}" alt="facebook">
                                        </a>
                                        <div>
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row copy_right">
            <h6>&copy; 2020,droos vip.</h6>
            <a href="javascript:void(0)" class="btn-default go_for_higher tran3s">
                <i class="fas fa-angle-double-up"></i>
            </a>
        </div>

    </section>
</footer>

<div class="popUp popUpFromVisitor1 popUpJoinAsTeacher">
    <div>
        <div class="headerPopUp">
            <i class="fal fa-user-circle"></i>
            الانضمام للطالب
            <span class="closeX">
                    <i class="fal fa-times"></i>
                </span>
        </div>
        <div class="bodyPopUp">
            <div class="waysToJoin">
                <div>
                    <a class="join1" href="">
                        الانضمام بواسطة
                        <span class="img">
                                <img src="{{asset('assets/website/img/google.png')}}" alt="">
                            </span>
                    </a>
                </div>
                <div>
                    <a class="join2" href="">
                        الانضمام بواسطة
                        <span class="img">
                                <img src="{{asset('assets/website/img/facebook.png')}}" alt="">
                            </span>
                    </a>
                </div>
            </div>
            <form class="studentformToJoin formToJoin" id="student_join"   numCorrect="0" action="">
                {{csrf_field()}}

                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>



                <div>
                    <label for="name">
                        الاسم كاملا
                    </label>
                    <div class="divInput">
                        <input requiredX="yes" name="name" min="3" max="25" errorMin="يجب على الأقل أن يكون 3 حروف" errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ" autocomplete="off" id="stu_name" type="text" value="">
                        <i class="fal fa-user-circle"></i>
                    </div>
                    <div class="alert-message" id="nameError"></div>
                </div>
                <div>
                    <label for="email">
                        البريد الإلكتروني
                    </label>
                    <div class="divInput">
                        <input requiredX="yes" name="email"  min="3" max="30" errorMin="يجب على الأقل أن يكون 3 حروف" errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ" errorType="يجب إدخال بريد إلكتروني صحيح"  autocomplete="off" id="stu_email" type="email" value="">
                        <i class="fal fa-envelope"></i>

                    </div>
                    <div class="alert-message" id="emailError"></div>

                </div>
                <div>
                    <label for="phone">
                        رقم الهاتف
                    </label>
                    <div class="divInput">
                        <input requiredX="yes" name="mobile" start="05" min="3" max="999999999" errorMin="يجب على الأقل أن يكون 3 حروف"
                               errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"  autocomplete="off" id="stu_mobile" type="number" value="">
                        <i class="fal fa-phone"></i>
                    </div>
                    <div class="alert-message" id="mobileError"></div>

                </div>
                <div>
                    <label for="password">
                        كلمة المرور
                    </label>
                    <div class="divInput">
                        <input requiredX="yes" name="password" min="8" max="25" errorMin="يجب على الأقل أن يكون 6 حروف" errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                               autocomplete="off" id="stu_password" type="password" value="">
                        <i class="fal fa-lock-alt"></i>
                    </div>
                </div>
                <div class="alert-message" id="passwordError"></div>
                <div class="agree">
                    <input requiredX="yes" name="accept_use_terms" id="agree" hidden type="checkbox">
                    <label for="agree">
                        أوافق على شروط الاستخدام
                    </label>
                </div>
                <div class="alert-message" id="accept_use_termsError"></div>
                <div class="ok">
                    <button class="student_submit submit" id="student_register_submit" disabled >
                        انضم
                    </button>
                </div>
                <div class="login">
                    <p>
                        هل تملك حساب بالفعل ؟
                        <a href="">
                            تسجيل الدخول
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="popUp loginHome">
    <div>
        <div class="headerPopUp">
            <i class="fal fa-user-circle"></i>
            تسجيل الدخول
            <span class="closeX">
                    <i class="fal fa-times"></i>
                </span>
        </div>
        <div class="bodyPopUp">
            <div class="waysToJoin">
                <div>
                    <a class="join1" href="">
                        الانضمام بواسطة
                        <span class="img">
                                <img src="{{asset('assets/website/img/google.png')}}" alt="">
                            </span>
                    </a>
                </div>
                <div>
                    <a class="join2" href="">
                        الانضمام بواسطة
                        <span class="img">
                                <img src="{{asset('assets/website/img/facebook.png')}}" alt="">
                            </span>
                    </a>
                </div>
            </div>
            <form class="formToJoin" action="{{url('login')}}">
                <div>
                    <label for="email">
                        البريد الإلكتروني
                    </label>
                    <div class="divInput">
                        <input requiredX="no" min="3" max="12" errorMin="يجب على الأقل أن يكون 3 حروف"
                               errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                               errorType="يجب إدخال بريد إلكتروني صحيح" autocomplete="off" id="email" type="email"
                               value="">
                        <i class="fal fa-envelope"></i>
                    </div>
                </div>
                <div>
                    <label for="password">
                        كلمة المرور
                    </label>
                    <div class="divInput">
                        <input requiredX="no" min="6" max="12" errorMin="يجب على الأقل أن يكون 6 حروف"
                               errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                               autocomplete="off" id="password" type="password" value="">
                        <i class="fal fa-lock-alt"></i>
                    </div>
                </div>
                <div class="agree">
                    <input requiredX="no" id="remmber" hidden type="checkbox">
                    <label for="remmber">
                        تذكر كلمة المرور
                    </label>
                </div>
                <div class="ok">
                    <button class="submit" type="submit">
                        تسجيل الدخول
                    </button>
                </div>
                <div class="login">
                    <p>
                        لا تمتلك حساب ؟
                        <a href="">
                            انضم الأن
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('assets/website/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/website/js/popper.min.js')}}"></script>
<script src="{{asset('assets/website/js/bootstrap.min.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="{{asset('assets/website/js/select2.min.js')}}"></script>

<script src="{{asset('assets/website/js/slick.js')}}"></script>
<script src="{{asset('assets/website/js/main2.js')}}"></script>




<script type="text/javascript">


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".student_submit").click(function(e){

        e.preventDefault();
        $(this).html('جاري الحفظ...'); //this changes the html to Saving...
        $(this).attr('disabled', true); //this will disable the button onclick

        var name = $("input[name=name]").val();
        var email = $("input[name=email]").val();
        var password = $("input[name=password]").val();
        var mobile = $("input[name=mobile]").val();
        var _token = $("input[name=_token]").val();
        var url = '{{ route('student_register') }}';

        $.ajax({
            url:url,
            method:'POST',
            data:{
                name:name,
                email:email,
                password:password,
                mobile:mobile,
                _token:_token,
            },

            success:function(response){
                if(response.status == true){
                    alert(response.msg) //Message come from controller
                    $('#nameError,#emailError,#mobileError,#passwordError').remove();
                    $("#student_join").trigger('reset');
                    $(".student_submit").html('انضم'); //this changes the html to Saving...
                    setTimeout(3000);
                    window.location.replace(response.redirect);
                    //   $('#popUpJoinAsStudent').dialog('close');
                    //   $(document).ready(function () {
                    //       $(".popUpJoinAsStudent").hidden;
                    //    $(".popUpJoinAsStudent").addClass("show");
                    //   })
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


                $(".student_submit").html('انضم');
                $(".student_submit").attr('disabled', false);

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

</script>

@yield('footer')
</body>

</html>

