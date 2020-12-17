@extends('app')

@section('header')
<style>
    /* privacy */

    .terms>.border {
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
        overflow: hidden;
    }

    .terms .title {
        border-bottom: 1px solid #E8E8E8;
        padding: 10px 15px;
        color: var(--colorText2);
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #FFF;
    }

    .terms .title span:nth-of-type(1) {
        font-size: 20px;
    }

    .terms .title span:nth-of-type(1) i {
        font-size: 24px;
        margin-left: 4px;
    }

    .terms .textTerms {
        height: 700px;
        overflow: auto;
    }

    .terms .textTerms span {
        font-size: 15px;
        line-height: 2;
        color: #8F8F95;
        font-family: 'arabicBook';
    }

    /* who us */

    .whoUs>.border {
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
        overflow: hidden;
    }

    .whoUs .title {
        border-bottom: 1px solid #E8E8E8;
        padding: 10px 15px;
        color: var(--colorText2);
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #FFF;
    }

    .whoUs .title span:nth-of-type(1) {
        font-size: 20px;
    }

    .whoUs .title span:nth-of-type(1) i {
        font-size: 24px;
        margin-left: 4px;
    }

    .whoUs .whoUsText {
        max-height: 350px;
        overflow: auto;
    }

    .whoUs .whoUsText span {
        font-size: 15px;
        line-height: 2;
        color: #8F8F95;
        font-family: 'arabicBook';
    }

    .whoUs .boxVideo {
        overflow: hidden;
        position: relative;
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
        border: 1px solid #484848;
    }

    .whoUs .coverVideo {
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 9;
    }

    .whoUs .iconPlay {
        position: absolute;
        z-index: 9;
        top: 0;
        right: 0;
        font-size: 35px;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #00000026;
    }

    .whoUs .iconPlay i {
        display: inline-flex;
        color: #FFF;
        background-color: var(--colorText1);
        width: 60px;
        height: 60px;
        align-items: center;
        justify-content: center;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
        box-shadow: 0px 0px 0px 15px #f580125e;
    }

    .whoUs .infoUs a {
        color: #484848;
        font-size: 17px;
        display: inline-block;
        margin-bottom: 8px;
    }

    .whoUs .infoUs a i {
        font-size: 21px;
        margin-right: 5px;
    }

    .whoUs .infoUs p span {
        text-transform: capitalize;
        color: #484848;
        font-size: 17px;
        display: inline-block;
        margin-right: 5px;
        color: var(--colorText1);
    }

    .whoUs .infoUs img {
        margin-left: 5px;
    }

    .whoUs .boxWhoUs {
        background-color: #fff;
        border: 1px solid #E8E8E8;
        border-radius: 15px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        -ms-border-radius: 15px;
        -o-border-radius: 15px;
    }
</style>
@endsection


@section('content')
    <div class="bgF8">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 terms py-4">
                    <div class="border">
                        <div class="row">
                            <div class="col-12">
                                <div class="title">
                                    <span>
                                        <i class="fal fa-scroll-old"></i>
                                        תקנון ותנאי שימוש לאתר "VIP DOROS"
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="px-3 py-3 textTerms">
                                    <span>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
