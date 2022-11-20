<div class="container-fluid col-lg-12">
   <a href="<?= BASE_URL ?>/admin/datasiswa" class="mb-5">Back</a>
   <h1 class="h3 mb-2 text-gray-800 text-capitalize mt-3">tambah data Kelas </h1>
   <form class="my-4 d-flex" method="POST" action="<?= BASE_URL ?>/admin/addsiswa">
      <div class="col-lg-6">
         <input type="text" value="siswa" name="level" hidden>
         <div class="mb-3">
            <label for="input-name" class="form-label">No</label>
            <input type="text" name="name" class="form-control" id="input-name">
         </div>
         <div class="mb-3">
            <label for="input-email" class="form-label">Nomer Ruangan</label>
            <input type="text" name="email" class="form-control" id="input-email">
         </div>
         <div class="mb-3">
            <label for="input-wali_kelas" class="form-label">Nama Kelas</label>
            <input type="text" name="wali_kelas" class="form-control" id="input-wali_kelass">
         </div>
         <div class="mb-3">
            <label for="input-no_telp" class="form-label">Wali Kelas</label>
            <input type="tel" name="no_telp" class="form-control" id="input-no_telp">
         </div>
         <div class="mb-3">
            <label for="input-tgl_lahir" class="form-label">Jurusan</label>
            <input type="text" name="tgl_lahir" class="form-control" id="input-tgl_lahir">
            <div class="mb-3">
         </div>
         <button type="submit" name="password" class="btn btn-primary">Submit</button>
      </div>
   </form>
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