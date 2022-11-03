<?php
class User_model
{
   private $table = "users";
   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }

   public function getAllUser(){
      $this->db->query("SELECT * FROM {$this->table}");
      return $this->db->resultAll();
   }

   public function getUserById($id){
      $this->db->query("SELECT * FROM {$this->table} WHERE id=:id");
      $this->db->bind("id", $id);

      return $this->db->resultSingle();
   }

   public function getUserByClass($kelas){
      $this->db->query("SELECT * FROM {$this->table} WHERE kelas=:kelas");
      $this->db->bind("kelas", $kelas);

      return $this->db->resultAll();
   }

   public function countUser($level){
      $this->db->query("SELECT COUNT(level) FROM {$this->table} WHERE level = :level");
      $this->db->bind("level", $level);

      return $this->db->resultSingle();
   }

   public function countKelas(){
      $this->db->query("SELECT COUNT(kode_kelas) FROM kelas");
      return $this->db->resultSingle();
   }


}