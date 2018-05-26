<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Tes extends CI_Controller
{
	    public function index(){
      
		$this->load->view('navbar');
		$this->load->view('sidebar');
		$this->load->view('content');		
		$this->load->view('footer');
    }

    
}

