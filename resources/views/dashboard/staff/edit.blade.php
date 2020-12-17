@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.create')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.posts.index') }}"><i class="fa fa-dashboard"></i> @lang('site.news')</a></li>
                <li class="active">@lang('site.create')</li>
            </ol>
        </section>
        <section class="content">

            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">تعديل موظف</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                @include('dashboards.partials._errors')
                <form action="/admin/staff/update" method="POST" enctype="multipart/form-data">
                    @csrf



                    <input type="hidden" name="emp_id" value="{{$emp->id}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputtext1">الاسم</label>
                            <input type="text" class="form-control" name="name_ar" placeholder="الاسم"  value="{{ $emp->name_ar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">الاسم باللغه الانجليزيه</label>
                            <input type="text" class="form-control" name="name_en" placeholder="الاسم"  value="{{ $emp->name_en }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">المنصب</label>
                            <input type="text" class="form-control" name="specializationAr" value="{{ $emp->specialization_ar }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">المنصب باللغه الانجليزيه</label>
                            <input type="text" class="form-control" name="specializationEn" value="{{ $emp->specialization_en }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.categories')</label>
                            <select  class="form-control" name="type_id" placeholder="@lang('site.name_category')" >
                                <option value="" disabled="">اختر تصنيف الموظف</option>
                                @foreach(empTypes() as $type)
                                    <option value="{{$type->id}}"
                                    @if($type->id == $emp->type_id)
                                        selected
                                        @endif
                                    >{{$type->name_ar}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.image')</label>
                            <input type="file" class="form-control" name="image" placeholder="@lang('site.image')"  value="{{ old('image') }}">
                       <img src="{{ url($emp->image) }}" width="200" height="100">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputtext1">ارفع السيره الذاتيه</label>
                            <input type="file" class="form-control" name="cv" placeholder="@lang('site.files')"  value="{{ old('files') }}">
                        </div>

                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">@lang('site.add')</button>
                    </div>

                </form>
            </div>
            <!-- /.box -->


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

