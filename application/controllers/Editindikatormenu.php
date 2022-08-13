<?php 

	/**
	 * 
	 */
	class Editindikatormenu extends CI_Controller
	{
		
		public function tambahindikator()
		{
			$indikatormenus = $this->input->post('indikatormenu');
			$data = array(
	        'menuindikator' => $indikatormenus,
	        'icon' => 'none');

			$this->db->insert('menu', $data);
		}
		
		public function editindikator()
		{
			$asli = $this->input->post('indasli');
			$edit = $this->input->post('indedit');
			$this->db->set('menuindikator', $edit);
			$this->db->where('menuindikator', $asli);
			$this->db->update('menu');
		}

		public function hapus()
		{
			$this->load->dbforge();


			$hapus = $this->input->post('hapusindikator');	



			$this->db->select('nama_peta,no')->where('id',$hapus);
			$getnama_peta1 = $this->db->get('indikatormenu')->result();
			$nama_peta1 = null;
			foreach ($getnama_peta1 as $key) {
				$nama_peta1 = $key->nama_peta;
				$no = $key->no;
				if ($nama_peta1 != null) {
			        $this->db->where('opsi' , $nama_peta1);
			        $this->db->delete('keterangan');
			        $this->dbforge->drop_column('indikator', $nama_peta1);				
			    }elseif ($nama_peta1 == null) {
			    	$this->db->select('nama_peta,idsubindikator')->where('no',$no);
			    	$getnama_peta2 = $this->db->get('subindikator')->result();
			    	$nama_peta2 = null;
			    	foreach ($getnama_peta2 as $key2 ) {
			    		$nama_peta2 = $key2->nama_peta;
			    		$idsubindikator = $key2->idsubindikator;
			    		if ($nama_peta2 != null ) {
					        $this->db->where('opsi' , $nama_peta2);
					        $this->db->delete('keterangan');
					        $this->dbforge->drop_column('indikator', $nama_peta2);	
			    		}elseif ($nama_peta2 == null) {
			    			$this->db->select('nama_peta,nosubsubindikator')->where('idsubindikator', $idsubindikator);
			    			$getnama_peta3 = $this->db->get('subsubindikator')->result();
			    			$nama_peta3 = null;
			    			foreach ($getnama_peta3 as $key3) {
								$nama_peta3 = $key3->nama_peta;
								$nosubsubindikator = $key3->nosubsubindikator;
								if ($nama_peta3 != null) {
							        $this->db->where('opsi' , $nama_peta3);
							        $this->db->delete('keterangan');
							        $this->dbforge->drop_column('indikator', $nama_peta3);		
				   				}		
				   				$this->db->where('nosubsubindikator', $nosubsubindikator);
				   				$this->db->delete('subsubindikator');	    				
			    			}
			    		}
			    		$this->db->where('idsubindikator', $idsubindikator);
			    		$this->db->delete('subindikator');
			    	}
			    }
			    $this->db->where('no', $no);
			    $this->db->delete('indikatormenu');
			}












			$this->db->where('id', $hapus);
			$this->db->delete('menu');





		}
	
	}
 ?>