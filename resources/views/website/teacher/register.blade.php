@extends('app')

@section('content')
    <div class="container boxLoginTeacher">
        <div class="row">
            <div class="col-lg-4 col1">
                <div>
                    <div class="header">
                        <i class="fal fa-user-circle"></i>
                        الانضمام للطالب
                    </div>
                    <div class="body">
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
                        <form class="formToJoin formToJoinTeacher"  method="post" id="teacher_join" numCorrect="0">
                            {{csrf_field()}}
                            <div>
                                <label for="name">
                                    الاسم كاملا
                                </label>
                                <div class="divInput">
                                    <input requiredX="yes" min="2" max="25" errorMin="يجب على الأقل أن يكون 3 حروف"
                                           errorMax="يجب ألا يزيد عن 25 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                           autocomplete="off" id="teacher_name" name="name" type="text" value="">
                                    <i class="fal fa-user-circle"></i>
                                </div>
                                <div class="alert-message" id="nameError"></div>

                            </div>
                            <div>
                                <label for="email">
                                    البريد الإلكتروني
                                </label>
                                <div class="divInput">
                                    <input requiredX="yes" min="3" max="35" errorMin="يجب على الأقل أن يكون 3 حروف"
                                           errorMax="يجب ألا يزيد عن 35 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                           errorType="يجب إدخال بريد إلكتروني صحيح" autocomplete="off" id="teacher_email"
                                           type="email" name="email" value="">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="alert-message" id="emailError"></div>

                            </div>
                            <div>
                                <label for="phone">
                                    رقم الهاتف
                                </label>
                                <div class="divInput">
                                    <input requiredX="yes" min="6" max="9999999999999" errorMin="يجب على الأقل أن يكون 3 حروف"
                                           errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                           autocomplete="off" name="mobile" id="teacher_mobile" type="number" value="">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="alert-message" id="mobileError"></div>

                            </div>
                            <div>
                                <label for="password">
                                    كلمة المرور
                                </label>
                                <div class="divInput">
                                    <input requiredX="yes" min="6" max="12" errorMin="يجب على الأقل أن يكون 6 حروف"
                                           errorMax="يجب ألا يزيد عن 12 حرف" errorEmpty="يجب ألا يترك الحقل فارغ"
                                           autocomplete="off" name="password" id="teacher_password" type="password" value="">
                                    <i class="fal fa-lock-alt"></i>
                                </div>
                                <div class="alert-message" id="passwordError"></div>

                            </div>
                            <div class="agree">
                                <input requiredX="yes" id="agree" name="accept_use_terms" id="teacher_accept_use_terms" value="1" hidden type="checkbox">
                                <label for="agree">
                                    أوافق على شروط الاستخدام
                                </label>
                            </div>
                            <div class="alert-message" id="accept_use_termsError"></div>

                            <div class="ok">
                                <button class="submit teacher_submit" disabled type="button" id="teacher_register_submit">
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
            <div class="col-lg-8 col2">
                <div>
                    <div class="header">
                        <b>
                            إنضم للمنصة التعليمية الاولى والوحيدة في الوسط العربي
                        </b>
                    </div>
                    <div class="body">
                        <div class="numsMobile" data-active="1">
                            <span class="num1">1</span>
                            <span class="num2">2</span>
                            <span class="num3">3</span>
                            <span class="num4">4</span>
                        </div>
                        <div class="step1">
                            <div class="right">
                                <b>
                                    أنشىء
                                    <span>
                                        ملفك الخاص
                                    </span>
                                    وشاركه مع الجميع
                                </b>
                            </div>
                            <div class="center">
                                <span>
                                    1
                                </span>
                            </div>
                            <div class="left">
                                <img src="{{asset('assets/website/img/imgLoginStep1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="step2">
                            <div class="right text-right">
                                <div class="boxUser">
                                    <div class="boxImg">
                                        <img src="{{asset('assets/website/img/userStep2.png')}}" alt="">
                                        <img class="vip" src="{{asset('assets/website/img/vip.png')}}" alt="">
                                    </div>
                                    <div class="boxName">
                                        <p>
                                            أحمد العكلوك
                                        </p>
                                        <p>
                                            رياضيات، كفر عقب
                                        </p>
                                    </div>
                                    <span>
                                        <i class="fal fa-fire-alt"></i>
                                        جديد
                                    </span>
                                </div>
                            </div>
                            <div class="center">
                                <span>
                                    2
                                </span>
                            </div>
                            <div class="left">
                                <b>
                                    نعرض
                                    <span>
                                        ملفك الخاص
                                    </span>
                                    امام آلاف الطلاب
                                </b>
                            </div>
                        </div>
                        <div class="step3">
                            <div class="right">
                                <b>
                                    إبدأ
                                    <span>
                                        بإعطاء الدروس
                                    </span>
                                    بالطريقة المناسبة لك
                                </b>
                            </div>
                            <div class="center">
                                <span>
                                    3
                                </span>
                            </div>
                            <div class="left text-left">
                                <div class="boxStep3">
                                    <div>
                                        <img src="{{asset('assets/website/img/imgStep3.png')}}" alt="">
                                        <p>
                                            online
                                        </p>
                                    </div>
                                    <div>
                                        <img src="{{asset('assets/website/img/imgStep3.png')}}" alt="">
                                        <p>
                                            online
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step4">
                            <div class="right">
                                <div>
                                    <div class="boxUser">
                                        <div class="boxImg">
                                            <img src="{{asset('assets/website/img/userStep2.png')}}" alt="">
                                            <img class="vip" src="{{asset('assets/website/img/vip.png')}}" alt="">
                                        </div>
                                        <div class="boxName">
                                            <p>
                                                أحمد العكلوك
                                            </p>
                                            <p>
                                                رياضيات، كفر عقب
                                            </p>
                                            <p class="stars" data-star="3">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="rate">
                                            <span>
                                                <i class="fas fa-quote-right"></i>
                                            </span>
                                            هنالك العديد من الأنواع المتوفرة لنصوص لوريم
                                            <span>
                                                <i class="fas fa-quote-left"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="text-right">
                                        <p class="last">
                                            <img src="{{asset('assets/website/img/user.png')}}" alt="">
                                            محمد أحمد
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="center">
                                <span>
                                    4
                                </span>
                            </div>
                            <div class="left">
                                <b>
                                    أحصل على
                                    <span>
                                        تقييمات
                                    </span>
                                    من الطلاب
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript">


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".teacher_submit").click(function(e){

            e.preventDefault();
            $(this).html('جاري الحفظ...'); //this changes the html to Saving...
            $(this).attr('disabled', true); //this will disable the button onclick

            var name = $("input[name=name]").val();
            var email = $("input[name=email]").val();
            var password = $("input[name=password]").val();
            var mobile = $("input[name=mobile]").val();
            var _token = $("input[name=_token]").val();
            var url = '{{ url('/teacher/registers')}}';

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
                        $("#teacher_join").trigger('reset');
                        $(".teacher_submit").html('انضم'); //this changes the html to Saving...
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
                        $('#teacher_name').addClass("error").removeClass("correct");
                    }
                    if (response.responseJSON.errors.email){
                        $('#emailError').text(response.responseJSON.errors.email);
                        $('#teacher_email').addClass("error").removeClass("correct");
                    }
                    if (response.responseJSON.errors.mobile){
                        $('#mobileError').text(response.responseJSON.errors.mobile);
                        $('#teacher_mobile').addClass("error").removeClass("correct");
                    }
                    if (response.responseJSON.errors.password){
                        $('#passwordError').text(response.responseJSON.errors.password);
                        $('#teacher_password').addClass("error").removeClass("correct");
                    }
                    if (response.responseJSON.errors.accept_use_terms){
                        $('#accept_use_termsError').text(response.responseJSON.errors.accept_use_terms);
                        $('#teacher_accept_use_termsError').addClass("error").removeClass("correct");
                    }


                    $(".teacher_submit").html('انضم');
                    $(".teacher_submit").attr('disabled', false);

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
@endsection
