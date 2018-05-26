
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    //memanggil function dari MY_Controller
    $this->cekLogin();
    //validasi jika session dengan level karyawan mengakses halaman ini maka akan dialihkan ke halaman karyawan
    if ($this->session->userdata('level') == "operator") {
      redirect('operator/operator');
    }
}

  public function index()
  {
    
    $this->load->view('header');
    $this->load->view('navbar');
    $this->load->view('sidebar');
    $this->load->view('admin/Dashboard');
    $this->load->view('footer');

  }
}
