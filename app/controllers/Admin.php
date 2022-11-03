<?php

class Admin extends Controller{
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
    public function datasiswa()
    {   
        $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
        $data['title'] = "Data Siswa | " . $data['user']['level'];
        $data['datakelas'] = $this->model('User_model')->getUserByClass("XII RPL 1");

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('admin/datasiswa', $data);
        $this->view('templates/footer');
    }

    public function tambahsiswa()
    {   
        $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
        $data['title'] = "Tambah Data Siswa | " . $data['user']['level'];

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('admin/tambahdatasiswa', $data);
        $this->view('templates/footer');
    }

    public function addsiswa(){
        if ($this->model("Siswa_Model")->storesiswa($_POST) == 1) {
            $this->redirect("/admin/datasiswa");
        } else {
            $this->redirect("/admin/tambahsiswa");
        }    
    }

    public function editsiswa($id)
    {   
        $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
        $data['title'] = "Edit Data Siswa | " . $data['user']['level'];
        $data['datasiswa'] = $this->model('User_model')->getUserById($id);

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('admin/editdatasiswa', $data);
        $this->view('templates/footer');
    }

    public function updatesiswa($id){
        if ($this->model("Siswa_Model")->updatesiswa($_POST) == 1) {
            $this->redirect("/admin/datasiswa");
        } else {
            $this->redirect("/admin/editsiswa/" . $id);
        }    
    }

    public function deletesiswa($id){
        if ($this->model("Siswa_Model")->deletesiswa($id) == 1) {
            $this->redirect("/admin/datasiswa");
        } else {
            $this->redirect("/admin/datasiswa");
        }
    }
}