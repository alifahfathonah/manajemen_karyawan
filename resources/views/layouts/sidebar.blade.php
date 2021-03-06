  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li><a href="{{ url('employee-management') }}"><i class="fa fa-users"></i> <span>Manajemen Karyawan</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cogs"></i> <span>Manajemen Sistem</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('system-management/department') }}">Departemen</a></li>
            <li><a href="{{ url('system-management/division') }}">Divisi</a></li>
            <li><a href="{{ url('system-management/country') }}">Negara</a></li>
            <li><a href="{{ url('system-management/state') }}">Provinsi</a></li>
            <li><a href="{{ url('system-management/city') }}">Kota/Kabupaten</a></li>
            <li><a href="{{ url('system-management/report') }}">Laporan</a></li>
          </ul>
        </li>
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-user"></i> <span>Manajemen Pengguna</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>