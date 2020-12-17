@extends('dashboards.layouts.app')

@section('content')

    <div class="content-wrapper" style="    height: 1200px;">

        <section class="content-header">

            <h1>@lang('site.edit')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.programs.index') }}"><i class="fa fa-dashboard"></i> البرامج</a></li>
                <li class="active">@lang('site.edit')</li>
            </ol>
        </section>
        <section class="content">
 <form action="{{ route('dashboard.programs.update', $program->id) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <!-- general form elements -->
                 <div class="col-md-8">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">البرامج</h3>
                  </div>
                  <!-- /.box-header -->
                  @include('dashboards.partials._errors')

                  <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab">البرامج باللغه العربيه</a></li>
                          <li><a href="#tab_2" data-toggle="tab">البرامج باللغه الانجليزيه</a></li>

                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1">
                                <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputtext1">@lang('site.title')</label>
                                                <input type="text" class="form-control" name="titleAr" placeholder="@lang('site.title')" value="{{ $program->titleAr }}">
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleInputtext1">@lang('site.description')</label>
                                                    <textarea  class="form-control" name="descriptionAr" rows="8">{!! $program->descriptionAr !!}</textarea>
                                            </div>
                                            <div class="form-group">
                                                    <label >اضف الصوره</label>
                                                    <input type="file" name="featured">
                                                    <img src="{{url($program->featured)}}" width="200" height="100">
                                                  </div>


                                    <div class="form-group">
                                        <label >اضف pdf</label>
                                        <input type="file" name="pdf">
                                        {{-- <button class="btn btn-success"><a href="{{url($program->pdf)}}">تحميل</a></button> --}}
                                    </div>







                                    </div>


                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane " id="tab_2">
                                <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputtext1">title</label>
                                                <input type="text" class="form-control" name="titleEn" placeholder="title"  value="{{ $program->titleEn }}">
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleInputtext1">description</label>
                                                    <textarea  class="form-control" name="descriptionEn" rows="8">{{ $program->descriptionEn }}</textarea>
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



                </div>
                </div>
                <!-- /.box -->
            <div class="col-md-4">
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <!--<h3 class="box-title">  اختر  التصنيف</h3>-->
                  </div>
                  <!-- /.box-header -->
                  <!-- box start -->
                   <div class="box-body">
                  <div class="form-group">
                                                        <label > اختر التصنيف</label>
                                                        <select name="parent_id" id="parent_id" class="form-control dynamic" data-dependent="subcat">
                                                             <option selected disabled>اختر البرنامج </option>
                                                            @foreach ($categoryProgram as $item)
                                                            <option value="{{ $item->id }}"
                                                            @if( $item->id ==$program->category_id)
                                                            selected
                                                                    @endif
                                                            >{{ $item->nameAr }}</option>
                                                            @endforeach

                                                        </select>

                        </div>

                        <div class="form-group">
                             <label > اختر المشروع</label>
    <select name="subcat" id="subcat" class="form-control  dynamic" >
    <option value="">Select project</option>
    </select>
   </div>
                        <div class="form-group">
                                        <label for="exampleInputtext1"> تاريخ النشر  </label>

                                        <input type="date" id="start" name="created_at"
                                               class="form-control"
                                               value="{{ $program->created_at->format('Y-m-d') }}"
                                               min="2000/01/01" max="{{ date('Y-m-d') }}" required>
                                    </div>

                                                         </div>  <!-- /.box -->
                                                         <hr>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">@lang('site.add')</button>
                    </div>
                </div>
                <!-- /.box -->
</div>
</form>
        </section><!-- end of content -->

    </div><!-- end of content wrapper -->
<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dashboard.dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#parent_id').change(function(){
  $('#subcat').val('');

 });



});
</script>

@endsection
