@extends('dashboard.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>المدونة</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
                <li class="active">المدونة</li>
            </ol>
        </section>

        <section class="content">

            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">المدونة</h3>

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
                        @if ($blogs->count() > 0)
                        <table class="table table-hover">
                                <tbody>
                                    <tr>
                                  <th>الرقم</th>
                                  <th>الصورة</th>
                                  <th>العنوان</th>
                                  <th>نشرت بواسطة</th>
                                  <th>تاريخ النشر</th>
                                  <th>  نشر</th>
                                  <th>التحكم</th>
                                </tr>

                                @foreach ($blogs as $key=>$blog)
                                   <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><img src="{{ url($blog->image) }}" width="50" height="50"></td>
                                        <td>{{ $blog->title_ar }} </td>
                                        <td></td>
                                        <td>{{$blog->created_at->format('Y-m-d')}}</td>
                                        @if ( $blog->is_published == 1)
                                        <td>  <a href="{{-- route('dashboard.programs.edit', $blog->id) --}}" class="btn btn-warning">
                                                <i class="fa fa-edit"></i>الغاء
                                            </a></td>
                                        @else
                                        <td><a href="/admin/programs/publishingAr/{{ $blog->id }}" class="btn btn-warning  bg-olive btn-flat margin">

                                        نشر

                                        </a></td>
                                         @endif

                                        <td>

                                                <a href="{{-- route('dashboard.programs.edit', $blog->id) --}}" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i>تعديل
                                                      </a>
                                                    <form action="{{-- route('dashboard.programs.destroy', $blog->id) --}}" method="post" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> حذف</button>
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

    {{$blogs->links()}}

</div>
</section><!-- end of content -->

</div><!-- end of content wrapper -->

@endsection



