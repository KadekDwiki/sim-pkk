<?php

class Siswa extends Controller{
    public function __construct()
    {
        if (!isset($_SESSION["login"]) || $_SESSION["level"] !== "siswa") {
            $this->redirect("/login");
        }
    }
    public function anggotakelas()
    {  
        $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
        $data['datakelas'] = $this->model('User_model')->getUserByClass($data["user"]["kelas"]);
        $data['title'] = "Anggota Kelas | " . $data["user"]["kelas"];

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('siswa/data-anggota-kelas', $data);
        $this->view('templates/footer');
    }

}