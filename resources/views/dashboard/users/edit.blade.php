@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.edit')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-dashboard"></i> @lang('site.users')</a></li>
                <li class="active">@lang('site.edit')</li>
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
                  <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.first_name')</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" placeholder="@lang('site.first_name')"  value="{{ $user->first_name }}">
                        </div>
                        <div class="form-group">
                                            <label for="exampleInputtext2">@lang('site.last_name')</label>
                                            <input type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" placeholder="@lang('site.last_name')" value="{{ $user->last_name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtext2">@lang('site.phone')</label>
                            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" placeholder="@lang('site.phone')" value="{{ $user->phone }}">
        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">@lang('site.email')</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="@lang('site.email')" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">@lang('site.image')</label>
                            <input type="file" name="image" id="exampleInputFile">
 <img src="{{ url($user->image) }} " alt="" width="100">
                          </div>




                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">@lang('site.edit')</button>
                    </div>

                  </form>
                </div>
                <!-- /.box -->

<div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">تحديث كلمه السر</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="/admin/users/changePassword/{{ $user->id}}" method="POST">
                         @csrf
                      <div class="box-body">
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
                        <button type="submit" class="btn btn-info ">تحديث كلمه السر</button>
                      </div>
                      <!-- /.box-footer -->
                    </form>
                  </div>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
