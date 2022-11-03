            <!-- Begin Page Content -->
               <div class="container-fluid">

                  <!-- Page Heading -->
                  <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
                  <div class="input-data-siswa w-75">
                     <div class="input-group my-3">
                        <label class="" for="inputGroupSelect01">Pilih Kelas</label>
                        <select class="form-select" id="inputGroupSelect01" name="kelas"> 
                           <option value="XII RPL 1" selected>XII RPL 1</option>
                           <option value="XII RPL 2">XII RPL 2</option>
                           <option value="XII RPL 3">XII RPL 3</option>
                        </select>
                     </div>
                  </div>

                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                     <div class="card-header py-3 d-flex align-items-center justify-content-between">
                           <h6 class="m-0 font-weight-bold text-primary">Data Siswa  XII RPL 1</h6>
                     </div>
                     <div class="card-body">
                           <div class="table-responsive p-1">
                              <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                       <tr>
                                          <th>No.</th>
                                          <th>Nis</th>
                                          <th>Nama</th>
                                          <th>Email</th>
                                          <th>Jenis Kelamin</th>
                                          <th>Tanggal Lahir</th>
                                          <th>Nomor Telepon</th>
                                          <th>Alamat</th>
                                          <th width="80">Action</th>
                                       </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                    $i = 1;
                                    foreach($data["datakelas"] as $data){ ?>
                                       <tr>
                                          <td><?= $i++ ?></td>
                                          <td><?= $data["username"] ?></td>
                                          <td><?= $data["name"] ?></td>
                                          <td><?= $data["email"] ?></td>
                                          <td><?= $data["jenis_kelamin"] ?></td>
                                          <td><?= $data["tgl_lahir"] ?></td>
                                          <td><?= $data["no_telp"] ?></td>
                                          <td><?= $data["alamat"] ?></td>
                                          <td>
                                             <a href="<?= BASE_URL ?>/admin/editsiswa/<?= $data['id'] ?>"><i class="fas fa-edit fa-lg mr-2 text-warning"></i></a>
                                             <a href="<?= BASE_URL ?>/admin/deletesiswa/<?= $data['id'] ?>"><i class="fas fa-trash fa-lg text-danger"></i></a>
                                          </td>
                                       </tr>
                                    <?php  } ?>
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