@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.create')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.posts.index') }}"><i class="fa fa-dashboard"></i> @lang('site.categories')</a></li>
                <li class="active">@lang('site.create')</li>
            </ol>
        </section>
        <section class="content">

                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">@lang('site.categories')</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  @include('dashboards.partials._errors')
                  <form action="{{ route('dashboard.categoryposts.store') }}" method="POST" >
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.name_category')</label>
                                <input type="text" class="form-control" name="nameAr" placeholder="@lang('site.name_category')"  value="{{ old('nameAr') }}">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputtext1">الوصف باللغه الانجليزيه</label>
                                    <input type="text" class="form-control" name="nameEn" placeholder="@lang('site.name_category')"  value="{{ old('nameEn') }}">
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
