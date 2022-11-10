<?php

class Kelas extends Controller{
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
        $data['data'] = $this->model('Kelas_model')->getAllKelas();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }
    public function daftarkelas()
    {   
        $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
        $data['title'] = "Dashboard | " . $data['user']['level'];
        $data['data'] = $this->model('Kelas_model')->getAllKelas();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }
}