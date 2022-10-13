<div class="row container-login position-relative overflow-hidden">
   <img src="<?= BASE_URL ?>/assets/img/Curve Line.svg" class="curve-line position-absolute rotate-15" alt="" />
   <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
   <div class="col-lg-6 d-flex justify-content-center">
      <div class="p-5 col-lg-10">
         <div class="text-center">
            <img src="<?= BASE_URL ?>/assets/img/logo skensa.png" alt="" class="w-25 mb-3" />
            <h1 class="text-gray-900 mb-2">Selamat Datang!</h1>
            <p class="mb-4">Sistem Informasi Sekolah SMK Negeri 1 Denpasar</p>
         </div>
         <form class="user">
            <div class="form-group">
               <input type="text" class="form-control form-control-user" id="inputUsername" placeholder="Enter Username..." />
            </div>
            <div class="form-group">
               <input type="password" class="form-control form-control-user" id="inputPassword" placeholder="Password" />
            </div>
            <a href="<?= BASE_URL ?>/admin/" class="btn btn-primary btn-user btn-block"> Login </a>
         </form>
         <hr />
         <!-- <div class="text-center">
            <a class="small" href="forgot-password.html">Forgot Password?</a>
         </div> -->
      </div>
   </div>
</div>
