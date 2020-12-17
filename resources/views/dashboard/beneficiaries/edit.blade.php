

@extends('dashboards.layouts.app')


@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.create')</h1>

           <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.beneficiaries.index') }}"><i class="fa fa-dashboard"></i>المستفيدون</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>
        <section class="content">

                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                       <h3 class="box-title">المستفيدون</h3>
                  </div>
                  <!-- /.box-header -->
                  @include('dashboards.partials._errors')
                    <form action="/admin/beneficiaries/{{ $beneficiarie->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab"> باللغه العربيه</a></li>
                          <li><a href="#tab_2" data-toggle="tab"> باللغه الانجليزيه</a></li>

                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1">

  <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputtext1">@lang('site.title')</label>
                                <input type="text" class="form-control" name="titleAr" placeholder="@lang('site.title')"  value="{{ $beneficiarie->titleAr }}">
                        </div>

                              <div class="form-group">
                                                <label for="exampleInputtext1">الوصف</label>
                                                    <textarea id="editor1" class="form-control" name="descriptionAr" rows="8">{!! $beneficiarie->descriptionAr !!}</textarea>
                                            </div>
                        <div class="form-group">
                                <label for="exampleInputFile">الصوره</label>
                                <input type="file" id="exampleInputFile"  class="form-control" name="featured">
                                  <img src="{{url($beneficiarie->featured)}}"  width="200" height="100">

                              </div>
                        <div class="form-group">
                                            <label for="exampleInputtext2">ارفع ملف pdf</label>
                                            <input type="file" class="form-control" name="pdf" >
                        </div>
                        <div class="form-group">
                                <label for="exampleInputtext1"> اختر السنه   </label>

                                <input type="date" id="start" name="created_at"
                                       class="form-control"
                                       value="{{ $beneficiarie->created_at->format('Y-m-d') }}"
                                       min="2000/01/01" max="{{ date('Y-m-d') }}" required>
                            </div>






                    </div>
                    <!-- /.box-body -->



                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane " id="tab_2">
                                <div class="box-body">
                                       <div class="form-group">
                                <label for="exampleInputtext1">العنوان باللغه الانجليزيه</label>
                                    <input type="text" class="form-control" name="titleEn" placeholder="@lang('site.title')"  value="{{ $beneficiarie->titleEn }}">
                            </div>
                                        <div class="form-group">
                                                <label for="exampleInputtext1">description</label>
                                                    <textarea  class="form-control" name="description_en" rows="8">{!! $beneficiarie->description_en !!}</textarea>
                                            </div>
                                              <div class="form-group">
                                            <label for="exampleInputtext2">ارفع ملف pdf En</label>
                                            <input type="file" class="form-control" name="pdfEn" >
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

