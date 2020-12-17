@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.create')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-dashboard"></i> @lang('site.users')</a></li>
                <li class="active">@lang('site.create')</li>
            </ol>
        </section>
        <section class="content">

                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">@lang('site.users')</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  @include('dashboards.partials._errors')
                  <form action="{{ route('dashboard.users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.first_name')</label>
                                <input type="text" class="form-control" name="first_name" placeholder="@lang('site.first_name')"  value="{{ old('first_name') }}">
                        </div>
                        <div class="form-group">
                                            <label for="exampleInputtext2">@lang('site.last_name')</label>
                                            <input type="text" class="form-control" name="last_name" placeholder="@lang('site.last_name')" value="{{ old('last_name') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext2">@lang('site.phone')</label>
                            <input type="text" class="form-control" name="phone" placeholder="@lang('site.phone')" value="{{ old('phone') }}">
        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">@lang('site.email')</label>
                            <input type="email" class="form-control" name="email" placeholder="@lang('site.email')" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">@lang('site.image')</label>
                            <input type="file" name="image" id="exampleInputFile">

                          </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">@lang('site.password')</label>
                            <input type="password" class="form-control" name="password" placeholder="@lang('site.password')">
                        </div>
                        <div class="form-group">
                                <label for="exampleInputPassword1">@lang('site.password_confirmation')</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="@lang('site.password_confirmation')">
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
