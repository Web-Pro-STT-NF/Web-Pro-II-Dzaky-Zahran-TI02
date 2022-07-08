<?php

class kategori_peserta_model extends CI_Model
{
    private $table = "kategori_peserta";

    public function getAll()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function findByid($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO kategori_peserta
        (id,nama)
        VALUES (?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE kategori_peserta SET id=?,nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        $sql = "DELETE from kategori_peserta WHERE id=?";
        $this->db->query($sql,array($id));
    }
}