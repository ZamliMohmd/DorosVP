@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.contactus')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.contactus')</a></li>
                <li class="active">@lang('site.contactus')</li>
            </ol>
        </section>

        <section class="content">

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">@lang('site.contactus')</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
