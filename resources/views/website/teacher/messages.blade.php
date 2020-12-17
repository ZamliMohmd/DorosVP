@extends('app')

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
                                <a href="">
                                    <span class="icon">
                                        <i class="fad fa-user-tie"></i>
                                    </span>
                                    حسابي
                                </a>
                            </li>
                            <li>
                                <a href="" class="active">
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
            <div class="col colContentChat contentTeacher">

                <div class="row">
                    <div class="col-lg-12 colBoxChat">
                        <div class="box boxChat">
                            <div class="title">
                                <span class="btnBack">
                                    <i class="fal fa-arrow-right"></i>
                                </span>
                                <span class="icon">
                                    <i class="fal fa-comment-lines"></i>
                                </span>
                                جميع رسائل الطلاب
                            </div>
                            <div class="row">
                                <div class="colList activeMob">
                                    <ul class="listUsers">
                                        <li data-chat="chatPerson1">
                                            <a href="javascript:void(0)">
                                                <span class="imgStu">
                                                    <img src="img/imgStudent.png" alt="">
                                                </span>
                                                <span>
                                                    <p class="name">
                                                        أحمد العكلوك
                                                    </p>
                                                    <p class="date">
                                                        17/08/2020
                                                    </p>
                                                </span>
                                                <span>
                                                    <span class="icon iconChat">
                                                        <i class="fal fa-calendar-star"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                    <span class="icon">
                                                        <i class="fal fa-comment-alt-lines"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="active" data-chat="chatPerson2">
                                            <a href="javascript:void(0)">
                                                <span class="imgStu">
                                                    <img src="img/imgStudent.png" alt="">
                                                    <small>3</small>
                                                </span>
                                                <span>
                                                    <p class="name">
                                                        أحمد العكلوك
                                                    </p>
                                                    <p class="date">
                                                        17/08/2020
                                                    </p>
                                                </span>
                                                <span>
                                                    <span class="icon">
                                                        <i class="fal fa-calendar-star"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                    <span class="icon">
                                                        <i class="fal fa-comment-alt-lines"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-chat="chatPerson3">
                                            <a href="javascript:void(0)">
                                                <span class="imgStu">
                                                    <img src="img/imgStudent.png" alt="">
                                                    <small>3</small>
                                                </span>
                                                <span>
                                                    <p class="name">
                                                        أحمد العكلوك
                                                    </p>
                                                    <p class="date">
                                                        17/08/2020
                                                    </p>
                                                </span>
                                                <span>
                                                    <span class="icon">
                                                        <i class="fal fa-calendar-star"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                    <span class="icon">
                                                        <i class="fal fa-comment-alt-lines"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-chat="chatPerson4">
                                            <a href="javascript:void(0)">
                                                <span class="imgStu">
                                                    <img src="img/imgStudent.png" alt="">
                                                    <small>3</small>
                                                </span>
                                                <span>
                                                    <p class="name">
                                                        أحمد العكلوك
                                                    </p>
                                                    <p class="date">
                                                        17/08/2020
                                                    </p>
                                                </span>
                                                <span>
                                                    <span class="icon">
                                                        <i class="fal fa-calendar-star"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                    <span class="icon">
                                                        <i class="fal fa-comment-alt-lines"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-chat="chatPerson5">
                                            <a href="javascript:void(0)">
                                                <span class="imgStu">
                                                    <img src="img/imgStudent.png" alt="">
                                                    <small>3</small>
                                                </span>
                                                <span>
                                                    <p class="name">
                                                        أحمد العكلوك
                                                    </p>
                                                    <p class="date">
                                                        17/08/2020
                                                    </p>
                                                </span>
                                                <span>
                                                    <span class="icon">
                                                        <i class="fal fa-calendar-star"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                    <span class="icon">
                                                        <i class="fal fa-comment-alt-lines"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li data-chat="chatPerson6">
                                            <a href="javascript:void(0)">
                                                <span class="imgStu">
                                                    <img src="img/imgStudent.png" alt="">
                                                    <small>3</small>
                                                </span>
                                                <span>
                                                    <p class="name">
                                                        أحمد العكلوك
                                                    </p>
                                                    <p class="date">
                                                        17/08/2020
                                                    </p>
                                                </span>
                                                <span>
                                                    <span class="icon">
                                                        <i class="fal fa-calendar-star"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                    <span class="icon">
                                                        <i class="fal fa-comment-alt-lines"></i>
                                                        <div class="overUserChat">
                                                            <p>
                                                                <i class="fal fa-phone-alt"></i>
                                                                0599123456
                                                            </p>
                                                            <p>
                                                                <i class="fal fa-envelope"></i>
                                                                mail@mail.com
                                                            </p>
                                                        </div>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="colTextChat">
                                    <div class="chatPerson chatPerson1">
                                        <div class="msgs">
                                            <div class="timeMsg">
                                                <span>
                                                    <i class="fal fa-calendar"></i>
                                                    <span>17/10/2020</span>
                                                </span>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="write">
                                            <div>
                                                <input type="text" class="textMsg" name="textMsg1"
                                                       placeholder="اكتب الرد ..">
                                                <label class="fileMsg" for="fileMsg1">
                                                    <i class="fal fa-paperclip"></i>
                                                </label>
                                                <input hidden type="file" name="fileMsg1" id="fileMsg1">
                                                <button type="submit">
                                                    إرسال الرد
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="chatPerson chatPerson2">
                                        <div class="msgs">
                                            <div class="timeMsg">
                                                <span>
                                                    <i class="fal fa-calendar"></i>
                                                    <span>17/10/2020</span>
                                                </span>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="write">
                                            <div>
                                                <input type="text" class="textMsg" name="textMsg1"
                                                       placeholder="اكتب الرد ..">
                                                <label class="fileMsg" for="fileMsg1">
                                                    <i class="fal fa-paperclip"></i>
                                                </label>
                                                <input hidden type="file" name="fileMsg1" id="fileMsg1">
                                                <button type="submit">
                                                    إرسال الرد
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="chatPerson chatPerson3">
                                        <div class="msgs">
                                            <div class="timeMsg">
                                                <span>
                                                    <i class="fal fa-calendar"></i>
                                                    <span>17/10/2020</span>
                                                </span>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="write">
                                            <div>
                                                <input type="text" class="textMsg" name="textMsg1"
                                                       placeholder="اكتب الرد ..">
                                                <label class="fileMsg" for="fileMsg1">
                                                    <i class="fal fa-paperclip"></i>
                                                </label>
                                                <input hidden type="file" name="fileMsg1" id="fileMsg1">
                                                <button type="submit">
                                                    إرسال الرد
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="chatPerson chatPerson4">
                                        <div class="msgs">
                                            <div class="timeMsg">
                                                <span>
                                                    <i class="fal fa-calendar"></i>
                                                    <span>17/10/2020</span>
                                                </span>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="write">
                                            <div>
                                                <input type="text" class="textMsg" name="textMsg1"
                                                       placeholder="اكتب الرد ..">
                                                <label class="fileMsg" for="fileMsg1">
                                                    <i class="fal fa-paperclip"></i>
                                                </label>
                                                <input hidden type="file" name="fileMsg1" id="fileMsg1">
                                                <button type="submit">
                                                    إرسال الرد
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="chatPerson chatPerson5">
                                        <div class="msgs">
                                            <div class="timeMsg">
                                                <span>
                                                    <i class="fal fa-calendar"></i>
                                                    <span>17/10/2020</span>
                                                </span>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="write">
                                            <div>
                                                <input type="text" class="textMsg" name="textMsg1"
                                                       placeholder="اكتب الرد ..">
                                                <label class="fileMsg" for="fileMsg1">
                                                    <i class="fal fa-paperclip"></i>
                                                </label>
                                                <input hidden type="file" name="fileMsg1" id="fileMsg1">
                                                <button type="submit">
                                                    إرسال الرد
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="chatPerson chatPerson6">
                                        <div class="msgs">
                                            <div class="timeMsg">
                                                <span>
                                                    <i class="fal fa-calendar"></i>
                                                    <span>17/10/2020</span>
                                                </span>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft">
                                                <div>
                                                    <img src="img/imgStudent.png" alt="">
                                                </div>
                                                <div>
                                                    <p class="name">
                                                        <b>
                                                            أحمد العكلوك
                                                        </b>
                                                    </p>
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="msgLeft msgRight">
                                                <div>
                                                    <p class="name">
                                                    <p class="text">
                                                        هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن
                                                        الغالبية
                                                        تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات
                                                        العشوائية
                                                        إلى
                                                        النص. إن كنت تريد أن تستخدم نص مهنالك العديد من الأنواع
                                                        المتوفرة
                                                        لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر
                                                        إدخال
                                                        بعض
                                                        النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم
                                                        نص
                                                        لوريم
                                                    </p>
                                                    <p class="time">
                                                        <i class="fal fa-clock"></i>
                                                        <b>
                                                            10:30
                                                        </b>
                                                        pm
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="write">
                                            <div>
                                                <input type="text" class="textMsg" name="textMsg1"
                                                       placeholder="اكتب الرد ..">
                                                <label class="fileMsg" for="fileMsg1">
                                                    <i class="fal fa-paperclip"></i>
                                                </label>
                                                <input hidden type="file" name="fileMsg1" id="fileMsg1">
                                                <button type="submit">
                                                    إرسال الرد
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
        </div>
    </div>


@endsection
