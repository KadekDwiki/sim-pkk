            <!-- Begin Page Content -->
               <div class="container-fluid">

                  <!-- Page Heading -->
                  <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
                  <div class="input-data-siswa w-75">
                     <div class="input-group my-3">
                        <label class="" for="inputGroupSelect01">Pilih Kompetensi Keahlian</label>
                        <select class="form-select" id="inputGroupSelect01">
                           <option value="1">RPL</option>
                           <option value="2">MM</option>
                           <option value="3" selected>TKJ</option>
                        </select>
                     </div>
                     <div class="input-group my-3">
                        <label class="" for="inputGroupSelect01">Pilih Kelas</label>
                        <select class="form-select" id="inputGroupSelect01">
                           <option value="1">X</option>
                           <option value="2">XI</option>
                           <option value="3" selected>XII</option>
                        </select>
                     </div>
                  </div>
                  <p class="mb-4">Tambah, edit, dan hapus data peserta didik sesuka hatimu karena kamu admin :)</p>

                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                     <div class="card-header py-3 d-flex align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Data Siswa  XII TKJ 1</h6>
                           <a href="<?= BASE_URL ?>/admin/tambahsiswa" class=" btn btn-primary"><i class="fas fa-plus text-white"></i> Tambah Data</a>
                     </div>
                     <div class="card-body">
                           <div class="table-responsive p-1">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                       <tr>
                                          <th>No.</th>
                                          <th>Nis</th>
                                          <th>Nama</th>
                                          <th>Tanggal Lahir</th>
                                          <th>Nomor Telepon</th>
                                          <th>Alamat</th>
                                          <th width="80">Action</th>
                                       </tr>
                                 </thead>
                                 <!-- <tfoot>
                                       <tr>
                                          <th>No.</th>
                                          <th>Nis</th>
                                          <th>Nama</th>
                                          <th>Tanggal Lahir</th>
                                          <th>Nomor Telepon</th>
                                          <th>Alamat</th>
                                          <th>Action</th>
                                       </tr>
                                 </tfoot> -->
                                 <tbody>
                                       <tr>
                                          <td>1</td>
                                          <td>28840</td>
                                          <td>I Kadek Dwiki Nusanjaya</td>
                                          <td>2011/04/25</td>
                                          <td>+6288219334678</td>
                                          <td>Jl. Gamias</td>
                                          <td>
                                             <a href=""><i class="fas fa-edit fa-lg mr-2 text-warning"></i></a>
                                             <a href=""><i class="fas fa-trash fa-lg text-danger"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>2</td>
                                          <td>28841</td>
                                          <td>I Kadek Dwiki</td>
                                          <td>2011/04/26</td>
                                          <td>+6288219334679</td>
                                          <td>Jl. Gamias sibanggede abiansemal</td>
                                          <td>
                                             <a href=""><i class="fas fa-edit fa-lg mr-2 text-warning"></i></a>
                                             <a href=""><i class="fas fa-trash fa-lg text-danger"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>3</td>
                                          <td>28842</td>
                                          <td>I Nusanjaya</td>
                                          <td>2011/04/27</td>
                                          <td>+6288219334670</td>
                                          <td>Jl. Gamias</td>
                                          <td>
                                             <a href=""><i class="fas fa-edit fa-lg mr-2 text-warning"></i></a>
                                             <a href=""><i class="fas fa-trash fa-lg text-danger"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>4</td>
                                          <td>28843</td>
                                          <td>I Nusanjaya putra</td>
                                          <td>2011/04/28</td>
                                          <td>+6288219334671</td>
                                          <td>Jl. Gamias kesiman denpasar timur</td>
                                          <td>
                                             <a href=""><i class="fas fa-edit fa-lg mr-2 text-warning"></i></a>
                                             <a href=""><i class="fas fa-trash fa-lg text-danger"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>5</td>
                                          <td>28844</td>
                                          <td>I Putu Eka</td>
                                          <td>2011/04/30</td>
                                          <td>+6288219334672</td>
                                          <td>Jl. Yudistira Cabe Darmasaba</td>
                                          <td>
                                             <a href=""><i class="fas fa-edit fa-lg mr-2 text-warning"></i></a>
                                             <a href=""><i class="fas fa-trash fa-lg text-danger"></i></a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>6</td>
                                          <td>28845</td>
                                          <td>Ni Dwi Kedua</td>
                                          <td>2011/04/27</td>
                                          <td>+6288219334670</td>
                                          <td>Jl. Penuh dengan kenangan</td>
                                          <td>
                                             <a href=""><i class="fas fa-edit fa-lg mr-2 text-warning"></i></a>
                                             <a href=""><i class="fas fa-trash fa-lg text-danger"></i></a>
                                          </td>
                                       </tr>
                                 </tbody>
                              </table>
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
               <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
         </div>
      </div>
   </div>