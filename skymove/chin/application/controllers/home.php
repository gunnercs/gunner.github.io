<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(1);
            ini_set('display_errors', 1);  
class home extends CI_Controller {
	public function index()
	{
		$this->load->view('style');
		$this->load->view('script');
		$this->load->view('v_home');
		
	}
	public function print_z()
	{
		$handle = printer_open('\\\\192.168.0.8\\Canon MF4320-4350'); 
		printer_set_option($handle, PRINTER_MODE, "RAW");
		printer_write($handle, "TEXT To print");
		printer_close($handle);
	}
}
