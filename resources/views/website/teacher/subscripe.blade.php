
@extends('app')
@section('content')
<div class="container completeDataTeacher">
    <div class="row rowHeadPage">
        <div class="col-12 titlePage">
                <span class="icon">
                    <i class="fal fa-copy"></i>
                </span>
            اختر خطط الاشتراك
        </div>
    </div>
    <div class="plans">
        <div class="row">
            <div class="boxPlan boxPlan1">
                <p>
                    اشتراك شهري
                </p>
                <p>
                    هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها إيبسوم، لوريم إيبسوم،
                </p>
                <p>
                    <b>
                        149
                        <i class="fal fa-shekel-sign"></i>
                    </b>
                    بدلاً من
                    <b>
                        179
                        <i class="fal fa-shekel-sign"></i>
                    </b>
                </p>
                <p>
                    خصم
                    <b>
                        30%
                    </b>
                </p>
               <a href="{{url('/teacher/payment/'.getPriceSubscripeByToken(1).'/pay')}}">اختيار</a>
            </div>
            <div class="boxPlan boxPlan2">
                <p>
                    اشتراك نصف سنوي
                </p>
                <p>
                    هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها إيبسوم، لوريم إيبسوم،
                </p>
                <p>
                    <b>
                        99
                        <i class="fal fa-shekel-sign"></i>
                    </b>
                    بدلاً من
                    <b>
                        139
                        <i class="fal fa-shekel-sign"></i>
                    </b>

                </p>

                <p>
                    خصم
                    <b>
                        30%
                    </b>
                </p>
                <a href="{{url('/teacher/payment/'.getPriceSubscripeByToken(2).'/pay')}}">
                    اختيار
                </a>
            </div>
            <div class="boxPlan boxPlan3">
                <p>
                    اشتراك سنوي
                </p>
                <p>
                    هنالك العديد الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها إيبسوم، لوريم إيبسوم،
                </p>
                <p>
                    <b>
                        89
                        <i class="fal fa-shekel-sign"></i>
                    </b>
                    بدلاً من
                    <b>
                        129
                        <i class="fal fa-shekel-sign"></i>
                    </b>
                </p>
                <p>
                    خصم
                    <b>
                        30%
                    </b>
                </p>
                <a href="{{url('/teacher/payment/'.getPriceSubscripeByToken(3).'/pay')}}">
                    اختيار
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
<script>
    import Button from "@/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
