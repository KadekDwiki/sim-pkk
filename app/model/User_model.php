<?php
class User_model
{
   private $table = "users";
   private $db;

   private $name = "kadek dwiki";

   public function getUser(){
      return $this->name;
   }

   public function __construct()
   {
      $this->db = new Database;
   }

   public function getAllUser(){
      $this->db->query("SELECT * FROM {$this->table}");
      return $this->db->resultAll();
   }

   public function getUserById($id){
      $this->db->query("SELECT * FROM {$this->table} WHERE id=:$id");
      $this->db->bind("id", $id);

      return $this->db->resultSingle();
   }
}