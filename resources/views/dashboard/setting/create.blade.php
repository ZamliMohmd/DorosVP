@extends('dashboard.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>اضافة</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ url('/admin/setting/index')}}"><i class="fa fa-dashboard"></i> الاعدادات</a></li>
                <li class="active">اضافة</li>
            </ol>
        </section>
        <section class="content">

            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">الاعدادات</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @include('dashboard.partials._errors')
                <form action="{{url('/admin/setting/store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="box-body">
                        <label  class="col-md-4 control-label" >الاسم التوضيحي</label>
                            <div class="col-md-8">
                                {!! Form::text("slug",null,['class'=>'form-control' , 'required' => 'required']) !!}

                            </div>
                        </div>

                    <div class="box-body">
                    <label for="nameSetting" class="col-md-4 control-label" >الاسم بالانجليزي</label>

                            <div class="col-md-8">
                                {!! Form::text("name",null,['class'=>'form-control' ,'required' => 'required']) !!}

                            </div>
                    </div>
                        <br>
                        <!-- ////////////////////////////////////// -->


                    <div class="box-body">
                            <div class="col-md-8">
                                <label for="is_image" class="col-md-4 control-label" >نوع الاعداد</label>
                                {!! Form::radio('is_image', '0' , ['checked' => 'checked']) !!}
                                {{ Form::label('نص', null, ['class' => 'control-label']) }}
                                {!! Form::radio('is_image', '1' , ['checked' => 'checked'] ) !!}
                                {{ Form::label('صورة', null, ['class' => 'control-label']) }}
                                @if ($errors->has('is_image'))

                                @endif
                            </div>

                    </div>



                    <div class="clearfix"></div>
                    <br>

                    <div class="box-body">
                    <label for="value" class="col-md-4 control-label" >نص الاعداد</label>
                            <div class="col-md-8">

                                {!! Form::text("value",null,['class'=>'form-control' ]) !!}

                            </div>

                    </div>

                    <div class="clearfix"></div>
                    <br>

                    <div class="box-body">
                    <label for="value" class="col-md-4 control-label" >الصورة:</label>
                            <div class="col-md-8">
                                {!! Form::file("value" , null ,['class'=>'form-control' ]) !!}

                            </div>
                    </div>


                <div class="clearfix"></div>
                <br>
<script>
    function recaptchaCallback() {
        document.getElementById('myField').value = 'nonEmpty';
    }
</script>

                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">اضافة</button>
                </div>

                </form>

            <!-- /.box -->
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

