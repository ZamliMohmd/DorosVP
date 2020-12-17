<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/mainq.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main2.css')}}">

    @yield('header')
    <title>Droos Vip</title>
</head>

<body>

<header>
    <div class="container">
        <div class="row">
            <div class="first">
                <div class="logo">
                    <a href="">
                        <img src="{{asset('assets/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="linkSearch">
                    <a href="">
                        ابحث عن معلم
                    </a>
                </div>
            </div>
            <div class="last">
                <div class="user">
                    <div class="img">
                        <img src="{{asset('assets/img/user.png')}}" alt="">
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
                        <div class="over"></div>
                    </div>
                </div>
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
                                <img src="{{asset('assets/img/user.png')}}" alt="">
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
                                <img src="{{asset('assets/img/user.png')}}" alt="">
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
                                <img src="{{asset('assets/img/user.png')}}" alt="">
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
                <div class="menuMobile">
                        <span class="icon">
                            <i class="fal fa-bars"></i>
                        </span>
                </div>
            </div>
        </div>
    </div>
</header>

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
                                            <img src="{{url('assets/img/Instagram.svg')}}" alt="Instagram">
                                        </a>

                                        <a href="#">
                                            <img src="{{asset('assets/img/facebook.svg')}}" alt="facebook">
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

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/mainq.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
