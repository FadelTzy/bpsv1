<?php 

	/**
	 * 
	 */
	class Editindikator1 extends CI_Controller
	{
		
		public function tambahindikator()
		{
			$parent = $this->input->post('parentno');
			$indikator = $this->input->post('indikator');
			$data = array(
	        'indikator' => $indikator,
	        'id' => $parent);

			$this->db->insert('indikatormenu', $data);
		}
		
		public function editindikator()
		{
			$asli = $this->input->post('indasli');
			$edit = $this->input->post('indedit');
			$this->db->set('indikator', $edit);
			$this->db->where('indikator', $asli);
			$this->db->update('indikatormenu');
		}

public function hapus()
    { $this->load->dbforge();
      $nama_peta1 = null;
      $hapus = $this->input->post('nonya');


      $this->db->select('nama_peta')->where('no', $hapus);
      $namap = $this->db->get('indikatormenu');
      foreach ($namap->result() as $key ) {
        $nama_peta1 = $key->nama_peta;
      }
      if ($nama_peta1 != null) {
        $this->db->where('opsi' , $nama_peta1);
        $this->db->delete('keterangan');
        $this->dbforge->drop_column('indikator', $nama_peta1);

      }elseif ($nama_peta1 == null) {
        $this->db->select('nama_peta,idsubindikator')->where('no',$hapus);
        $getnama_peta2 = $this->db->get('subindikator')->result();
        $jumlahnamapeta2 = count($getnama_peta2);
        if ($jumlahnamapeta2 > 0) {
          $nama_peta2 = null;
          foreach ($getnama_peta2 as $key2) {
            $nama_peta2 = $key2->nama_peta;
            $idsubindikator = $key2->idsubindikator;
            if ($nama_peta2 != null) {
            $this->db->where('opsi',$nama_peta2);
            $this->db->delete('keterangan');
            $this->dbforge->drop_column('indikator',$nama_peta2 );        
            }elseif ($nama_peta2 == null) {
              $this->db->select('nama_peta, nosubsubindikator')->where('idsubindikator', $idsubindikator);
              $getnama_peta3 = $this->db->get('subsubindikator')->result();
              $jumlahnamapeta3 = count($getnama_peta3);
              if ($jumlahnamapeta3 > 0) {
                $nama_peta3 = null;
                foreach ($getnama_peta3 as $key3) {
                  $nama_peta3 = $key3->nama_peta;
                  $nosubsubindikator =  $key3->nosubsubindikator;
                  if ($nama_peta3 != null) {
                  $this->db->where('opsi', $nama_peta3 );
                  $this->db->delete('keterangan');
                  $this->dbforge->drop_column('indikator', $nama_peta3);
                  }
                  $this->db->where('nosubsubindikator', $nosubsubindikator);
                  $this->db->delete('subsubindikator');
            
                }
              }
   

            }
            $this->db->where('idsubindikator', $idsubindikator);
            $this->db->delete('subindikator');
        
          }
        }


      }
        $this->db->where('no',$hapus);
        $this->db->delete('indikatormenu');


    }
		
		public function tambahindikator2()
		{
			$parent = $this->input->post('parentno');
			$indikator = $this->input->post('indikator');
			$data = array(
	        'subindikatorlist' => $indikator,
	        'no' => $parent);

			$this->db->insert('subindikator', $data);
		}

				public function editindikator2()
		{
			$asli = $this->input->post('indasli');
			$edit = $this->input->post('indedit');
			$this->db->set('subindikatorlist', $edit);
			$this->db->where('subindikatorlist', $asli);
			$this->db->update('subindikator');
		}

				public function hapus2()
		{
			$this->load->dbforge();
			$nama_peta = null;
			$hapus = $this->input->post('nonya');




			$this->db->select('nama_peta');
			$this->db->where('idsubindikator',$hapus);
			$namap = $this->db->get('subindikator');
			foreach ($namap->result() as $key ) {
				$nama_peta = $key->nama_peta;
			}
			if ($nama_peta != null) {
				$this->db->where('opsi', $nama_peta);
				$this->db->delete('keterangan');

				$this->dbforge->drop_column('indikator', $nama_peta);

			}elseif ($nama_peta == null) {
				$this->db->select('nama_peta')->where('idsubindikator', $hapus);
			$ini_nama_peta = $this->db->get('subsubindikator')->result();
			if (count($ini_nama_peta) > 0) {
			foreach ($ini_nama_peta as $key ) {
				$this->db->where('opsi',$key->nama_peta);
				$this->db->delete('keterangan');
				$this->dbforge->drop_column('indikator',$key->nama_peta );
			}
			 } 

			$this->db->where('idsubindikator', $hapus);
			$this->db->delete('subsubindikator');

			}
				$this->db->where('idsubindikator', $hapus);
				$this->db->delete('subindikator');



		}
				public function tambahindikator3()
		{
			$parent = $this->input->post('parentno');
			$indikator = $this->input->post('indikator');
			$data = array(
	        'subsubindikatorlist' => $indikator,
	        'idsubindikator' => $parent);

			$this->db->insert('subsubindikator', $data);
		}
						public function editindikator3()
		{
			$asli = $this->input->post('indasli');
			$edit = $this->input->post('indedit');
			$this->db->set('subsubindikatorlist', $edit);
			$this->db->where('subsubindikatorlist', $asli);
			$this->db->update('subsubindikator');
		}
						public function hapus3()
		{
			$this->load->dbforge();
			$nama_peta = null;

			$hapus = $this->input->post('nonya');


			$this->db->select('nama_peta');
			$this->db->where('nosubsubindikator',$hapus);
			$namap = $this->db->get('subsubindikator');
			foreach ($namap->result() as $key ) {
				$nama_peta = $key->nama_peta;
			}
			if ($nama_peta != null) {
				$this->db->where('opsi', $nama_peta);
				$this->db->delete('keterangan');

				$this->dbforge->drop_column('indikator', $nama_peta);
			}
			$this->db->where('nosubsubindikator', $hapus);
			$this->db->delete('subsubindikator');

		}
	
	}
 ?>