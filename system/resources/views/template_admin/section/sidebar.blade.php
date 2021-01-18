 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Amira Souvenir</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/photo3.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(Auth::check())
             {{request()->user()->nama}}
             @elseif(Auth::guard('pembeli')->check())
              {{Auth::guard('pembeli')->user()->nama}}
              <br>Pembeli
             @elseif(Auth::guard('penjual')->check())
              {{Auth::guard('penjual')->user()->nama}}
             <br>Penjual
             @else
             Silahkan Login    
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Beranda
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('product')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Produk
                <span class="badge badge-info right"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>