<?php 

	/**
	 * 
	 */
	class Check extends CI_Controller
	{
			public function print()
			{
				$this->load->view('print_tabel');
			}

		public function subkategori()
		{
			$no = $this->input->post("no");
			if ($no == null || $no == '') {
				echo "xx";
			}
			$mengeceksubnya = null;
			$this->db->select('nama_peta');
			$this->db->where('no', $no);
			$query = $this->db->get("indikatormenu");

			foreach ($query->result() as $row)
			{
			        $mengecekpeta = $row->nama_peta;
			}
			$this->db->select('no');
			$this->db->where('no',$no);
			$this->db->limit(1);
			$queryy= $this->db->get("subindikator");
						if ($queryy !== FALSE) {
						
						foreach ($queryy->result() as $row)
			{
			        $mengeceksubnya = $row->no;
			}
		}
			if ($mengecekpeta != null && $mengeceksubnya == null) {
				/*ini ada petanya */
				echo "x";
			}elseif ($mengecekpeta == null && $mengeceksubnya != null) {
				/*ini ada subnya */
				echo "y";
			}elseif ($mengecekpeta == null && $mengeceksubnya == null) {
				/* tidak ada kodong */
				echo "z";
			}
		}

		public function subsubkategori()
		{
			$no = $this->input->post("no");
			$mengeceksubnya = null;
			$this->db->select('nama_peta');
			$this->db->where('idsubindikator', $no);
			$query = $this->db->get("subindikator");

			foreach ($query->result() as $row)
			{
			        $mengecekpeta = $row->nama_peta;
			}
			$this->db->select('idsubindikator');
			$this->db->where('idsubindikator',$no);
			$this->db->limit(1);
			$queryy= $this->db->get("subsubindikator");
						if ($queryy !== FALSE) {
						
						foreach ($queryy->result() as $row)
			{
			        $mengeceksubnya = $row->idsubindikator;
			}
		}
			if ($mengecekpeta != null && $mengeceksubnya == null) {
				/*ini ada petanya */
				echo "x";
			}elseif ($mengecekpeta == null && $mengeceksubnya != null) {
				/*ini ada subnya */
				echo "y";
			}elseif ($mengecekpeta == null && $mengeceksubnya == null) {
				/* tidak ada kodong */
				echo "z";
			}
		}

		public function subsubsubkategori()
		{
			$no = $this->input->post("no");
			$this->db->select('nama_peta');
			$this->db->where('nosubsubindikator',$no);
			$idsubindikator = $this->db->get('subsubindikator');
			foreach ($idsubindikator->result() as $key) {
				$nama_peta = $key->nama_peta;
			}
			if ($nama_peta == null) {
				echo "x";
			}
			if ($nama_peta != null) {
				echo "y";
			}
		}
	
	}
 ?>