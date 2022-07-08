<?php

class kegiatan_model extends CI_Model
{
    private $table = "kegiatan";

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
        $sql = "INSERT INTO kegiatan 
        (id,judul,kapasitas,harga_tiket,tanggal,narasumber,tempat, pic, foto_flyer, jenis_id)
        VALUES (?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE kegiatan 
        SET id=?,judul=?,kapasitas=?,harga_tiket=?,tanggal=?,narasumber=?,tempat=?,pic=?,foto_flyer=?,jenis_id=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($id){
        $sql = "DELETE from kegiatan WHERE id=?";
        $this->db->query($sql,array($id));
    }

    public function upload_foto($array)
    {
        $sql = "UPDATE kegiatan SET foto_flyer=? WHERE id=?";
        $this->db->query($sql, $array);
    }
}