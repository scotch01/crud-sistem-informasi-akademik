<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SIA - Admin</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('mahasiswas') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Data Mahasiswa</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('dosens') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Data Dosen</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('matkul') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Matakuliah</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('nilai') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Data Nilai</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>