<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Cari extends CI_Controller
{
	

	public function __construct() {
        parent::__construct();
        $this->load->model('M_cari'); //memanggil model
  }

  public function index(){
     $data['search'] = $this->M_cari->data(); //menampilkan seluruh data karyawan
     
     $this->load->view('header');
     $this->load->view('navbar');
     $this->load->view('sidebar');
     $this->load->view('v_cari', $data);
     $this->load->view('footer');
   }


  public function cari(){
  $keyword = $this->input->get('cari', TRUE); //mengambil nilai dari form input cari
  $data['search'] = $this->M_cari->cari($keyword); //mencari data karyawan berdasarkan inputan
  $this->load->view('header');
     $this->load->view('navbar');
     $this->load->view('sidebar');
     $this->load->view('v_cari', $data);
     $this->load->view('footer');
  }

}