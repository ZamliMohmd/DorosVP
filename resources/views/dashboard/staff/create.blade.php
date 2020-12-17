@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.create')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ url('/admin/staff/all') }}"><i class="fa fa-dashboard"></i> @lang('site.news')</a></li>
                <li class="active">@lang('site.create')</li>
            </ol>
        </section>
        <section class="content">

            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">اضافة موظف</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @include('dashboards.partials._errors')
                <form action="{{ url('/admin/staff/add') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputtext1">الاسم</label>
                            <input type="text" class="form-control" name="name_ar" placeholder="الاسم"  value="{{ old('name_ar') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">الاسم باللغه الانجليزيه</label>
                            <input type="text" class="form-control" name="name_en" placeholder="الاسم"  value="{{ old('name_en') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">المنصب</label>
                            <input type="text" class="form-control" name="specializationAr" value="{{ old('specializationAr') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">المنصب باللغه الانجليزيه</label>
                            <input type="text" class="form-control" name="specializationEn" value="{{ old('specializationEn') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.categories')</label>
                            <select  class="form-control" name="type_id" placeholder="@lang('site.name_category')" >
                                <option value="" disabled="">اختر تصنيف الموظف</option>
                                @foreach(empTypes() as $type)
                                    <option value="{{$type->id}}">{{$type->name_ar}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.image')</label>
                            <input type="file" class="form-control" name="image" placeholder="@lang('site.image')"  value="{{ old('image') }}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">ارفع السيره الذاتيه</label>
                            <input type="file" class="form-control" name="cv" placeholder="@lang('site.files')"  value="{{ old('files') }}">
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
