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
                Detail
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/ibadah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ibadah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/jemaat" class="nav-link">
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
                <a href="/keluarga" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Keluarga</p>
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
                <a href="/pernikahan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nikah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/rpp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RPP</p>
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
                <a href="/daftarBaptis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Baptis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftarIbadah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ibadah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftarJemaat" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jemaat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftarKegiatan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kegiatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftarMartumpol" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Martumpol</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftarPelayan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelayan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftarPernikahan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pernikahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftarRpp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RPP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/daftarSidi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sidi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i><img src="/icon/aproval.png" alt=""></i>
              <p>
                Approve
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i><img src="icon/money.png" alt=""></i>
              <p>
                Keuangan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{asset('AdminLTE-3.2.0')}}/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>