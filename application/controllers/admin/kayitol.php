<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kayitol extends CI_Controller {
    public function __construct ()
	{
		    parent::__construct();
		    $this->load->helper('url');
        $this->load->database();
        $this->load->library('session');
        $this->load->model("Database_Model");

	}

	public function index()
	{
		$this->load->view('admin/kayitol');

	}
  public function ekle()
  {
   $data=array
   (
   'adi'=>$this->input->post('adsoy'),
   'email'=>$this->input->post('email'),
   'sifre'=>$this->input->post("sifre"),
   'yetki'=>"Üye",
   'durum'=>"Pasif"
   );
   $this->session->set_flashdata("sonuc","Successfully Saved");
   $this->Database_Model->insert_data("users",$data);
   //$this->db->insert("users",$data);
   redirect(base_url().'admin/Login');

}
}
?>
