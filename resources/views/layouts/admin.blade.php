<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin</title>
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <marquee class="input-group input-group-sm">
        Chào mừng Admin. Chúc bạn một ngày tốt lành !
      </marquee>
    </form>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="text-center mt-3">
            <a href="{{ route('website') }}" class="btn btn-primary text-white rounded w" target="_blank">
              <p class="mb-0">
                Đi đến Motost
              </p>
            </a>
          </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <img src="{{ asset('admin') }}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('user.profile') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->is('admin/dashboard')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Quản trị
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('category.index') }}" class="nav-link {{ (request()->is('admin/category*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Danh mục
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('tag.index') }}" class="nav-link {{ (request()->is('admin/tag*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Thẻ (Tags)
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('post.index') }}" class="nav-link {{ (request()->is('admin/post*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-pen-square"></i>
              <p>
                Tin tức
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('contact.index') }}" class="nav-link {{ (request()->is('admin/contact*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Tin nhắn
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('user.index') }}" class="nav-link {{ (request()->is('admin/user*')) ? 'active': '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Thành viên
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('setting.index') }}" class="nav-link {{ (request()->is('admin/setting')) ? 'active': '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Cài đặt
              </p>
            </a>
          </li>
          <li class="nav-header">Tài khoản của bạn</li>
          <li class="nav-item mt-auto">
            <a href="{{ route('user.profile') }}" class="nav-link {{ (request()->is('admin/profile')) ? 'active': '' }}">
              <i class="nav-icon far fa-user"></i>
              <p>
                Hồ sơ của tôi
              </p>
            </a>
          </li>
          <li class="nav-item mt-auto">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Đăng xuất
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
    </div>
    <!-- Default to the left -->
  </footer>
</div>
<!-- ./wrapper -->


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('admin') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin') }}/js/adminlte.min.js"></script>
<script src="{{ asset('admin') }}/js/bs-custom-file-input.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@yield('script')
<script>
  @if(Session::has('success'))
  toastr.success("{{ Session::get('success') }}");
  @endif
  $(document).ready(function () {
    bsCustomFileInput.init()
  })
</script>
</body>
</html>
