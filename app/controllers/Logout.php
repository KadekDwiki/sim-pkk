<?php 
class Logout extends Controller
{
   public function __construct()
   {
      session_destroy();
      $this->redirect("/login");
   }
}
