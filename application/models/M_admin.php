<?php 


/**
 * 
 */
class M_admin extends CI_Model
{
	public function get($username)

	{
		$this->db->where('username', $username);
		$result = $this->db->get('admin')->row();
		return $result;
	}
	
}

?>