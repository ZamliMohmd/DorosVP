//******************************** Start Index **************************************/

$(document).ready(function () {

    // click User Menu
    $(document).on("click", ".addToUs", function () {
        $(".menuNotification").removeClass("active");
        $(".menuAddToUs").toggleClass("active");
    })


    //**********************  Student Register ***********************/

    $(document).on("click", ".joinAsStudent", function () {
        $(".popUpJoinAsStudent").addClass("show");
    })

    $(document).on("click", ".popUpJoinAsStudent .closeX", function () {
        $(".popUpJoinAsStudent").removeClass("show");
    })

    $(document).mousedown(function (e) {
        var container = $(".popUpJoinAsStudent>div");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".popUpJoinAsStudent").removeClass("show");
        }
    });

    //********************** End Student Register ***********************/

//********************** Login ***********************/
    $(document).on("click", ".userLogin", function () {
        $(".popUpUserLogin").addClass("show");
    })

    $(document).on("click", ".popUpUserLogin .closeX", function () {
        $(".popUpUserLogin").removeClass("show");
    })

    $(document).mousedown(function (e) {
        var container = $(".popUpUserLogin>div");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".popUpUserLogin").removeClass("show");
        }
    });

    //**********************End Login ***********************/


    $(document).on("click", ".notification", function () {
        $(".menuAddToUs").removeClass("active");
        $(".menuNotification").toggleClass("active");
    })

    $(document).mousedown(function (e) {
        var container = $(".menuAddToUs");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".menuAddToUs").removeClass("none");
        }
    });

    $(document).mousedown(function (e) {
        var container = $(".menuNotification");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".menuNotification").removeClass("none");
        }
    });

    $(document).on("click", ".keyList", function () {
        $(".listSideRight").slideToggle(400)
    })

    $(document).on("click", ".menuMobile .icon", function () {
        $(".sideRight").toggleClass("active");
    })

    $(document).on("click", ".textInfo label", function () {
        $(this).siblings("input").removeAttr("disabled");
        $(this).siblings("textarea").removeAttr("disabled");
    })

    $(document).mousedown(function (e) {
        var container = $(".textInfo label, .textInfo input, .textInfo textarea");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.siblings("input").attr("disabled", "disabled");
            container.siblings("textarea").attr("disabled", "disabled");
        }
    });


    $(document).on("change", "#education", function () {

        for (var i = 0; i < 10; i++) {
            console.log($($(".nameEducation")[i]).text())
            if ($(this).val() == $($(".nameEducation")[i]).text()) {
                $($(".nameEducation")[i]).remove()
            }
        }

        $(".edit .education .listEducation").append('<span class="nameEducation">' + $(this).val() + '<i class="fal fa-times-circle"></i>' + '</span>');

        $(this).val("")

    })

    $(document).on("click", ".nameEducation i", function () {
        $($(this).parents(".nameEducation")).remove();
    })

    $(document).on("click", ".go_for_higher", function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    })

})

//******************************** End Index **************************************/


$(document).ready(function () {

    // click User Menu
    $(document).on("click", ".user", function () {
        $(".menuNotification").removeClass("active");
        $(".menuUser").toggleClass("active");
    })

    $(document).on("click", ".notification", function () {
        $(".menuUser").removeClass("active");
        $(".menuNotification").toggleClass("active");
    })

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

    $(document).mousedown(function (e) {
        var container = $(".menuUser");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".menuUser").removeClass("none");
        }
    });

    $(document).mousedown(function (e) {
        var container = $(".menuNotification");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $(".menuNotification").removeClass("none");
        }
    });

    $(document).on("click", ".over.active,.over.show", function () {
        setTimeout(function () {
            $(".alertUser").removeClass("active");
            $(".over").removeClass("active show");
        }, 200)
    })

    $(document).on("click", ".keyList", function () {
        $(".listSideRight").slideToggle(400)
    })

    $(document).on("click", ".menuMobile .icon", function () {
        $(".sideRight").toggleClass("active");
    })

    $(document).on("click", ".textInfo label", function () {
        $(this).siblings("input").removeAttr("disabled");
        $(this).siblings("textarea").removeAttr("disabled");
    })

    $(document).mousedown(function (e) {
        var container = $(".textInfo label, .textInfo input, .textInfo textarea");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.siblings("input").attr("disabled", "disabled");
            container.siblings("textarea").attr("disabled", "disabled");
        }
    });

    $(document).on("click", ".btnShowHide.less", function () {
        $($(this).next("p.less")).removeClass("less").addClass("more");
        $(this).removeClass("less").addClass("more");
    })

    $(document).on("click", ".btnShowHide.more", function () {
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

    $(document).on("click", "#video1", function () {
        playPause();
    })

    $(document).on("click", ".iconPlay", function () {
        $(this).hide();
        $(".coverVideo").hide();
        playPause();
    })

    $(document).on("click", ".btnEdit", function () {
        $($(this).parents(".title")).addClass("barEdit");
        $($(this).parents(".box")).addClass("boxEdit");
        $($($(this).parents(".title")).siblings(".show")).removeClass("active");
        $($($(this).parents(".title")).siblings(".edit")).addClass("active");
    })

    $(document).on("click", ".btns>*", function () {
        $($(this).parents(".title")).removeClass("barEdit");
        $($(this).parents(".box")).removeClass("boxEdit");
        $($($(this).parents(".title")).siblings(".show")).addClass("active");
        $($($(this).parents(".title")).siblings(".edit")).removeClass("active");
    })

    var i = 2;
    var eduHtml = $(".edit .eduCol").html();

    $(document).on("click", ".addEduCol>a", function () {
        $(".edit .eduCol").append(eduHtml.replaceAll('edu1-01', ('edu' + i + '-01')).replaceAll('edu1-02', ('edu' + i + '-02')).replaceAll('edu1-03', ('edu' + i + '-03')))
        i++;
    })

    $(document).on("change", "#city", function () {

        for (var i = 0; i < 10; i++) {
            console.log($($(".nameCountry")[i]).text())
            if ($(this).val() == $($(".nameCountry")[i]).text()) {
                $($(".nameCountry")[i]).remove()
            }
        }

        $(this).attr("data-value", $($($(this).next("datalist")).find("option[value='" + $(this).val() + "']")).attr("data-value"))
        $(this).val("")

    })

    $(document).on("click", ".nameCountry i", function () {
        $($(this).parents(".nameCountry")).remove();
    })

    $(document).on("change", "#education", function () {

        for (var i = 0; i < 10; i++) {
            if ($(this).val() == $($(".nameEducation")[i]).text()) {
                $($(".nameEducation")[i]).remove()
            }
        }

        $(".edit .education .listEducation").append('<span class="nameEducation">' + $(this).val() + '<i class="fal fa-times-circle"></i>' + '</span>');

        $(this).val("")

    })

    $(document).on("click", ".nameEducation i", function () {
        $($(this).parents(".nameEducation")).remove();
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

})




// validation ...

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

    for (var i = 0; i < $("form.studentformToJoin input").length; i++) {
        if ($($("form.studentformToJoin input")[i]).attr("true") != "yes") {
            x++;
        }
        if (i == $("form.studentformToJoin input").length - 1) {

            if (x != 0) {
                $($("form.studentformToJoin").find(".student_submit")).attr("disabled", "disabled");
            } else {
                $($("form.studentformToJoin").find(".student_submit")).removeAttr("disabled");
            }
            x = 0;
        }
    }

})
var x = 0;

for (var i = 0; i < $("form.studentformToJoin input").length; i++) {

    if ($($("form.studentformToJoin input")[i]).attr("requiredX") == "yes") {
        $($("form.studentformToJoin input")[i]).attr("true", "no");
    } else {
        $($("form.studentformToJoin input")[i]).attr("true", "yes");
    }
};

// End validation ...

///////// Teacher


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

    for (var i = 0; i < $("form.formToJoin input").length; i++) {
        if ($($("form.formToJoin input")[i]).attr("true") != "yes") {
            x++;
        }
        if (i == $("form.formToJoin input").length - 1) {

            if (x != 0) {
                $($("form.formToJoin").find(".submit")).attr("disabled", "disabled");
            } else {
                $($("form.formToJoin").find(".submit")).removeAttr("disabled");
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

for (var i = 0; i < $("form.formToJoin input").length; i++) {

    if ($($("form.formToJoin input")[i]).attr("requiredX") == "yes") {
        $($("form.formToJoin input")[i]).attr("true", "no");
    } else {
        $($("form.formToJoin input")[i]).attr("true", "yes");
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
        $("td." + $(this).attr("id") + " input").attr("disabled", "disabled");
    } else {
        $("td." + $(this).attr("id") + " input").removeAttr("disabled");
    }
})

$(document).on("click", ".addHours td", function () {
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

//})


///// End Teacher

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




for (var i = 0; i < $("form.formToJoinTeacher input").length; i++) {
    if ($($("form.formToJoinTeacher input")[i]).attr("true") != "yes") {
        x++;
    }
    if (i == $("form.formToJoinTeacher input").length - 1) {

        if (x != 0) {
            $($("form.formToJoinTeacher").find(".teacher_register_submit")).attr("disabled", "disabled");
        } else {
            $($("form.formToJoinTeacher").find(".teacher_register_submit")).removeAttr("disabled");
        }
        x = 0;
    }
}

for (var i = 0; i < $("form.formToJoinTeacher input").length; i++) {

    if ($($("form.formToJoinTeacher input")[i]).attr("requiredX") == "yes") {
        $($("form.formToJoinTeacher input")[i]).attr("true", "no");
    } else {
        $($("form.formToJoinTeacher input")[i]).attr("true", "yes");
    }
};


