<?php

class Login extends Controller
{
   public function index(){
      $data["title"]  = "Login";

      $this->view('templates/header', $data);
      $this->view('login/index', $data);
      $this->view('templates/footer', $data);
   }

   public function checkLogin(){
      if ($this->model("Auth")->login($_POST) == "berhasil") {
         return $this->redirect("/");
      }else {
         return $this->redirect("/login");
      }
   }
}
