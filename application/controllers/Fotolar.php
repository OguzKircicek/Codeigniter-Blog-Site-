<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotolar extends CI_Controller {
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

    public function ekle($id)
    {
      $query=$this->db->query("SELECT * FROM yazilar where id=$id");
      $result["veri"]=$query->result();
      $result['veri'][0]->baslik = "Foto";
      $this->load->view("blog_foto",$result);

    }
    public function Addsave($idd)
    {
      $query=$this->db->query("SELECT * FROM fotogaleri ORDER BY Id desc limit 1");
      $result["veri"]=$query->result();
      $id=$result["veri"][0]->Id;
      $id++;
      $config['upload_path'] = 'uploads/fotom';
  	  $config['allowed_types'] = 'jpg';
  	  $config['file_name'] = $id;
  	  $config['overwrite'] = true;
  	  $config['width'] = '1024';
  	  $config['height'] = '1024';
  	  $config['max_filename'] = 0;

  	$this->upload->initialize($config);

  	$upload=$this->upload->do_upload('resim');
    $this->session->set_flashdata("sonuc","Successfully Saved");

      $data=array(
                    'yazi_id'=>$idd,
                   'yolu'=>$id.".jpg",
                  'tarih'=>date('y-m-d'));
  		$this->Database_Model->insert_data("fotogaleri",$data);


    redirect(base_url()."Home/yazilar/$idd");
    }

}
