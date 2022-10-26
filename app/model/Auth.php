<?php 

class Auth
{
   private $table = "users",
         $db;

   public function __construct()
   {
      $this->db = new Database;
   }

   public function login($post){
      $query = "SELECT * FROM $this->table WHERE username = :username"; 
      $this->db->query($query);
      $this->db->bind("username", $post["username"]);

      $result = $this->db->resultSingle();

      if ($post["password"] == $result["password"]) {
         if ($result["level"] == "siswa") {
         $_SESSION["level"] = "siswa";
         }
         if ($result["level"] == "guru") {
            $_SESSION["level"] = "guru";
         }
         if($result["level"] == "admin") {
            $_SESSION["level"] = "admin";
         }

         $_SESSION["login"] = "login";

         $_SESSION["user_id"] = $result["id"];

         return "berhasil";
      }else {
         return "gagal";
      }
   }
}
