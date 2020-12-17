@extends('app')

@section('header')
    <link rel="stylesheet" href="{{asset('assets/website/css/calender.css')}}">

    <link rel="stylesheet" href="{{asset('assets/website/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/website/css/flatpickr.min.css')}}">

@endsection

@section('content')

    <span class="keyPopUpCalender noAdd">
        <span>
            <i class="fal fa-plus"></i>
        </span>
        <span>
            <i class="fal fa-check"></i>
        </span>
    </span>

    <span class="empty"></span>

    <div class="container calenderTeacher">
        <div class="row rowHeadPage">
            <div class="col-12 titlePage">
                <span class="icon">
                    <i class="fal fa-calendar"></i>
                </span>
                التقويم
            </div>
        </div>
        <div class="row">
            <div class="col-12 colTables">
                <button class="prevWeek">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <button class="nextWeek">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <div>
                    <table class="table tableHour">
                        <tr>
                            <td>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
                            </td>
                        </tr>
                        <tr>
                            <td>00:00</td>
                        </tr>
                        <tr>
                            <td>01:00</td>
                        </tr>
                        <tr>
                            <td>02:00</td>
                        </tr>
                        <tr>
                            <td>03:00</td>
                        </tr>
                        <tr>
                            <td>04:00</td>
                        </tr>
                        <tr>
                            <td>05:00</td>
                        </tr>
                        <tr>
                            <td>06:00</td>
                        </tr>
                        <tr>
                            <td>07:00</td>
                        </tr>
                        <tr>
                            <td>08:00</td>
                        </tr>
                        <tr>
                            <td>09:00</td>
                        </tr>
                        <tr>
                            <td>10:00</td>
                        </tr>
                        <tr>
                            <td>11:00</td>
                        </tr>
                        <tr>
                            <td>12:00</td>
                        </tr>
                        <tr>
                            <td>13:00</td>
                        </tr>
                        <tr>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>15:00</td>
                        </tr>
                        <tr>
                            <td>16:00</td>
                        </tr>
                        <tr>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <td>18:00</td>
                        </tr>
                        <tr>
                            <td>19:00</td>
                        </tr>
                        <tr>
                            <td>20:00</td>
                        </tr>
                        <tr>
                            <td>21:00</td>
                        </tr>
                        <tr>
                            <td>22:00</td>
                        </tr>
                        <tr>
                            <td>23:00</td>
                        </tr>
                    </table>
                </div>
                <div class="table-responsive tableCalenderTeacher" unActive="wed, fri">
                    <table class="table">
                        <tr class="dateEveryDay">

                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="popUpFromCalender1">
        <div>
            <div class="headerPopUp">
                <span>
                    إضافة درس
                </span>
                <span class="closeX">
                    <i class="fal fa-times"></i>
                </span>
            </div>
            <div class="bodyPopUp">
                <form action="" class="formAddDate">
                    <div>
                        <label for="userName">
                            اسم الطالب
                        </label>
                        <div class="divInput mt-2">
                            <select name="" class="w-100 select2" id="userName">
                                <option value="">
                                    أحمد العكلوك
                                </option>
                                <option value="">
                                    محمد العكلوك
                                </option>
                                <option value="">
                                    أحمد العكلوك
                                </option>
                                <option value="">
                                    أحمد العكلوك
                                </option>
                                <option value="">
                                    أحمد العكلوك
                                </option>
                            </select>
                            <i class="fal fa-user"></i>
                        </div>
                    </div>
                    <div>
                        <label for="subject">
                            موضوع الدرس
                        </label>
                        <div class="divInput mt-2">
                            <select name="" class="w-100 select2" id="subject">
                                <option value="">
                                    علوم
                                </option>
                                <option value="">
                                    رياضيات
                                </option>
                                <option value="">
                                    فيزياء
                                </option>
                                <option value="">
                                    علوم
                                </option>
                                <option value="">
                                    علوم
                                </option>
                            </select>
                            <i class="fal fa-book"></i>
                        </div>
                    </div>
                    <div>
                        <label for="date">
                            التاريخ
                        </label>
                        <div class="divInput mt-2">
                            <input type="date" id="date">
                            <i class="fal fa-calendar-check"></i>
                        </div>
                    </div>
                    <div>
                        <label>
                            الوقت
                        </label>
                        <div class="calTime">
                            <div>
                                <label>
                                    من
                                </label>
                                <input class="w-50 time timepicker" id="from" value="16:30" type="text">
                            </div>
                            <div>
                                <label>
                                    إلى
                                </label>
                                <input class="w-50 time timepicker" id="to" value="16:30" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="ok">
                        <button class="closeX" type="button">
                            إلغاء
                        </button>
                        <button type="submit">
                            إضافة
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    <script src="{{asset('assets/website/js/calenderTeacher.js')}}"></script>
    <script src="{{asset('assets/website/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/website/js/flatpickr.min.js')}}"></script>
    <style>
        input.timepicker {
            width: 100px !important;
            text-align: center !important;
            margin: auto;
        }
    </style>
    <script>
        $('.select2').select2({
            placeholder: "اختر...",
            dir: 'rtl',
            maximumSelectionLength: '2'
        });
    </script>
    <script>
        $('.timepicker').flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true,
            defaultDate: "00:00",
            disableMobile: true
        });
    </script>
@endsection
