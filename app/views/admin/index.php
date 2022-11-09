<!-- Begin Page Content -->
            <div class="container-fluid">
               <!-- Page Heading -->
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
               </div>

               <!-- Content Row -->
               <div class="row">
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">jumlah siswa</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data["jumlahsiswa"]["COUNT(level)"] ?></div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-users fa-2x text-gray-400"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">jumlah guru</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data["jumlahguru"]["COUNT(level)"] ?></div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-users fa-2x text-gray-300"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-info text-uppercase mb-1">jumlah kelas</div>
                                 <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                       <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $data["jumlahkelas"]["COUNT(kode_kelas)"] ?></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-school fa-2x text-gray-300"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Pending Requests Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                     <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">jumlah Kompetensi Keahlian</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">11</div>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Content Row -->

               <div class="row">
                  <!-- Area Chart -->
                  <div class="col-lg-7">
                     <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Tampilan sekolah</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                           <img src="<?= BASE_URL ?>/assets/img/labas.jpg" class="w-100" alt="">
                        </div>
                     </div>
                  </div>

                  <!-- Pie Chart -->
                  <div class="col-lg-5">
                     <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Kegiatan Pembelajaran</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                           <img src="<?= BASE_URL ?>/assets/img/skensa-belajar.jpg" class="w-100" alt="">
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Content Row -->
               <div class="row">
                  <!-- Content Column -->
                  <div class="col-lg-6 mb-4">
                     <!-- Illustrations -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Visi</h6>
                        </div>
                        <div class="card-body">
                           <!-- <div class="text-center">
                              <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem" src="img/undraw_posting_photo.svg" alt="..." />
                           </div> -->
                           <p>
                              Terwujudnya sekolah sebagai pusat pendidikan dan pelatihan kejuruan dengan layanan pendidikan berbasis keunggulan lokal yang menghasilkan sumber daya manusia yang berstandar internasional, berwawasan budaya dan berakkhlak mulia.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 mb-4">
                     <!-- Approach -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <h6 class="m-0 font-weight-bold text-primary">Misi</h6>
                        </div>
                        <div class="card-body">
                           <ol>
                              <li>Meningkatkan profesionalisme lembaga pendidikan sebagai pusat pendidikan dan pelatihan kejuruan di daerah bali</li>
                              <li>Melaksanakan sistempendidikan yang fleksibel dan efektif</li>
                              <li>Menyediakan layanan pendidikan dan pelatihan pada masyarakat berbasis keunggulan lokal dan bermutu</li>
                              <li>Menciptakan sekolah sebagai pusat budaya dan agent of change</li>
                              <li>Melaksanakan system manajemen yang berstandar internasional</li>
                              <li>Menyiapkan Lulusan yang mampu Bekerja, Melanjutkan, Wirausaha (BMW)</li>
                           <ol/>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- End of Main Content -->

         <!-- Footer -->
         <footer class="sticky-footer bg-white">
            <div class="container my-auto">
               <div class="copyright text-center my-auto">
                  <span>Copyright &copy; smkn1denpasar2022</span>
               </div>
            </div>
         </footer>
         <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
               </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
               <a class="btn btn-primary" href="<?= BASE_URL ?>/login">Logout</a>
            </div>
         </div>
      </div>
   </div>      