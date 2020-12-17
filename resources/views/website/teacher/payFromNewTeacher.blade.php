@extends('app')

@section('header')


@endsection

@section('content')


    <div class="container completeDataTeacher">
        <div class="row rowHeadPage">
            <div class="col-12 titlePage">
                <span class="icon">
                    <i class="fal fa-credit-card"></i>
                </span>
                بيانات الفيزا
            </div>
        </div>
        <div class="visa">
            <div class="row">
                <div class="col-12">

                    <p class="titleVisa">
                        אמצעי תשלום
                    </p>
                    <img src="{{asset('assets/website/img/imgVisa1.png')}}" alt="">
                    <p class="subTitleVisa">
                        המערכת עומדת בתקן אבטחה PCI DSS
                    </p>
                </div>
                <form  name="formPayment" action="" method="post" id="formPay" class="col-lg-6">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="inputVisa">
                                <label for="inputVisa1">
                                    מס׳ כרטיס
                                </label>
                                <div>
                                    <input type="text" class="cc_number"   id="ccnum" name="card_number" placeholder="Card number" required>

                                    <i class="fal fa-credit-card"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="inputVisa">
                                <label for="inputVisa2">
                                    תוקף
                                </label>
                                <div>
                                    <input type="text" class="card_exp"   placeholder="Expires MM/YY" required maxlength="9" name="card_exp" id="cvv">

                                    <i class="fal fa-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="inputVisa">
                                <label for="inputVisa3">
                                    שם מלא
                                </label>
                                <div>
                                    <input type="text" name="card_holder_name" id="inputVisa3" placeholder="Card Holder Name">
                                    <i class="fal fa-user-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="inputVisa">
                                <label for="inputVisa4">
                                    ת.ז
                                </label>
                                <div>
                                    <input type="text" name="national_id" id="inputVisa4" placeholder="National ID" data-numeric required>
                                    <i class="fal fa-id-card-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="inputVisa">
                                <label for="inputVisa5">
                                    cvv
                                </label>
                                <div>
                                    <input type="text" name="cvv" class="cvv"  placeholder="Security code" required  autocomplete="off">

                                    <i class="fal fa-shield-check"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="inputVisa">
                                <label for="inputVisa61">
                                    הסכום
                                </label>
                                <div>
                                <input type="hidden" id="installments_no" name="installments" value="">
                                <input type="hidden" name="total_money" value="{{--$price->total_money--}}">
                                    <select type="text" name="price" id="inputVisa6" placeholder="choose price" required>
                                        <option disabled selected value="" style="color: #8c8c8c">בחר... </option>
                                    @if($price->name_en == 'month_sub')
                                        <option   value="{{$price->total_money}}">دفعة واحدة</option>
                                            @elseif( $price->name_en == 'half_year_sub')

                                            <option    value="{{$price->total_money / 1}}"> دفعة - {{$price->total_money / 1}} شيكل </option>
                                            <option id="2"  value="{{round($price->total_money / 2 ,1)}}"> دفعتين - {{round($price->total_money / 2 ,1)}} شيكل </option>
                                            <option id="3"  value="{{round($price->total_money / 3 ,1)}}">3 دفعات - {{round($price->total_money / 3 ,1)}} شيكل </option>

                                        @elseif($price->name_en == 'year_sub')
                                        <option    value="{{$price->total_money / 1}}"> دفعة واحدة - {{$price->total_money / 1}} شيكل </option>
                                        <option id="2"   value="{{round($price->total_money / 2 ,1)}}"> دفعتين - {{round($price->total_money / 2 ,1)}} شيكل </option>
                                        <option id="3"   value="{{round($price->total_money / 3 ,1)}}">3 دفعات - {{round($price->total_money / 3 ,1)}} شيكل </option>
                                        <option id="4"   value="{{round($price->total_money / 4 ,1)}}"> 4 دفعات - {{round($price->total_money / 4 ,1)}} شيكل </option>
                                        <option id="5"   value="{{round($price->total_money / 5 ,1)}}"> 5 دفعات - {{round($price->total_money / 5 ,1)}} شيكل </option>
                                    @endif
                                    </select>


                                    <i class="fal fa-shekel-sign"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2">
                            <button type="submit">
                                שמור פרטי תשלום
                            </button>
                        </div>
                    </div>
                    <div class="row mt-4 visaDetails">
                        <div class="col-12 mb-2">
                            <img src="{{asset('assets/website/img/imgVisa2.png')}}" alt="">
                            <p>
                                Tranzila c. טרנזילה שירותי סליקה באינטרנט – כל הזכויות שמורות
                            </p>
                        </div>
                        <div class="col-12">
                            <img src="{{asset('assets/website/img/imgVisa1.png')}}" alt="">
                            <p>
                                אנו מכבדים את כרטיסי אשראי הבאים: ישראכרט, מסטרקרד, ויזה, דיינרס ודיסקבר.
                                <br>
                                חברת הסליקה שאנו עובדים איתה (חברת
                                <span>
                                    TRANZILA
                                </span>
                                ) עומדת בתקן אבטחה PCI DSS level-1 המאושר ע"י
                                חברות האשראי.
                                <br>
                                למען הסר ספק, פרטי האשראי שלכם מאובטחים ברמה גבוהה ואינם נשמרים על שרתי
                                DOROSVIP

                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection


@section('footer')

<script>
    // import Input from "@/Jetstream/Input";
    // export default {
    //     components: {Input}
    // }
</script>
    <script src="{{asset('js/payment.js')}}"></script>

    <script>
        // var J = Payment.J,
        //     numeric = document.querySelector('[data-numeric]'),
        //     number = document.querySelector('.cc-number'),
        //     exp = document.querySelector('.cc-exp'),
        //     cvc = document.querySelector('.cc-cvc'),
        //     validation = document.querySelector('.validation');
        //
        // Payment.restrictNumeric(numeric);
        // Payment.formatCardNumber(number);
        // Payment.formatCardExpiry(exp);
        // Payment.formatCardCVC(cvc);
        //
        // document.querySelector('form').onsubmit = function(e) {
        //     e.preventDefault();
        //     J.toggleClass(document.querySelectorAll('input'), 'invalid');
        //     J.removeClass(validation, 'passed failed');
        //
        //     var cardType = Payment.fns.cardType(J.val(number));
        //
        //     J.toggleClass(number, 'invalid', !Payment.fns.validateCardNumber(J.val(number)));
        //     J.toggleClass(exp, 'invalid', !Payment.fns.validateCardExpiry(Payment.cardExpiryVal(exp)));
        //
        //     J.toggleClass(cvc, 'invalid', !Payment.fns.validateCardCVC(J.val(cvc), cardType));
        //
        //     if (document.querySelectorAll('.invalid').length) {
        //         J.addClass(validation, 'failed');
        //     } else {
        //         J.addClass(validation, 'passed');
        //     }
        // }

        $('#inputVisa6').change(function(){
            var id = $(this).find(':selected')[0].id;
            $('#installments_no').val(id)
            if (!id){

                document.formPayment.action = "{{route('teacher_normal_payment')}}"

            }else {
                document.formPayment.action = "{{route('teacher_installments_payments')}}"
            }
        })


    </script>
@endsection



