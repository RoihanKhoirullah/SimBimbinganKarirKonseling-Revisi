<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="#" class="brand-link">
      <img src="{{asset('Gambar/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
        <a href="#" class="d-block">Hai, </a>
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
        
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
        <ul class="nav nav-treeview">

<!-- ============================User Data Pengguna================================= -->
              
              @if (auth()->user()->level=="admin")
               <li class="nav-item">
                <a href="/admin/data-akun" class="nav-link">
                <i class="fas fa-key"></i>
                  <p>Data Akun</p>
                </a>
              </li>
              @endif

<!-- ============================Data Siswa========================================== -->
              
              <!-- @if (auth()->user()->level=="admin")
               <li class="nav-item">
                <a href="/admin/data-siswa" class="nav-link">
                <i class="far fa-user"></i>
                  <p>Data Laporan Siswa</p>
                </a>
              </li>
              @endif -->

              @if (auth()->user()->level=="guru")
               <li class="nav-item">
                <a href="/admin/input-siswa" class="nav-link">
                <i class="far fa-user"></i>
                  <p>Laporkan Siswa</p>
                </a>
              </li>
              @endif 

              @if (auth()->user()->level=="pembimbing-siswa")
               <li class="nav-item">
                <a href="/admin/data-siswa" class="nav-link">
                <i class="far fa-user"></i>
                  <p>Data Laporan Siswa</p>
                </a>
              </li>
              @endif              

<!-- ===================================Galeri================================== -->
              
               <!-- @if (auth()->user()->level=="admin")
               <li class="nav-item">
                <a href="/admin/galeri" class="nav-link">
                <i class="far fa-image"></i>
                  <p>Galeri</p>
                </a>
              </li>
              @endif -->
              
<!-- ===================================Siswa====================================== -->
              
          <!-- @if (auth()->user()->level=="admin")
              <li class="nav-item">
                <a href="/admin/siswa" class="nav-link">
                <i class="far fa-image"></i>
                  <p>Siswa</p>
                </a>
              </li>
              @endif
          </li> -->

<!-- ============================================================================== -->



      <!-- New Route -->



<!-- ============================================================================== -->

<!-- ===================================Logout===================================== -->

          </ul>
          <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" >
                <i class="fas fa-sign-out-alt"></i>
                <p>Logout</p>
                </a>
          </li>
  
<!-- ============================================================================== -->

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>