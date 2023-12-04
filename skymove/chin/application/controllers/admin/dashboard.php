<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	public function index()
	{
        $this->load->view('admin/style');
		$this->load->view('admin/v_menu');
		$this->load->view('admin/navbar');
		$this->load->view('admin/v_dashboard');
		$this->load->view('admin/script');
	}
}
