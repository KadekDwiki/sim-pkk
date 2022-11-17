<?php

class Kelas_model
{
    private $table = 'kelas';
    private $db;

   public function __construct()
   {
      $this->db = new Database;
   }

   public function getAllKelas() {
    $this->db->query("SELECT * FROM {$this->table}");
    return $this->db->resultAll();
   }

   public function storesiswa($post){
      $query = "INSERT INTO users (username, name, level, email, kelas, jenis_kelamin, tgl_lahir, no_telp, no_telportu, alamat, password) VALUES (:nis, :name, :level, :email, :kelas, :jenis_kelamin, :tgl_lahir, :no_telp, :no_telportu, :alamat, :password)";
      $this->db->query($query);
      
      $this->db->bind("nis", $post["nis"]);
      $this->db->bind("name", $post["name"]);
      $this->db->bind("level", $post["level"]);
      $this->db->bind("email", $post["email"]);
      $this->db->bind("kelas", $post["kelas"]);
      $this->db->bind("jenis_kelamin", $post["jenis_kelamin"]);
      $this->db->bind("tgl_lahir", $post["tgl_lahir"]);
      $this->db->bind("no_telp", $post["no_telp"]);
      $this->db->bind("no_telportu", $post["no_telportu"]);
      $this->db->bind("alamat", $post["alamat"]);
      $this->db->bind("password", $post["password"]);
      
      $this->db->execute();
      return $this->db->rowCount();
   }
   public function updatesiswa($post){
      $query = "UPDATE users SET username=:nis, name=:name, level=:level, email=:email, kelas=:kelas, jenis_kelamin=:jenis_kelamin, tgl_lahir=:tgl_lahir, no_telp=:no_telp, no_telportu=:no_telportu, alamat=:alamat, password=:password WHERE id=:id";
      $this->db->query($query);

      $this->db->bind("id", $post["id"]);
      $this->db->bind("nis", $post["nis"]);
      $this->db->bind("name", $post["name"]);
      $this->db->bind("level", $post["level"]);
      $this->db->bind("email", $post["email"]);
      $this->db->bind("kelas", $post["kelas"]);
      $this->db->bind("jenis_kelamin", $post["jenis_kelamin"]);
      $this->db->bind("tgl_lahir", $post["tgl_lahir"]);
      $this->db->bind("no_telp", $post["no_telp"]);
      $this->db->bind("no_telportu", $post["no_telportu"]);
      $this->db->bind("alamat", $post["alamat"]);
      $this->db->bind("password", $post["password"]);
      
      $this->db->execute();
      return $this->db->rowCount();
   }

   public function deletesiswa($id){
      $query = "DELETE FROM users WHERE id=:id";
      $this->db->query($query);

      $this->db->bind("id", $id);

      $this->db->execute();
      return $this->db->rowCount();
   }
}
