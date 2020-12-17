@extends('dashboard.layouts.app')
@section('style')
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

@endsection



@section('header')

    <style>
        .user-row {
            margin-bottom: 14px;
        }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }


        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad
        {margin-top:20px;
        }

    </style>
    <script src="js/profile.js"></script>

@endsection

@section('content')

    <div class="container">
        <div class="row">
            <br><br>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

                <div class="panel panel-info" style=" height: 500px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">التفاصيل: </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">

                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>اسم المرسل:</td>
                                        <td>{{$contact->name}}</td>
                                    </tr>

                                    <tr>
                                        <td>الايميل:</td>
                                        <td>{{$contact->email}}</td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>نوع العضوية</td>
                                        <td>
                                            @if($contact->user_id == null)
                                               زائر
                                            @else
                                               {{ $contact->users->name}}
                                                نعم :
                                            @endif
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>التاريخ و الوقت</td>
                                        <td>{{$contact->created_at}}</td>

                                    </tr>

                                    <tr>
                                        <td>الرسالة</td>
                                        <td>{{$contact->message}}</td>

                                    </tr>


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
                <br><br><br><br><br><br><br>

            </div>
        </div>
    </div>



@endsection
