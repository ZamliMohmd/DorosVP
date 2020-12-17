@extends('app')

@section('header')
<style>
    /* style wallet teacher */

    .titleWallet {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .titleWallet .linksWallet {
        font-size: 14px;
    }

    .titleWallet .linksWallet i {
        font-size: 18px;
        margin-left: 3px;
    }

    .titleWallet .linksWallet a {
        display: inline-flex;
        align-items: baseline;
        border: 1px solid #E8E8E8;
        padding: 7px;
        border-radius: 8px;
        -webkit-border-radius: 8px;
        -moz-border-radius: 8px;
        -ms-border-radius: 8px;
        -o-border-radius: 8px;
    }

    .titleWallet .linksWallet a:nth-of-type(1) {
        margin-left: 5px;
        color: var(--colorText2);
        background-color: #F8F8F8;
    }

    .titleWallet .linksWallet a:nth-of-type(2) {
        border-color: var(--colorText1);
        margin-left: 5px;
        color: #FFF;
        background-color: var(--colorText1);
    }

    .NotHide {
        display: block !important;
    }

    .showVisa>.row>.colNotShow {
        display: none;
    }

    .editVisa>.row>div:not(.colNotEdit) {
        display: none;
    }

    .wallet .visa .row {
        align-items: normal;
    }

    .wallet {
        overflow: hidden;
    }

    .wallet .rowHeadPage {
        background-color: #fff;
    }

    .deleteAccountVisa {
        color: #FF4747;
        font-size: 12px;
    }

    .deleteAccountVisa i {
        font-size: 16px;
        color: var(--colorText2);
    }

    .wallet .bg2 {
        background-color: #f8f8f8;
    }

    .wallet .allPayment,
    .wallet .allPayment+div {
        background-color: #fff;
    }

    .allPayment .title {
        color: var(--colorText1);
        font-size: 19px;
        padding-bottom: 15px;
    }

    .allPayment .table {
        white-space: nowrap;
    }

    .allPayment .table th {
        color: var(--colorText2);
        font-size: 15px;
    }

    .allPayment .table td {
        color: #696871;
        font-size: 14px;
    }

    .showMorePayment {
        color: var(--colorText2);
        font-size: 14px;
    }

    .showMorePayment:hover {
        color: var(--colorText2);
    }

    @media (min-width: 992px) and (max-width: 30000000000px) {

        .allPayment .table th,
        .allPayment .table td {
            width: calc(100% / 4);
        }
    }

    @media(min-width: 0.1px) and (max-width: 575.9px) {
        .container.wallet {
            width: 95%;
            margin-right: auto;
            margin-left: auto;
        }

        .titleWallet {
            flex-wrap: wrap;
            font-size: 18px !important;
        }

        .titleWallet i {
            font-size: 22px !important;
        }

        .titleWallet>span {
            flex: 0 0 100%;
            margin: 5px 0;
            text-align: right;
        }

        .titleWallet .linksWallet a i {
            font-size: 15px;
        }

        .titleWallet .linksWallet a {
            font-size: 12px;
        }

        .container.wallet .rowHeadPage {
            padding: 7px 0px;
        }
    }
</style>
@endsection
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
                                <a href="" class="active">
                                    <span class="icon">
                                        <i class="fad fa-user-tie"></i>
                                    </span>
                                    حسابي
                                </a>
                            </li>
                            <li>
                                <a href="">
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
            <div class="col contentTeacher">

                <div class="container completeDataTeacher wallet">
                    <div class="row rowHeadPage">
                        <div class="col-12 titlePage titleWallet">
                            <span>
                                <span class="icon">
                                    <i class="fal fa-wallet"></i>
                                </span>
                                مدفوعاتي
                            </span>
                            <span class="linksWallet">
                                <a href="">
                                    إلغاء التجديد التلقائي
                                </a>
                                <a href="">
                                    <i class="fal fa-edit"></i>
                                    تغيير الخطة
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="visa p-0">
                        <div class="row">
                            <form action="" class="bg2 py-3 col-lg-6 editVisa">
                                <div class="row">
                                    <div class="col-12 NotHide">
                                        <p class="titleVisa">
                                            אמצעי תשלום
                                        </p>
                                        <img src="{{asset('assets/website/img/imgVisa11.png')}}" alt="">
                                        <p class="subTitleVisa">
                                            המערכת עומדת בתקן אבטחה PCI DSS
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2 colNotEdit">
                                        <div class="inputVisa">
                                            <label for="inputVisa1">
                                                מס׳ כרטיס
                                            </label>
                                            <div>
                                                <input placeholder="xxxx  xxxx  xxxx  5696 " type="text" name=""
                                                       id="inputVisa1">
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
                                                <input placeholder="08/2020" type="text" name="" id="inputVisa2">
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
                                                <input placeholder="טרנזילה שירותי " type="text" name=""
                                                       id="inputVisa3">
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
                                                <input placeholder="5989851325" type="text" name="" id="inputVisa4">
                                                <i class="fal fa-id-card-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2 colNotEdit">
                                        <div class="inputVisa">
                                            <label for="inputVisa5">
                                                cvv
                                            </label>
                                            <div>
                                                <input placeholder="958" type="text" name="" id="inputVisa5">
                                                <i class="fal fa-shield-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <button type="submit">
                                            שמור פרטי תשלום
                                        </button>
                                    </div>
                                    <div class="col-12 mt-2 colNotEdit colNotShow">
                                        <button type="button" class="btnEditWallet">
                                            <i class="fal fa-pen"></i>
                                            تعديل
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="bg2 col-lg-6">
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
                            </div>
                            <div class="bg2 col-12 py-3 text-right">
                                <a href="" class="deleteAccountVisa">
                                    <i class="fal fa-trash-alt"></i>
                                    حذف الحساب
                                </a>
                            </div>
                            <div class="col-12 pt-3 allPayment">
                                <div class="title">
                                    <span>
                                        مدفوعاتي
                                    </span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>
                                                التاريخ
                                            </th>
                                            <th>
                                                اسم الخطة
                                            </th>
                                            <th>
                                                المبلغ
                                            </th>
                                            <th>
                                                ملاحظات
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                17/08/2020
                                            </td>
                                            <td>
                                                شهرية
                                            </td>
                                            <td>
                                                153
                                                <i class="fal fa-shekel-sign"></i>
                                            </td>
                                            <td>
                                                يتجدد الدفع بتاريخ
                                                17/08/2020
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                17/08/2020
                                            </td>
                                            <td>
                                                شهرية
                                            </td>
                                            <td>
                                                153
                                                <i class="fal fa-shekel-sign"></i>
                                            </td>
                                            <td>
                                                يتجدد الدفع بتاريخ
                                                17/08/2020
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                17/08/2020
                                            </td>
                                            <td>
                                                شهرية
                                            </td>
                                            <td>
                                                153
                                                <i class="fal fa-shekel-sign"></i>
                                            </td>
                                            <td>
                                                يتجدد الدفع بتاريخ
                                                17/08/2020
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                17/08/2020
                                            </td>
                                            <td>
                                                شهرية
                                            </td>
                                            <td>
                                                153
                                                <i class="fal fa-shekel-sign"></i>
                                            </td>
                                            <td>
                                                يتجدد الدفع بتاريخ
                                                17/08/2020
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                17/08/2020
                                            </td>
                                            <td>
                                                شهرية
                                            </td>
                                            <td>
                                                153
                                                <i class="fal fa-shekel-sign"></i>
                                            </td>
                                            <td>
                                                يتجدد الدفع بتاريخ
                                                17/08/2020
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                17/08/2020
                                            </td>
                                            <td>
                                                شهرية
                                            </td>
                                            <td>
                                                153
                                                <i class="fal fa-shekel-sign"></i>
                                            </td>
                                            <td>
                                                يتجدد الدفع بتاريخ
                                                17/08/2020
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                17/08/2020
                                            </td>
                                            <td>
                                                شهرية
                                            </td>
                                            <td>
                                                153
                                                <i class="fal fa-shekel-sign"></i>
                                            </td>
                                            <td>
                                                يتجدد الدفع بتاريخ
                                                17/08/2020
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12 py-3 text-right">
                                <a href="" class="showMorePayment">
                                    اظهار مدفوعات أخرى
                                    <i class="far fa-arrow-down"></i>
                                </a>
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
    /* ********* */
    /* script for wallet techer */
    /* ********* */

    $(document).on("click", ".btnEditWallet", function () {
        $($(this).parents(".editVisa")).addClass("showVisa").removeClass("editVisa")
    })
</script>
@endsection
