$(document).ready(function () {

    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }

    for (var i = 0; i < $("input[requiredX]").length; i++) {
        $($($("input[requiredX]")[i]).parent(".divInput")).after('<small class="error"></small>');
    }

    $(document).on("keyup change blur", "input[requiredX]", function () {

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

    var x2 = 0;

    for (var i = 0; i < $("form.dataStudent input").length; i++) {

        if ($($("form.dataStudent input")[i]).attr("requiredX") == "yes") {
            $($("form.dataStudent input")[i]).attr("true", "no");
        } else {
            $($("form.dataStudent input")[i]).attr("true", "yes");
        }
    };

    setTimeout(function () {
        for (var i = 0; i < $(".step3 input[type='checkbox']").length; i++) {
            if ($($(".step3 input[type='checkbox']")[i]).is(':checked')) {
                if ($($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).val() == "") {
                    $($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("true", "no");
                    $($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("requiredX", "yes");
                }
            } else {
                $($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("true", "yes");
                $($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("requiredX", "no");
            }
        };
    }, 1000);

    $(document).on("change", ".step3 input[type='checkbox']", function () {

        for (var i = 0; i < $(".step3 input[type='checkbox']").length; i++) {
            if ($($(".step3 input[type='checkbox']")[i]).is(':checked')) {
                if ($($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).val() == "") {
                    $($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("true", "no");
                    $($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("requiredX", "yes");
                }
            } else {
                $($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("true", "yes");
                $($($($(".step3 input[type='checkbox']")[i]).parent()).find("input[type='text']")).attr("requiredX", "no");
            }
        };

    });

    var y;

    $(document).on("mousemove", ".step3", function () {
        testStep3();
        $(".step3 input[requiredx='yes']").trigger("keyup");
    })

    $(document).on("change keyup", ".step3 input[requiredx='yes']", function () {

        testStep3();

        for (var i = 0; i < $("form.dataStudent .step3 input[type='text']").length; i++) {
            if ($($("form.dataStudent .step3 input[requiredx='yes']")[i]).val() == '') {
                $($("form.dataStudent .step3 input[requiredx='yes']")[i]).attr("true", "no");
                y++;
            } else {
                $($("form.dataStudent .step3 input[requiredx='yes']")[i]).attr("true", "yes");
            }
            if (i == $("form.dataStudent .step3 input[type='text']").length - 1) {
                if (y != 0 || locationStep3 == 0) {
                    $($("form.dataStudent .step3").find(".submit")).attr("disabled", "disabled");
                } else if (y == 0 && locationStep3 == 1) {
                    $($("form.dataStudent .step3").find(".submit")).removeAttr("disabled");
                }
                y = 0;
            }
        }

    })

    var locationStep3 = 0;

    function testStep3() {
        if ($($(".listCountry2").children()).length == 0) {
            locationStep3 = 0;
        } else {
            locationStep3 = 1;
        }
    }

    function limitText(field, maxChar) {
        $(field).attr('maxlength', maxChar);
    }

    $(document).on("keyup", ".textMarketStep4", function () {
        $(".step4 .limitText b").text($(this).val().length)
        if ($(this).val().length == 0) {
            check2Step4 = 0;
        } else {
            check2Step4 = 1;
        }
    })

    var z = 0;

    $(document).on("change", ".step4 input[name='exp']", function () {

        if ($($(".step4 input[name='exp']")).is(':checked')) {
            check1Step4 = 1;
        } else {
            check1Step4 = 0;
        }

    });

    $(document).on("keyup", ".aboutMe textarea", function () {
        if ($(this).val().length == 0) {
            check4Step4 = 0;
        } else {
            check4Step4 = 1;
        }
    })

    $(document).on("change", ".video input", function (e) {

        var $source = $('#video_here video');
        $source[0].src = URL.createObjectURL(this.files[0]);

        $("#video_here i").hide();
        $('#video_here video').show();

        if ($($(this)[0].files).length == 0) {
            check3Step4 = 0;
        } else {
            check3Step4 = 1;
        }
    })

    var check1Step4 = 0;
    var check2Step4 = 0;
    var check3Step4 = 0;
    var check4Step4 = 0;

    $(document).on("mousemove", ".step4 ", function () {
        if (check1Step4 == 1 && check2Step4 == 1 && check3Step4 == 1 && check4Step4 == 1) {
            $($("form.dataStudent .step4").find(".submit")).removeAttr("disabled");
        } else {
            $($("form.dataStudent .step4").find(".submit")).attr("disabled", "disabled");
        }
    })

    // add hours

    $(document).on("click", ".noActive input", function () {
        if ($(this).is(':checked')) {
            $("td." + $(this).attr("id") + " select").attr("disabled", "disabled");
        } else {
            $("td." + $(this).attr("id") + " select").removeAttr("disabled");
        }
    })

    $(document).on("click", ".addHours td span", function () {
        $('<tr class="rowFrom">' + $(".rowFrom").html() + '</tr>').insertBefore("tr.addHours");
        $('<tr class="rowTo">' + $(".rowTo").html() + '</tr>').insertBefore("tr.addHours");
        rowFrom();
        rowTo();
    })

    function rowFrom() {
        var a1,
            a2;
        for (var a1 = 0; a1 < $(".rowFrom").length; a1++) {
            for (var a2 = 0; a2 < $($(".rowFrom")[a1]).find("input").length; a2++) {
                $($($(".rowFrom")[a1]).find("input")[a2]).attr("name", "inputFrom-" + (a1 + 1) + "-" + (a2 + 1))
            }
        }
    }

    function rowTo() {
        var a1,
            a2;
        for (var a1 = 0; a1 < $(".rowTo").length; a1++) {
            for (var a2 = 0; a2 < $($(".rowTo")[a1]).find("input").length; a2++) {
                $($($(".rowTo")[a1]).find("input")[a2]).attr("name", "inputTo-" + (a1 + 1) + "-" + (a2 + 1))
            }
        }
    }

    rowFrom()
    rowTo()

    var inputSub = $(".inputSub .divInput").html();

    $(document).on("click", ".addAnotherInputSub", function () {
        $(".inputSub").append('<div class="divInput"> ' + inputSub + '</div>')
    })

    $(document).on("click", ".addSubjectBtn", function () {
        $(".popUpAddSubject").addClass("show")
    })

    $(document).on("click", ".closeX, .ok .submit", function () {
        $(".popUpAddSubject").removeClass("show")
    })

    $(document).on("click", ".dataStudent .step1 .ok .submit:not(:disabled)", function () {
        $(".rowStep").attr("step", "2");
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    })

    $(document).on("click", ".dataStudent .step2 .ok .submit:not(:disabled)", function () {
        $(".rowStep").attr("step", "3");
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    })

    $(document).on("click", ".dataStudent .step2 .back", function () {
        $(".rowStep").attr("step", "1");
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    })

    $(document).on("click", ".dataStudent .step3 .ok .submit:not(:disabled)", function () {
        $(".rowStep").attr("step", "4");
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    })

    $(document).on("click", ".dataStudent .step3 .back", function () {
        $(".rowStep").attr("step", "2");
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    })

    $(document).on("click", ".dataStudent .step4 .ok .submit:not(:disabled)", function () {
        $(".rowStep").attr("step", "5");
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    })

    $(document).on("click", ".dataStudent .step4 .back", function () {
        $(".rowStep").attr("step", "3");
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    })

    $(document).on("click", ".dataStudent .step5 .back", function () {
        $(".rowStep").attr("step", "4");
        $('html,body').animate({
            scrollTop: 0
        }, 'slow');
    })

    $('form.dataStudent input').keydown(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            return false;
        }
    });

})

// new delete
$(document).on("click", ".completeDataPart .Delete", function () {
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
