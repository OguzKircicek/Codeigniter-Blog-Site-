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
    $this->load->library('pagination');
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

    $veri=$this->Database_Model->yazisayisi(); //pagination
    $config= array( //pagination işlemleri yapılıyor
                "base_url"=>base_url()."admin/yazilar",
                "per_page"=>4,
                "total_rows"=>$veri

// pagination işlemleri configde yapılır.
              );
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev"> ';  //buradaki ayarlar sayfalama linki
        $config['prev_tag_close'] = '</li>';             //görünüm ayarları
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $data["linkler"]=$this->pagination->create_links();
    $data['veriler']=$this->Database_Model->yazicek($config["per_page"],$this->uri->segment(2,0));




		$this->load->view('admin/a_header');
		$this->load->view('admin/a_sidebar');
		$this->load->view('admin/a_yazilar_listesi',$data);
		$this->load->view('admin/a_footer');



	}


   function delete($id)
  {
    $this->db->query("DELETE FROM yazilar WHERE id=$id ");
    $this->session->set_flashdata("sonuc","Successfully Deleted");
    redirect(base_url()."admin/a_yazilar_listesi");

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
     'konu'=>$this->input->post('konu'),
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
   'konu'=>$this->input->post('konu'),

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
    $query=$this->db->query("SELECT * FROM yazilar");
		$data["onay"]=$query->result();

     $this->load->view('admin/onay',$data);

  }

  	public function onayy_ret($id)
  	{
  	$onay=2;
  	$data=array('onay'=>$onay);
  	$this->load->model('Database_Model');
  	$this->Database_Model->onayla("yazilar",$data,$id);
    	redirect(base_url().'admin/yazilar/onay');
  	}
    public function onayyon($id)
  	{
  	$onay=1;
  	$data=array('onay'=>$onay);
  	$this->load->model('Database_Model');
  	$this->Database_Model->onayla("yazilar",$data,$id);
  	redirect(base_url().'admin/yazilar/onay');
  	}
}
?>
