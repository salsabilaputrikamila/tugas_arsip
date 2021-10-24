<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('ArsipModel', 'amd');
    

  }

  public function index()
  {
    $search = $this->input->post('search');

    if ($search) {
      $data = array(
        'pageTitle' => 'Arsip',
        'dataSurat' => $this->amd->search($search),
        'searchVal' => $search
      );
    } else {
      $data = array(
        'pageTitle' => 'Arsip',
        'dataSurat' => $this->amd->get(),
        'searchVal' => ''
      );
    }

    $this->load->view('template/Arsip/header.php', $data);
    $this->load->view('arsip/index.php', $data);
    $this->load->view('template/Arsip/footer.php', $data);
  }

  public function create()
  {
    $data = array(
      'pageTitle' => 'Unggah Arsip Surat',
    );

    $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
    $this->form_validation->set_rules('judul', 'Judul', 'required');


    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/Arsip/header.php', $data);
      $this->load->view('arsip/create.php', $data);
      $this->load->view('template/Arsip/footer.php', $data);
    } else {
      $filename = $this->input->post('nomor_surat') . ' - ' . $this->input->post('kategori') . ' - ' . $this->input->post('judul');

      $upload = $this->amd->upload($filename);
      if ($upload['result'] == 'success') {
        $this->amd->store($upload);
        redirect('menu','refresh');
      } else {
        echo $upload['error'];
      }
    }
  }

  public function update($id)
  {
    $data = array(
      'pageTitle' => 'Ubah Arsip Surat',
      'dataSurat' => $this->amd->get($id),
    );

    $this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
    $this->form_validation->set_rules('judul', 'Judul', 'required');


    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/Arsip/header.php', $data);
      $this->load->view('arsip/edit.php', $data);
      $this->load->view('template/Arsip/footer.php', $data);
    } else {
      $filename = $this->input->post('nomor_surat') . ' - ' . $this->input->post('kategori') . ' - ' . $this->input->post('judul');

      $upload = $this->amd->upload($filename);
      if ($upload['result'] == 'success') {
        $this->amd->update($id, $upload);
        redirect('menu');
      } else {
        echo $upload['error'];
      }
    }
  }

    

  public function show($id)
  {
    $data = array(
      'pageTitle' => 'Lihat Arsip Surat',
      'dataSurat' => $this->amd->get($id),
    );

    $this->load->view('template/Arsip/header.php', $data);
    $this->load->view('arsip/show.php', $data);
    $this->load->view('template/Arsip/footer.php', $data);
  }

  public function delete($id)
  {
    $this->amd->deleteFile($id);
  }

  public function hapus($id){
    $this->load->library('session');
    $this->load->model('ArsipModel');
    $this->ArsipModel->hapusarsip($id);
    $this->session->set_flashdata('pesan2','Data berhasil di hapus');
    redirect('Menu/index','refresh');
  }

  public function download($id)
  {
    $file = $this->amd->get($id);

    force_download(FCPATH . 'assets/uploads/pdf/' . $file[0]->file, NULL);
  }


  public function about()
  {
    $data = array(
      'pageTitle' => 'About',
      'bio' => array(
        'nama' => 'Salsabila Putri Kamila',
        'nim' => '1831710184'
      )
    );

    $this->load->view('template/Arsip/header.php', $data);
    $this->load->view('about/index.php', $data);
    $this->load->view('template/Arsip/footer.php', $data);
  }
}

/* End of file Main.php */
