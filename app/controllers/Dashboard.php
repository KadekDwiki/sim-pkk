<?php 
class Dashboard extends Controller
{
   public function __construct()
   {
      if (!isset($_SESSION["login"])) {
            $this->redirect("/login");
      }
   }
   
   public function index()
   {   
      $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
      $data['title'] = "Dashboard | " . $data['user']['level'];
      $data['jumlahsiswa'] = $this->model('User_model')->countUser("siswa");
      $data['jumlahguru'] = $this->model('User_model')->countUser("guru");
      $data['jumlahkelas'] = $this->model('User_model')->countKelas();

      $this->view('templates/header', $data);
      $this->view('templates/sidebar', $data);
      $this->view('templates/navbar', $data);
      $this->view('admin/index', $data);
      $this->view('templates/footer');
   }
}
