<?php

class Guru extends Controller{
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

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
    public function anggotakelas()
    {   
        $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
        $data['title'] = "Dashboard | " . $data['user']['level'];

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('siswa/data-anggota-kelas', $data);
        $this->view('templates/footer');
    }
}