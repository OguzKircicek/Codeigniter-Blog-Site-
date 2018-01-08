<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotogaleri extends CI_Controller {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
    $this->load->library("session");
    $this->load->library("upload");
    $this->load->model('Database_Model');
    if(!$this->session->userdata('users'))  //Login olup olmadığı sorgusu
      redirect(base_url().'admin/login');

	}

	public function index()
	{
    $query=$this->db->get("fotogaleri");
		$data["foto"]=$query->result();


		$this->load->view('admin/a_header');
		$this->load->view('admin/a_sidebar');
		$this->load->view('admin/fotogaleri',$data);
		$this->load->view('admin/a_footer');
	}
  public function foto_sil($id){
      $this->db->query("DELETE FROM fotogaleri WHERE Id=".$id);
      redirect(base_url().'admin/Fotogaleri');
  }
  public function ekle()
  {
   $this->load->view('admin/fotoekle');
  }

  public function Addsave()
  {
    $query=$this->db->query("SELECT * FROM fotogaleri ORDER BY Id desc limit 1");
    $result["veri"]=$query->result();
    $id=$result["veri"][0]->Id;
    $id++;
    $config['upload_path'] = 'uploads/fotom';
	  $config['allowed_types'] = 'jpg';
	  $config['file_name'] = $id;
	  $config['overwrite'] = true;
	  $config['width'] = '64';
	  $config['height'] = '64';
	  $config['max_filename'] = 0;

	$this->upload->initialize($config);

	$upload=$this->upload->do_upload('resim');
  $this->session->set_flashdata("sonuc","Successfully Saved");

    $data=array('yolu'=>$id.".jpg",
                'tarih'=>date('y-m-d'));
		$this->Database_Model->insert_data("fotogaleri",$data);

  //$this->db->insert("users",$data);
  redirect(base_url().'admin/Fotogaleri');
  }



}
?>
