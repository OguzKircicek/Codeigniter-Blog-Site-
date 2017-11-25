<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class yazilar extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
    $this->load->library("session");
    $this->load->helper('benim_helper');
    $this->load->model('Database_Model');
    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');

	}

	public function index()
	{
    $this->db->select("*");
    $this->db->from("yazilar");
    $this->db->where("onay",1);
    $query=$this->db->get();
		$data["veri"]=$query->result();


		$this->load->view('admin/a_header');
		$this->load->view('admin/a_sidebar');
		$this->load->view('admin/a_yazilar_listesi',$data);
		$this->load->view('admin/a_footer');
	}

   function delete($id)
  {
    $this->db->query("DELETE FROM yazilar WHERE id=$id ");
    $this->session->set_flashdata("sonuc","Successfully Deleted");
    redirect(base_url()."admin/Kullanicilar");

  }
  public function edit($id)

  {

   $transaction=$this->db->query("SELECT * FROM yazilar WHERE id=$id");
   $data["veri"]=$transaction->result();
   $this->load->view("admin/a_yazilar_guncelle",$data);

  }

  public function UpdateAdd($id)
  {
   $data=array
   (
     'adi'=>$this->input->post('adi'),
     'baslik'=>$this->input->post('baslik'),
     'yazi'=>$this->input->post('yazi'),
     'tarih'=>date("y-m-d")
   );
  $this->session->set_flashdata("sonuc","Successfully User Updated");
  $this->load->model('Database_Model');
  $this->Database_Model->update_veri("yazilar",$data,$id);
  redirect(base_url()."admin/yazilar");

  }

  public function ekle()
  {
   $this->load->view('admin/a_yazilar_ekle');
  }

  public function Addsave()
  {
   $data=array
   (
   'adi'=>$this->input->post('adi'),
   'baslik'=>$this->input->post('baslik'),
   'yazi'=>$this->input->post('yazi'),
   'tarih'=>date("y-m-d")
   );
  $this->session->set_flashdata("sonuc","Successfully Saved");
  $this->Database_Model->insert_data("yazilar",$data);
  //$this->db->insert("users",$data);
  redirect(base_url().'admin/yazilar');
  }

  public function preview($id)
  {
   //  $id=$this->session->admin_session["id"];
   $transaction=$this->db->query("SELECT * FROM yazilar WHERE id=".$id);
   $data["veri"]=$transaction->result();
   $this->load->view("admin/a_yazi_goster",$data);

  }
  public function blog_sil($id){
      $this->db->query("DELETE FROM yazilar WHERE Id=".$id);
      redirect(base_url().'admin/yazilar');
  }
  public function onay()
  {
    $query=$this->db->query("SELECT * FROM yazilar ");
		$data["onay"]=$query->result();

     $this->load->view('admin/onay',$data);

  }
  public function kabul($id)
  	{
  	$onay=1;
  	$data=array('onay'=>$onay);
  	$this->load->model('Database_Model');
  	$this->Database_Model->update_data("yazilar",$data,$id);
  	redirect(base_url().'admin/onay');
  	}
  	public function onay_ret($id)
  	{
  	$onay=2;
  	$data=array('onay'=>$onay);
  	$this->load->model('Database_Model');
  	$this->Database_Model->update_data("yazilar",$data,$id);
  	redirect(base_url().'admin/yazilar/onay');
  	}
    public function onayon($id)
  	{
  	$onay=1;
  	$data=array('onay'=>$onay);
  	$this->load->model('Database_Model');
  	$this->Database_Model->update_data("yazilar",$data,$id);
  	redirect(base_url().'admin/yazilar/onay');
  	}
}
?>
