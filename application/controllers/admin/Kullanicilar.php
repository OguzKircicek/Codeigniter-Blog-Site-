<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
    $this->load->library("session");
    $this->load->model('Database_Model');
    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');

	}

	public function index()
	{
    $query=$this->db->get("users");
		$data["veri"]=$query->result();



		$this->load->view('admin/a_header');
		$this->load->view('admin/a_sidebar');
		$this->load->view('admin/kullanicilar_listesi',$data);
		$this->load->view('admin/a_footer');
	}

   function delete($id)
  {
    $this->db->query("DELETE FROM users WHERE id=$id ");
    $this->session->set_flashdata("sonuc","Successfully Deleted");
    redirect(base_url()."admin/Kullanicilar");

  }
  public function edit($id)

  {

   $transaction=$this->db->query("SELECT * FROM users WHERE id=$id");
   $data["veri"]=$transaction->result();
   $this->load->view("admin/kullanici_duzenle",$data);

  }

  public function UpdateAdd($id)
  {
   $data=array
   (
   'adi'=>$this->input->post('adi'),
   'email'=>$this->input->post('email'),
   'sifre'=>$this->input->post("sifre"),
   'yetki'=>$this->input->post("yetki"),
   'durum'=>$this->input->post("durum")
   );
  $this->session->set_flashdata("sonuc","Successfully User Updated");
  $this->Database_Model->update_data("users",$data,$id);
  redirect(base_url().'admin/Kullanicilar');
  }

  public function ekle()
  {
 $this->load->view('admin/kullanici_ekle');
  }

  public function Addsave()
  {
   $data=array
   (
   'adi'=>$this->input->post('adi'),
   'email'=>$this->input->post('email'),
   'sifre'=>$this->input->post("sifre"),
   'yetki'=>$this->input->post("yetki"),
   'durum'=>$this->input->post("durum")
   );
  $this->session->set_flashdata("sonuc","Successfully Saved");
  $this->Database_Model->insert_data("users",$data);
  //$this->db->insert("users",$data);
  redirect(base_url().'admin/Kullanicilar');
  }

  public function preview($id)

  {

   $transaction=$this->db->query("SELECT * FROM users WHERE id=$id");
   $data["veri"]=$transaction->result();
   $this->load->view("admin/kullanici_goster",$data);

  }
  public function adminler ()
  {
    $islem=$this->db->query("SELECT * from users where yetki='Admin'");
    $data['admin']=$islem->result();
    $this->load->view('admin/a_adminler',$data);
  }

}
?>
