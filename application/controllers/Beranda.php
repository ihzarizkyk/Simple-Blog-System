<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Beranda_M');
	}

	public function index()
	{
		$data['blog_tb'] = $this->Beranda_M->all();
		$this->load->view('beranda',$data);
	}

	public function artikel($id=null)
	{
		$where = array('id' => $id);
		$data['blog_tb'] = $this->Beranda_M->get_article($where,'blog_tb')->result();
		$this->load->view("view_artikel",$data);
	}
}