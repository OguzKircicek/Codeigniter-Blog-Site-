<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siteicimesaj extends CI_Controller {
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
		$id=$this->session->users["id"];
		$this->db->select('siteicimesaj.*,siteicimesaj.Id as mesaj_id, users.*');
    $this->db->from('siteicimesaj');
    $this->db->join('users', 'siteicimesaj.alici = users.id', 'inner');
    $this->db->where('siteicimesaj.gonderici', $id);
    $query=$this->db->get();
	  $data["veriler"]=$query->result();
		$this->load->view('admin/Siteicimesajlasma',$data);
	}
	public function mesajgonder()
	{
		$query=$this->db->query("SELECT * FROM users");
		$data["veri"]=$query->result();
		$this->load->view("admin/Siteicimesajgonder",$data);
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
		redirect(base_url().'admin/home');


	}

public function gelenmesajlar()
{
	$id=$this->session->users["id"];
	$this->db->select('siteicimesaj.*,siteicimesaj.Id as mesaj_id, users.*');
	$this->db->from('siteicimesaj');
	$this->db->join('users', 'siteicimesaj.gonderici = users.id', 'inner');
	$this->db->where('siteicimesaj.alici', $id);
	$query=$this->db->get();
	$data["veriler"]=$query->result();

  $this->load->view("admin/gelenmesajlar",$data);

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
