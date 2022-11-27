<?php

class Guru extends Controller{
    public function __construct()
    {
        if (!isset($_SESSION["login"]) || $_SESSION["level"] !== "guru"){
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
    public function datasiswa()
    {   
        $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
        $data['title'] = "Dashboard | " . $data['user']['level'];
        $data['datakelas'] = $this->model('User_model')->getUserByClass("XII RPL 1");

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('guru/datasiswa', $data);
        $this->view('templates/footer');
    }
    public function dataguru()
    {   
        $data['user'] = $this->model('User_model')->getUserById($_SESSION["user_id"]);
        $data['title'] = "Dashboard | " . $data['user']['level'];
        $data['dataguru'] = $this->model('Guru_model')->getAllGuru();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('templates/navbar', $data);
        $this->view('guru/dataguru', $data);
        $this->view('templates/footer');
    }
}