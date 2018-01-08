<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->helper('benim_helper');
    $this->load->model('Database_Model');
    $this->load->database();
    $this->load->library('session');

	}
  public function index()

     {

     }
  public function bilgi($id)
  {
    $trans=$this->db->query("SELECT * FROM slider ");
    $data["slider"]=$trans->result();
   $query=$this->db->query("SELECT * FROM slider where id=$id");
   $data["veri"]=$query->result();
   $data['veri'][0]->baslik = "Slider Bilgisi";

   $sorgu=$this->db->query("SELECT * FROM siteayarlari");
   $data["etiket"]=$sorgu->result();
   
   $this->load->view("slider",$data);
  }
}
?>
