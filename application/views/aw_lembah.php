///////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
$this->load->dbforge();
      $nama_peta = null;
      $hapus = $this->input->post('nonya');

      $this->db->select('nama_peta');
      $this->db->where('no',$hapus);
      $namap = $this->db->get('indikatormenu');
      foreach ($namap->result() as $key ) {
        $nama_peta = $key->nama_peta;
      }

      if ($nama_peta != null) {
        $this->db->where('opsi', $nama_peta);
        $this->db->delete('keterangan');

        $this->dbforge->drop_column('indikator', $nama_peta);
      }elseif ($nama_peta == null) {
      $this->db->where('no', $hapus);
      $this->db->delete('indikatormenu');

      $this->db->select('idsubindikator,nama_peta');
      $this->db->where('no',$hapus);
      $idsubindikator=$this->db->get('subindikator');
      foreach ($idsubindikator->result() as $key ) {
        $this->db->where('idsubindikator',$key->idsubindikator);
        $this->db->delete('subsubindikator');
        if (count($key->nama_peta) > 0 ){
            $this->db->where('opsi', $key->nama_peta);
            $this->db->delete('keterangan');
            $this->dbforge->drop_column('indikator', $key->nama_peta);
           }   
      }     

      }



      $this->db->where('no', $hapus);
      $this->db->delete('subindikator');  



//////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////
public function hapus()
    { $this->load->dbforge();
      $nama_peta1 = null;
      $hapus = $this->input->post('nonya');


      $this->db->select('nama_peta')->where('no', $hapus);
      $namap = $this->db->get('indikatormenu');
      foreach ($namap->result() as $key ) {
        $nama_peta1 = $key->nama_peta
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
            
                }
              }
                  $this->db->where('nosubsubindikator', $nosubsubindikator);
                  $this->db->delete('subsubindikator');

            }

        
          }
        }
            $this->db->where('idsubindikator', $idsubindikator);
            $this->db->delete('subindikator');

      }
        $this->db->where('no',$hapus);
        $this->db->delete('indikatormenu');


    }
//////////////////////////////////////////////
///////////////////// / / / / /
 /////////////////////// / / / / / / ////////////////////////////////////////////////////////////////////////////
 $this->load->dbforge();
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
        foreach ($getnama_peta2 as $key2 ) {
          if ($key2->nama_peta != null) {
          $this->db->where('opsi',$key2->nama_peta);
        $this->db->delete('keterangan');
        $this->dbforge->drop_column('indikator',$key2->nama_peta );
          }
          $this->db->where('idsubindikator', $key2->idsubindikator);
          $this->db->delete('subindikator');

      
        }

      

          

      }

        $this->db->where('no',$hapus);
        $this->db->delete('indikatormenu');
