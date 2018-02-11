<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('dashboard');
	}

	public function desa()
	{
		$this->load->view('desa');
	}

	public function warga()
	{
		$this->load->view('warga');
	}	

	public function administrator()
	{
		$this->load->view('administrator');
	}
}