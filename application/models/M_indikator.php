<?php 


/**
 * 
 */
class M_indikator extends CI_Model
{
	
	public function get_indikatorpertama()
	{
		$hasil=$this->db->query("SELECT * FROM menu");
	 return $hasil;
	}
	public function get_indikatorkedua($id)
	{
		$hasil=$this->db->query("SELECT * FROM indikatormenu WHERE id=$id");
		return $hasil->result();
	}
	public function get_indikatorketiga($no)
	{
		$hasil=$this->db->query("SELECT * FROM subindikator where no=$no");
		return $hasil->result();
	}
	public function get_indikatorkeempat($id)
	{
		$hasil = $this->db->query("SELECT * FROM subsubindikator where idsubindikator = $id");
		return $hasil->result();
	}
}

?>