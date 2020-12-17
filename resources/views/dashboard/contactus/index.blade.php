@extends('dashboard.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.contactus')</h1>

            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-dashboard"></i> @lang('site.contactus')</a></li>
                <li class="active">@lang('site.contactus')</li>
            </ol>
        </section>

        <section class="content">

            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">@lang('site.contactus')</h3>

                    <div class="box-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="@lang('site.search')">

                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding" >
                        @if ($contacts->count() > 0)
                        <table class="table table-hover" >
                                <tbody>
                                    <tr>
                                  <th>@lang('site.id')</th>
                                   <th>@lang('site.name')</th>
                                  <th>@lang('site.email')</th>
                                  <th>@lang('site.phone')</th>
                                  <th>@lang('site.massage')</th>
                                  <th>@lang('site.action')</th>
                                </tr>
                                @foreach ($contacts as $item)
                                   <tr>
                                        <td>{{ $item->id }}</td>
                                       <td> <a href="{{url('/admin/contactus/'. $item->id.'/show')}}">{{ $item->name }}</a></td>
                                        <td>{{ $item->email }} </td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->massage }}</td>
                                        <td>


                                                    <form action="/admin/contactus/{{ $item->id }}" method="post" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                                    </form>
                                                    </td>

                                      </tr>
                                @endforeach


                              </tbody></table>
                        @else
                            @lang('site.no_records')
                        @endif
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
