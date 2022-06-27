<?php
class Mahasiswa extends CI_Controller {
 public function index()
 {
     $data['title'] = 'Mahasiswa';
     $this->load->model('mahasiswa_model', 'mhs1');
     $this->mhs1->id = 1;
     $this->mhs1->nim = '01102201';
     $this->mhs1->nama = 'Gilang Andira';
     $this->mhs1->gender = 'L';
     $this->mhs1->ipk = 3.85;
 
     $this->load->model('mahasiswa_model', 'mhs2');
     $this->mhs2->id = 2;
     $this->mhs2->nim = '01102202';
     $this->mhs2->nama = 'Muhammad Rafi';
     $this->mhs2->gender = 'L';
     $this->mhs2->ipk = 3.35;

     $this->load->model('mahasiswa_model', 'mhs3');
     $this->mhs3->id = 3;
     $this->mhs3->nim = '011022103';
     $this->mhs3->nama = 'Dzaky Zahran';
     $this->mhs3->gender = 'L';
     $this->mhs3->ipk = 3.99;
     
     $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
     $data['list_mhs'] = $list_mhs;
 $this->load->view('mahasiswa/index',$data);
 }
}