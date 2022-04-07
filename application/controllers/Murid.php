<?php

class Murid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('tbsiswaModel');
    }

    public function index()
    {
        $data['tbsiswa'] = $this->tbsiswaModel->viewMurid();
        $this->load->view('Murid', $data);
    }
    public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('nis', 'NIS', 'required');
        $validation->set_rules('namasiswa', 'Nama', 'required');
        $validation->set_rules('alamatsiswa', 'Alamat', 'required');
        $validation->set_rules('namabapak', 'Nama Bapak', 'required');
        $validation->set_rules('namaibu', 'Nama Ibu', 'required');

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('tambah');
        } else {
          $this->tbsiswaModel->tambahMurid();
          redirect('murid');
        }
    
    }
    public function hapus($id)
    {
        $this->tbsiswaModel->hapus($id);
        redirect('murid');
    }
    public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['tbsiswa'] = $this->tbsiswaModel->getById($id);

        $validation->set_rules('nis', 'NIS', 'required');
        $validation->set_rules('namasiswa', 'Nama', 'required');
        $validation->set_rules('alamatsiswa', 'Alamat', 'required');
        $validation->set_rules('namabapak', 'Nama Bapak', 'required');
        $validation->set_rules('namaibu', 'Nama Ibu', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('ubah', $data);
        } else {
            $this->tbsiswaModel->ubahMurid();
            redirect('murid');
        }
    }
 
}