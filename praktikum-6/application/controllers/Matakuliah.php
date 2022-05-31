<?php
class Matakuliah extends CI_Controller {
 public function index()
 {
     $data['title'] = 'Matakuliah';
     $this->load->model('matakuliah_model', 'matakuliah1');
     $this->matakuliah1->id = 1;
     $this->matakuliah1->kode = 'NF01';
     $this->matakuliah1->nama = 'Basis Data';
     $this->matakuliah1->sks = '3';
     $this->matakuliah1->dosen = "Tony Stark";
 
     $this->load->model('matakuliah_model', 'matakuliah2');
     $this->matakuliah2->id = 2;
     $this->matakuliah2->kode = 'NF02';
     $this->matakuliah2->nama = 'Bahasa Indonesia';
     $this->matakuliah2->sks = '2';
     $this->matakuliah2->dosen = "Pepper Potts";

     $this->load->model('matakuliah_model', 'matakuliah3');
     $this->matakuliah3->id = 3;
     $this->matakuliah3->kode = 'NF03';
     $this->matakuliah3->nama = 'Pemrograman Web';
     $this->matakuliah3->sks = '3';
     $this->matakuliah3->dosen = "Bruce Banner";
     
     $list_matakuliah = [$this->matakuliah1, $this->matakuliah2, $this->matakuliah3];
     $data['list_matakuliah'] = $list_matakuliah;
 $this->load->view('matakuliah/index',$data);
 
 }
}