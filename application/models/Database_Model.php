<?php


class Database_Model extends CI_Model {
    public function __construct ()
	{
		parent::__construct();
		$this->load->helper('url');

	}
  public function insert_data($table,$data)
  {
    $this->db->insert($table,$data);
    return true;
  }
//herş
  public function update_data($table,$data,$id)
  {
    $this->db->where("id",$id);
     $this->db->update($table,$data);
    return true;
  }

  public function login ($tablo,$email,$sifre)
  {
    $this->db->select("*");
    $this->db->from($tablo);
    $this->db->where("email",$email);
    $this->db->where("sifre",$sifre);
    $this->db->limit(1);
    $query=$this->db->get();

    if($query->num_rows()==1)
    {
       return $query->result();

    }
    else
    {
      return false;
    }

  }
  public function update_veri($table,$data,$id)
  {
    $this->db->where("Id",$id);
     $this->db->update($table,$data);
    return true;
  }
  public function yazicek($per,$segment)
  {
   $result=$this->db->select("*")
   ->from ('yazilar')
   ->order_by ('Id',"DESC")
   ->limit($per,$segment)
   ->get()
   ->result();
    return $result;


  }
  public function yazisayisi() //pagination işlemi yapılıyor
  {
    $result=$this->db->select('Id')
    ->from('yazilar')
    ->count_all_results();
    return $result;
  }


  public function mesajgonder ($tablo,$data) //Home dan gelen mesajları veritabanına kaydetme
  {
    if($this->db->insert($tablo,$data))
    return true;
  }
  public function mesajgetir () //veritabanındaki mesajları admin panele getirme
  {
     $result=$this->db->select('*')
     ->from ('mesajlar')
     ->get()
     ->result();

     return $result;
  }

  public function mesajsil($id)
  {
    $result=$this->db->delete('mesajlar',array('Id'=>$id));
    return $result;

  }
  public function retsil($tablo,$id)
  {
    $result=$this->db->delete($tablo,array('Id'=>$id));
    return $result;

  }
  public function onayla($tablo,$data,$id)
	{
		$this->db->where('Id',$id);
		$this->db->update($tablo,$data);

		return true;
	}


  public function search ($tablo,$data)
  {
    $this->db->select('*');
    $this->db->from($tablo);
    $this->db->like('baslik',$data);
    $query = $this->db->get();
    return $query->result();
  }
  public function yorumsil($id)
  {
    $result=$this->db->delete('yorumlar',array('Id'=>$id));
    return $result;

  }
}
