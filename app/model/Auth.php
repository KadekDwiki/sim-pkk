<?php 

class Auth
{
   private $tbsiswa = "siswa",
         $tbguru = "guru", 
         $tbadmin = "admin", 
         $db;

   public function __construct()
   {
      $this->db = new Database;
   }

   public function login($post){
      
   }
}
