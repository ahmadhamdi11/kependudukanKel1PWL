<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Tes extends CI_Controller
{
	

	public function __construct() {
        parent::__construct();
        $this->load->model('M_data'); //memanggil model
    }

    public function index(){
      $data['penduduk'] = $this->M_data->tampil(); //memanggil function tampil di model m_data
     $this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('content', $data);		
		$this->load->view('footer');
    }

    
}

