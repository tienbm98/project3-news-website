<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('images/'.auth()->user()->photo) }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ auth()->user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="{{ url('/dashboard') }}">
          <i class="fa fa-dashboard"></i> 
          <span>Trang chủ</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.category.index') }}">
          <i class="fa fa-th"></i> 
          <span>Danh mục</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.news.index') }}">
          <i class="fa fa-th"></i> 
          <span>Tin tức</span>
        </a>
      </li>
      <li>
        <a href="{{ route('admin.users.index') }}">
          <i class="fa fa-users"></i> 
          <span>Thành viên</span>
        </a>
      </li>
    </ul>
    
  </section>

</aside>