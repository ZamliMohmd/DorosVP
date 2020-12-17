@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>اضافه تقارير</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.reports.index') }}"><i class="fa fa-dashboard"></i> @lang('site.news')</a></li>
                <li class="active">تعديل التقارير</li>
            </ol>
        </section>
        <section class="content">

            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">تعديل التقارير</h3>
                </div>
                <!-- /.box-header -->
                @include('dashboards.partials._errors')
                <form action="{{ route('dashboard.reports.update', $reports->id)}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">التقارير  باللغه العربيه</a></li>
                            <li><a href="#tab_2" data-toggle="tab">التقارير باللغه الانجليزيه</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputtext1">@lang('site.title')</label>
                                        <input type="text" class="form-control" name="titleAr" placeholder="@lang('site.title')"  value="{{ $reports->titleAr  }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputtext1">@lang('site.description')</label>
                                        <div class="form-group">
                                            <label for="exampleInputtext1">description</label>
                                            <textarea  class="form-control" name="descriptionAr" rows="8">{{ $reports->descriptionAr  }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label >اضف الصوره</label>
                                        <input type="file" name="featured">
                                        <img src="{{url($reports->featured)}}" width="200" height="100">

                                    </div>


                                    <div class="form-group">
                                        <label >اضف pdf</label>
                                        <input type="file" name="pdf">

                                    </div>



                                    <div class="form-group">
                                        <label for="exampleInputtext1"> تاريخ النشر  </label>

                                        <input type="date" id="start" name="created_at"
                                               class="form-control"
                                               value="{{ $reports->created_at->format('Y-m-d') }}"
                                               min="2000/01/01" max="{{ date('Y-m-d') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label > اختر التصنيف</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            <option selected disabled>اختر التصنيف</option>

                                        @foreach ($catReport as $item)


                                                <option value="{{ $item->id }}"
                                                        @if($item->id  == $reports->category_id)
                                                        selected
                                                        @endif

                                                >{{ $item->nameAr }}</option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>


                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane " id="tab_2">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputtext1">title</label>
                                        <input type="text" class="form-control" name="titleEn" placeholder="title"  value="{{ $reports->titleEn  }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputtext1">description</label>
                                        <textarea  class="form-control" name="descriptionEn" rows="8">{{ $reports->descriptionEn  }}</textarea>
                                    </div>

                                                <div class="form-group">


                                                   <div class="form-group">
                                                     <label >add pdf</label>
                                                     <input type="file" name="pdf_en">

                                              </div>
                                </div>

                            </div>
                            <!-- /.tab-pane -->

                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- form start -->


                    <!-- /.box-body -->
                    <hr>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">@lang('site.add')</button>
                    </div>

                </form>
            </div>
            <!-- /.box -->


        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

