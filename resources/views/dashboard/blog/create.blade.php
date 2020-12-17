@extends('dashboard.layouts.app')
@section('content')
<div class="content-wrapper"  style="    height: 1200px;">
  <section class="content-header">
    <h1>اضافة مدونة</h1>
    <ol class="breadcrumb">
      <li><a href="{{-- route('dashboard.index') --}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
      <li><a href="{{-- route('dashboard.programs.index') --}}"><i class="fa fa-dashboard"></i>المدونة</a></li>
      <li class="active">اضافة</li>
    </ol>
  </section>
  <section class="content">
    <form action="{{url('/admin/blog/store')}}" method="POST"  enctype="multipart/form-data">
      @csrf
       @include('dashboard.partials._errors')
      <div class="col-md-8">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">المدونة</h3>
          </div>
          <!-- /.box-header -->


          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">اضافة مدونة  باللغه العربية</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputtext1">العنوان</label>
                    <input type="text" class="form-control " name="title_ar" placeholder="العنوان"   value="{{ old('titleAr') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtext1">التفاصيل</label>
                    <textarea  class="form-control  summernote"   name="content_ar" rows="8">{!! old('descriptionAr') !!}</textarea>
                  </div>
                  <div class="form-group">
                    <label >اضف الصوره</label>
                    <input type="file" name="image"  >
                  </div>

                    <button type="submit" class="btn btn-primary">اضافة</button>

                </div>
              </div>

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- form start -->
          <!-- /.box-body -->

        </div>
      </div>
      <!-- /.box -->






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
    url:"{{-- route('dashboard.dynamicdependent.fetch') --}}",
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


    $(document).ready(function() {
        $('.summernote').summernote();
    });

    </script>
    @endsection
