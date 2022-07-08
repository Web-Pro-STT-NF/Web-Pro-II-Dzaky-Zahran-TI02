<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class kategori_peserta extends CI_Controller
{
    public function index()
    {
        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $list_kategori_peserta = $this->kategori_peserta->getAll();
        $data['list_kategori_peserta'] = $list_kategori_peserta;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('kategori_peserta_model', 'kategori_peserta');
        $data['kategori_peserta'] = $this->kategori_peserta->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Jenis Kegiatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("kategori_peserta_model", "kategori_peserta");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_kategori_peserta[] = $_id;  //? 1
        $data_kategori_peserta[] = $_nama;  //? 2

        if (isset($_idedit)) {
            $data_kategori_peserta[] = $_idedit; // ? 8
            $this->kategori_peserta->update($data_kategori_peserta);
        } else {
            $this->kategori_peserta->save($data_kategori_peserta);
        }

        redirect(base_url() . 'index.php/kategori_peserta/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("kategori_peserta_model", "kategori_peserta");
        $kategori_pesertaedit = $this->kategori_peserta->findById($_id);

        $data['judul'] = 'Form Update kategori_peserta';
        $data['kategori_pesertaedit'] = $kategori_pesertaedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kategori_peserta/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("kategori_peserta_model", "kategori_peserta");
        $this->kategori_peserta->delete($_id);
        redirect(base_url() . 'index.php/kategori_peserta', 'refresh');
    }

}