<?php 
	class Updatedata extends CI_Controller
	{
		public function update1()
		{
			$no = $this->input->post('no');

			 $this->db->select('nama_peta')->where('no',$no);
			 $namap = $this->db->get('indikatormenu');
			foreach ($namap->result() as $key ) {
				$nama_peta = $key->nama_peta;
			}
			$data = $this->db->query("SELECT $nama_peta AS no ,kabkot, no AS nomor FROM indikator")->result();	
			echo json_encode($data);
		}
		public function update1judul()
		{	
			$no = $this->input->post('no');

			$this->db->select('nama_peta')->where('no', $no);
			$namap = $this->db->get('indikatormenu');
			foreach ($namap->result() as $key ) {
				$nama_peta = $key->nama_peta;
			} 
			$this->db->select('judul,ket,totalsendiri')->where('opsi', $nama_peta);
			$judul = $this->db->get('keterangan')->result();
			foreach ($judul as $key ) {
				$jdl = $key->judul;
				$ket = $key->ket;
				$ts = $key->totalsendiri;
			}
			if (strlen($ts) == 0) {
				$ts = 'none';
			}
				$myArr  = array('coba1' => $jdl , 'coba3' => $ket,'totalsendiri' => $ts );
				echo json_encode($myArr);
		}
		public function update2()
		{
			$no = $this->input->post('no');
			$this->db->select('nama_peta')->where('idsubindikator', $no);
			$namap = $this->db->get('subindikator');
			foreach ($namap->result() as $key) {
				$nama_peta = $key->nama_peta;
			}
			$data = $this->db->query("SELECT $nama_peta AS no ,kabkot, no AS nomor FROM indikator")->result();
			
			echo json_encode($data);
		}
		public function update2judul()
		{	$judul2 = 'hai mas';
			$no = $this->input->post('no');
			$this->db->select('nama_peta')->where('idsubindikator', $no);
			$namap = $this->db->get('subindikator');
			foreach ($namap->result() as $key) {
				$nama_peta = $key->nama_peta;
			}
			$this->db->select('*')->where('opsi', $nama_peta);
			$judul = $this->db->get('keterangan');
			foreach ($judul->result() as $key) {
				$judul2 = $key->judul;
				$ket = $key->ket;
				$ts = $key->totalsendiri;
			}
			if (strlen($ts) == 0) {
				$ts = 'none';
			}
				$myArr  = array('coba1' => $judul2 , 'coba3' => $ket,'totalsendiri' => $ts );
				echo json_encode($myArr);

		}
				public function update3()
		{
			$no = $this->input->post('no');
			
			$this->db->select('nama_peta')->where('nosubsubindikator', $no);
			$namap = $this->db->get('subsubindikator');
			foreach ($namap->result() as $key) {
				$nama_peta = $key->nama_peta;
			}

			$data = $this->db->query("SELECT $nama_peta AS no ,kabkot, no AS nomor FROM indikator")->result();
			
			echo json_encode($data);
		}
		public function update3judul()
		{	$judul3 = 'hai mas';
			$no = $this->input->post('no');
			$this->db->select('nama_peta')->where('nosubsubindikator', $no);
			$namap = $this->db->get('subsubindikator');
			foreach ($namap->result() as $key) {
				$nama_peta = $key->nama_peta;
			}
			$this->db->select('*')->where('opsi', $nama_peta);
			$judul = $this->db->get('keterangan');
			foreach ($judul->result() as $key) {
				$judul3 = $key->judul;
				$ket = $key->ket;
				$ts = $key->totalsendiri;

			}
			if (strlen($ts) == 0) {
				$ts = 'none';
			}

				$myArr  = array('coba1' => $judul3 , 'coba3' => $ket,'totalsendiri' => $ts  );
				echo json_encode($myArr);
		}

	}
 ?>