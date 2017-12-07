<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yorumlar extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->library('session');

    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');

	}

	public function index()
	{
    $query=$this->db->get("yorumlar");
    $data["veri"]=$query->result();

		$this->load->view('admin/Yorumlar',$data);

	}


  function yorumsil($id)
 {
   $this->load->model("Database_Model");
   $delete=$this->Database_Model->yorumsil($id);

   $this->session->set_flashdata("sonuc","<h3>Yorum Silindi!</h3>");
   redirect(base_url()."admin/Yorumlar");

 }

}
