@extends('app')

@section('header')
<style>
    /* search Blog */

    .boxSearchBlog2 {
        padding-bottom: 15px;
    }

    .boxSearchBlog>.border {
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
        overflow: hidden;
    }

    .boxSearchBlog .title {
        border-bottom: 1px solid #E8E8E8;
        padding: 10px 15px;
        color: var(--colorText2);
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #FFF;
    }

    .boxSearchBlog .title span:nth-of-type(1) {
        font-size: 20px;
    }

    .boxSearchBlog .title span:nth-of-type(1) i {
        font-size: 24px;
        margin-left: 4px;
    }

    .boxSearchBlog .boxSearch>div {
        padding: 15px;
        background-color: #fdfdfd;
        font-size: 15px;
        display: flex;
        position: relative;
    }

    .boxSearchBlog .boxSearch>div input {
        flex: 1 0 auto;
        padding: 8px 40px 8px 8px;
        border: 1px solid #E8E8E8;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
    }

    .boxSearchBlog .boxSearch>div i {
        position: absolute;
        font-size: 22px;
        top: 24px;
        right: 24px;
    }

    .boxSearchBlog .boxSearch>div button {
        margin-right: 10px;
        background-color: var(--colorText1);
        border: 1px solid var(--colorText1);
        display: inline-block;
        padding: 0 15px;
        color: #fff;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
    }

    @media (min-width:0.1px) and (max-width: 575.9px) {
        .boxSearchBlog .title {
            flex-wrap: wrap;
        }

        .boxSearchBlog .title span {
            flex: 0 0 100%;
        }
    }

    .boxSearchBlog2 .signalBlog>div {
      /*  background-color: #fdfdfd;*/
        background-color:  #ffffff;
        height: 100%;
        border-top: 0;
        border-right: 0;
        padding: 10px;
        overflow: auto;
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
        display: flex;
        border: 1px solid #E8E8E8;
        width: 97%;
        margin: 10px auto;
    }

    @media (min-width: 0.1px) and (max-width: 767.9px) {
        .boxSearchBlog2 .signalBlog>div {
            flex-wrap: wrap;
        }
    }

    .boxSearchBlog2 .signalBlog .img {
        text-align: center;
        position: relative;
        width: 100%;
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
        overflow: hidden;
        flex: 0 0 220px;
        display: flex;
    }

    .boxSearchBlog2 .signalBlog img {
        max-width: 100%;
        height: auto;
        width: 100%;
    }

    .boxSearchBlog2 .signalBlog .title2 {
        margin: 10px 15px 15px 0px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: var(--colorText2);
    }

    .boxSearchBlog2 .signalBlog .title2 span:nth-of-type(2) {
        font-size: 13px;
        color: #B2B3BD;
    }

    .boxSearchBlog2 .signalBlog .title2 span:nth-of-type(2) i {
        color: var(--colorText2);
        font-size: 17px;
    }

    /*.boxSearchBlog2 .signalBlog .text {*/
    /*    font-family: 'arabicBook';*/
    /*    color: #8F8F95;*/
    /*    font-size: 15px;*/
    /*    line-height: 2;*/
    /*    max-height: 400px;*/
    /*    overflow: auto;*/
    /*    margin: 0 15px 5px 0px;*/
    /*}*/

    /*.boxSearchBlog2 .signalBlog .text::after {*/
    /*    content: "... \f1d8  عرض المزيد";*/

    /*    color: var(--colorText1);*/
    /*    font-weight: 700;*/
    /*    font-family: 'Font Awesome 5 Pro';*/
    /*  !*  font-weight: 300;*!*/

    /*}*/

    .boxSearchBlog2 .signalBlog .text {
        font-family: 'arabicBook';
        color: #8F8F95;
        font-size: 15px;
        line-height: 2;
        max-height: 60px;
        overflow: hidden;
        margin: 0 15px 5px 0px;
    }

    .boxSearchBlog2 .signalBlog .text b {
        color: var(--colorText2);
        font-size: 16px;
    }

    .boxSearchBlog2 .signalBlog .text span {
        color: var(--colorText1);
        font-size: 13px;
        margin-right: 7px;
    }


    @media(min-width: 0.1px) and (max-width: 991.9px) {
        .boxSearchBlog2 .listBlogs {
            position: absolute;
            z-index: 9;
            padding-left: 10px;
        }

        .boxSearchBlog .title span:nth-of-type(1) {
            font-size: 15px;
        }

        .boxSearchBlog .title span a {
            font-size: 14px;
        }

        .boxSearchBlog2 .signalBlog {
            padding-right: 15px;
        }
    }

    .pagesLinksBlog {
        width: 97%;
        display: flex;
        margin: auto;
        padding: 5px 15px;
        align-items: center;
    }

    .pagesLinksBlog a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 33px;
        height: 33px;
        margin-left: 6px;
        font-size: 15px;
        border: 1px solid #E8E8E8;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
        color: #B2B3BD;
        padding: 8px;
        background-color: #fff;
    }

    @media (min-width: 0.1px) and (max-width: 430px) {
        .pagesLinksBlog a:nth-of-type(6) {
            display: none;
        }
    }

    .pagesLinksBlog a.active {
        background-color: var(--colorText1);
        color: #fff;
        border: 1px solid var(--colorText1);
    }

    .pagesLinksBlog a:nth-of-type(1),
    .pagesLinksBlog a:nth-of-type(5),
    .pagesLinksBlog a:nth-of-type(6),
    .pagesLinksBlog a:nth-of-type(7) {
        color: var(--colorText2);
    }

</style>

@endsection
@section('content')
<div class="bgF8">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 boxSearchBlog py-4">
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
                        <form class="col-12 boxSearch">
                            <div>
                                <input type="text" placeholder="بحث عن مقال" name="" id="">
                                <button type="submit">
                                    ابحث
                                </button>
                                <i class="fal fa-search"></i>
                            </div>
                        </form>
                        <div class="col-12 boxSearchBlog2">
                            @foreach($blogs as $blog)
                            <div class="row pb-3">
                                <a href="" class="col-lg-12 signalBlog">
                                    <div>
                                        <div class="img" style="width: 100%;height: auto;">
                                            <img src="{{url($blog->image)}}" alt="">
                                        </div>
                                        <div>
                                            <div class="title2">
                                                    <span style="">
                                                        {{$blog->title_ar}}
                                                    </span>
                                                <span>
                                                        <i class="fal fa-clock"></i>
                                                        17/2/2020
                                                    </span>
                                            </div>
                                            <div class="text">
                                                {{ substr($blog->title_content, 0,  320)  }}
                                                <span>
                                                        <b>
                                                            ...
                                                            <i class="fal fa-paper-plane"></i>
                                                        </b>
                                                        عرض المزيد
                                                    </span>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                            <div class="row">
                                <div class="col-12">
                                    <div class="pagesLinksBlog">
                                        {{ $blogs->links('pagination.default') }}


                                    </div>
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

<script>
    for (var i = 0; i < $(".signalBlog .text").length; i++) {
        // console.log($(".signalBlog .text")[i])
        (($($(".signalBlog .text")[i]).text()).replace(/(<([^>]+)>)/gi, "")).replace(/\s+/g," ")
    }



</script>
@endsection
