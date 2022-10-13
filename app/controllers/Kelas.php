<?php

class Kelas extends Controller{
   //  public function __construct()
   //  {
   //      if (!isset($_SESSION["login"])) {
   //          header("Location:" . BASE_URL . "/login");
   //          exit;
   //      }
   //  }
    public function index()
    {   
        $data['title'] = 'Dashboard | Siswa';
        $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }
    public function daftarkelas()
    {   
        $data['title'] = 'data anggota kelas';
        $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('siswa/data-anggota-kelas', $data);
        $this->view('templates/footer');
    }
}