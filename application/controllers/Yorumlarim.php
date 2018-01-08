<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yorumlarim extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->helper('benim_helper');
    $this->load->model('Database_Model');
    $this->load->database();
    $this->load->library('session');
    $this->load->library('pagination');
	}
//  $this->Database_Model->update_data("users",$data,$id);
	public function index()
	   {

       $transaction=$this->db->query("SELECT * FROM kategoriler");
       $data["kat"]=$transaction->result();
       $transaction=$this->db->query("SELECT * FROM slider" );
       $data['slider']=$transaction->result();
       $query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
       $data['etiket']=$query->result();


       $query=$this->db->query("SELECT * FROM yorumlar" );
       $data['yorum']=$query->result();
       $this->load->view('_header',$data);
       $this->load->view('sahsiyorum',$data);
     }

     function yorumsil($id)
     {
      $this->load->model("Database_Model");
      $delete=$this->Database_Model->yorumsil($id);

      $this->session->set_flashdata("sonuc","<h3>Yorum Silindi!</h3>");
      redirect(base_url()."Yorumlarim");

     }

public function sahsiyorum($id)
{

}
}
