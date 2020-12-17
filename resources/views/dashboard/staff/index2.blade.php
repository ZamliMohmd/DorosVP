@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">

            <h1>عرض الاعضاء حسب التصنيف</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.posts.index') }}"><i class="fa fa-dashboard"></i> @lang('site.news')</a></li>
                <li class="active"></li>
            </ol>
        </section>

        <div class="col-xs-12">
            <div class="box" >
                <div class="box-header" >
                    <h3 class="box-title" style="font-weight: bold;color: #125acd; font-size: 16px;" >اختر التصنيف</h3>

                    <div class="box-tools">
                        <form method="POST" action="{{url('/admin/staff/getbytype')}}" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            <div data-role="fieldcontain" style="margin-left: 135px; margin-top: -5px">
                                <fieldset data-role="controlgroup">
                                    <input type="radio" name="emp_type" id="radio-choice-1" value="0" checked="checked" />
                                    <label for="radio-choice-1">كل التصنيفات</label>
                                    @foreach(empTypes() as $type)
                                        <input type="radio" name="emp_type" id="radio-choice-1" value="{{$type->id}}"  />
                                        <label for="radio-choice-1">{{$type->name_ar}}</label>

                                    @endforeach
                                    <button class="btn btn-danger">عرض</button>
                                </fieldset>

                            </div>


                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>الرقم</th>
                                <th>الاسم</th>
                                <th>الفئة</th>
                                <th>التخصص</th>
                                <th>الصورة</th>
                                <th>CV</th>
                                <th>تاريخ الاضافة</th>
                                <th>التحكم</th>
                            </tr>

                            @foreach($employees as $emp)
                                <tr>
                                    <td>{{$emp->id}}</td>
                                    <td>{{str_limit($emp->name_ar , 20 , $end = '...')}}</td>

                                    <td>{{getEmpTypeNameByEmpTypeID($emp->type_id)}}</td>

                                    <td>
                                        @if($emp->image != null)
                                            {{$emp->specialization_ar}}
                                        @else
                                            <span>لا يوجد</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if($emp->image != null)
                                            <img src="{{url($emp->image)}}" width="75" height="50"/>
                                        @else
                                            <span>لا يوجد</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if($emp->cv != null)
                                            <a href="{{url($emp->cv)}}"><button class="btn btn-info">حمل من هنا</button> </a>
                                        @else
                                            <span>لا يوجد</span>
                                        @endif
                                    </td>
                                    <td>{{date('d m Y', strtotime($emp->created_at))}}</td>
                                    <td>

                                        <form method="POST" action="{{url('/admin/staff/edit')}}" accept-charset="UTF-8" class="form-horizontal">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="emp_id" value="{{$emp->id}}">

                                            <button type="submit" class="btn btn-info">تعديل<i class="fa fa-edit"></i></button>
                                        </form>

                                        <form method="POST" action="{{url('/admin/staff/delete')}}" accept-charset="UTF-8">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="emp_id" value="{{$emp->id}}">

                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>حذف</button>
                                        </form>







                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                @if(count($employees) == 0)

                    <div class="profile-content">
                        <div class="alert alert-danger">
                            <p>لا يوجد طاقم حاليا</p>
                        </div>
                    </div>
            @endif
            <!-- /.box -->
            </div>





            <!--Page navigation-->
        {{$employees->appends(Request::except('page'))->render()}}

        <!-- endPage navigation-->

        </div>

@endsection

