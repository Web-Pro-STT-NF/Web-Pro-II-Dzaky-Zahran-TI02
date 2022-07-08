<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class daftar extends CI_Controller
{
    public function index()
    {
        $this->load->model('daftar_model', 'daftar');
        $list_daftar = $this->daftar->getAll();
        $data['list_daftar'] = $list_daftar;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('daftar_model', 'daftar');
        $data['daftar'] = $this->daftar->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Pendaftaran';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("daftar_model", "daftar");

        $_id = $this->input->post('id');
        $_tanggal_daftar = $this->input->post('tanggal_daftar');
        $_alasan = $this->input->post('alasan');
        $_users_id = $this->input->post('users_id');
        $_kegiatan_id = $this->input->post('kegiatan_id');
        $_kategori_peserta_id = $this->input->post('kategori_peserta_id');
        $_nosertifikat = $this->input->post('nosertifikat');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_daftar[] = $_id;  //? 1
        $data_daftar[] = $_tanggal_daftar;  //? 2
        $data_daftar[] = $_alasan;
        $data_daftar[] = $_users_id;
        $data_daftar[] = $_kegiatan_id;
        $data_daftar[] = $_kategori_peserta_id;
        $data_daftar[] = $_nosertifikat;

        if (isset($_idedit)) {
            $data_daftar[] = $_idedit; // ? 8
            $this->daftar->update($data_daftar);
        } else {
            $this->daftar->save($data_daftar);
        }

        redirect(base_url() . 'index.php/daftar/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("daftar_model", "daftar");
        $daftaredit = $this->daftar->findById($_id);

        $data['judul'] = 'Form Update Data Pendaftaran';
        $data['daftaredit'] = $daftaredit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('daftar/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("daftar_model", "daftar");
        $this->daftar->delete($_id);
        redirect(base_url() . 'index.php/daftar', 'refresh');
    }

}