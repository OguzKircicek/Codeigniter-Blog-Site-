
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mesajlar extends CI_Controller {
	public function __Construct()
	{
		parent:: __Construct();
		$this->load->helper("url");
    $this->load->library('session');
    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');
	}


	public function index()
	{
    $transaction=$this->db->query("SELECT * FROM kategoriler");
    $data["msj"]=$transaction->result();
    $transaction=$this->db->query("SELECT * FROM slider" );
    $data['slider']=$transaction->result();
    $query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
    $data['etiket']=$query->result();


		$id=$this->session->users["id"];
		$this->db->select('siteicimesaj.*,siteicimesaj.Id as mesaj_id, users.*');
    $this->db->from('siteicimesaj');
    $this->db->join('users', 'siteicimesaj.alici = users.id', 'inner');
    $this->db->where('siteicimesaj.gonderici', $id);
    $query=$this->db->get();
	  $data["veriler"]=$query->result();
    $this->load->view('_header',$data);
		$this->load->view('mesajlar',$data);
	}
	public function mesajgonder()
	{
    $transaction=$this->db->query("SELECT * FROM kategoriler");
    $data["msj"]=$transaction->result();
    $transaction=$this->db->query("SELECT * FROM slider" );
    $data['slider']=$transaction->result();
    $query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
    $data['etiket']=$query->result();

		$query=$this->db->query("SELECT * FROM users");
		$data["user"]=$query->result();
    $this->load->view("_header",$data);
		$this->load->view("mesajgonder",$data);
	}
	public function mesajlasma()
	{

		$data=array(
			"alici"=>$this->input->post("gonderilen"),
			"gonderici"=>$this->session->users["id"],
			"baslik"=>$this->input->post("baslik"),
			"metin"=>$this->input->post("yazi"),
			"tarih"=>date("y-m-d")

		);
		$this->load->model('Database_Model');
		$this->Database_Model->insert_data("siteicimesaj",$data);
		redirect(base_url().'Home');


	}

public function gelenmesajlar()
{
  $transaction=$this->db->query("SELECT * FROM kategoriler");
  $data["kat"]=$transaction->result();
  $transaction=$this->db->query("SELECT * FROM slider" );
  $data['slider']=$transaction->result();
  $query=$this->db->query("SELECT * FROM siteayarlari limit 1 ");
  $data['etiket']=$query->result();
	$id=$this->session->users["id"];
	$this->db->select('siteicimesaj.*,siteicimesaj.Id as mesaj_id, users.*');
	$this->db->from('siteicimesaj');
	$this->db->join('users', 'siteicimesaj.gonderici = users.id', 'inner');
	$this->db->where('siteicimesaj.alici', $id);
	$query=$this->db->get();
	$data["veriler"]=$query->result();
    $this->load->view("_header",$data);
  $this->load->view("gelenmesajlar",$data);

}

	public function listele(){
		$id=$this->session->admin_session["id"];
		$this->db->select('siteicimesaj.*, users.*');
    $this->db->from('users');
    $this->db->join('siteicimesaj', 'siteicimesaj_id = uyeler.Id', 'inner');
    $this->db->where('mesajlar.alan_id', $id);
    $query=$this->db->get();
	  $data["veriler"]=$query->result();

		$this->load->view('admin/mesajlasma_listele',$data);
	}

	public function onayla($id,$mesaj)
	{
		$onay=1;
		$data=array('okundu_onay'=>$onay);
		$this->load->model('Database_Model');
		$this->Database_Model->mesaj_onayla("mesajlar",$data,$id,$mesaj);
		redirect(base_url().'admin/mesaj/listele');

	}
	public function mesajsil($id){
		$this->db->query("DELETE FROM siteicimesaj WHERE Id=$id");
		redirect(base_url().'admin/Siteicimesaj/');
	}
}
