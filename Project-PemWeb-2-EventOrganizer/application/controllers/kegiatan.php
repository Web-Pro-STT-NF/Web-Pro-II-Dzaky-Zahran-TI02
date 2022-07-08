<?php
defined('BASEPATH') or exit('No direct script access allowe
d');
class kegiatan extends CI_Controller
{
    public function index()
    {
        $this->load->model('kegiatan_model', 'kegiatan');
        $list_kegiatan = $this->kegiatan->getAll();
        $data['list_kegiatan'] = $list_kegiatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/index', $data);
        $this->load->view('layout/footer');
    }

    public function view()
    {
        $_id = $this->input->get('id');
        $this->load->model('kegiatan_model', 'kegiatan');
        $data['kegiatan'] = $this->kegiatan->findByid($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/view', $data);
        $this->load->view('layout/footer');
    }

    public function create()
    {
        $data['judul'] = 'Form Kelola Data Kegiatan';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/create', $data);
        $this->load->view('layout/footer');
    }


    public function save()
    {
        $this->load->model("kegiatan_model", "kegiatan");

        $_id = $this->input->post('id');
        $_judul = $this->input->post('judul');
        $_kapasitas = $this->input->post('kapasitas');
        $_harga_tiket = $this->input->post('harga_tiket');
        $_tanggal = $this->input->post('tanggal');
        $_narasumber = $this->input->post('narasumber');
        $_tempat = $this->input->post('tempat');
        $_pic = $this->input->post('pic');
        $_foto_flyer = $this->input->post('foto_flyer');
        $_jenis_id = $this->input->post('jenis_id');
        $_idedit = $this->input->post('idedit'); //hideen field


        $data_kegiatan[] = $_id;  //? 1
        $data_kegiatan[] = $_judul;  //? 2
        $data_kegiatan[] = $_kapasitas;
        $data_kegiatan[] = $_harga_tiket;
        $data_kegiatan[] = $_tanggal;
        $data_kegiatan[] = $_narasumber;
        $data_kegiatan[] = $_tempat;
        $data_kegiatan[] = $_pic;
        $data_kegiatan[] = $_foto_flyer;
        $data_kegiatan[] = $_jenis_id;

        if (isset($_idedit)) {
            $data_kegiatan[] = $_idedit; // ? 8
            $this->kegiatan->update($data_kegiatan);
        } else {
            $this->kegiatan->save($data_kegiatan);
        }

        redirect(base_url() . 'index.php/kegiatan/view?id=' . $_id, 'refresh');
    }


    public function edit()
    {
        $_id = $this->input->get('id');
        $this->load->model("kegiatan_model", "kegiatan");
        $kegiatanedit = $this->kegiatan->findById($_id);

        $data['judul'] = 'Form Update Data Kegiatan';
        $data['kegiatanedit'] = $kegiatanedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kegiatan/update', $data);
        $this->load->view('layout/footer');
    }


    public function delete()
    {
        $_id = $this->input->get('id');
        $this->load->model("kegiatan_model", "kegiatan");
        $this->kegiatan->delete($_id);
        redirect(base_url() . 'index.php/kegiatan', 'refresh');
    }

    public function upload()
    {
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = '*';
        $config['max_size']         = 10024;
        $config['max_width']        = 6000;
        $config['max_height']       = 6000;

        $id = $this->input->post('id');
        $array = explode('.', $_FILES['foto_flyer']['name']);
        $extension = end($array);
        $new_name = $id . '.' . $extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_flyer')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else {
            $this->load->model('kegiatan_model','kegiatan');
            $array_data[] = $new_name; // ? ke 1
            $array_data[] = $id; // ? ke 2
            $this->kegiatan->upload_foto($array_data);
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('kegiatan/detail', $data);
        }
        redirect(base_url() . 'index.php/kegiatan/view?id=' . $id);
    }
}