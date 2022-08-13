<?php 
	class Tambahdata extends CI_Controller
	{

	public function create3()
	{
		$this->load->dbforge();
		$no = $this->input->post('no');

		$this->db->select('subsubindikatorlist,idsubindikator');
		$this->db->where('nosubsubindikator',$no);
		$indikator = $this->db->get('subsubindikator');
		foreach ($indikator->result() as $key ) {
			$nama = $key->subsubindikatorlist;
			$id = $key->idsubindikator;
		}
		$nama_peta = trim(str_replace(' ', '', $nama.$no.$id));
		$this->db->set('nama_peta', $nama_peta);
		$this->db->where('nosubsubindikator', $no);
		$this->db->update('subsubindikator');
		$dataket = array('opsi' => $nama_peta );
		$this->db->insert('keterangan' , $dataket);

		$fields = array( $nama_peta =>  array('type' => 'FLOAT',
												'constraint' => '10',
												'after'=> 'id',
												'null' => FALSE )
		);
		$this->dbforge->add_column('indikator', $fields);
		echo "yes";
	}
	public function create2()
	{
		$this->load->dbforge();
		$no = $this->input->post('no');

		$this->db->select('subindikatorlist,no');
		$this->db->where('idsubindikator',$no);
		$indikator = $this->db->get('subindikator');
		foreach ($indikator->result() as $key ) {
			$nama = $key->subindikatorlist;
			$id = $key->no;
		}
		$nama_peta = trim(str_replace(' ', '', $nama.$no.$id));
		$this->db->set('nama_peta', $nama_peta);
		$this->db->where('idsubindikator', $no);
		$this->db->update('subindikator');
		$dataket = array('opsi' => $nama_peta );
		$this->db->insert('keterangan' , $dataket);

		$fields = array( $nama_peta =>  array('type' => 'FLOAT',
												'constraint' => '10',
												'after'=> 'id',
												'null' => FALSE )
		);
		$this->dbforge->add_column('indikator', $fields);
		echo "yes";
	}
	public function create1()
		{	
			$this->load->dbforge();
			$ck = null;
			$no = $this->input->post('no');


			$this->db->select('id,indikator');
			$this->db->where('no',$no);
			$indikator = $this->db->get('indikatormenu');
			foreach ($indikator->result() as $key) {
				$nama = $key->indikator;
				$id = $key->id;	
			}
			 $nama_peta = trim(str_replace(' ', '', $nama.$no.$id)) ;

			$this->db->select('opsi')->where('opsi',$nama_peta);
			$check = $this->db->get('keterangan')->result();
			foreach ($check as $key ) {
				$ck = $key->opsi;
			}
			if ($ck != null ) {
				echo "no";
			}else{
			$this->db->set('nama_peta', $nama_peta);
			$this->db->where('no', $no);
			$this->db->update('indikatormenu');
			$dataket = array(
	        'opsi' => $nama_peta,
	    	);

			$this->db->insert('keterangan', $dataket);
			$fields = array(
        	$nama_peta => array('type' => 'FLOAT',
    						'constraint' => '10',
    						'after' => 'id',
    						'null' => FALSE)
			);
			$this->dbforge->add_column('indikator', $fields);
			echo "yes";
			}
			
		}	

	public function creates3()
		{
			$bxt = $this->input->post("bxt");
			$cbtp = $this->input->post("cbtp");
			$no = $this->input->post("no");
			$judul = $this->input->post("judul");
			$p = $this->input->post("che");

			$this->db->select('nama_peta');
			$this->db->where('nosubsubindikator', $no);
			$nama = $this->db->get('subsubindikator');

			foreach ($nama->result() as $key ) {
				$nama_peta = $key->nama_peta;
			}
			$nomor = 1;
			$this->db->set('totalsendiri', $bxt);
			$this->db->set('ket',$cbtp);		
			$this->db->set('judul', $judul);
			$this->db->where('opsi',$nama_peta);
			$this->db->update('keterangan');

			for ($i=0; $i < 24 ; $i++) { 
				$this->db->Set($nama_peta, $p[$i]);
				$this->db->where('no', $nomor);
				$this->db->update('indikator');
				$nomor++;
			}
			echo "yes";
		}	
	public function creates2()

	{		
$bxt = $this->input->post("bxt");
		$cbtp = $this->input->post("cbtp");
		$no = $this->input->post("no");
		$judul = $this->input->post("judul");
		$p = $this->input->post("che");
		
		$this->db->select('nama_peta');
		$this->db->where('idsubindikator', $no);
		$nama = $this->db->get('subindikator');

		foreach ($nama->result() as $key) {
			$nama_peta = $key->nama_peta;
		}
		$nomor = 1;

		$this->db->set('totalsendiri', $bxt);
		$this->db->set('ket',$cbtp);		
		$this->db->set('judul', $judul);
		$this->db->where('opsi' , $nama_peta);
		$this->db->update('keterangan');

		for ($i=0; $i < 24 ; $i++) { 
			
			$this->db->set($nama_peta, $p[$i]);
			$this->db->where('no', $nomor);
			$this->db->update('indikator');
			$nomor++;

		}

		echo "ok";
	}
	public function creates1()

	{	$bxt = $this->input->post("bxt");
		$cbtp = $this->input->post("cbtp");
		$no = $this->input->post("no");
		$judul = $this->input->post("judul");
		$p = $this->input->post("che");
		
		$this->db->select('nama_peta');
		$this->db->where('no', $no);
		$nama = $this->db->get('indikatormenu');

		foreach ($nama->result() as $key) {
			$nama_peta = $key->nama_peta;
		}
		
		$nomor = 1;
		$this->db->set('totalsendiri', $bxt);
		$this->db->set('ket',$cbtp);		
		$this->db->set('judul', $judul);
		$this->db->where('opsi' , $nama_peta);
		$this->db->update('keterangan');

		for ($i=0; $i < 24 ; $i++) { 
			
			$this->db->set($nama_peta, $p[$i]);
			$this->db->where('no', $nomor);
			$this->db->update('indikator');
			$nomor++;

		}

		echo "ok";
					





				
	}


	}
 ?>