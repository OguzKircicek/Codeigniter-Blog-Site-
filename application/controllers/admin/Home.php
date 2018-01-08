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

    $ad=$this->session->users['adi'];
    $sorgu=$this->db->query("SELECT * from yazilar where adi='$ad' ORDER BY Id desc ");
    $data["icerik"]=$sorgu->result();


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

    $ad=$this->session->users['adi'];
    $sorgu=$this->db->query("SELECT * from yazilar where adi='$ad' " );
    $data["yazi"]=$sorgu->result();
    $this->load->view('admin/ayarlar',$data);




  }
//kanka aslında yazıları çektim ama 2 defa geliyor bak şim sal bana çağır şimdi veri diye nerde veri diye çağırıyım yazi ça
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
 public function siteiciayarlar()
 {
   $site=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
   $data["siteici"]=$site->result();

   $this->load->view('admin/siteiciayarlar',$data);
 }
 public function siteiciayarguncelle($id)
 {
   $data=array
   (

   'keywords'=>$this->input->post('keywords'),
   'aciklama'=>$this->input->post('aciklama'),
   'name'=>$this->input->post("name"),
   'smtpport'=>$this->input->post("smtpport"),
   'smtphost'=>$this->input->post("smtphost"),
   'mail'=>$this->input->post("mail"),
   'subject'=>$this->input->post("subject"),
   'message'=>$this->input->post("message"),
   'sifre'=>$this->input->post("sifre")


   );
  $this->session->set_flashdata("sonuc","Successfully User Updated");
  $this->Database_Model->update_data("siteayarlari",$data,$id);
  redirect(base_url().'admin/Home/siteiciayarlar');
 }




}
