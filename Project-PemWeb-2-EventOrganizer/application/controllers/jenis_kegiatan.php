<?php
defined('BASEPATH') or exit('No direct script access allowed');
class jenis_kegiatan extends CI_Controller
{
    public function index()
    {
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $list_jenis_kegiatan = $this->jenis_kegiatan->getAll();
        $data['list_jenis_kegiatan'] = $list_jenis_kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('jenis_kegiatan_model', 'jenis_kegiatan');
        $data['jenis_kegiatan'] = $this->jenis_kegiatan->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Jenis Kegiatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("jenis_kegiatan_model", "jenis_kegiatan");

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_jenis_kegiatan[] = $_id;  //? 1
        $data_jenis_kegiatan[] = $_nama;  //? 2

        if (isset($_idedit)) {
            $data_jenis_kegiatan[] = $_idedit; // ? 8
            $this->jenis_kegiatan->update($data_jenis_kegiatan);
        } else {
            $this->jenis_kegiatan->save($data_jenis_kegiatan);
        }

        redirect(base_url() . 'index.php/jenis_kegiatan/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("jenis_kegiatan_model", "jenis_kegiatan");
        $jenis_kegiatanedit = $this->jenis_kegiatan->findById($_id);

        $data['judul'] = 'Form Update jenis_kegiatan';
        $data['jenis_kegiatanedit'] = $jenis_kegiatanedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_kegiatan/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("jenis_kegiatan_model", "jenis_kegiatan");
        $this->jenis_kegiatan->delete($_id);
        redirect(base_url() . 'index.php/jenis_kegiatan', 'refresh');
    }

}