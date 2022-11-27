<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Data guru</h1>
   <p class="mb-4">Ini daftar nama Guru SKENSA</p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive p-1">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>nomor</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Wali kelas</th>
                     <th>no telp</th>
                     <th>Tanggal lahir</th>
                     <th>Jenis kelamin</th>
                     <th>Alamat</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  $i=1;
                  foreach($data['dataguru']as $data){?>
                  <tr>
                     <td><?= $i++ ?></td>
                     <td><?= $data["name"] ?></td>
                     <td><?= $data["email"] ?></td>
                     <td><?= $data["wali_kelas"] ?></td>
                     <td><?= $data["no_telp"] ?></td>
                     <td><?= $data["tgl_lahir"] ?></td>
                     <td><?= $data["jenis_kelamin"] ?></td>
                     <td><?= $data["alamat"] ?></td>
                  </tr>
               <?php } ?>
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