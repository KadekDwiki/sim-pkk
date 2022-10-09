<?php

class Admin extends Controller{
   //  public function __construct()
   //  {
   //      if (!isset($_SESSION["login"])) {
   //          header("Location:" . BASE_URL . "/login");
   //          exit;
   //      }
   //  }
    public function index()
    {   
        $data['title'] = 'Dashboard | Admin';
        $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer');
    }
    public function datasiswa()
    {   
        $data['title'] = 'Data Siswa | Admin';
        $data['name'] = $this->model('User_model')->getUser();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('admin/datasiswa', $data);
        $this->view('templates/footer');
    }
}