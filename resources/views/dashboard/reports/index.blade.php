@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>التقارير</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">التقارير</li>
            </ol>
        </section>

        <section class="content">

            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">التقارير</h3>

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
                        @if ($reports->count() > 0)
                        <table class="table table-hover">
                                <tbody>
                                    <tr>
                                  <th>@lang('site.id')</th>
                                  <th>images</th>
                                  <th>title</th>
                                        <th>التصنيف</th>

                                        <th>pdf</th>
                                  <th>year</th>
                                  <th>نشر </th>
                                  <th>@lang('site.action')</th>
                                </tr>
                                @foreach ($reports as $i=>$item)
                                   <tr>
                                        <td>{{ $i+1 }}</td>
                                        <td><img src="{{ url($item->featured) }}" width="50" height="50"></td>
                                        <td>{{ $item->titleAr }} </td>
                                       <td>{{ getCatReportsByCatID($item->category_id) }} </td>
                                       <td><a href="{{url($item->pdf) }}">تحميل</a></td>
                                        <td>{{ $item->created_at->format('Y') }}</td>
                                        @if ( $item->publishingAr == 1)
                                        <td><a href="/admin/reports/publishingAr/{{ $item->id }}" class="btn btn-danger btn-flat margin">

                                            الغاء النشر
                                        </a></td>
                                        @else
                                        <td><a href="/admin/reports/publishingAr/{{ $item->id }}" class="btn   bg-olive btn-flat margin">

                                        نشر

                                        </a></td>
                                         @endif

                                        <td>

                                                <a href="{{ route('dashboard.reports.edit', $item->id) }}" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i> @lang('site.edit')
                                                      </a>
                                                    <form action="{{ route('dashboard.reports.destroy', $item->id) }}" method="post" style="display: inline-block;">
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
            <div class="text-center">

                {{$reports->links()}}

            </div>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
