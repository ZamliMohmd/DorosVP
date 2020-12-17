@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">@lang('site.users')</li>
            </ol>
        </section>

        <section class="content">

            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">@lang('site.users')</h3>

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
                  <div class="box-body table-responsive no-padding">
                        @if ($users->count() > 0)
                        <table class="table table-hover">
                                <tbody>
                                    <tr>
                                  <th>@lang('site.id')</th>
                                  <th>@lang('site.image')</th>
                                  <th>@lang('site.first_name')</th>
                                  <th>@lang('site.last_name')</th>
                                  <th>@lang('site.phone')</th>
                                  <th>@lang('site.email')</th>
                                  <th>@lang('site.action')</th>
                                </tr>
                                @foreach ($users as $item)
                                   <tr>
                                        <td>{{ $item->id }}</td>
                                        <td><img src="{{ url($item->image) }} " alt="" width="50"></td>
                                        <td>{{ $item->first_name }} </td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>

                                                <a href="{{ route('dashboard.users.edit', $item->id) }}" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i> @lang('site.edit')
                                                      </a>
                                                    <form action="{{ route('dashboard.users.destroy', $item->id) }}" method="post" style="display: inline-block;">
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
