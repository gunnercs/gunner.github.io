<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// parse_str($_SERVER['QUERY_STRING'], $_GET); 
class page extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('admin/template/v_header.php');
		$this->load->view('admin/template/v_menu.php');
		$this->load->view('admin/v_page');
		$this->load->view('admin/template/v_footer.php');

	}
    public function facebook($param)
	{
		$this->load->helper('url');
		$this->load->view('admin/template/v_header.php');
		$this->load->view('admin/template/v_menu.php');
		$this->load->view('admin/v_facebook');
		$this->load->view('admin/template/v_footer.php');

	}
    public function line($param)
	{
		$this->load->helper('url');
		$this->load->view('admin/template/v_header.php');
		$this->load->view('admin/template/v_menu.php');
		$this->load->view('admin/v_line');
		$this->load->view('admin/template/v_footer.php');

	}
    public function shopee($param)
	{
		$this->load->helper('url');
		$this->load->view('admin/template/v_header.php');
		$this->load->view('admin/template/v_menu.php');
		$this->load->view('admin/v_shopee');
		$this->load->view('admin/template/v_footer.php');

	}
    public function lazada($param)
	{
		$this->load->helper('url');
		$this->load->view('admin/template/v_header.php');
		$this->load->view('admin/template/v_menu.php');
		$this->load->view('admin/v_lazada');
		$this->load->view('admin/template/v_footer.php');

	}
	public function product()
	{
		$this->load->helper('url');
		$this->load->view('admin/template/v_header.php');
		$this->load->view('admin/template/v_menu.php');
		$this->load->view('admin/v_product');
		$this->load->view('admin/template/v_footer.php');

	}
	public function report()
	{
		$this->load->helper('url');
		$this->load->view('admin/template/v_header.php');
		$this->load->view('admin/template/v_menu.php');
		$this->load->view('admin/v_report');
		$this->load->view('admin/template/v_footer.php');

	}
}
