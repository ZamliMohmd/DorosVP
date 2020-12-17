@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.create')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ url('/admin/staff/all') }}"><i class="fa fa-dashboard"></i> اضافه تصنيف</a></li>
                <li class="active">@lang('site.create')</li>
            </ol>
        </section>
        <section class="content">

            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">اضافة تصنيف</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @include('dashboards.partials._errors')
                <form action="{{ url('/admin/staff/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="box-body">

                        <div class="form-group">
                            <label for="exampleInputtext1">التصنيف باللغه الانجليزيه</label>
                            <input type="text" class="form-control" name="name_ar" placeholder="الاسم"  value="{{ old('name_ar') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">التصنيف باللغه الانجليزيه</label>
                            <input type="text" class="form-control" name="name_en" value="{{ old('name_en') }}">
                        </div>





                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">@lang('site.add')</button>
                    </div>

                </form>
            </div>
            <!-- /.box -->


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
@section('footer')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>
@endsection
