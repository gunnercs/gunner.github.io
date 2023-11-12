<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
        // echo 2;exit();
		$this->load->helper('url');
		$this->load->view('admin/template/v_header.php');
		$this->load->view('admin/template/v_menu.php');
		$this->load->view('admin/v_admin');
		$this->load->view('admin/template/v_footer.php');

	}
}
