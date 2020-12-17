@extends('app')
@section('header')
    <link href="http://fonts.googleapis.com/css?family=Dosis:400,500,700" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"
            integrity="sha256-8zyeSXm+yTvzUN1VgAOinFgaVFEFTyYzWShOy9w7WoQ=" crossorigin="anonymous"></script>

@endsection

@section('teacherAlert')
    <div class="over show">
        <div class="alertUser active">
            <div class="textAlertData">
                <div class="text">
                    <div class="icon">
                        <i class="fal fa-bell-on"></i>
                    </div>
                    <span>
                        تنبيه
                    </span>
                    لم تكمل إدخال بياناتك!
                </div>
                <div class="percent">
                    <div class="num">
                        <b>
                            70%
                        </b>
                    </div>
                    <div class="bar">
                        <div class="barActive" style="width: 70%;"></div>
                    </div>
                </div>
            </div>
            <div class="completeData">
                <div class="title">
                    أكمل بياناتك
                </div>
                <div class="links">
                    <span>
                        <a href="">
                            الخبرة
                        </a>
                    </span>
                    <span>
                        <a href="">
                            مكان الدرس
                        </a>
                    </span>
                    <span>
                        <a href="">
                            اللقب
                        </a>
                    </span>
                </div>
            </div>
            <div class="accountPremium">
                <div class="btnCustom">
                    <a href="" class="btnPre">
                        <i class="fas fa-graduation-cap"></i>
                        ترقية الحساب
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
          @include('website.teacher.sidebar')
            <div class="col contentTeacher">

                <div class="row">
                    <form class="col-12 secInfo">
                        <div class="img">
                            <div class="imgUser">
                                <img class="imgFile" src="{{asset('assets/website/img/imgInfo.png')}}" alt="">
                                <input class="imgFile" hidden type="file" name="imgUser" id="imgUser">
                                <label for="imgUser" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </label>
                            </div>
                            <img src="{{asset('assets/website/img/vip.png')}}" alt="" class="vip">
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
                                <input disabled type="text" name="name" id="name" value="أحمد العكلوك">
                            </div>
                            <div class="info">
                                <div class="stars" data-star="3">
                                    <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                </div>
                                <div class="num">
                                    <b>
                                        53
                                    </b>
                                    <span>
                                        تقييم
                                    </span>
                                </div>
                            </div>
                            <div class="info more">
                                <div>
                                    <label for="edu1" class="btnEdit">
                                        <span class="icon">
                                            <i class="fal fa-pen"></i>
                                        </span>
                                    </label>
                                    <span class="icon">
                                        <i class="fal fa-book-alt"></i>
                                    </span>
                                    <input disabled type="text" name="edu1" id="edu1" value="כימיה">
                                    <br>
                                    <span class="icon">
                                        <i class="fal fa-user-graduate"></i>
                                    </span>
                                    <input disabled type="text" name="edu2" id="edu2" value="הרווקים">
                                    <br>
                                    <span class="icon">
                                        <i class="fal fa-school"></i>
                                    </span>
                                    <input disabled type="text" name="edu3" id="edu3" value="האוניברסיטה הפתוחה">
                                </div>
                            </div>
                            <div class="info desc">
                                <label for="desc" class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                </label>
                                <textarea data-simplebar disabled name="desc"
                                          id="desc">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل جميع مولّدات نصوص لوريم إيبسوم على الإنترنت على إعادة تكرار مقاطع من نص لوريم إيبسوم نفسه عدة مرات بما تتطلبه الحاجة، يقوم مولّدنا هذا باستخدام كلمات من قاموس يحوي على أكثر من 200 كلمة لا تينية، مضاف إليها مجموعة من الجمل النموذجية، لتكوين نص لوريم إيبسوم ذو شكل منطقي قريب إلى النص الحقيقي. وبالتالي يكون النص الناتح خالي من التكرار، أو أي كلمات أو عبارات غير لائقة أو ما شابه. وهذا ما يجعله أو</textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="box boxChart">
                            <div class="title">
                                <span class="icon">
                                    <i class="fal fa-user-chart"></i>
                                </span>
                                إحصائيات
                            </div>
                            <div class="chart">
                                <canvas style="width: 100%; height: 400px;" id="chart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <form class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title col-12 mb-2">
                                <span class="icon">
                                    <i class="fal fa-sticky-note"></i>
                                </span>
                                الشرح المفصل
                                <span class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </span>
                                <div class="btns">
                                    <a class="cancel" href="javascript:void(0)">
                                        إلغاء
                                    </a>
                                    <a class="save" href="javascript:void(0)">
                                        حفظ
                                    </a>
                                </div>
                            </div>
                            <div class="show active col-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <span class="btnShowHide less">
                                            <span class="less">
                                                إظهار أكثر
                                            </span>
                                            <span class="more">
                                                إظهار أقل
                                            </span>
                                        </span>
                                        <p class="less">
                                            هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                            تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت
                                            تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات
                                            أو عبارات محرجة أو غير لائقة أي كلمات أو عبارات هنالك العديد من الأنواع
                                            المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض
                                            النوادر أو الكلمات العشوائية إلى النص.
                                            هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                            تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت
                                            تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات
                                            أو عبارات محرجة أو غير لائقة أي كلمات أو عبارات هنالك العديد من الأنواع
                                            المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض
                                            النوادر أو الكلمات العشوائية إلى النص.
                                        </p>
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0">
                                        <div class="boxVideo">
                                            <img class="coverVideo" src="{{asset('assets/website/assets/website/img/coverVideo2.png')}}" alt="">
                                            <span class="iconPlay">
                                                <i class="fab fa-youtube"></i>
                                            </span>
                                            <video id="video1" width="100%" height="200">
                                                <source src="{{asset('assets/website/img/movie.mp4')}}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit col-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="text1" class="subTitle">
                                            <span class="icon">
                                                <i class="fal fa-sticky-note"></i>
                                            </span>
                                            <small>
                                                الشرح المفصل
                                            </small>
                                        </label>
                                        <textarea name="text1"
                                                  id="text1">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم،</textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="subTitle">
                                            <span class="icon">
                                                <i class="fad fa-film"></i>
                                            </span>
                                            <small>
                                                فيديو تعريفي
                                            </small>
                                        </p>
                                        <input type="file" hidden name="videoInput" id="videoInput">
                                        <label class="videoInput" for="videoInput">
                                            <div class="placeVideo">
                                                <i class="droosvip-9-upload"></i>
                                            </div>
                                            <div class="textVideo">
                                                <span>
                                                    قم برفع فيديو تعريفي
                                                </span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title col-12 mb-2">
                                <span class="icon">
                                    <i class="fal fa-sticky-note"></i>
                                </span>
                                الشرح المفصل
                                <span class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </span>
                                <div class="btns">
                                    <a class="cancel" href="javascript:void(0)">
                                        إلغاء
                                    </a>
                                    <a class="save" href="javascript:void(0)">
                                        حفظ
                                    </a>
                                </div>
                            </div>
                            <div class="show active col-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="btnShowHide less">
                                            <span class="less">
                                                إظهار أكثر
                                            </span>
                                            <span class="more">
                                                إظهار أقل
                                            </span>
                                        </span>
                                        <p class="less">
                                            هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                            تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت
                                            تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات
                                            أو عبارات محرجة أو غير لائقة أي كلمات أو عبارات هنالك العديد من الأنواع
                                            المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض
                                            النوادر أو الكلمات العشوائية إلى النص.
                                            هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                            تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت
                                            تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات
                                            أو عبارات محرجة أو غير لائقة أي كلمات أو عبارات هنالك العديد من الأنواع
                                            المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض
                                            النوادر أو الكلمات العشوائية إلى النص.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="edit col-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label for="text2" class="subTitle">
                                            <span class="icon">
                                                <i class="fal fa-sticky-note"></i>
                                            </span>
                                            <small>
                                                الشرح المفصل
                                            </small>
                                        </label>
                                        <textarea name="text2"
                                                  id="text2">هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، هنالك العديد من الأنواع المتوفرة لنصوص لوريم هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم،</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title col-12">
                                <span class="icon">
                                    <i class="droosvip-19-account-2"></i>
                                </span>
                                اللقب
                                <span class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </span>
                                <div class="btns">
                                    <a class="cancel" href="javascript:void(0)">
                                        إلغاء
                                    </a>
                                    <a class="save" href="javascript:void(0)">
                                        حفظ
                                    </a>
                                </div>
                            </div>
                            <div class="show active col-12">
                                <div class="row">
                                    <div class="col-12 eduCol">
                                        <span class="mx-2">
                                            <span class="icon">
                                                <i class="fal fa-book-alt"></i>
                                            </span>
                                            <span>
                                                כימיה
                                            </span>
                                        </span>
                                        <span class="mx-2">
                                            <span class="icon">
                                                <i class="fal fa-user-graduate"></i>
                                            </span>
                                            <span>
                                                הרווקים
                                            </span>
                                        </span>
                                        <span class="mx-2">
                                            <span class="icon">
                                                <i class="fal fa-school"></i>
                                            </span>
                                            <span>
                                                האוניברסיטה הפתוחה
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="edit col-12">
                                <div class="row">
                                    <div class="col-12 eduCol">
                                        <div>
                                            <span class="px-2">
                                                <label for="edu1-01">
                                                    اللقب
                                                </label>
                                                <br>
                                                <select name="edu1-01" id="edu1-01">
                                                    <option value="0">نص تجريبي</option>
                                                    <option value="1">نص</option>
                                                    <option value="2">تجريبي</option>
                                                </select>
                                                <span class="icon">
                                                    <i class="fal fa-book-alt"></i>
                                                </span>
                                            </span>
                                            <span class="px-2">
                                                <label for="edu1-02">
                                                    اسم مؤسسة التعليم
                                                </label>
                                                <br>
                                                <select name="edu1-02" id="edu1-02">
                                                    <option value="0">نص تجريبي</option>
                                                    <option value="1">نص</option>
                                                    <option value="2">تجريبي</option>
                                                </select>
                                                <span class="icon">
                                                    <i class="fal fa-user-graduate"></i>
                                                </span>
                                            </span>
                                            <span class="px-2">
                                                <label for="edu1-03">
                                                    التخصص
                                                </label>
                                                <br>
                                                <select name="edu1-03" id="edu1-03">
                                                    <option value="0">نص تجريبي</option>
                                                    <option value="1">نص</option>
                                                    <option value="2">تجريبي</option>
                                                </select>
                                                <span class="icon">
                                                    <i class="fal fa-school"></i>
                                                </span>
                                            </span>
                                            <span class="px-2">
                                                <label>
                                                    سنوات
                                                </label>
                                                <br>
                                                <div class="date">
                                                    <input type="text" placeholder="من">
                                                    <input type="text" placeholder="إلى">
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-12 addEduCol noBT">
                                        <a href="javascript:void(0)">
                                            <span class="icon">
                                                <i class="fal fa-plus"></i>
                                            </span>
                                            أضف لقب أخر
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title col-12">
                                <span class="icon">
                                    <i class="fal fa-analytics"></i>
                                </span>
                                الخبرة
                                <span class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </span>
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
                                    <div class="col-12 exp">
                                        <span>
                                            تعليم طلاب مدارس
                                        </span>
                                        <span>
                                            محاضر
                                        </span>
                                        <span>
                                            معيد
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="edit col-12">
                                <div class="row">
                                    <div class="col-12 exp">
                                        <span>
                                            <input checked type="checkbox" name="exper" id="exp1" hidden>
                                            <label for="exp1">
                                                <i class="notcheck fal fa-circle"></i>
                                                <i class="check fas fa-check-circle"></i>
                                                تعليم لطلاب مدارس
                                            </label>
                                        </span>
                                        <span>
                                            <input type="checkbox" name="exper" id="exp2" hidden>
                                            <label for="exp2">
                                                <i class="notcheck fal fa-circle"></i>
                                                <i class="check fas fa-check-circle"></i>
                                                تحضير لبسيخومتري
                                            </label>
                                        </span>
                                        <span>
                                            <input type="checkbox" name="exper" id="exp3" hidden>
                                            <label for="exp3">
                                                <i class="notcheck fal fa-circle"></i>
                                                <i class="check fas fa-check-circle"></i>
                                                تحضير لبجروت
                                            </label>
                                        </span>
                                        <span>
                                            <input checked type="checkbox" name="exper" id="exp4" hidden>
                                            <label for="exp4">
                                                <i class="notcheck fal fa-circle"></i>
                                                <i class="check fas fa-check-circle"></i>
                                                محاضر
                                            </label>
                                        </span>
                                        <span>
                                            <input checked type="checkbox" name="exper" id="exp5" hidden>
                                            <label for="exp5">
                                                <i class="notcheck fal fa-circle"></i>
                                                <i class="check fas fa-check-circle"></i>
                                                معيد
                                            </label>
                                        </span>
                                        <span>
                                            <input type="checkbox" name="exper" id="exp6" hidden>
                                            <label for="exp6">
                                                <i class="notcheck fal fa-circle"></i>
                                                <i class="check fas fa-check-circle"></i>
                                                تحضير لامتحانات
                                            </label>
                                        </span>
                                        <span>
                                            <input type="checkbox" name="exper" id="exp7" hidden>
                                            <label for="exp7">
                                                <i class="notcheck fal fa-circle"></i>
                                                <i class="check fas fa-check-circle"></i>
                                                لا يوجد خبرة
                                            </label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title col-12">
                                <span class="icon">
                                    <i class="fad fa-map-marked-alt"></i>
                                </span>
                                بلدان التعليم
                                <span class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </span>
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
                                    <div class="col-12 country">
                                        <span>
                                            <span class="icon">
                                                <i class="fad fa-globe-americas"></i>
                                            </span>
                                            القدس
                                        </span>
                                        <span>
                                            <span class="icon">
                                                <i class="fad fa-globe-americas"></i>
                                            </span>
                                            غزة
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="edit col-12">
                                <div class="row">
                                    <div class="col-12 country">
                                        <label for="city">
                                            اختر بلدات التعليم
                                        </label>
                                        <div class="position-relative">
                                            <select requiredX="yes" dir="rtl" id="citiess" multiple class="cusInput form-control select2 input" searchable name="city_id"
                                            >
                                                <option value=""></option>
                                                @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->name_ar}}</option>
                                                @endforeach
                                            </select>

                                            <label for="city" class="icon iconDown">
                                                <i class="fas fa-chevron-down"></i>
                                            </label>
                                            <label for="city" class="icon iconPlace">
                                                <i class="fad fa-map-marked-alt"></i>
                                            </label>
                                        </div>
                                        <div class="listCountry">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title col-12">
                                <span class="icon">
                                    <i class="fad fa-map-marked-alt"></i>
                                </span>
                                مكان وسعر الدرس
                                <span class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </span>
                                <div class="btns">
                                    <a class="cancel" href="javascript:void(0)">
                                        إلغاء
                                    </a>
                                    <a class="save" href="javascript:void(0)">
                                        حفظ
                                    </a>
                                </div>
                            </div>
                            <div class="show active col-12">
                                <div class="row">
                                    <div class="col-12 lesson">
                                        <div>
                                            <span class="location">
                                                بيت المعلم
                                            </span>
                                            <span class="price">
                                                <b>
                                                    153
                                                </b>
                                                <i class="fal fa-shekel-sign"></i>
                                                للساعة
                                            </span>
                                        </div>
                                        <div>
                                            <span class="location">
                                                بيت الطالب
                                            </span>
                                            <span class="price">
                                                <b>
                                                    153
                                                </b>
                                                <i class="fal fa-shekel-sign"></i>
                                                للساعة
                                            </span>
                                        </div>
                                        <div>
                                            <span class="location">
                                                أون لاين
                                            </span>
                                            <span class="price">
                                                <b>
                                                    153
                                                </b>
                                                <i class="fal fa-shekel-sign"></i>
                                                للساعة
                                            </span>
                                        </div>
                                        <div>
                                            <span class="location">
                                                مكتبة أو مكان أخر
                                            </span>
                                            <span class="price">
                                                <b>
                                                    153
                                                </b>
                                                <i class="fal fa-shekel-sign"></i>
                                                للساعة
                                            </span>
                                        </div>
                                        <div class="discount">
                                            <span class="icon">
                                                <i class="fal fa-badge-percent"></i>
                                            </span>
                                            <b>
                                                20%
                                            </b>
                                            خصم لدرسين أو أكثر
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit col-12">
                                <div class="row">
                                    <div class="col-12 lesson">
                                        <div>
                                            <span>
                                                <input checked type="checkbox" name="lesson" id="lesson1" hidden>
                                                <label for="lesson1">
                                                    <i class="notcheck fal fa-circle"></i>
                                                    <i class="check fas fa-check-circle"></i>
                                                    بيت المعلم
                                                </label>
                                                <div class="inputPrice">
                                                    <input type="text" name="" placeholder="أدخل السعر للساعة" id="">
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
                                                    <input type="text" name="" placeholder="أدخل السعر للساعة" id="">
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
                                                    <input type="text" name="" placeholder="أدخل السعر للساعة" id="">
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
                                                    <input type="text" name="" placeholder="أدخل السعر للساعة" id="">
                                                    <i class="fal fa-shekel-sign"></i>
                                                </div>
                                            </span>
                                        </div>
                                        <div class="ifDiscount">
                                            <p>
                                                خصم لدرسين أو أكثر؟
                                            </p>
                                            <span>
                                                <input checked type="checkbox" name="discount" id="discount0" hidden>
                                                <label for="discount0">
                                                    <i class="notcheck fal fa-circle"></i>
                                                    <i class="check fas fa-check-circle"></i>
                                                    نعم
                                                </label>
                                                <div class="inputPrice">
                                                    <input type="text" placeholder="أدخل نسبة الخصم" name="" id="">
                                                    <i class="fal fa-badge-percent"></i>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title col-12">
                                <span class="icon">
                                    <i class="fal fa-book"></i>
                                </span>
                                مواضيع التعليم
                                <span class="btnEdit">
                                    <span class="icon">
                                        <i class="fal fa-pen"></i>
                                    </span>
                                    تعديل
                                </span>
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
                                            <div class="divInput mt-2">


                                                <select dir="rtl" id="cities" class="form-control select2" name="requiredSubject" name="city_id"
                                                        multiple="multiple">
                                                    <option value=""></option>
                                                    @foreach($cities as $city)
                                                        <option value="{{$city->id}}">{{$city->name_ar}}</option>
                                                    @endforeach
                                                </select>
                                                <i style="top: 10px;" class="fal fa-map-marker-alt"></i>
                                            </div>
                                            <div class="listEducation">

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
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title col-12">
                                <span class="icon">
                                    <i class="fal fa-book"></i>
                                </span>
                                المدونة
                            </div>
                            <div class="show shwoBlog active col-12" data-blog="1">
                                <div class="rowBlog">
                                    <div class="row">
                                        <div class="col-12 m-auto col-sm-4 col-md-3">
                                            <img src="{{asset('assets/website/img/blog1.png')}}" alt="">
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9">
                                            <div class="titleBlog">
                                                <p>
                                                    تنفيذ ورشة اونلاين مع الطلاب
                                                </p>
                                                <span class="time">
                                                    <i class="fal fa-clock"></i>
                                                    <span>
                                                        17/08/2020
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="desc">
                                                هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                                تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص.هنالك
                                                العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                                بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص.الكلمات
                                                <a class="readMore" href="">
                                                    ...
                                                    <i class="fas fa-paper-plane"></i>
                                                    <span>
                                                        اقرأ المزيد
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowBlog">
                                    <div class="row">
                                        <div class="col-12 m-auto col-sm-4 col-md-3">
                                            <img src="{{asset('assets/website/img/blog1.png')}}" alt="">
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9">
                                            <div class="titleBlog">
                                                <p>
                                                    تنفيذ ورشة اونلاين مع الطلاب
                                                </p>
                                                <span class="time">
                                                    <i class="fal fa-clock"></i>
                                                    <span>
                                                        17/08/2020
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="desc">
                                                هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                                تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص.هنالك
                                                العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                                بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص.الكلمات
                                                <a class="readMore" href="">
                                                    ...
                                                    <i class="fas fa-paper-plane"></i>
                                                    <span>
                                                        اقرأ المزيد
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowBlog">
                                    <div class="row">
                                        <div class="col-12 m-auto col-sm-4 col-md-3">
                                            <img src="{{asset('assets/website/img/blog1.png')}}" alt="">
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9">
                                            <div class="titleBlog">
                                                <p>
                                                    تنفيذ ورشة اونلاين مع الطلاب
                                                </p>
                                                <span class="time">
                                                    <i class="fal fa-clock"></i>
                                                    <span>
                                                        17/08/2020
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="desc">
                                                هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                                تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص.هنالك
                                                العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                                بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص.الكلمات
                                                <a class="readMore" href="">
                                                    ...
                                                    <i class="fas fa-paper-plane"></i>
                                                    <span>
                                                        اقرأ المزيد
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 dots">
                                        <a href="">
                                            <i class="fas fa-circle"></i>
                                        </a>
                                        <a href="" class="active">
                                            <i class="fas fa-circle"></i>
                                        </a>
                                        <a href="">
                                            <i class="fas fa-circle"></i>
                                        </a>
                                        <a href="">
                                            <i class="fas fa-circle"></i>
                                        </a>
                                        <a href="">
                                            <i class="fal fa-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-10 m-auto">
                        <div class="box row">
                            <div class="title titleRate col-12">
                                <div>
                                    <span class="icon">
                                        <i class="fal fa-star"></i>
                                    </span>
                                    التقييمات
                                    <span class="rateTitle">
                                        <b>
                                            53
                                        </b>
                                        تقييم
                                    </span>
                                </div>
                                <a href="" class="addRate">
                                    <i class="fal fa-star-shooting"></i>
                                    <span>
                                        أضف تقييم
                                    </span>
                                </a>
                            </div>
                            <div class="show active col-12">
                                <div class="rowBlog rowRate">
                                    <div class="row">
                                        <div class="col-9 m-auto col-sm-4 col-md-3">
                                            <img src="{{asset('assets/website/img/imgRate.png')}}" alt="">
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9 mt-3">
                                            <div class="titleBlog">
                                                <div>
                                                    <span>
                                                        <div class="stars" data-star="3">
                                                            <span class="icon">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </span>
                                                    <span class="name">
                                                        عبدالرحمن الطهرواي
                                                    </span>
                                                </div>
                                                <span class="time">
                                                    <span>
                                                        17/08/2020
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="desc">
                                                من أفضل الأساتذة الذين علموني مادة الرياضيات شكراً جزيلا لك لقد حصلت
                                                أعلى نتيجة بالفصل
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowBlog rowRate">
                                    <div class="row">
                                        <div class="col-9 m-auto col-sm-4 col-md-3">
                                            <img src="{{url('assets/website/img/imgRate.png')}}" alt="">
                                        </div>
                                        <div class="col-12 col-sm-8 col-md-9 mt-3">
                                            <div class="titleBlog">
                                                <div>
                                                    <span>
                                                        <div class="stars" data-star="3">
                                                            <span class="icon">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                                        </div>
                                                    </span>
                                                    <span class="name">
                                                        عبدالرحمن الطهرواي
                                                    </span>
                                                </div>
                                                <span class="time">
                                                    <span>
                                                        17/08/2020
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="desc">
                                                من أفضل الأساتذة الذين علموني مادة الرياضيات شكراً جزيلا لك لقد حصلت
                                                أعلى نتيجة بالفصل
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pb-4">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="" class="addRate">
                                            <i class="fal fa-star-shooting"></i>
                                            <span>
                                                أضف تقييم
                                            </span>
                                        </a>
                                    </div>
                                    <div class="col-6 text-right showMoreRate">
                                        <a href="">
                                            إظهار تقييمات أخرى
                                            <i class="far fa-arrow-down"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{asset('assets/website/js/chart1.js')}}"></script>

    <script>
        $('.select2#requiredSubject').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '2'
        });
        $('.select2').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '20'
        });
    </script>
@endsection
