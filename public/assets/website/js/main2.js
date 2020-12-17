$(document).ready(function () {

    /********************/
    // script for student
    /********************/

    // script for student => header

    $(document).on("click", ".headerStudent .user", function () {
        $(".headerStudent .menuNotification").removeClass("active");
        $(".headerStudent .menuUser").toggleClass("active");
    })

    $(document).on("click", ".headerStudent .notification", function () {
        $(".headerStudent .menuUser").removeClass("active");
        $(".headerStudent .menuNotification").toggleClass("active");
    })

    $(document).mousedown(function (e) {
        var container = $(".headerStudent .menuUser");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".headerStudent .menuUser").removeClass("none");
        }
    });

    $(document).mousedown(function (e) {
        var container = $(".headerStudent .menuNotification");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".headerStudent .menuNotification").removeClass("none");
        }
    });

    $(document).on("click", ".sideRightStudent .keyList", function () {
        $(".sideRightStudent .listSideRight").slideToggle(400)
    })

    $(document).on("click", ".headerStudent .menuMobile .icon", function () {
        $(".sideRightStudent").toggleClass("active");
    })

    // script for student => contentStudent
    $(document).on("click", ".contentStudent .textInfo label", function () {
        $(this).siblings("input").removeAttr("disabled");
        $(this).siblings("select").removeAttr("disabled");
        $(this).siblings("textarea").removeAttr("disabled");
        $(".contentStudent .secInfo .btnsForm").removeClass("d-none");
    })

    $(document).mousedown(function (e) {
        var container = $(".contentStudent .textInfo .info label, .contentStudent .textInfo .info input, .contentStudent .textInfo .info textarea, .contentStudent .textInfo .info .select2-search__field, .contentStudent .textInfo .info .select2, .contentStudent .secInfo .btnsForm, .contentStudent .educationSelect2");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.siblings("input").attr("disabled", "disabled");
            container.siblings("select").attr("disabled", "disabled");
            container.siblings("textarea").attr("disabled", "disabled");
        }
    });

    $(document).on("click", ".contentStudent .secInfo .btnsForm>*", function () {
        $(".contentStudent .secInfo .btnsForm").addClass("d-none");
        $($(".contentStudent .btnEdit").parents(".title")).removeClass("barEdit");
        $($(".contentStudent .btnEdit").parents(".box")).removeClass("boxEdit");
        $($($(".contentStudent .btnEdit").parents(".title")).siblings(".show")).addClass("active");
        $($($(".contentStudent .btnEdit").parents(".title")).siblings(".edit")).removeClass("active");
    })

    $(document).on("click", ".contentStudent .btnEdit", function () {
        $($(this).parents(".title")).addClass("barEdit");
        $($(this).parents(".box")).addClass("boxEdit");
        $($($(this).parents(".title")).siblings(".show")).removeClass("active");
        $($($(this).parents(".title")).siblings(".edit")).addClass("active");
        $(".btnsForm").removeClass("d-none");
    })

    // $(document).on("click", ".contentStudent .btnsForm>*", function () {
    //     $($(this).parents(".title")).removeClass("barEdit");
    //     $($(this).parents(".box")).removeClass("boxEdit");
    //     $($($(this).parents(".title")).siblings(".show")).addClass("active");
    //     $($($(this).parents(".title")).siblings(".edit")).removeClass("active");
    // })

    $(document).on("click", ".contentStudent .nameEducation i", function () {
        // $($(this).parents(".nameEducation")).remove();
    })

    // script for student => completeDataStudent

    for (var i = 0; i < $(".completeDataStudent input[requiredX]").length; i++) {
        $($($(".completeDataStudent input[requiredX]")[i]).parent(".divInput")).after('<small class="error"></small>');
    }

    $(document).on("keyup change blur", ".completeDataStudent input[requiredX]", function () {

        if ($(this).attr("requiredX") == "yes") {
            if ($(this).val().length == 0) {
                $(this).addClass("error").removeClass("correct");
                $($($(this).parent(".divInput")).next("small.error")).show();
                $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorEmpty"));
                $(this).attr("true", "no");
            } else if ($(this).val().length < $(this).attr("min")) {
                if ($(this).attr("min")) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMin"));
                    $(this).attr("true", "no");
                }
            } else if ($(this).val().length > $(this).attr("max")) {
                if ($(this).attr("max")) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMax"));
                    $(this).attr("true", "no");
                }
            } else {
                $(this).addClass("correct").removeClass("error");
                $($($(this).parent(".divInput")).next("small.error")).hide();
                $($($(this).parent(".divInput")).next("small.error")).text();
                $(this).attr("true", "yes");
            }

            if ($(this).attr("type") == "email") {
                if (IsEmail($(this).val()) == false) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorType"));
                    $(this).attr("true", "no");
                    return false;
                } else {
                    $(this).addClass("correct").removeClass("error");
                    $($($(this).parent(".divInput")).next("small.error")).hide();
                    $($($(this).parent(".divInput")).next("small.error")).text();
                    $(this).attr("true", "yes");
                    return true;
                }
            }

            if ($(this).attr("type") == "checkbox") {
                if ($(this).is(':checked')) {
                    $(this).attr("true", "yes");
                } else {
                    $(this).attr("true", "no");
                }
            }
        } else {
            $(this).attr("true", "yes")
        }

        for (var i = 0; i < $(".completeDataStudent form.dataStudent input").length; i++) {
            if ($($(".completeDataStudent form.dataStudent input")[i]).attr("true") != "yes") {
                x++;
            }
            if (i == $(".completeDataStudent form.dataStudent input").length - 1) {

                if (x != 0) {
                    $($(".completeDataStudent form.dataStudent").find(".submit")).attr("disabled", "disabled");
                } else {
                    $($(".completeDataStudent form.dataStudent").find(".submit")).removeAttr("disabled");
                }
                x = 0;
            }
        }

    })
    var x = 0;

    for (var i = 0; i < $(".completeDataStudent form.dataStudent input").length; i++) {

        if ($($(".completeDataStudent form.dataStudent input")[i]).attr("requiredX") == "yes") {
            $($(".completeDataStudent form.dataStudent input")[i]).attr("true", "no");
        } else {
            $($(".completeDataStudent form.dataStudent input")[i]).attr("true", "yes");
        }
    };

    $(document).on("change", ".imgFile", function () {
        readURL(this)
    })

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('img.imgFile').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).on("change", ".completeDataStudent input", function () {
        if ($(this).next("datalist").length == 1) {
            $(this).attr("data-value", $($($(this).next("datalist")).find("option[value='" + $(this).val() + "']")).attr("data-value"))
        }
    });

    /********************/
    // script for teacher
    /********************/

    // script for teacher => header

    $(document).on("click", ".headerTeacher .user", function () {
        $(".headerTeacher .menuNotification").removeClass("active");
        $(".headerTeacher .menuUser").toggleClass("active");
    })

    $(document).on("click", ".headerTeacher .notification", function () {
        $(".headerTeacher .menuUser").removeClass("active");
        $(".headerTeacher .menuNotification").toggleClass("active");
    })

    $(document).mousedown(function (e) {
        var container = $(".headerTeacher .menuUser");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".headerTeacher .menuUser").removeClass("none");
        }
    });

    $(document).mousedown(function (e) {
        var container = $(".headerTeacher .menuNotification");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".headerTeacher .menuNotification").removeClass("none");
        }
    });

    // script for teacher => alert

    $(document).on("click", ".textAlertData", function () {
        if ($(window).outerWidth(true) <= 991.9) {
            $(".over").addClass("active");
        }
    })

    $(document).mousedown(function (e) {
        var container = $(".alertUser");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($(window).outerWidth(true) <= 991.9) {
                setTimeout(function () {
                    $(".alertUser").removeClass("active");
                }, 200)
            } else {
                $(".alertUser").removeClass("active");
            }
        }
    });

    $(document).on("click", ".over.active,.over.show", function () {
        setTimeout(function () {
            $(".alertUser").removeClass("active");
            $(".over").removeClass("active show");
        }, 200)
    })

    // script for teacher => content

    $(document).on("click", ".contentTeacher .keyList", function () {
        $(".sideRightTeacher .listSideRight").slideToggle(400)
    })

    $(document).on("click", ".headerTeacher .menuMobile .icon", function () {
        $(".sideRightTeacher").toggleClass("active");
    })

    $(document).on("click", ".contentTeacher .textInfo label", function () {
        $(this).siblings("input").removeAttr("disabled");
        $(this).siblings("textarea").removeAttr("disabled");
    })

    $(document).mousedown(function (e) {
        var container = $(".contentTeacher .textInfo label, .contentTeacher .textInfo input, .contentTeacher .textInfo textarea");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.siblings("input").attr("disabled", "disabled");
            container.siblings("textarea").attr("disabled", "disabled");
        }
    });

    $(document).on("click", ".contentTeacher .btnShowHide.less", function () {
        $($(this).next("p.less")).removeClass("less").addClass("more");
        $(this).removeClass("less").addClass("more");
    })

    $(document).on("click", ".contentTeacher .btnShowHide.more", function () {
        $($(this).next("p.more")).removeClass("more").addClass("less");
        $(this).removeClass("more").addClass("less");
    })

    var myVideo = document.getElementById("video1");

    function playPause() {
        if (myVideo.paused) {
            myVideo.play();
        } else {
            myVideo.pause();
        }
    }

    $(document).on("click", ".contentTeacher #video1", function () {
        playPause();
    })

    $(document).on("click", ".contentTeacher .iconPlay", function () {
        $(this).hide();
        $(".contentTeacher .coverVideo").hide();
        playPause();
    })

    $(document).on("click", ".contentTeacher .btnEdit", function () {
        $($(this).parents(".title")).addClass("barEdit");
        $($(this).parents(".box")).addClass("boxEdit");
        $($($(this).parents(".title")).siblings(".show")).removeClass("active");
        $($($(this).parents(".title")).siblings(".edit")).addClass("active");
    })

    $(document).on("click", ".contentTeacher .btns>*", function () {
        $($(this).parents(".title")).removeClass("barEdit");
        $($(this).parents(".box")).removeClass("boxEdit");
        $($($(this).parents(".title")).siblings(".show")).addClass("active");
        $($($(this).parents(".title")).siblings(".edit")).removeClass("active");
    })


    var i = 2;
    var eduHtml = $(".dataTeacher .edit .eduCol").html();

    $(document).on("click", ".dataTeacher .addEduCol>a", function () {
        $(".dataTeacher .eduCol").append(eduHtml.replaceAll('edu1-01', ('edu' + i + '-01')).replaceAll('edu1-02', ('edu' + i + '-02')).replaceAll('edu1-03', ('edu' + i + '-03')))
        i++;
    })


    // new delete
    $(document).on("click", ".contentTeacher .completeDataPart .Delete", function () {
        $(this).parents(".rowTitleTeacher").remove()
    })

    // new img

    $(document).on("change", ".imgFile", function () {
        readURL(this)
    })

    // change img
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('img.imgFile').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).on("change", ".contentTeacher #city", function () {

        for (var i = 0; i < 100; i++) {
            if ($(this).val() == $($(".contentTeacher .nameCountry")[i]).text()) {
                $($(".contentTeacher .nameCountry")[i]).remove()
            }
        }

        $(".edit .country .listCountry").append('<span class="nameCountry">' + $(this).val() + '<i class="fal fa-times-circle"></i>' + '</span>');

        for (var i = 0; i < 100; i++) {
            if ($(this).val() == $($(".contentTeacher .nameCountry")[i]).text()) {
                $($(".contentTeacher .nameCountry")[i]).remove()
            }
        }

        // $(this).attr("data-value", $($($(this).next("datalist")).find("option[value='" + $(this).val() + "']")).attr("data-value"))

        $(this).val("")

    })

    $(document).on("click", ".nameCountry2 i", function () {
        $($(this).parents(".nameCountry2")).remove();
    })

    $(document).on("change", "#city2", function () {

        for (var i = 0; i < 10; i++) {
            if ($(this).val() == $($(".nameCountry2")[i]).text()) {
                $($(".nameCountry2")[i]).remove()
            }
        }

        $(".country2 .listCountry2").append('<span class="nameCountry2">' + $(this).val() + '<i class="fal fa-times-circle"></i>' + '</span>');

        $(this).val("");
        testStep3();

    })

    $(document).on("click", ".nameCountry2 i", function () {
        $($(this).parents(".nameCountry2")).remove();
        testStep3();
    })

    $(document).on("change", ".contentTeacher #education", function () {

        for (var i = 0; i < 10; i++) {
            if ($(this).val() == $($(".contentTeacher .nameEducation")[i]).text()) {
                $($(".contentTeacher .nameEducation")[i]).remove()
            }
        }

        $(".contentTeacher .edit .education .listEducation").append('<span class="nameEducation">' + $(this).val() + '<i class="fal fa-times-circle"></i>' + '</span>');

        $(this).val("")

    })

    $(document).on("click", ".go_for_higher", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    })

    $(document).mousedown(function (e) {
        var container = $(".overUserChat");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".listUsers li .icon").removeClass("active");
            $(".overUserChat").removeClass("active");
        }
    });

    $(document).on("click", ".listUsers li .icon", function () {
        $(this).toggleClass("active");
        $($(this).find(".overUserChat")).toggleClass("active");
    })

    $(document).on("click", ".listUsers li", function (e) {
        $(".listUsers li").removeClass("active");
        $(this).addClass("active");
        showChat();
        if ($(window).outerWidth(true) <= 800) {
            if ($($(e.target).parents(".icon")).length !== 1) {
                $(".colList").removeClass("activeMob");
                $(".btnBack").css("display", "inline-flex");
            } else {
                $($(this).find(".icon")).toggleClass("active");
                $($($(this).parents(".icon")).find(".overUserChat")).toggleClass("active");
            }
        }
    })

    $(document).on("click", ".boxChat .btnBack", function () {
        if ($(window).outerWidth(true) <= 800) {
            $(".colList").addClass("activeMob")
            $(".btnBack").css("display", "none")
        }
    })

    function showChat() {
        for (var i = 0; i < $(".listUsers li").length; i++) {
            if ($($(".listUsers li")[i]).hasClass("active")) {
                $(".chatPerson").removeClass("active");
                $(".chatPerson." + $($(".listUsers li")[i]).attr("data-chat")).addClass("active")
            }
        }
    }

    showChat()

    function boxLoginTeacher() {
        if ($(window).outerWidth(true) >= 992) {
            $(".boxLoginTeacher .col2").height($(".boxLoginTeacher .col1>div").outerHeight(true))
        } else {
            $(".boxLoginTeacher .col2").css("height", "auto");
        }
    }

    boxLoginTeacher();

    $(window).resize(function () {
        boxLoginTeacher();
    })

    $(document).on("click", ".numsMobile .num1", function () {
        $(".numsMobile").attr("data-active", "1")
    })
    $(document).on("click", ".numsMobile .num2", function () {
        $(".numsMobile").attr("data-active", "2")
    })
    $(document).on("click", ".numsMobile .num3", function () {
        $(".numsMobile").attr("data-active", "3")
    })
    $(document).on("click", ".numsMobile .num4", function () {
        $(".numsMobile").attr("data-active", "4")
    })

    $(document).on("keyup change blur", ".contentTeacher input[requiredX]", function () {

        if ($(this).attr("requiredX") == "yes") {
            if ($(this).val().length == 0) {
                $(this).addClass("error").removeClass("correct");
                $($($(this).parent(".divInput")).next("small.error")).show();
                $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorEmpty"));
                $(this).attr("true", "no");
            } else if ($(this).val().length < $(this).attr("min")) {
                if ($(this).attr("min")) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMin"));
                    $(this).attr("true", "no");
                }
            } else if ($(this).val().length > $(this).attr("max")) {
                if ($(this).attr("max")) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMax"));
                    $(this).attr("true", "no");
                }
            } else {
                $(this).addClass("correct").removeClass("error");
                $($($(this).parent(".divInput")).next("small.error")).hide();
                $($($(this).parent(".divInput")).next("small.error")).text();
                $(this).attr("true", "yes");
            }

            if ($(this).attr("type") == "email") {
                if (IsEmail($(this).val()) == false) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorType"));
                    $(this).attr("true", "no");
                    return false;
                } else {
                    $(this).addClass("correct").removeClass("error");
                    $($($(this).parent(".divInput")).next("small.error")).hide();
                    $($($(this).parent(".divInput")).next("small.error")).text();
                    $(this).attr("true", "yes");
                    return true;
                }
            }

            if ($(this).attr("type") == "checkbox") {
                if ($(this).is(':checked')) {
                    $(this).attr("true", "yes");
                } else {
                    $(this).attr("true", "no");
                }
            }
        } else {
            $(this).attr("true", "yes")
        }

        for (var i = 0; i < $("form.formToJoinTeacher input").length; i++) {
            if ($($("form.formToJoinTeacher input")[i]).attr("true") != "yes") {
                x++;
            }
            if (i == $("form.formToJoinTeacher input").length - 1) {

                if (x != 0) {
                    $($("form.formToJoinTeacher").find(".submit")).attr("disabled", "disabled");
                } else {
                    $($("form.formToJoinTeacher").find(".submit")).removeAttr("disabled");
                }
                x = 0;
            }
        }

        for (var i = 0; i < $("form.dataStudent .step1 input").length; i++) {
            if ($($("form.dataStudent .step1 input")[i]).attr("true") != "yes") {
                x++;
            }
            if (i == $("form.dataStudent .step1 input").length - 1) {

                if (x != 0) {
                    $($("form.dataStudent .step1").find(".submit")).attr("disabled", "disabled");
                } else {
                    $($("form.dataStudent .step1").find(".submit")).removeAttr("disabled");
                }
                x = 0;
            }
        }

    })
    var x = 0;

    for (var i = 0; i < $("form.formToJoinTeacher input").length; i++) {

        if ($($("form.formToJoinTeacher input")[i]).attr("requiredX") == "yes") {
            $($("form.formToJoinTeacher input")[i]).attr("true", "no");
        } else {
            $($("form.formToJoinTeacher input")[i]).attr("true", "yes");
        }
    };

    /**********************/
    /* login Teacher */
    /**********************/

    for (var i = 0; i < $(".boxLoginTeacher input[requiredX]").length; i++) {
        $($($(".boxLoginTeacher input[requiredX]")[i]).parent(".divInput")).after('<small class="error"></small>');
    }

    $(document).on("keyup change blur", ".boxLoginTeacher form input[requiredX]", function () {

        if ($(this).attr("requiredX") == "yes") {
            if ($(this).val().length == 0) {
                $(this).addClass("error").removeClass("correct");
                $($($(this).parent(".divInput")).next("small.error")).show();
                $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorEmpty"));
                $(this).attr("true", "no");
            } else if ($(this).val().length < $(this).attr("min")) {
                if ($(this).attr("min")) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMin"));
                    $(this).attr("true", "no");
                }
            } else if ($(this).val().length > $(this).attr("max")) {
                if ($(this).attr("max")) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMax"));
                    $(this).attr("true", "no");
                }
            } else {
                $(this).addClass("correct").removeClass("error");
                $($($(this).parent(".divInput")).next("small.error")).hide();
                $($($(this).parent(".divInput")).next("small.error")).text();
                $(this).attr("true", "yes");
            }

            if ($(this).attr("type") == "email") {
                if (IsEmail($(this).val()) == false) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorType"));
                    $(this).attr("true", "no");
                    return false;
                } else {
                    $(this).addClass("correct").removeClass("error");
                    $($($(this).parent(".divInput")).next("small.error")).hide();
                    $($($(this).parent(".divInput")).next("small.error")).text();
                    $(this).attr("true", "yes");
                    return true;
                }
            }

            if ($(this).attr("type") == "checkbox") {
                if ($(this).is(':checked')) {
                    $(this).attr("true", "yes");
                } else {
                    $(this).attr("true", "no");
                }
            }
        } else {
            $(this).attr("true", "yes")
        }

        for (var i = 0; i < $(".boxLoginTeacher form input").length; i++) {
            if ($($(".boxLoginTeacher form input")[i]).attr("true") != "yes") {
                x++;
            }
            if (i == $(".boxLoginTeacher form input").length - 1) {

                if (x != 0) {
                    $($(".boxLoginTeacher form").find(".submit")).attr("disabled", "disabled");
                } else {
                    $($(".boxLoginTeacher form").find(".submit")).removeAttr("disabled");
                }
                x = 0;
            }
        }

    })
    var x = 0;

    for (var i = 0; i < $(".boxLoginTeacher form input").length; i++) {

        if ($($(".boxLoginTeacher form input")[i]).attr("requiredX") == "yes") {
            $($(".boxLoginTeacher form input")[i]).attr("true", "no");
        } else {
            $($(".boxLoginTeacher form input")[i]).attr("true", "yes");
        }
    };

    /**********************/
    /* complete Data Teacher Step 1 to 5 */
    /**********************/

    $(document).ready(function () {

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(email)) {
                return false;
            } else {
                return true;
            }
        }

        for (var i = 0; i < $(".completeDataTeacher input[requiredX]").length; i++) {
            $($($(".completeDataTeacher input[requiredX]")[i]).parent(".divInput")).after('<small class="error"></small>');
        }

        $(document).on("keyup change blur", ".completeDataTeacher input[requiredX]", function () {

            if ($(this).attr("requiredX") == "yes") {
                if ($(this).val().length == 0) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorEmpty"));
                    $(this).attr("true", "no");
                } else if ($(this).val().length < $(this).attr("min")) {
                    if ($(this).attr("min")) {
                        $(this).addClass("error").removeClass("correct");
                        $($($(this).parent(".divInput")).next("small.error")).show();
                        $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMin"));
                        $(this).attr("true", "no");
                    }
                } else if ($(this).val().length > $(this).attr("max")) {
                    if ($(this).attr("max")) {
                        $(this).addClass("error").removeClass("correct");
                        $($($(this).parent(".divInput")).next("small.error")).show();
                        $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMax"));
                        $(this).attr("true", "no");
                    }
                } else {
                    $(this).addClass("correct").removeClass("error");
                    $($($(this).parent(".divInput")).next("small.error")).hide();
                    $($($(this).parent(".divInput")).next("small.error")).text();
                    $(this).attr("true", "yes");
                }

                if ($(this).attr("type") == "email") {
                    if (IsEmail($(this).val()) == false) {
                        $(this).addClass("error").removeClass("correct");
                        $($($(this).parent(".divInput")).next("small.error")).show();
                        $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorType"));
                        $(this).attr("true", "no");
                        return false;
                    } else {
                        $(this).addClass("correct").removeClass("error");
                        $($($(this).parent(".divInput")).next("small.error")).hide();
                        $($($(this).parent(".divInput")).next("small.error")).text();
                        $(this).attr("true", "yes");
                        return true;
                    }
                }

                if ($(this).attr("type") == "checkbox") {
                    if ($(this).is(':checked')) {
                        $(this).attr("true", "yes");
                    } else {
                        $(this).attr("true", "no");
                    }
                }
            } else {
                $(this).attr("true", "yes")
            }

            for (var i = 0; i < $(".completeDataTeacher form.formToJoinTeacher input").length; i++) {
                if ($($(".completeDataTeacher form.formToJoinTeacher input")[i]).attr("true") != "yes") {
                    x++;
                }
                if (i == $(".completeDataTeacher form.formToJoinTeacher input").length - 1) {

                    if (x != 0) {
                        $($(".completeDataTeacher form.formToJoinTeacher").find(".submit")).attr("disabled", "disabled");
                    } else {
                        $($(".completeDataTeacher form.formToJoinTeacher").find(".submit")).removeAttr("disabled");
                    }
                    x = 0;
                }
            }

            /*
            for (var i = 0; i < $(".completeDataTeacher form.dataTeacher .step1 input").length; i++) {
                if ($($(".completeDataTeacher form.dataTeacher .step1 input")[i]).attr("true") != "yes") {
                    x++;
                }
                if (i == $(".completeDataTeacher form.dataTeacher .step1 input").length - 1) {

                    if (x != 0) {
                        $($(".completeDataTeacher form.dataTeacher .step1").find(".submit")).attr("disabled", "disabled");
                    } else {
                        $($(".completeDataTeacher form.dataTeacher .step1").find(".submit")).removeAttr("disabled");
                    }
                    x = 0;
                }
            }
            */
            for (var i = 0; i < $(".completeDataTeacher form.dataTeacher .step1 input, .completeDataTeacher form.dataTeacher .step1 select").length; i++) {
                if ($($(".completeDataTeacher form.dataTeacher .step1 input, .completeDataTeacher form.dataTeacher .step1 select")[i]).attr("true") != "yes") {
                    x++;
                }
                if (i == $(".completeDataTeacher form.dataTeacher .step1 input, .completeDataTeacher form.dataTeacher .step1 select").length - 1) {

                    if (x != 0) {
                        $($(".completeDataTeacher form.dataTeacher .step1").find(".submit")).attr("disabled", "disabled");
                    } else {
                        $($(".completeDataTeacher form.dataTeacher .step1").find(".submit")).removeAttr("disabled");
                        console.log("4555555555555")
                    }
                    x = 0;
                }
            }


        })
        var x = 0;

        for (var i = 0; i < $(".completeDataTeacher form.formToJoinTeacher input").length; i++) {

            if ($($(".completeDataTeacher form.formToJoinTeacher input")[i]).attr("requiredX") == "yes") {
                $($(".completeDataTeacher form.formToJoinTeacher input")[i]).attr("true", "no");
            } else {
                $($(".completeDataTeacher form.formToJoinTeacher input")[i]).attr("true", "yes");
            }
        };

        var x2 = 0;

        for (var i = 0; i < $(".completeDataTeacher form.dataTeacher input").length; i++) {

            if ($($(".completeDataTeacher form.dataTeacher input")[i]).attr("requiredX") == "yes") {
                $($(".completeDataTeacher form.dataTeacher input")[i]).attr("true", "no");
            } else {
                $($(".completeDataTeacher form.dataTeacher input")[i]).attr("true", "yes");
            }
        };

        $(document).on("change", ".completeDataTeacher #education2", function () {
            for (var i = 0; i < 10; i++) {
                if ($(this).val() == $($(".completeDataTeacher .nameEducation2")[i]).text()) {
                    $($(".completeDataTeacher .nameEducation2")[i]).remove()
                }
            }
            $(".completeDataTeacher .education2 .listEducation2").append('<span class="nameEducation2">' + $(this).val() + '<i class="fal fa-times-circle"></i>' + '</span>');
            $(this).val("")
            testStep2();

        })

        $(document).on("click", ".completeDataTeacher .nameEducation2 i", function () {
            $($(this).parents(".completeDataTeacher .nameEducation2")).remove();
            testStep2();
        })

        function testStep2() {
            if ($($(".completeDataTeacher .listEducation2").children()).length == 0) {
                $($(".completeDataTeacher form.dataTeacher .step2").find(".submit")).attr("disabled", "disabled");
            } else {
                $($(".completeDataTeacher form.dataTeacher .step2").find(".submit")).removeAttr("disabled");
            }
        }

        setTimeout(function () {
            for (var i = 0; i < $(".completeDataTeacher .step3 input[type='checkbox']").length; i++) {
                if ($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).is(':checked')) {
                    if ($($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).val() == "") {
                        $($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("true", "no");
                        $($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("requiredX", "yes");
                    }
                } else {
                    $($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("true", "yes");
                    $($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("requiredX", "no");
                }
            };
        }, 1000);

        $(document).on("change", ".completeDataTeacher .step3 input[type='checkbox']", function () {

            for (var i = 0; i < $(".completeDataTeacher .step3 input[type='checkbox']").length; i++) {
                if ($($(".step3 input[type='checkbox']")[i]).is(':checked')) {
                    if ($($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).val() == "") {
                        $($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("true", "no");
                        $($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("requiredX", "yes");
                    }
                } else {
                    $($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("true", "yes");
                    $($($($(".completeDataTeacher .step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("requiredX", "no");
                }
            };

        });

        var y;

        $(document).on("mousemove", ".completeDataTeacher .step3", function () {
            testStep3();
            $(".completeDataTeacher .step3 input[requiredx='yes']").trigger("keyup");
        })

        $(document).on("change keyup", ".completeDataTeacher .step3 input[requiredx='yes']", function () {

            testStep3();

            for (var i = 0; i < $(".completeDataTeacher form.dataTeacher .step3 input[type='text']").length; i++) {
                if ($($(".completeDataTeacher form.dataTeacher .step3 input[requiredx='yes']")[i]).val() == '') {
                    $($(".completeDataTeacher form.dataTeacher .step3 input[requiredx='yes']")[i]).attr("true", "no");
                    y++;
                } else {
                    $($(".completeDataTeacher form.dataTeacher .step3 input[requiredx='yes']")[i]).attr("true", "yes");
                }
                if (i == $(".completeDataTeacher form.dataTeacher .step3 input[type='text']").length - 1) {
                    if (y != 0 ) {
                        $($(".completeDataTeacher form.dataTeacher .step3").find(".submit")).attr("disabled", "disabled");
                    } else if (y == 0 ) {
                        $($(".completeDataTeacher form.dataTeacher .step3").find(".submit")).removeAttr("disabled");
                    }
                    y = 0;
                }
            }

        })

        var locationStep3 = 0;

        function testStep3() {
            if ($($(".completeDataTeacher .listCountry2").children()).length == 0) {
                locationStep3 = 0;
            } else {
                locationStep3 = 1;
            }
        }

        function limitText(field, maxChar) {
            $(field).attr('maxlength', maxChar);
        }

        $(document).on("keyup", ".completeDataTeacher .textMarketStep4", function () {
            $(".completeDataTeacher .step4 .limitText b").text($(this).val().length)
            if ($(this).val().length == 0) {
                check2Step4 = 0;
            } else {
                check2Step4 = 1;
            }
        })

        var z = 0;

        $(document).on("change", ".completeDataTeacher .step4 .exp .input", function () {

            if ($($(".completeDataTeacher .step4 .exp  .input")).is(':checked')) {
                check1Step4 = 1;
            } else {
                check1Step4 = 0;
            }

        });

        $(document).on("keyup", ".completeDataTeacher .aboutMe textarea", function () {
            if ($(this).val().length == 0) {
                check4Step4 = 0;
            } else {
                check4Step4 = 1;
            }
        })

        $(document).on("change", ".completeDataTeacher .video input", function (e) {

            var $source = $('.completeDataTeacher #video_here video');
            $source[0].src = URL.createObjectURL(this.files[0]);

            $(".completeDataTeacher #video_here i").hide();
            $('.completeDataTeacher #video_here video').show();

            if ($($(this)[0].files).length == 0) {
                check3Step4 = 1;
            } else {
                check3Step4 = 1;
            }
        })

        var check1Step4 = 0;
        var check2Step4 = 0;
        var check3Step4 = 1;
        var check4Step4 = 0;

        $(document).on("mousemove", ".completeDataTeacher .step4 ", function () {
            if (check1Step4 == 1 && check2Step4 == 1 && check3Step4 == 1 && check4Step4 == 1) {
                $($(".completeDataTeacher form.dataTeacher .step4").find(".submit")).removeAttr("disabled");
            } else {
                $($(".completeDataTeacher form.dataTeacher .step4").find(".submit")).attr("disabled", "disabled");
            }
            console.log(check1Step4);
            console.log(check2Step4);
            console.log(check3Step4);
            console.log(check4Step4)
        })

        // add hours

        $(document).on("click", ".completeDataTeacher .noActive input", function () {
            if ($(this).is(':checked')) {
                $(".completeDataTeacher td." + $(this).attr("id") + " input").attr("disabled", "disabled");
            } else {
                $(".completeDataTeacher td." + $(this).attr("id") + " input").removeAttr("disabled");
            }
        })

        $(document).on("click", ".completeDataTeacher .addHours td span", function () {
            $('<tr class="">' + $(".rowFrom").html() + '</tr>').insertBefore(".completeDataTeacher tr.addHours");
            $('<tr class="">' + $(".rowTo").html() + '</tr>').insertBefore(".completeDataTeacher tr.addHours");


        })

        function rowFrom() {
            var a1,
                a2;
            for (var a1 = 0; a1 < $(".completeDataTeacher .rowFrom").length; a1++) {
                for (var a2 = 0; a2 < $($(".completeDataTeacher .rowFrom")[a1]).find("input").length; a2++) {
                    $($($(".completeDataTeacher .rowFrom")[a1]).find("input")[a2]).attr("name", "inputFrom-" + (a1 + 1) + "-" + (a2 + 1))
                }
            }
        }

        function rowTo() {
            var a1,
                a2;
            for (var a1 = 0; a1 < $(".completeDataTeacher .rowTo").length; a1++) {
                for (var a2 = 0; a2 < $($(".completeDataTeacher .rowTo")[a1]).find("input").length; a2++) {
                    $($($(".completeDataTeacher .rowTo")[a1]).find("input")[a2]).attr("name", "inputTo-" + (a1 + 1) + "-" + (a2 + 1))
                }
            }
        }



        var inputSub = $(".completeDataTeacher .inputSub .divInput").html();

        $(document).on("click", ".completeDataTeacher .addAnotherInputSub", function () {
            $(".completeDataTeacher .inputSub").append('<div class="divInput"> ' + inputSub + '</div>')
        })

        $(document).on("click", ".completeDataTeacher .addSubjectBtn", function () {
            $(".popUpAddSubject").addClass("show")
        })

        $(document).on("click", ".popUpAddSubject .closeX, .popUpAddSubject .ok .submit", function () {
            $(".popUpAddSubject").removeClass("show")
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step1 .ok .submit:not(:disabled)", function () {
            $(".completeDataTeacher .rowStep").attr("step", "2");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step2 .ok .submit:not(:disabled)", function () {
            $(".completeDataTeacher .rowStep").attr("step", "3");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step2 .back", function () {
            $(".completeDataTeacher .rowStep").attr("step", "1");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step3 .ok .submit:not(:disabled)", function () {
            $(".completeDataTeacher .rowStep").attr("step", "4");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step3 .back", function () {
            $(".completeDataTeacher .rowStep").attr("step", "2");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step4 .ok .submit:not(:disabled)", function () {
            $(".completeDataTeacher .rowStep").attr("step", "5");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step4 .back", function () {
            $(".completeDataTeacher .rowStep").attr("step", "3");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $(document).on("click", ".completeDataTeacher .dataTeacher .step5 .back", function () {
            $(".completeDataTeacher .rowStep").attr("step", "4");
            $('html,body').animate({
                scrollTop: 0
            }, 'slow');
        })

        $('.completeDataTeacher form.dataTeacher input').keydown(function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                return false;
            }
        });

        // new delete
        $(document).on("click", ".completeDataTeacher .completeDataPart .Delete", function () {
            $(this).parents(".rowTitleTeacher").remove()
        })

        // new img

        $(document).on("change", ".imgFile", function () {
            readURL(this)
        })

        // change img
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('img.imgFile').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

    })

    /********************************************/
    /* script for visitor */
    /********************************************/

    // click User Menu
    $(document).on("click", ".headerVisitor .addToUs", function () {
        $(".headerVisitor .menuAddToUs").toggleClass("active");
    })

    $(document).on("click", ".headerVisitor .joinAsStudent", function () {
        $(".popUpJoinAsTeacher.popUpFromVisitor1").addClass("show");
    })

    $(document).on("click", ".popUpJoinAsTeacher .closeX", function () {
        $(".popUpJoinAsTeacher.popUpFromVisitor1").removeClass("show");
    })

    $(document).mousedown(function (e) {
        var container = $(".popUpJoinAsTeacher.popUpFromVisitor1>div");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".popUpJoinAsTeacher.popUpFromVisitor1").removeClass("show");
        }
    });

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }

    for (var i = 0; i < $(".popUpJoinAsTeacher.popUpFromVisitor1 input[requiredX]").length; i++) {
        $($($("input[requiredX]")[i]).parent(".divInput")).after('<small class="error"></small>');
    }

    $(document).on("keyup change blur", ".popUpJoinAsTeacher.popUpFromVisitor1 input[requiredX]", function () {

        if ($(this).attr("requiredX") == "yes") {
            if ($(this).val().length == 0) {
                $(this).addClass("error").removeClass("correct");
                $($($(this).parent(".divInput")).next("small.error")).show();
                $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorEmpty"));
                $(this).attr("true", "no");
            } else if ($(this).val().length < $(this).attr("min")) {
                if ($(this).attr("min")) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMin"));
                    $(this).attr("true", "no");
                }
            } else if ($(this).val().length > $(this).attr("max")) {
                if ($(this).attr("max")) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorMax"));
                    $(this).attr("true", "no");
                }
            } else {
                $(this).addClass("correct").removeClass("error");
                $($($(this).parent(".divInput")).next("small.error")).hide();
                $($($(this).parent(".divInput")).next("small.error")).text();
                $(this).attr("true", "yes");
            }

            if ($(this).attr("type") == "email") {
                if (IsEmail($(this).val()) == false) {
                    $(this).addClass("error").removeClass("correct");
                    $($($(this).parent(".divInput")).next("small.error")).show();
                    $($($(this).parent(".divInput")).next("small.error")).text($(this).attr("errorType"));
                    $(this).attr("true", "no");
                    return false;
                } else {
                    $(this).addClass("correct").removeClass("error");
                    $($($(this).parent(".divInput")).next("small.error")).hide();
                    $($($(this).parent(".divInput")).next("small.error")).text();
                    $(this).attr("true", "yes");
                    return true;
                }
            }

            if ($(this).attr("type") == "checkbox") {
                if ($(this).is(':checked')) {
                    $(this).attr("true", "yes");
                } else {
                    $(this).attr("true", "no");
                }
            }
        } else {
            $(this).attr("true", "yes")
        }

        for (var i = 0; i < $(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin input").length; i++) {
            if ($($(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin input")[i]).attr("true") != "yes") {
                x++;
            }
            if (i == $(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin input").length - 1) {

                if (x != 0) {
                    $($(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin").find(".submit")).attr("disabled", "disabled");
                } else {
                    $($(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin").find(".submit")).removeAttr("disabled");
                }
                x = 0;
            }
        }

    })
    var x = 0;

    for (var i = 0; i < $(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin input").length; i++) {

        if ($($(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin input")[i]).attr("requiredX") == "yes") {
            $($(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin input")[i]).attr("true", "no");
        } else {
            $($(".popUpJoinAsTeacher.popUpFromVisitor1 form.formToJoin input")[i]).attr("true", "yes");
        }
    };

})

/* Home */
/* Home */
/* Home */
/* Home */

$(document).ready(function () {

    $('.slick').slick({
        infinite: true,
        speed: 10000,
        fade: true,
        rtl: true,
        pauseOnHover: false,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 10000,
        prevArrow: false,
        nextArrow: false,
    });

    function ratingSkills() {
        if ($(window).outerWidth(true) >= 992) {
            $('.ratings_slick').not('.slick-initialized').slick({
                infinite: true,
                speed: 500,
                fade: false,
                rtl: true,
                pauseOnHover: false,
                cssEase: 'linear',
                autoplay: false,
                autoplaySpeed: 2000,
                prevArrow: false,
                nextArrow: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                centerMode: false,
                responsive: [{
                    breakpoint: 400,
                    settings: {
                        fade: false,
                        autoplay: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        /* set centerMode to false to show complete slide instead of 3 */
                        pauseOnHover: true,
                    }
                },
                    {
                        breakpoint: 768,
                        settings: {
                            fade: false,
                            autoplay: true,
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            centerMode: false,
                            /* set centerMode to false to show complete slide instead of 3 */
                            pauseOnHover: true,
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            fade: false,
                            autoplay: true,
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            centerMode: false,
                            /* set centerMode to false to show complete slide instead of 3 */
                            pauseOnHover: true,
                        }
                    },
                ]
            });
        } else if ($(window).outerWidth(true) >= 768) {
            $('.ratings_slick').not('.slick-initialized').slick({
                infinite: true,
                speed: 500,
                fade: false,
                rtl: true,
                pauseOnHover: false,
                cssEase: 'linear',
                autoplay: false,
                autoplaySpeed: 2000,
                prevArrow: false,
                nextArrow: false,
                slidesToShow: 2,
                slidesToScroll: 2,
                centerMode: false,
                responsive: [{
                    breakpoint: 400,
                    settings: {
                        fade: false,
                        autoplay: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        /* set centerMode to false to show complete slide instead of 3 */
                        pauseOnHover: true,
                    }
                },
                    {
                        breakpoint: 768,
                        settings: {
                            fade: false,
                            autoplay: true,
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            centerMode: false,
                            /* set centerMode to false to show complete slide instead of 3 */
                            pauseOnHover: true,
                        }
                    }
                ]
            });
        } else {
            $('.ratings_slick').not('.slick-initialized').slick({
                infinite: true,
                speed: 500,
                fade: false,
                rtl: true,
                pauseOnHover: false,
                cssEase: 'linear',
                autoplay: false,
                autoplaySpeed: 2000,
                prevArrow: false,
                nextArrow: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
                responsive: [{
                    breakpoint: 400,
                    settings: {
                        fade: false,
                        autoplay: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        /* set centerMode to false to show complete slide instead of 3 */
                        pauseOnHover: true,
                    }
                }]
            });
        }
    }

    ratingSkills()

    $(window).resize(function () {
        ratingSkills()
    })

    $('.timer').each(function () {
        var $this = $(this);
        jQuery({
            Counter: 0
        }).animate({
            Counter: $this.text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });

    });

    $('.new_teacher_slick').slick({
        infinite: true,
        speed: 500,
        fade: false,
        rtl: true,
        pauseOnHover: false,
        cssEase: 'linear',
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 5,
        slidesToScroll: 5,
        centerMode: false,
        responsive: [{
            breakpoint: 400,
            settings: {
                fade: false,
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
                /* set centerMode to false to show complete slide instead of 3 */
                pauseOnHover: true,

            }
        },
            {
                breakpoint: 768,
                settings: {
                    fade: false,
                    autoplay: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    pauseOnHover: true,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    fade: false,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    pauseOnHover: true,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    fade: false,
                    autoplay: true,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    pauseOnHover: true,
                }
            },
        ]

    });

    $('#Basic_topics_slider').slick({
        infinite: true,
        speed: 500,
        fade: false,
        rtl: true,
        pauseOnHover: false,
        cssEase: 'linear',
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 4,
        slidesToScroll: 4,
        centerMode: false,
        responsive: [{
            breakpoint: 400,
            settings: {
                fade: false,
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
                /* set centerMode to false to show complete slide instead of 3 */
                pauseOnHover: true,

            }
        },
            {
                breakpoint: 768,
                settings: {
                    fade: false,
                    autoplay: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    pauseOnHover: true,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    fade: false,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    pauseOnHover: true,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    fade: false,
                    autoplay: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    pauseOnHover: true,
                }
            },
        ]

    });

    $('#blog_slider').slick({
        infinite: true,
        speed: 500,
        fade: false,
        rtl: true,
        pauseOnHover: false,
        cssEase: 'linear',
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: false,
        nextArrow: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: false,
        responsive: [{
            breakpoint: 400,
            settings: {
                fade: false,
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
                /* set centerMode to false to show complete slide instead of 3 */
                pauseOnHover: true,

            }
        },
            {
                breakpoint: 768,
                settings: {
                    fade: false,
                    autoplay: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    pauseOnHover: true,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    fade: false,
                    autoplay: true,
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    centerMode: false,
                    /* set centerMode to false to show complete slide instead of 3 */
                    pauseOnHover: true,
                }
            },
        ]

    });
    $('#bild_teacher_profile').slick({
        infinite: false,
        speed: 500,
        fade: false,
        rtl: true,
        pauseOnHover: false,
        cssEase: 'linear',
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,

    });

    var myVideo3 = document.getElementById("video3");

    function playPause() {
        if (myVideo3.paused) {
            myVideo3.play();
        } else {
            myVideo3.pause();
        }
    }

    $(document).on("click", ".about_as #video3", function () {
        playPause();
    })

    $(document).on("click", ".about_as .iconPlay", function () {
        $(this).hide();
        $(".about_as .coverVideo").hide();
        playPause();
    })

    $(document).on("click", ".have_question .head", function () {
        $(".have_question").toggleClass("open")
    })

    $(document).on("click", ".linkLogin", function () {
        $(".loginHome").addClass("show");
    })

    $(document).on("click", ".loginHome .closeX", function () {
        $(".loginHome").removeClass("show");
    })

    $(document).mousedown(function (e) {
        var container = $(".loginHome>div");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".loginHome").removeClass("show");
        }
    });

});
