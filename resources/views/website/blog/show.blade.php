@extends('app')
@section('header')
    <style>
        /* ******************* */
        /* style Blog boxSignalBlog */
        /* ***************** */

        .boxSignalBlog>.border {
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            overflow: hidden;
        }

        .boxSignalBlog .title {
            border-bottom: 1px solid #E8E8E8;
            padding: 10px 15px;
            color: var(--colorText2);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #FFF;
        }

        .boxSignalBlog .title span:nth-of-type(1) {
            font-size: 20px;
        }

        .boxSignalBlog .title span:nth-of-type(1) i {
            font-size: 24px;
            margin-left: 4px;
        }

        .boxSignalBlog .lineLinks>div {
            padding: 15px;
            background-color: #fdfdfd;
            font-size: 15px;
        }

        .boxSignalBlog .lineLinks>div a {
            color: #696871;
            margin-left: 5px;
        }

        .boxSignalBlog .lineLinks>div a::after {
            content: "/";
            margin-right: 5px;
        }

        .boxSignalBlog .lineLinks>div a.active {
            color: var(--colorText1);
        }

        .boxSignalBlog .lineLinks>div a.active::after {
            content: "";
        }

        @media (min-width:0.1px) and (max-width: 575.9px) {
            .boxSignalBlog .title {
                flex-wrap: wrap;
            }

            .boxSignalBlog .title span {
                flex: 0 0 100%;
            }
        }

        .boxSignalBlog2 .signalBlog>div {
            background-color: #fdfdfd;
            height: 100%;
            border-top: 0;
            border-right: 0;
            padding: 10px;
            overflow: auto;
            border-radius: 0 0 15px 15px;
            -webkit-border-radius: 0 0 15px 15px;
            -moz-border-radius: 0 0 15px 15px;
            -ms-border-radius: 0 0 15px 15px;
            -o-border-radius: 0 0 15px 15px;
        }

        .boxSignalBlog2 .signalBlog .img {
            text-align: center;
            position: relative;
            width: 100%;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            overflow: hidden;
        }

        .boxSignalBlog2 .signalBlog img {
            max-width: 100%;
            height: auto;
            max-height: 270px;
            width: 100%;
        }

        .boxSignalBlog2 .signalBlog .editor {
            position: absolute;
            bottom: 10px;
            left: 10px;
            display: flex;
            align-items: center;
            font-size: 13px;
            text-align: right;
            color: #B2B3BD;
            background-color: #F8F8F8;
            border: 1px solid #E8E8E8;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            padding: 3px;
        }

        .boxSignalBlog2 .signalBlog .editor i {
            font-size: 16px;
            color: #484848;
        }

        .boxSignalBlog2 .signalBlog .editor img {
            width: 44px;
            margin-left: 10px;
        }

        .boxSignalBlog2 .signalBlog .title2 {
            margin: 23px 0 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--colorText2);
        }

        .boxSignalBlog2 .signalBlog .title2 span:nth-of-type(2) {
            font-size: 13px;
            color: #B2B3BD;
        }

        .boxSignalBlog2 .signalBlog .title2 span:nth-of-type(2) i {
            color: var(--colorText2);
            font-size: 17px;
        }

        .boxSignalBlog2 .signalBlog .text {
            font-family: 'arabicBook';
            color: #8F8F95;
            font-size: 15px;
            line-height: 2;
            max-height: 400px;
            overflow: auto;
        }

        @media(min-width: 0.1px) and (max-width: 991.9px) {
            .boxSignalBlog2 .listBlogs {
                position: absolute;
                z-index: 9;
                padding-left: 10px;
            }

            .boxSignalBlog .title span:nth-of-type(1) {
                font-size: 15px;
            }

            .boxSignalBlog .title span a {
                font-size: 14px;
            }

            .boxSignalBlog2 .signalBlog {
                padding-right: 15px;
            }
        }

        .bgF8 {
            background-color: #F8F8F8;
        }

        .moreBoxSignalBlog .boxEditBlog {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #E8E8E8;
            padding: 8px;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            background-color: #FFF;
        }

        .moreBoxSignalBlog .boxEditBlog p {
            margin: 0 0 4px 0;
        }

        .moreBoxSignalBlog .boxEditBlog p:nth-of-type(1) {
            font-size: 12px;
            font-family: 'arabicBook';
            color: #696871;
        }

        .moreBoxSignalBlog .boxEditBlog p:nth-of-type(2) {
            font-size: 15px;
            color: var(--colorText2);
        }

        .moreBoxSignalBlog .boxEditBlog p:nth-of-type(3) {
            font-size: 13px;
            font-family: 'arabicBook';
            color: #696871;
        }

        .moreBoxSignalBlog .boxEditBlog .stars .icon {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            color: #D9D9D9;
        }

        .moreBoxSignalBlog .boxEditBlog .stars[data-star="1"] span i:nth-last-of-type(1) {
            color: var(--colorText1);
        }

        .moreBoxSignalBlog .boxEditBlog .stars[data-star="2"] span i:nth-last-of-type(1),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="2"] span i:nth-last-of-type(2) {
            color: var(--colorText1);
        }

        .moreBoxSignalBlog .boxEditBlog .stars[data-star="3"] span i:nth-last-of-type(1),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="3"] span i:nth-last-of-type(2),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="3"] span i:nth-last-of-type(3) {
            color: var(--colorText1);
        }

        .moreBoxSignalBlog .boxEditBlog .stars[data-star="4"] span i:nth-last-of-type(1),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="4"] span i:nth-last-of-type(2),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="4"] span i:nth-last-of-type(3),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="4"] span i:nth-last-of-type(4) {
            color: var(--colorText1);
        }

        .moreBoxSignalBlog .boxEditBlog .stars[data-star="5"] span i:nth-last-of-type(1),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="5"] span i:nth-last-of-type(5),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="5"] span i:nth-last-of-type(3),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="5"] span i:nth-last-of-type(4),
        .moreBoxSignalBlog .boxEditBlog .stars[data-star="5"] span i:nth-last-of-type(5) {
            color: var(--colorText1);
        }

        .moreBoxSignalBlog .boxEditBlog span:nth-of-type(3) a {
            border: 1px solid var(--colorText1);
            display: inline-flex;
            width: 28px;
            height: 28px;
            align-items: center;
            justify-content: center;
            color: #FFF;
            background-color: var(--colorText1);
            border-radius: 8px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
        }

        .blogsLike .title {
            background-color: #FFF;
            font-size: 20px;
            padding: 12px;
            border-radius: 15px 15px 0 0;
            -webkit-border-radius: 15px 15px 0 0;
            -moz-border-radius: 15px 15px 0 0;
            -ms-border-radius: 15px 15px 0 0;
            -o-border-radius: 15px 15px 0 0;
            border: 1px solid #E8E8E8;
            color: var(--colorText2);
        }

        .blogsLike .title i {
            font-size: 23px;
            margin-left: 5px;
        }

        .blogsLike .another {
            padding: 16px 12px;
            background-color: #fdfdfd;
            border: 1px solid #E8E8E8;
            border-top: 0px;
            border-radius: 0 0 15px 15px;
            -webkit-border-radius: 0 0 15px 15px;
            -moz-border-radius: 0 0 15px 15px;
            -ms-border-radius: 0 0 15px 15px;
            -o-border-radius: 0 0 15px 15px;
        }

        .blogsLike .another a {
            display: inline-block;
            margin-bottom: 25px;
        }

        .blogsLike .another a:last-of-type {
            margin-bottom: 0px;
        }

        .blogsLike .another a .img {
            position: relative;
        }

        .blogsLike .another a .img img {
            width: 100%;
            max-height: 170px;
            border-radius: 15px 15px 0 0;
            -webkit-border-radius: 15px 15px 0 0;
            -moz-border-radius: 15px 15px 0 0;
            -ms-border-radius: 15px 15px 0 0;
            -o-border-radius: 15px 15px 0 0;
        }

        .blogsLike .another a .img span {
            background-color: #fff;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            border: 1px solid #E8E8E8;
            display: inline-flex;
            align-items: center;
            padding: 6px;
            font-size: 14px;
            color: #B2B3BD;
            position: absolute;
            left: 12px;
            bottom: -16px;
        }

        .blogsLike .another a .img span i {
            margin-left: 7px;
            font-size: 20px;
            color: #484848;
        }

        .blogsLike .another a .text {
            margin-top: 22px;
            margin-bottom: 15px;
            position: relative;
        }

        .blogsLike .another a .text b {
            font-size: 15px;
            color: var(--colorText2);
            display: block;
            margin-bottom: 7px;
        }

        .blogsLike .another a .text span {
            font-size: 13px;
            font-family: 'arabicBook';
            color: #8F8F95;
            display: inline-block;
            height: 38px;
            overflow: hidden;
        }

        .blogsLike .another a .text span::after {
            content: "... عرض المزيد";
            position: absolute;
            bottom: -15px;
            right: 5px;
            color: var(--colorText2);
        }

        .blogsLike .another a .editor {
            align-items: center;
            font-size: 13px;
            text-align: right;
            color: #B2B3BD;
            background-color: #F8F8F8;
            border: 1px solid #E8E8E8;
            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            -ms-border-radius: 15px;
            -o-border-radius: 15px;
            padding: 3px;
            display: flex;
            width: 70%;
            margin-top: 25px;
            margin-right: auto;
        }

        .blogsLike .another a .editor i {
            font-size: 16px;
            color: #484848;
        }

        .blogsLike .another a .editor img {
            width: 44px;
            margin-left: 10px;
        }

    </style>

@endsection


@section('content')
    <div class="bgF8">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 boxSignalBlog py-4">
                    <div class="border">
                        <div class="row">
                            <div class="col-12">
                                <div class="title">
                                    <span>
                                        <i class="fal fa-sticky-note"></i>
                                        المدونة
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 lineLinks">
                                <div>
                                    <a href="">
                                        الرئيسية
                                    </a>
                                    <a href="">
                                        المدونة
                                    </a>
                                    <a href="" class="active">
                                        {{$blog->title_ar}}                                    </a>
                                </div>
                            </div>
                            <div class="col-12 boxSignalBlog2">
                                <div class="row">
                                    <div class="col-lg-12 signalBlog">
                                        <div>
                                            <div class="img">
                                                <img src="{{url( $blog->image)}}" alt="">
                                                <div class="editor">
                                                    <span>
                                                        <img src="{{url($blog->user->image)}}" alt="">
                                                    </span>
                                                    <span>
                                                        <i class="fal fa-pen"></i>
                                                        <br>
                                                       {{$blog->user->name}}{{$blog->user->last_name}}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="title2">
                                                <span>
                                                   {{$blog->title_ar}}
                                                </span>
                                                <span>
                                                    <i class="fal fa-clock"></i>
                                                    17/2/2020
                                                </span>
                                            </div>
                                            <div class="text">
                                                {!! $blog->content_ar  !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 moreBoxSignalBlog py-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="boxEditBlog">
                                <span>
                                    <img src="{{asset('assets/website/img/userStep2.png')}}" width="70" alt="">
                                </span>
                                <span class="info">
                                    <p>كاتب المقالة</p>
                                    <p>أحمد العكلوك</p>
                                    <p>رياضيات، كفر عقب</p>
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
                                <span>
                                    <a class="mb-1" href="">
                                        <i class="fal fa-calendar-star"></i>
                                    </a>
                                    <a class="mb-1" href="">
                                        <i class="fal fa-phone-alt"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 blogsLike">
                            <div class="title">
                                <i class="fal fa-sticky-note"></i>
                                مقالات متشابهة
                            </div>
                            <div class="another">
                                <a href="">
                                    <div class="img">
                                        <img src="{{asset('assets/website/img/blog1.png')}}" alt="">
                                        <span>
                                            <i class="fal fa-clock"></i>
                                            17/2/2020
                                        </span>
                                    </div>
                                    <div class="text">
                                        <b>
                                            تنفيذ ورشة اونلاين مع الطلاب
                                        </b>
                                        <span>
                                            هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                            بشكل ما إدخال بعض النوادر الكلمات العشوائية
                                        </span>
                                    </div>
                                    <div class="editor">
                                        <span>
                                            <img src="{{asset('assets/website/img/user.png')}}" alt="">
                                        </span>
                                        <span>
                                            <i class="fal fa-pen"></i>
                                            <br>
                                            أحمد العكلوك
                                        </span>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="img">
                                        <img src="{{asset('assets/website/img/blog1.png')}}" alt="">
                                        <span>
                                            <i class="fal fa-clock"></i>
                                            17/2/2020
                                        </span>
                                    </div>
                                    <div class="text">
                                        <b>
                                            تنفيذ ورشة اونلاين مع الطلاب
                                        </b>
                                        <span>
                                            هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها
                                            بشكل ما إدخال بعض النوادر الكلمات العشوائية
                                        </span>
                                    </div>
                                    <div class="editor">
                                        <span>
                                            <img src="{{asset('assets/website/img/user.png')}}" alt="">
                                        </span>
                                        <span>
                                            <i class="fal fa-pen"></i>
                                            <br>
                                            أحمد العكلوك
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
