@extends('dashboard.layouts.app')

@section('content')

    <div class="content-wrapper" style="height: 1200px;">

        <section class="content-header">

            <h1>تعديل</h1>

            <ol class="breadcrumb">
                <li><a href="{{-- route('dashboard.index') --}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{-- route('dashboard.posts.index') --}}"><i class="fa fa-dashboard"></i> @lang('site.categories')</a></li>
                <li class="active">تعديل</li>
            </ol>
        </section>
        <section class="content">
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">@lang('site.categories')</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  @include('dashboard.partials._errors')
                  <form action="{{url('/admin/cities/update')}}" method="POST" >
                    @csrf
                    {{-- method_field('POST') --}}
                      <input type="hidden" class="form-control" name="id" value="{{$city->id}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputtext1">الاسم بالعربية</label>
                                <input type="text" class="form-control" name="name_ar" value="{{$city->name_ar}}">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputtext1">الاسم بالعبرية</label>
                                    <input type="text" class="form-control" name="name_he" value="{{$city->name_he}}">
                            </div>

                    </div>

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>

                  </form>
                </div>
                <!-- /.box -->
</div>


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection


