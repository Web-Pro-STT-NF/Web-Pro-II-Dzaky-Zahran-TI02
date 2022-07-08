<?php

class daftar_model extends CI_Model
{
    private $table = "daftar";

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
        $sql = "INSERT INTO daftar 
        (id,tanggal_daftar,alasan,users_id,kegiatan_id,kategori_peserta_id,nosertifikat)
        VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE daftar 
        SET id=?,tanggal_daftar=?,alasan=?,users_id=?,kegiatan_id=?,kategori_peserta_id=?,nosertifikat=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        $sql = "DELETE from daftar WHERE id=?";
        $this->db->query($sql,array($id));
    }
}