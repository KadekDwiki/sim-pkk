<?php 
class Guru_model
{
   private $table = 'users';
   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }

   public function getAllGuru() {
      $this->db->query("SELECT * FROM {$this->table} WHERE level = 'guru'");
      return $this->db->resultAll();
   }
}
