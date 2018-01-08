<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ayarlar extends CI_Controller {
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

 }
 public function ayarlar()
 {
   $id=$this->session->users['id'];
   $query=$this->db->query("Select * from users where id='$id' ");
   $data["veri"]=$query->result();

   $ad=$this->session->users['adi'];
   $sorgu=$this->db->query("SELECT * from yazilar where adi='$ad' " );
   $data["yazi"]=$sorgu->result();

   $query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
   $kaynak['etiket']=$query->result();

   $transaction=$this->db->query("SELECT * FROM slider" );
   $kaynak['slider']=$transaction->result();


 $this->load->view('_header',$kaynak);

  $this->load->view('ayarlar',$data);






 }
 public function ayarguncelle($id)
 {
   $data=array
   (

   'adi'=>$this->input->post('adi'),
   'email'=>$this->input->post('mail'),
   'sifre'=>$this->input->post("sifre"),

   );
  $this->session->set_flashdata("sonuc","Successfully User Updated");
  $this->Database_Model->update_data("users",$data,$id);
  redirect(base_url().'Home/ayarlar');
 }
}
