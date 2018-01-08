<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yazi extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
    $this->load->library("session");
    $this->load->helper('benim_helper');
    $this->load->library('pagination');
    $this->load->model('Database_Model');
    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');

	}

	public function index()
	{
    $query=$this->db->query("SELECT * FROM yazilar where onay=0");
    $data["onay"]=$query->result();

     $this->load->view('admin/yazi',$data);
}
}
