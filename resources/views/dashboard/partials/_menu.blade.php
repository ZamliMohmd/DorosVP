<ul class="sidebar-menu" data-widget="tree">
    <li  class=""><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i><span>الرئيسية</span></a></li>
<!--
    {{--
    <li class=" treeview {{--is_active('posts')--}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>اخبار بسمه</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{-- route('/') --}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
            <li><a href="{{-- route('/') --}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>
            <li><a href="{{-- route('/') --}}"><i class="fa fa-plus"></i><span>@lang('site.categories')</span></a></li>

        </ul>
      </li>
      <li class=" treeview {{--is_active('programs')---}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>برامج بسمه</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{-- route('/') --}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
            <li><a href="{{-- route('/') --}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>
            <li><a href="{{-- route('/') --}}"><i class="fa fa-plus"></i><span>@lang('site.categories')</span></a></li>

        </ul>
      </li>
    <li class=" treeview {{--is_active('projects')--}}">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>برامج و مشاريع بسمه</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{--url('/admin/projects/index')--}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
            <li><a href="{{-- route('dashboard.categoryprograms.index') --}}"><i class="fa fa-plus"></i><span>البرامج</span></a></li>
            <li><a href="{{-- url('admin/projects/create') --}}"><i class="fa fa-plus"></i><span>@lang('اضف مشروع')</span></a></li>

        </ul>
    </li>

    <li class=" treeview {{--is_active('programs')--}}">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>اعلانات</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{--url('/admin/advertisements/index')--}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
            <li><a href="{{--url('/admin/advertisements/create')--}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>
        </ul>
    </li>

      <li class=" treeview {{--is_active('inNewspapers')--}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span> بسمه في الصحف</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{-- route('dashboard.inNewspapers.index') --}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
            <li><a href="{{-- route('dashboard.inNewspapers.create') --}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>

        </ul>
      </li>
      <li class=" treeview {{--is_active('reports')--}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>  تقارير </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{-- route('dashboard.reports.index') --}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
            <li><a href="{{-- route('dashboard.reports.create') --}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>
            <li><a href="{{-- route('dashboard.categoryReports.index') --}}"><i class="fa fa-plus"></i><span>@lang('site.categories')</span></a></li>

        </ul>
      </li>
      <li class=" treeview {{--is_active('publications')--}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>  مطبوعات </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{-- route('dashboard.publications.index') --}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
            <li><a href="{{-- route('dashboard.publications.create') --}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>
            <li><a href="{{-- route('dashboard.categorypublications.index') --}}"><i class="fa fa-plus"></i><span>@lang('site.categories')</span></a></li>

        </ul>
      </li>
      <li class=" treeview {{--is_active('staff')--}}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>طاقم بسمة</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{--url('/admin/staff/all')--}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
            <li><a href="{{--url('/admin/staff/create')--}}"><i class="fa fa-th"></i><span>@lang('site.add')</span></a></li>
        </ul>
      </li>

          <li class=" treeview {{--is_active('beneficiaries')--}}">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>المستفيدون من الانشطه</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="">
                <li><a href="{{-- route('dashboard.beneficiaries.index') --}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
                <li><a href="{{-- route('dashboard.beneficiaries.create') --}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>

            </ul>
          </li>

    <li class=" treeview {{--is_active('albums')--}}">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>البوم الصور</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{-- url('/admin/albums/all') --}}"><i class="fa fa-th"></i><span>عرض</span></a></li>
            <li><a href="{{-- url('/admin/albums/create') --}}"><i class="fa fa-th"></i><span>  أصافه</span></a></li>

        </ul>
    </li>


          <li class=" treeview {{--is_active('albumvideos')--}}">
                <a href="#">
                  <i class="fa fa-dashboard"></i> <span> البوم الفيديو </span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu" style="">
                    <li><a href="{{-- route('dashboard.albumvideos.index') --}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
                    <li><a href="{{-- route('dashboard.albumvideos.create') --}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>

                </ul>
              </li>

          <li  class=""><a href="/admin/contactus"><i class="fa fa-dashboard"></i><span>@lang('site.contactus')</span></a></li>
          <li  class=""><a href="/admin/aboutbasma/1/edit"><i class="fa fa-dashboard"></i><span>تعرف علينا</span></a></li>


        <li class=" treeview {{--is_active('users')--}}">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>@lang('site.users')</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="">
                <li><a href="{{-- route('dashboard.users.index') --}}"><i class="fa fa-th"></i><span>@lang('site.read')</span></a></li>
                <li><a href="{{-- route('dashboard.users.create') --}}"><i class="fa fa-plus"></i><span>@lang('site.add')</span></a></li>

            </ul>
          </li>
          <li  class=""><a href="{{-- route('dashboard.partners.index') --}}"><i class="fa fa-dashboard"></i><span>شركاؤنا</span></a></li>
    --}}-->

    <li class=" treeview {{--is_active('users')--}}">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>الاعدادت</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{url('/admin/setting/new')}}"><i class="fa fa-th"></i><span>اضافة</span></a></li>
            <li  class=""><a href="{{url('/admin/setting/index')}}"><i class="fa fa-dashboard"></i><span>الاعدادات</span></a></li>

        </ul>
    </li>

    <li class=" treeview {{--is_active('users')--}}">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>المدونة</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu" style="">
            <li><a href="{{url('/admin/blog/new')}}"><i class="fa fa-th"></i><span>اضافة</span></a></li>
            <li  class=""><a href="{{url('/admin/blog/index')}}"><i class="fa fa-dashboard"></i><span>المدونة</span></a></li>

        </ul>
    </li>








    {{--<li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-book"></i><span>@lang('site.categories')</span></a></li>--}}
    {{----}}
    {{----}}
    {{--<li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-users"></i><span>@lang('site.users')</span></a></li>--}}

    {{--<li class="treeview">--}}
    {{--<a href="#">--}}
    {{--<i class="fa fa-pie-chart"></i>--}}
    {{--<span>الخرائط</span>--}}
    {{--<span class="pull-right-container">--}}
    {{--<i class="fa fa-angle-left pull-right"></i>--}}
    {{--</span>--}}
    {{--</a>--}}
    {{--<ul class="treeview-menu">--}}
    {{--<li>--}}
    {{--<a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a>--}}
    {{--</li>--}}
    {{--<li>--}}
    {{--<a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</li>--}}
</ul>
