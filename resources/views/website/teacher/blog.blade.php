@extends('app')

@section('header')
<style>
    /* ******* */
    /* style Blog Teacher */
    /* ******* */

    .contentBlog .title {
        border: 1px solid #E8E8E8;
        padding: 10px 15px;
        border-radius: 15px 15px 0 0;
        -webkit-border-radius: 15px 15px 0 0;
        -moz-border-radius: 15px 15px 0 0;
        -ms-border-radius: 15px 15px 0 0;
        -o-border-radius: 15px 15px 0 0;
        color: var(--colorText2);
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .contentBlog .title span:nth-of-type(1) {
        font-size: 20px;
    }

    .contentBlog .title span:nth-of-type(1) i {
        font-size: 24px;
        margin-left: 4px;
    }

    .contentBlog .title span.links a i {
        font-size: 18px;
        margin-left: 4px;
    }

    .contentBlog .title span.links a {
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

    .contentBlog .title span.links a:nth-of-type(1) {
        margin-left: 5px;
        color: var(--colorText2);
        background-color: #F8F8F8;
    }

    .contentBlog .title span.links a:nth-of-type(2) {
        border-color: var(--colorText1);
        margin-left: 5px;
        color: #FFF;
        background-color: var(--colorText1);
    }

    @media (min-width:0.1px) and (max-width: 575.9px) {
        .contentBlog .title {
            flex-wrap: wrap;
        }

        .contentBlog .title span {
            flex: 0 0 100%;
        }
    }

    .contentBlog2 {
        height: 1100px;
    }

    .contentBlog2 .row {
        height: 100%;
    }

    .contentBlog2 .listBlogs {
        height: 100%;
        overflow: auto;
        padding-left: 0px;
    }

    .contentBlog2 .listBlogs>div {
        background-color: #F9F9F9;
        padding: 10px;
        border-bottom-right-radius: 15px;
        border: 1px solid #E8E8E8;
        border-top: 0;
        height: 100%;
    }

    .contentBlog2 .listBlogs ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .contentBlog2 .listBlogs ul li {
        margin-bottom: 8px;
    }

    .contentBlog2 .listBlogs ul li:last-of-type {
        margin-bottom: 0;
    }

    .contentBlog2 .listBlogs ul li a {
        display: flex;
        flex-wrap: nowrap;
        padding: 10px;
        border: 1px solid #E8E8E8;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        position: relative;
        background-color: #fff;
    }

    .contentBlog2 .listBlogs ul li.active a {
        background-color: var(--colorText1);
    }

    .contentBlog2 .listBlogs ul li a div {
        position: relative;
    }

    .contentBlog2 .listBlogs ul li a img {
        width: 96px;
        height: 96px;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
    }

    .contentBlog2 .listBlogs ul li a p:nth-of-type(1) {
        color: var(--colorText2);
        font-size: 14px;
        margin: 5px 8px 5px 0px;
    }

    .contentBlog2 .listBlogs ul li a p:nth-of-type(2) {
        color: #8F8F95;
        font-size: 13px;
        margin: 5px 8px 5px 0px;
        font-family: 'arabicBook';
        height: 40px;
        overflow: hidden;
    }

    .contentBlog2 .listBlogs ul li a p:nth-of-type(2)::after {
        content: "... عرض المزيد";
        position: absolute;
        bottom: 0;
        right: 10px;
        color: var(--colorText2);
    }

    .contentBlog2 .listBlogs ul li.active a * {
        color: #fff !important;
    }

    .contentBlog2 .listBlogs ul li.active a p:nth-of-type(2)::after {
        color: #fff;
    }

    .contentBlog2 .listBlogs ul li a span.date {
        position: absolute;
        left: 5px;
        top: 5px;
        color: #B2B3BD;
        font-size: 12px;
    }

    .contentBlog2 .signalBlog {
        height: 100%;
        padding-right: 0px;
    }

    .contentBlog2 .signalBlog>div,
    .contentBlog2 .signalBlog>form {
        background-color: #f3f3f3;
        height: 100%;
        border-bottom-left-radius: 15px;
        border: 1px solid #E8E8E8;
        border-top: 0;
        border-right: 0;
        padding: 10px;
        overflow: auto;
    }

    .contentBlog2 .signalBlog .img {
        text-align: center;
        position: relative;
        width: 100%;
    }

    .contentBlog2 .signalBlog img {
        max-width: 100%;
        height: auto;
        max-height: 250px;
        width: 100%;
    }

    .contentBlog2 .signalBlog .title2 {
        margin: 15px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: var(--colorText2);
    }

    .contentBlog2 .signalBlog .title2 span:nth-of-type(2) {
        font-size: 13px;
        color: #B2B3BD;
    }

    .contentBlog2 .signalBlog .title2 span:nth-of-type(2) i {
        color: var(--colorText2);
        font-size: 17px;
    }

    .contentBlog2 .signalBlog .text {
        font-family: 'arabicBook';
        color: #8F8F95;
        font-size: 15px;
        line-height: 2;
    }

    .contentBlog2 .signalBlog:not(.active) {
        display: none;
    }

    .contentBlog2 .signalBlog div.show,
    .contentBlog2 .signalBlog form.edit {
        display: none;
    }

    .contentBlog2 .signalBlog.active.show div.show {
        display: block;
        animation: opacityShow 0.7s;
        -webkit-animation: opacityShow 0.7s;
    }

    .contentBlog2 .signalBlog.active.edit form.edit {
        display: block;
        animation: opacityShow 0.7s;
        -webkit-animation: opacityShow 0.7s;
    }

    .contentBlog2 .signalBlog.active.add form.add {
        display: block !important;
        animation: opacityShow 0.7s;
        -webkit-animation: opacityShow 0.7s;
    }

    .contentBlog2 .edit .editImg {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 0;
        right: 0;
        flex-wrap: wrap;
        color: #fff;
    }

    .contentBlog2 .add .editImg {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        top: 0;
        right: 0;
        flex-wrap: wrap;
        color: #fff;
    }

    .contentBlog2 .edit .editImg span {
        background-color: rgba(0, 0, 0, 0.63);
        width: 120px;
        height: 120px;
        padding: 25px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
    }

    .contentBlog2 .add .editImg span {
        background-color: rgba(0, 0, 0, 0.63);
        width: 120px;
        height: 120px;
        padding: 25px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        display: flex;
        justify-content: center;
    }

    .contentBlog2 .edit .editImg img {
        margin-bottom: 5px;
    }

    .contentBlog2 .edit .editImg i {
        color: var(--colorText1);
    }

    .contentBlog2 .edit .title2 {
        display: flex;
        flex-wrap: wrap;
    }

    .contentBlog2 .add .title2 {
        display: flex;
        flex-wrap: wrap;
    }

    .contentBlog2 .edit .title2 label {
        flex: 0 0 100%;
        color: #696871;
        font-size: 18px;
        margin-bottom: 8px;
    }

    .contentBlog2 .add .title2 label {
        flex: 0 0 100%;
        color: #696871;
        font-size: 18px;
        margin-bottom: 8px;
    }

    .contentBlog2 .edit .title2 input {
        width: 100%;
        flex: 0 0 100%;
        background-color: #fff;
        color: var(--colorText2);
        border: 1px solid #E8E8E8;
        padding: 7px;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
    }

    .contentBlog2 .add .title2 input {
        width: 100%;
        flex: 0 0 100%;
        background-color: #fff;
        color: var(--colorText2);
        border: 1px solid #E8E8E8;
        padding: 7px;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
    }

    .contentBlog2 .edit .text2 {
        display: flex;
        flex-wrap: wrap;
    }

    .contentBlog2 .add .text2 {
        display: flex;
        flex-wrap: wrap;
    }

    .contentBlog2 .edit .text2 label {
        flex: 0 0 100%;
        color: #696871;
        font-size: 18px;
        margin-bottom: 8px;
    }

    .contentBlog2 .add .text2 label {
        flex: 0 0 100%;
        color: #696871;
        font-size: 18px;
        margin-bottom: 8px;
    }

    .contentBlog2 .edit .text2 textarea {
        width: 100%;
        flex: 0 0 100%;
        background-color: #fff;
        color: var(--colorText2);
        border: 1px solid #E8E8E8;
        padding: 7px;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        resize: none;
    }

    .contentBlog2 .add .text2 textarea {
        width: 100%;
        flex: 0 0 100%;
        background-color: #fff;
        color: var(--colorText2);
        border: 1px solid #E8E8E8;
        padding: 7px;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        resize: none;
    }

    .contentBlog2 .edit .btns2Blog button {
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

    .contentBlog2 .add .btns2Blog button {
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

    .contentBlog2 .edit .btns2Blog button:nth-of-type(1) {
        margin-left: 5px;
        color: var(--colorText2);
        background-color: #F8F8F8;
    }

    .contentBlog2 .edit .btns2Blog button:nth-of-type(2) {
        border-color: var(--colorText1);
        margin-left: 5px;
        color: #FFF;
        background-color: var(--colorText1);
    }


    .contentBlog2 .add .btns2Blog button:nth-of-type(1) {
        margin-left: 5px;
        color: var(--colorText2);
        background-color: #F8F8F8;
    }

    .contentBlog2 .add .btns2Blog button:nth-of-type(2) {
        border-color: var(--colorText1);
        margin-left: 5px;
        color: #FFF;
        background-color: var(--colorText1);
    }

    .btnBackBlog {
        display: none;
    }

    @media(min-width: 0.1px) and (max-width: 991.9px) {
        .contentBlog2 .listBlogs {
            position: absolute;
            z-index: 9;
            padding-left: 10px;
        }

        .noneMobile {
            display: none !important;
        }

        .contentBlog .title span:nth-of-type(1) {
            font-size: 15px;
        }

        .contentBlog .title span a {
            font-size: 14px;
        }

        .contentBlog2 .signalBlog {
            padding-right: 15px;
        }

        .btnBackBlog {
            display: flex;
            float: right;
            align-items: center;
            justify-content: center;
            border: 1px solid #E8E8E8;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            color: var(--colorText2);
            background-color: #F9F9F9;
        }
    }
</style>
    @endsection


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 sideRightTeacher">
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
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col contentBlog">
                <div class="row py-3">
                    <div class="col-12">
                        <div class="title">
                            <span>
                                <i class="fal fa-sticky-note"></i>
                                مدوناتي
                            </span>
                            <span class="links text-right text-lg-left mt-3 mt-lg-0">
                                <span class="btnBackBlog">
                                    <i class="far fa-arrow-right"></i>
                                </span>
                                <a class="editBlog" href="javascript:void(0)">
                                    <i class="fal fa-pen"></i>
                                    تعديل
                                </a>
                                <a class="addBlog" href="javascript:void(0)">
                                    <i class="fal fa-sticky-note"></i>
                                    إضافة مدونة
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 contentBlog2">
                        <div class="row">
                            <div class="col-lg-4 listBlogs">
                                <div>
                                    <ul>
                                        <li numBlog="1" class="active">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                                <div>
                                                    <p class="titleSignalBlog">
                                                        تنفيذ ورشة اونلاين
                                                    </p>
                                                    <p class="textSignalBlog">
                                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية
                                                        تم تعديلها إيبسوم،، ولكن الغالبية
                                                        تم تعديلها إيبسوم،
                                                    </p>
                                                </div>
                                                <span class="date">
                                                    17/08/2020
                                                </span>
                                            </a>
                                        </li>
                                        <li numBlog="2">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                                <div>
                                                    <p class="titleSignalBlog">
                                                        تنفيذ ورشة اونلاين
                                                    </p>
                                                    <p class="textSignalBlog">
                                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية
                                                        تم تعديلها إيبسوم،، ولكن الغالبية
                                                        تم تعديلها إيبسوم،
                                                    </p>
                                                </div>
                                                <span class="date">
                                                    17/08/2020
                                                </span>
                                            </a>
                                        </li>
                                        <li numBlog="3">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                                <div>
                                                    <p class="titleSignalBlog">
                                                        تنفيذ ورشة اونلاين
                                                    </p>
                                                    <p class="textSignalBlog">
                                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية
                                                        تم تعديلها إيبسوم،، ولكن الغالبية
                                                        تم تعديلها إيبسوم،
                                                    </p>
                                                </div>
                                                <span class="date">
                                                    17/08/2020
                                                </span>
                                            </a>
                                        </li>
                                        <li numBlog="4">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                                <div>
                                                    <p class="titleSignalBlog">
                                                        تنفيذ ورشة اونلاين
                                                    </p>
                                                    <p class="textSignalBlog">
                                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية
                                                        تم تعديلها إيبسوم،، ولكن الغالبية
                                                        تم تعديلها إيبسوم،
                                                    </p>
                                                </div>
                                                <span class="date">
                                                    17/08/2020
                                                </span>
                                            </a>
                                        </li>
                                        <li numBlog="5">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                                <div>
                                                    <p class="titleSignalBlog">
                                                        تنفيذ ورشة اونلاين
                                                    </p>
                                                    <p class="textSignalBlog">
                                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية
                                                        تم تعديلها إيبسوم،، ولكن الغالبية
                                                        تم تعديلها إيبسوم،
                                                    </p>
                                                </div>
                                                <span class="date">
                                                    17/08/2020
                                                </span>
                                            </a>
                                        </li>
                                        <li numBlog="6">
                                            <a href="javascript:void(0)">
                                                <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                                <div>
                                                    <p class="titleSignalBlog">
                                                        تنفيذ ورشة اونلاين
                                                    </p>
                                                    <p class="textSignalBlog">
                                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية
                                                        تم تعديلها إيبسوم،، ولكن الغالبية
                                                        تم تعديلها إيبسوم،
                                                    </p>
                                                </div>
                                                <span class="date">
                                                    17/08/2020
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8 signalBlog active add">
                                <form class="add">
                                    <label for="imgBlog1" class="img">
                                        <img class="imgFile" src="{{asset('assets/website/img/addBlog.png')}}" alt="">
                                        <div class="editImg">
                                            <span>
                                                <img src="{{asset('assets/website/img/camera.svg')}}" alt="">
                                            </span>
                                        </div>
                                    </label>
                                    <input hidden class="imgFile" type="file" name="imgBlog" id="imgBlog1">
                                    <div class="title2">
                                        <label for="titleBlog">
                                            المقال
                                        </label>
                                        <input type="text" id="titleBlog">
                                    </div>
                                    <div class="text2">
                                        <label for="textBlog">
                                            التفاصيل
                                        </label>
                                        <textarea name="textBlog" id="textBlog"
                                                  rows="20"></textarea>
                                    </div>
                                    <div class="btns2Blog text-right mt-3">
                                        <button class="cancelEditBlog" type="button">
                                            إلغاء
                                        </button>
                                        <button class="saveEditBlog" type="submit">
                                            حفظ
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div numBlog="1" class="col-lg-8 signalBlog show">
                                <div class="show">
                                    <div class="img">
                                        <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                    </div>
                                    <div class="title2">
                                        <span>
                                            تنفيذ ورشة أونلاين
                                        </span>
                                        <span>
                                            <i class="fal fa-clock"></i>
                                            17/2/2020
                                        </span>
                                    </div>
                                    <div class="text">
                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل
                                        ما إدخال بعض النوادر الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما
                                        عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة
                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر
                                        الكلمات العشوائية إلى النص .هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم،
                                        ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى
                                        النص هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                        بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع
                                        المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما إدخال بعض النوادر
                                        الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                        الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية إلى النص..هنالك
                                        العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما عبر إدخال بعض
                                        النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                        تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد
                                        الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                        بعض النوادر الكلمات العشوائية إلى النص..
                                    </div>
                                </div>
                                <form class="edit">
                                    <label for="imgBlog1" class="img">
                                        <img class="imgFile" src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                        <div class="editImg">
                                            <span>
                                                <img src="{{asset('assets/website/img/camera.svg')}}" alt="">
                                                <br>
                                                <i class="fal fa-pen"></i>
                                                تعديل
                                            </span>
                                        </div>
                                    </label>
                                    <input hidden class="imgFile" type="file" name="imgBlog" id="imgBlog1">
                                    <div class="title2">
                                        <label for="titleBlog">
                                            المقال
                                        </label>
                                        <input value="تنفيذ ورشة أونلاين" type="text" id="titleBlog">
                                    </div>
                                    <div class="text2">
                                        <label for="textBlog">
                                            التفاصيل
                                        </label>
                                        <textarea name="textBlog" id="textBlog"
                                                  rows="20">هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل</textarea>
                                    </div>
                                    <div class="btns2Blog text-right mt-3">
                                        <button class="cancelEditBlog" type="button">
                                            إلغاء
                                        </button>
                                        <button class="saveEditBlog" type="submit">
                                            تعديل المدونة
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div numBlog="2" class="col-lg-8 signalBlog show">
                                <div class="show">
                                    <div class="img">
                                        <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                    </div>
                                    <div class="title2">
                                        <span>
                                            تنفيذ ورشة أونلاين
                                        </span>
                                        <span>
                                            <i class="fal fa-clock"></i>
                                            17/2/2020
                                        </span>
                                    </div>
                                    <div class="text">
                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل
                                        ما إدخال بعض النوادر الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما
                                        عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة
                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر
                                        الكلمات العشوائية إلى النص .هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم،
                                        ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى
                                        النص هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                        بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع
                                        المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما إدخال بعض النوادر
                                        الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                        الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية إلى النص..هنالك
                                        العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما عبر إدخال بعض
                                        النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                        تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد
                                        الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                        بعض النوادر الكلمات العشوائية إلى النص..
                                    </div>
                                </div>
                                <form class="edit">
                                    <label for="imgBlog1" class="img">
                                        <img class="imgFile" src="{{url('/assets/website/img/signalBlog.png')}}" alt="">
                                        <div class="editImg">
                                            <span>
                                                <img src="{{asset('assets/website/img/camera.svg')}}" alt="">
                                                <br>
                                                <i class="fal fa-pen"></i>
                                                تعديل
                                            </span>
                                        </div>
                                    </label>
                                    <input hidden class="imgFile" type="file" name="imgBlog" id="imgBlog1">
                                    <div class="title2">
                                        <label for="titleBlog">
                                            المقال
                                        </label>
                                        <input value="تنفيذ ورشة أونلاين" type="text" id="titleBlog">
                                    </div>
                                    <div class="text2">
                                        <label for="textBlog">
                                            التفاصيل
                                        </label>
                                        <textarea name="textBlog" id="textBlog"
                                                  rows="20">هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل</textarea>
                                    </div>
                                    <div class="btns2Blog text-right mt-3">
                                        <button class="cancelEditBlog" type="button">
                                            إلغاء
                                        </button>
                                        <button class="saveEditBlog" type="submit">
                                            تعديل المدونة
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div numBlog="3" class="col-lg-8 signalBlog show">
                                <div class="show">
                                    <div class="img">
                                        <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                    </div>
                                    <div class="title2">
                                        <span>
                                            تنفيذ ورشة أونلاين
                                        </span>
                                        <span>
                                            <i class="fal fa-clock"></i>
                                            17/2/2020
                                        </span>
                                    </div>
                                    <div class="text">
                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل
                                        ما إدخال بعض النوادر الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما
                                        عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة
                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر
                                        الكلمات العشوائية إلى النص .هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم،
                                        ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى
                                        النص هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                        بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع
                                        المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما إدخال بعض النوادر
                                        الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                        الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية إلى النص..هنالك
                                        العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما عبر إدخال بعض
                                        النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                        تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد
                                        الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                        بعض النوادر الكلمات العشوائية إلى النص..
                                    </div>
                                </div>
                                <form class="edit">
                                    <label for="imgBlog1" class="img">
                                        <img class="imgFile" src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                        <div class="editImg">
                                            <span>
                                                <img src="{{asset('assets/website/img/camera.svg')}}" alt="">
                                                <br>
                                                <i class="fal fa-pen"></i>
                                                تعديل
                                            </span>
                                        </div>
                                    </label>
                                    <input hidden class="imgFile" type="file" name="imgBlog" id="imgBlog1">
                                    <div class="title2">
                                        <label for="titleBlog">
                                            المقال
                                        </label>
                                        <input value="تنفيذ ورشة أونلاين" type="text" id="titleBlog">
                                    </div>
                                    <div class="text2">
                                        <label for="textBlog">
                                            التفاصيل
                                        </label>
                                        <textarea name="textBlog" id="textBlog"
                                                  rows="20">هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل</textarea>
                                    </div>
                                    <div class="btns2Blog text-right mt-3">
                                        <button class="cancelEditBlog" type="button">
                                            إلغاء
                                        </button>
                                        <button class="saveEditBlog" type="submit">
                                            تعديل المدونة
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div numBlog="4" class="col-lg-8 signalBlog show">
                                <div class="show">
                                    <div class="img">
                                        <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                    </div>
                                    <div class="title2">
                                        <span>
                                            تنفيذ ورشة أونلاين
                                        </span>
                                        <span>
                                            <i class="fal fa-clock"></i>
                                            17/2/2020
                                        </span>
                                    </div>
                                    <div class="text">
                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل
                                        ما إدخال بعض النوادر الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما
                                        عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة
                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر
                                        الكلمات العشوائية إلى النص .هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم،
                                        ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى
                                        النص هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                        بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع
                                        المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما إدخال بعض النوادر
                                        الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                        الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية إلى النص..هنالك
                                        العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما عبر إدخال بعض
                                        النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                        تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد
                                        الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                        بعض النوادر الكلمات العشوائية إلى النص..
                                    </div>
                                </div>
                                <form class="edit">
                                    <label for="imgBlog1" class="img">
                                        <img class="imgFile" src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                        <div class="editImg">
                                            <span>
                                                <img src="{{'assets/website/img/camera.svg'}}" alt="">
                                                <br>
                                                <i class="fal fa-pen"></i>
                                                تعديل
                                            </span>
                                        </div>
                                    </label>
                                    <input hidden class="imgFile" type="file" name="imgBlog" id="imgBlog1">
                                    <div class="title2">
                                        <label for="titleBlog">
                                            المقال
                                        </label>
                                        <input value="تنفيذ ورشة أونلاين" type="text" id="titleBlog">
                                    </div>
                                    <div class="text2">
                                        <label for="textBlog">
                                            التفاصيل
                                        </label>
                                        <textarea name="textBlog" id="textBlog"
                                                  rows="20">هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل</textarea>
                                    </div>
                                    <div class="btns2Blog text-right mt-3">
                                        <button class="cancelEditBlog" type="button">
                                            إلغاء
                                        </button>
                                        <button class="saveEditBlog" type="submit">
                                            تعديل المدونة
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div numBlog="5" class="col-lg-8 signalBlog show">
                                <div class="show">
                                    <div class="img">
                                        <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                    </div>
                                    <div class="title2">
                                        <span>
                                            تنفيذ ورشة أونلاين
                                        </span>
                                        <span>
                                            <i class="fal fa-clock"></i>
                                            17/2/2020
                                        </span>
                                    </div>
                                    <div class="text">
                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل
                                        ما إدخال بعض النوادر الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما
                                        عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة
                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر
                                        الكلمات العشوائية إلى النص .هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم،
                                        ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى
                                        النص هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                        بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع
                                        المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما إدخال بعض النوادر
                                        الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                        الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية إلى النص..هنالك
                                        العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما عبر إدخال بعض
                                        النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                        تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد
                                        الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                        بعض النوادر الكلمات العشوائية إلى النص..
                                    </div>
                                </div>
                                <form class="edit">
                                    <label for="imgBlog1" class="img">
                                        <img class="imgFile" src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                        <div class="editImg">
                                            <span>
                                                <img src="{{asset('assets/website/img/camera.svg')}}" alt="">
                                                <br>
                                                <i class="fal fa-pen"></i>
                                                تعديل
                                            </span>
                                        </div>
                                    </label>
                                    <input hidden class="imgFile" type="file" name="imgBlog" id="imgBlog1">
                                    <div class="title2">
                                        <label for="titleBlog">
                                            المقال
                                        </label>
                                        <input value="تنفيذ ورشة أونلاين" type="text" id="titleBlog">
                                    </div>
                                    <div class="text2">
                                        <label for="textBlog">
                                            التفاصيل
                                        </label>
                                        <textarea name="textBlog" id="textBlog"
                                                  rows="20">هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل</textarea>
                                    </div>
                                    <div class="btns2Blog text-right mt-3">
                                        <button class="cancelEditBlog" type="button">
                                            إلغاء
                                        </button>
                                        <button class="saveEditBlog" type="submit">
                                            تعديل المدونة
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div numBlog="6" class="col-lg-8 signalBlog show">
                                <div class="show">
                                    <div class="img">
                                        <img src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                    </div>
                                    <div class="title2">
                                        <span>
                                            تنفيذ ورشة أونلاين
                                        </span>
                                        <span>
                                            <i class="fal fa-clock"></i>
                                            17/2/2020
                                        </span>
                                    </div>
                                    <div class="text">
                                        هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل
                                        ما إدخال بعض النوادر الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما
                                        عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة
                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر
                                        الكلمات العشوائية إلى النص .هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم،
                                        ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى
                                        النص هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                        بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع
                                        المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما إدخال بعض النوادر
                                        الكلمات العشوائية هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                        الغالبية تم تعديلها بشكل عبر إدخال بعض النوادر الكلمات العشوائية إلى النص..هنالك
                                        العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، تم تعديلها بشكل ما عبر إدخال بعض
                                        النوادر الكلمات العشوائية إلى النص هنالك العديد الأنواع المتوفرة لنصوص لوريم
                                        إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية
                                        إلى النص..هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم
                                        تعديلها بشكل ما عبر إدخال بعض النوادر الكلمات العشوائية إلى النص هنالك العديد
                                        الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                        بعض النوادر الكلمات العشوائية إلى النص..
                                    </div>
                                </div>
                                <form class="edit">
                                    <label for="imgBlog1" class="img">
                                        <img class="imgFile" src="{{asset('assets/website/img/signalBlog.png')}}" alt="">
                                        <div class="editImg">
                                            <span>
                                                <img src="{{asset('assets/website/img/camera.svg')}}" alt="">
                                                <br>
                                                <i class="fal fa-pen"></i>
                                                تعديل
                                            </span>
                                        </div>
                                    </label>
                                    <input hidden class="imgFile" type="file" name="imgBlog" id="imgBlog1">
                                    <div class="title2">
                                        <label for="titleBlog">
                                            المقال
                                        </label>
                                        <input value="تنفيذ ورشة أونلاين" type="text" id="titleBlog">
                                    </div>
                                    <div class="text2">
                                        <label for="textBlog">
                                            التفاصيل
                                        </label>
                                        <textarea name="textBlog" id="textBlog"
                                                  rows="20">هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكلهنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل</textarea>
                                    </div>
                                    <div class="btns2Blog text-right mt-3">
                                        <button class="cancelEditBlog" type="button">
                                            إلغاء
                                        </button>
                                        <button class="saveEditBlog" type="submit">
                                            تعديل المدونة
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
<script>
    /* ***** */
    /* blog Teacher */
    /* ***** */

    function blogShowing() {
        $(".listBlogs").addClass("noneMobile");
        $(".signalBlog").removeClass("active")
        for (var i = 0; i < $(".listBlogs li").length; i++) {
            if ($($(".listBlogs li")[i]).hasClass("active")) {
                $(".signalBlog[numBlog='" + $($(".listBlogs li")[i]).attr("numBlog") + "']").addClass("show active").removeClass("edit").removeClass("noneMobile");
                $(".editBlog").removeClass("noneMobile");
            }
        }
    };

    blogShowing();

    $(document).on("click", ".listBlogs li", function () {
        $(".listBlogs").addClass("noneMobile");
        $(".listBlogs li").removeClass("active");
        $(this).addClass("active");
        blogShowing();
    });

    $(document).on("click", ".contentBlog .editBlog", function () {
        $(".signalBlog.active").removeClass("show").addClass("edit");
    });

    $(document).on("click", ".contentBlog .cancelEditBlog", function () {
        $(".signalBlog.active").removeClass("edit").addClass("show");
    });

    $(document).on("click", ".contentBlog .addBlog", function () {
        $(".signalBlog").removeClass("active");
        $(".signalBlog.add").addClass("active");
    });

    $(document).on("click", ".contentBlog .add .cancelEditBlog", function () {
        $(".signalBlog.active").removeClass("active");
        blogShowing();
    });

    $(document).on("click", ".contentBlog .saveEditBlog", function () {
        $(".signalBlog.active").removeClass("edit").addClass("show");
    });

    $(document).on("click", ".btnBackBlog", function () {
        $(".listBlogs").removeClass("noneMobile");
        $(".signalBlog.active").addClass("noneMobile");
        $(".editBlog").addClass("noneMobile");
    });
</script>
@endsection
