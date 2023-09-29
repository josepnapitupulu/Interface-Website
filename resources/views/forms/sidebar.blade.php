<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary" style="height: 130vh;">
    <!-- Brand Logo -->
    <a href="{{asset('AdminLTE-3.2.0')}}/index3.html" class="brand-link">
      <img src="/Style/img/logo_HKBP.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HKBP PALMARUM</span>
    </a>

    <!-- Sidebar -->
    <section class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3" style="height: auto;">
        <div class="image">
          <img src="/Style/img/logo_Admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin HKBP Palmarum</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline" style="height: auto;">
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
      <nav class="mt-2" style="height: auto;">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon"><img src="icon/search2.png" alt=""></i>
              <p>
                List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/jadwal" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ibadah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/baptis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Baptis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kegiatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/martumpol" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Martumpol</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pelayan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelayan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/nikah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nikah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sidi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sidi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i><img src="icon/tambah2.png" alt=""></i>
              <p>
                Pendaftaran
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('forms4.lihatDaftarJadwal')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Ibadah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forms.lihatDaftarJemaat')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat Baru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forms2.lihatDaftarBaptis')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat Baptis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forms5.lihatDaftarKegiatan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kegiatan Gereja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forms6.lihatDaftarMartumpol')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat Martumpol</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forms7.lihatDaftarPelayan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelayan Gereja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forms3.lihatDaftarNikah')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat Nikah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forms1.lihatDaftarSidi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat Sidi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <a class="nav-link" :href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        {{ __('Log Out') }}
                    </a>
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>