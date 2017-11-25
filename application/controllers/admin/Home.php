<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
    $this->load->library('session');
      $this->load->database();
      $this->load->model('Database_Model');
    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');

	}

	public function index()
	{
    $query=$this->db->query("SELECT count(id) as say FROM users");
    $data["count"]=$query->result();
    $sor=$this->db->query("SELECT count(id) as sayac FROM users WHERE yetki = 'Admin'");
    $data["yet"]=$sor->result();
    $mes=$this->db->query("SELECT count(id) as mes FROM mesajlar ");
    $data["mesaj"]=$mes->result();
    $onay=$this->db->query("SELECT count(Onay) as ony from mesajlar where Onay='0'");
    $data["onay_bilgisi"]=$onay->result();
    $yazionay=$this->db->query("SELECT count(onay) as yazionay from yazilar where onay='0'");
    $data["yazionaybilgisi"]=$yazionay->result();
		$this->load->view('admin/a_header');
		$this->load->view('admin/a_sidebar');
		$this->load->view('admin/a_content',$data);
		$this->load->view('admin/a_footer');
	}
  public function ayarlar()
  {
    $id=$this->session->users['id'];
    $query=$this->db->query("Select * from users where id='$id' ");
		$data["veri"]=$query->result();

    $this->load->view('admin/ayarlar',$data);
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
   redirect(base_url().'admin/Home/ayarlar');
  }

}
