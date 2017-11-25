<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mesajlar extends CI_Controller {
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
    $query=$this->db->get("mesajlar");
    $data["veri"]=$query->result();

		$this->load->view('admin/mesajlar',$data);

	}
  public function mesajlar() //Anasayfadan gelen mesajların veritabanında görüntülenmesi
  {
    $this->load->model("Database_Model");
    $data['veri']=$this->Database_Model->mesajgetir();

    $this->load->view('admin/mesajlar',$data);
  }

  function mesajsil($id)
 {
   $this->load->model("Database_Model");
   $delete=$this->Database_Model->mesajsil($id);

   $this->session->set_flashdata("sonuc","<h3>Mesaj Silindi!</h3>");
   redirect(base_url()."admin/mesajlar");

 }
 
}
