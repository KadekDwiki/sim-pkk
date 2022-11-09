
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-start" href="index.html">
      <div class="sidebar-brand-icon">
         <img src="<?= BASE_URL ?>/assets/img/logo skensa.png" alt="" class="icon-image">
      </div>
      <div class="sidebar-brand-text mx-3">SKENSA</div>
   </a>

   <!-- Divider -->
   <hr class="sidebar-divider my-0" />

   <!-- Nav Item - Dashboard -->
   <li class="nav-item active">
      <a class="nav-link" href="<?= BASE_URL ?>/">
         <i class="fas fa-fw fa-tachometer-alt"></i>
         <span>Dashboard</span>
      </a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider" />

   <!-- Heading -->
   <div class="sidebar-heading">Data</div>
   <!-- Nav Item - Pages Collapse Menu -->

   <!-- cek hak akses user admin -->
   <?php if ($data["user"]["level"] == "admin") { ?>
      <li class="nav-item">
         <a class="nav-link" href="<?= BASE_URL ?>/admin/datasiswa">
            <i class="fas fa-fw fa-users"></i>
            <span>Siswa</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= BASE_URL ?>/admin/dataguru">
            <i class="fas fa-fw fa-users"></i>
            <span>Guru</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="<?= BASE_URL ?>/admin/datakelas">
            <i class="fas fa-fw fa-school"></i>
            <span>Kelas</span>
         </a>
      </li>
   <?php } ?>
   <!-- cek user siswa -->
   <?php if ($data["user"]["level"] == "siswa") { ?>
      <li class="nav-item">
         <a class="nav-link" href="<?= BASE_URL ?>/siswa/anggotakelas">
            <i class="fas fa-fw fa-users"></i>
            <span>Anggota Kelas</span>
         </a>
      </li>
   <?php } ?>
   <!-- cek user guru -->
   <?php if ($data["user"]["level"] == "guru") { ?>
      <li class="nav-item">
         <a class="nav-link" href="<?= BASE_URL ?>/guru/datasiswa">
            <i class="fas fa-fw fa-users"></i>
            <span>Siswa</span>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Guru</span>
         </a>
      </li>
   <?php } ?>
   
   <!-- Divider -->
   <hr class="sidebar-divider" />
   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>
</ul>
<!-- End of Sidebar -->