@extends('dashboard.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.edit')</h1>

            <ol class="breadcrumb">
                <li><a href="{{-- route('dashboard.index') --}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{-- route('dashboard.settings.index') --}}"><i class="fa fa-dashboard"></i> الاعدادات</a></li>
                <li class="active">تعديل</li>
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
                @foreach($settings as $setting)
                @include('dashboard.partials._errors')
                <form action="{{ url('/admin/setting/'.$setting->name.'/edit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="box-body">


                            @if($setting->is_image == 0)
                                <div class="form-group">
                                    <label for="exampleInputtext1"> {{$setting->slug}}</label>
                                    <input type="text" class="form-control" name="{{$setting->name}}" value="{{$setting->value}}" placeholder="fb" >
                                </div>

                            @elseif($setting->is_image == 1)
                                @if($setting->value != '')
                                    <div class="form-group">
                                        <label for="exampleInputtext1"> {{$setting->slug}}</label>
                                        <input type="file" class="form-control" name="{{$setting->name}}">
                                        <img src="{{url($setting->value)}}" width="200" height="100"/>
                                    </div>
                                @endif
                            @endif
                        @endforeach




</div>

            </form>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">تعديل</button>
            </div>


    </div>
    <!-- /.box -->


    </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
