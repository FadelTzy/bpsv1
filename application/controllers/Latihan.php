<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

	public function index()
	{
				$indikator = $this->input->post('name'); 

			$this->db->select_sum('$indikator');
			$total = $this->db->get('populasi'); 
			foreach ($total->result() as $row)
			{
			        $total  = $row->$indikator;
			}
			$this->db->select_max('$indikator');
			$que = $this->db->get('populasi'); 
			foreach ($que->result() as $row)
			{
			        $max  = $row->$indikator;
			}
			$this->db->select_min('$indikator');
			$this->db->where('$indikator >', 0);
			$ques = $this->db->get('populasi'); 
			foreach ($ques->result() as $row)
			{
			        $min  = $row->$indikator;
			}
						$k = ($max - $min) / 3;

			//rumus mencari kelas kelas = j / n
			$query['total'] = $total;
			$query['k'] = $k;
			$query['data1'] = $min;
			$query['data2'] = floor($query['data1'] + $k);
			$query['data3'] = floor($query['data2'] + $k);
			$query['data4'] = $max;

		$this->db->select('*');
		$this->db->from('populasi');
		$query['nontepilaut'] = $this->db->get()->result_array();
		$this->load->view('$indikator',$query);			 
		}				
	}



	}




 ?>