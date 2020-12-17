@extends('dashboard.layouts.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>جامعات</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>لوحة التحكم</a></li>
                <li class="active">جامعات</li>
            </ol>
        </section>

        <section class="content">

            <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">جامعات</h3>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newCity" data-whatever="@getbootstrap"><i class="fa fa-newspaper-o"></i>اضافة</button>

                      <div class="modal fade" id="newCity" tabindex="-1" role="dialog" aria-labelledby="newCity" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header" style="background-color: #f39c12;
    border-color: #e08e0b;">
                                      <h4 class="modal-title" id="exampleModalLabel" style="font-weight: bold">اضافة جامعة:</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form action="{{url('/admin/universities/new')}}" method="POST" style="display: inline-block;">
                                          @csrf
                                          @method('POST')

                                          <div class="form-group">
                                              <label for="recipient-name" class="col-form-label">الاسم بالعربية</label>
                                              <input name="name_ar" type="text" class="form-control" id="recipient-name" style="width: 461px;
    border-radius: 5px;">
                                          </div>
                                          <div class="form-group">
                                              <label for="message-text" class="col-form-label">الاسم بالعبرية</label>
                                              <input type="text" name="name_he" class="form-control" id="recipient-name" style="border-radius: 5px;">
                                          </div>
                                          <button type="submit" class="btn btn-warning">حفظ</button>
                                      </form>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                  </div>
                              </div>
                          </div>
                      </div>

                      <h3 align="center">مجموع الجامعات:<span id="total_records"></span></h3>

                      <div class="box-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">

                        <input type="text" name="table_search" id="searchAjax" class="form-control pull-right" placeholder="بحث">

                        <div class="input-group-btn">
                          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body table-responsive no-padding" >

                        @if ($universities->count() > 0)
                        <table class="table table-hover">
                                <tbody>
                                    <tr>
                                  <th>الرقم</th>
                                  <th>الاسم بالعربية</th>
                                  <th>الاسم بالعبرية</th>
                                  <th>اسم المستخدم</th>
                                  <th>التحكم</th>
                                </tr>

                                    @foreach ($universities as $key =>$university)
                                   <tr style="font-weight: bold">
                                        <td>{{$key+1 }}</td>
                                        <td>{{ $university->name_ar }} </td>
                                        <td>{{ $university->name_he}} </td>
                                       <td>{{\Illuminate\Support\Facades\Auth::id()}}</td>
                                       <td>
                                           <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cityModal{{$university->id }}" data-whatever="@getbootstrap"><i class="fa fa-edit"></i>تعديل</button>

                                           <form action="{{url('/admin/universities/delete')}}" method="DELETE" style="display: inline-block;">
                                                        @csrf
                                                        @method('post')
                                               {{ csrf_field() }}
                                                        <input type="hidden" name="city_id" value="{{$university->id }}">
                                                        <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i>حذف</button>
                                                    </form>
                                                    </td>

                                      </tr>

                                   <div class="modal fade" id="cityModal{{$university->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog" role="document">
                                           <div class="modal-content">
                                               <div class="modal-header" style="background-color: #f39c12;
    border-color: #e08e0b;">
                                                   <h4 class="modal-title" id="exampleModalLabel" style="font-weight: bold">تعديل منطقة: {{$university->name_ar }}</h4>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                   </button>
                                               </div>
                                               <div class="modal-body">
                                                   <form action="{{url('/admin/universities/update')}}" method="POST" style="display: inline-block;">
                                                       @csrf
                                                       @method('POST')
                                                       <input type="hidden" name="id" value="{{$university->id }}">
                                                       <div class="form-group">
                                                           <label for="recipient-name" class="col-form-label">الاسم بالعربية</label>
                                                           <input name="name_ar" type="text" class="form-control" id="recipient-name"  value="{{$university->name_ar}}">
                                                       </div>
                                                       <div class="form-group">
                                                           <label for="message-text" class="col-form-label">الاسم بالعبرية</label>
                                                           <input type="text" name="name_he" class="form-control" id="recipient-name" value="{{$university->name_he}}" >
                                                       </div>
                                                       <button type="submit" class="btn btn-warning">حفظ</button>
                                                   </form>
                                               </div>
                                               <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                               </div>
                                           </div>
                                       </div>
                                   </div>

                                @endforeach


                              </tbody></table>
                          {!! $universities->links() !!}

                      @else
                          <div class="profile-content">
                              <div class="alert alert-warning">
                                  <p>لا توجد مناطق ومدن مضافة حاليا</p>
                              </div>
                          </div>
                        @endif
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

@section('footer')
    <script type="application/javascript">
        $(document).ready(function(){

            fetch_customer_data();

            function fetch_customer_data(query = '')
            {
                $.ajax({
                    url:"{{ route('universitiesSearch') }}",
                    method:'GET',
                    data:{query:query},
                    dataType:'json',
                    success:function(data)
                    {
                        $('tbody').html(data.table_data);
                        $('#total_records').text(data.total_data);
                    }
                })
            }

            $(document).on('keyup', '#searchAjax', function(){
                var query = $(this).val();
                fetch_customer_data(query);
            });
        });
    </script>
@endsection
