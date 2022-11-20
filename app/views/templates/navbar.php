<!-- Content Wrapper -->
   <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
               <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav d-flex justify-content-between align-items-center w-100">
               <li class="nav-item">
                  <h3 class="text-primary text-center">SISTEM INFORMASI SEKOLAH</h2>
               </li>
               <!-- Nav Item - User Information -->
               
               <li class="nav-item dropdown no-arrow border-start border-left pl-3">
                  <a class="nav-link dropdown-toggle text-end" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="mr-3 d-none d-lg-inline text-gray-600 small"><?= $data["user"]["name"] ?></span>
                     <img class="img-profile rounded-circle" src="<?= BASE_URL ?>/assets/img/undraw_profile.svg" />
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                     <!-- <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                     </a>
                     <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                     </a> -->
                     <!-- <div class="dropdown-divider"></div> -->
                     <!-- <a class="dropdown-item" href="<?= BASE_URL ?>/login" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                     </a> -->
                     <a class="dropdown-item" href="<?= BASE_URL ?>/logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                     </a>
                  </div>
               </li>
            </ul>
         </nav>
         <!-- End of Topbar -->