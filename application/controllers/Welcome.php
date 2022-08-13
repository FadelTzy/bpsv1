<?php 

/**
 * 
 */
class Welcome extends CI_Controller
{
		public function index()
	{
	
		$this->db->select('*');
		$query['resultgambarpeta'] = $this->db->get('gambarpeta');


		$this->db->select('kabkot');
		$query['indikator'] = $this->db->get('indikator');

		$query['pertama'] = $this->M_indikator->get_indikatorpertama();
		$this->load->view('Ujicoba',$query);	
	}


	public function get_subget2()
	{
		$id = $this->input->post('id');
		$data=$this->M_indikator->get_indikatorkedua($id);
		echo json_encode($data);
	}

	

	public function get_subget3()
	{
		$no = $this->input->post('no');
		
		if ($no != 0) {
					$data = $this->M_indikator->get_indikatorketiga($no);
		echo json_encode($data);
		
		
		}

	}

	public function get_subget4()
	{
		$id = $this->input->post('no');
		if ($id != 0 ) {
			$data = $this->M_indikator->get_indikatorkeempat($id);
	
		echo json_encode($data);
		

		}
	}




		public function maps()
		{
			$thispeta=$this->input->post('names');
			$query['ts'] = null;
			if ($thispeta != 0) {
			$this->db->select('nama_peta');
			$this->db->where('no', $thispeta);
			$nama_peta = $this->db->get('indikatormenu'); 
			foreach ($nama_peta->result() as $row)
			{
			        $input  = $row->nama_peta;
			}

			}else{
				$input = null;
			}


			if ($input != null || $input == null) {
			if ($input != null && $input != '') {
					$judul=null;


					$this->db->select('*');
					$this->db->where('opsi',$input);
					$ket=$this->db->get('keterangan');
					foreach ($ket->result() as $key ) {
						$judul = $key->judul;
					}


					if ($judul != '' && $judul != null) {
					$query['judulnya'] = $judul;
					}else{
						$query['judulnya'] = "PETA";
					}
				}

			$this->db->select('*')->where('opsi', $input);
			$cbtp = $this->db->get('keterangan');
			foreach ($cbtp->result() as $key ) {
						$query['check'] = $key->ket;
						$query['ts'] = $key->totalsendiri;
			}		
				$query['indikatornya']=$input;
				$this->db->select_sum($input);
			$total = $this->db->get('indikator'); 
			foreach ($total->result() as $row)
			{
			        $total  = $row->$input;
			}

			$this->db->select_max($input);
			$que = $this->db->get('indikator'); 
			foreach ($que->result() as $row)
			{
			        $max  = $row->$input;
			}
			$this->db->select_min($input);
			$this->db->where($input.'>', 0);
			$ques = $this->db->get('indikator'); 
			foreach ($ques->result() as $row)
			{
			        $min  = $row->$input;
			}
						$k = ($max - $min) / 5;
						$disparitas = $max - $min;





if ($total != 0) {
				
			$strpos = strpos($total, ".");
			if ($strpos > 0 ) {
			$xi = 0;
			$this->db->select($input);
			$gettin = $this->db->get('indikator');
			foreach ($gettin->result() as $key ) {
				$arrays[$xi] = $key->$input;
				$xi++;
			}
			$maxn = max($arrays);
			$minn = min($arrays);
			$kn = ($maxn - $minn) /5 ;
			$arraysum = array_sum($arrays);
			

			$min = $minn;
			$max = $maxn;
			$k = $kn;
			$query['totals'] = $total;

			$query['total'] = $arraysum;
			
		for ($i=0; $i < count($arrays) ; $i++) {
			$depan[$i]= strcspn($arrays[$i], "."); 
			$jmlkar[$i] = strlen($arrays[$i]);
			$oke[$i]= ($jmlkar[$i] - $depan[$i])-1;
		}
		$blkngkoma = max($oke);
			$k = number_format($kn,$blkngkoma);
			$ak = pow(10, -$blkngkoma);

			$query['k'] = $k-$k*0.1;
			$query['data1'] = $min;
			$query['data2'] = ($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + $ak;
			$query['data3'] = ($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + $ak;
			$query['data4'] = ($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + $ak;
			$query['data5'] = ($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + $ak;
			$query['data6'] = $max;			

			}else{
				$query['totals'] = $total;
				$query['total'] = $total;

			if ($disparitas > 4) {
			//rumus mencari kelas kelas = j / n
			$query['k'] = floor($k) ;
			$query['data1'] = $min;
			$query['data2'] = floor($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + 1;
			$query['data3'] = floor($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + 1;
			$query['data4'] = floor($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + 1;
			$query['data5'] = floor($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + 1;
			$query['data6'] = $max;	
				}else{
			$depan = strcspn($k, ".");
			$totalchar = strlen($k);
			$blkngkoma = ($totalchar - $depan) - 1;
			$ak = pow(10, -$blkngkoma);
			//rumus mencari kelas kelas = j / n
			$query['k'] = $k-$k*0.1;
			$query['data1'] = $min;
			$query['data2'] = ($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + $ak;
			$query['data3'] = ($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + $ak;
			$query['data4'] = ($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + $ak;
			$query['data5'] = ($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + $ak;
			$query['data6'] = $max;	
				}
		

			}


}elseif($total == 0){
$query['totals'] = $total;
$query['total'] = $total; 
$query['k'] = 0;
$query['data1'] = 0;
$query['data2x'] = 0;
$query['data2'] = 0;
$query['data3x'] = 0;
$query['data3'] = 0;
$query['data4x'] = 0;
$query['data4'] = 0;
$query['data5'] = 0;
$query['data5x'] = 0;
$query['data6'] = 0;
}






		$this->db->select('*');
		$this->db->from('indikator');
		$query['wilad'] = $this->db->get()->result_array();
		$this->load->view("cobapeta", $query);


			}
			else{
						$this->load->view("maaf");

			}
		}




		public function map()
		{
		if ($this->input->post('name')) {
			$id = $this->input->post('name');
			$this->db->select('nama_peta');
			$this->db->where('idsubindikator',$id);
			$idsubindikator = $this->db->get('subindikator');
			foreach ($idsubindikator->result() as $key) {
				$input = $key->nama_peta;
			}
						$query['ts'] = null;


				if ($input != null && $input != '') {
					$judul=null;
					$this->db->select('*');
					$this->db->where('opsi',$input);
					$ket=$this->db->get('keterangan');
					foreach ($ket->result() as $key ) {
						$judul = $key->judul;
					}


					if ($judul != '' && $judul != null) {
					$query['judulnya'] = $judul;
					}else{
						$query['judulnya'] = "PETA";
					}
				}
			$this->db->select('*')->where('opsi', $input);
			$cbtp = $this->db->get('keterangan');
			foreach ($cbtp->result() as $key ) {
						$query['check'] = $key->ket;
						$query['ts'] = $key->totalsendiri;

			}			
			$query['indikatornya']=$input;
			$this->db->select_sum($input);
			$total = $this->db->get('indikator'); 
			foreach ($total->result() as $row)
			{
			        $total  = $row->$input;
			}
		
	
			$this->db->select_max($input);
			$que = $this->db->get('indikator'); 
			foreach ($que->result() as $row)
			{
			        $max  = $row->$input;
			}
			$this->db->select_min($input);
			$this->db->where($input.'>', 0);

			$ques = $this->db->get('indikator'); 
			foreach ($ques->result() as $row)
			{
			        $min  = $row->$input;
			}
						$k = ($max - $min) / 5;
						$disparitas = $max - $min;


	

			if ($total != 0) {
				
			$strpos = strpos($total, ".");
			if ($strpos > 0 ) {
			$xi = 0;
			$this->db->select($input);
			$gettin = $this->db->get('indikator');
			foreach ($gettin->result() as $key ) {
				$arrays[$xi] = $key->$input;
				$xi++;
			}
			$maxn = max($arrays);
			$minn = min($arrays);
			$kn = ($maxn - $minn) /5 ;
			$arraysum = array_sum($arrays);
			

			$min = $minn;
			$max = $maxn;
			$k = $kn;
			$query['totals'] = $total;

			$query['total'] = $arraysum;
		for ($i=0; $i < count($arrays) ; $i++) {
			$depan[$i]= strcspn($arrays[$i], "."); 
			$jmlkar[$i] = strlen($arrays[$i]);
			$oke[$i]= ($jmlkar[$i] - $depan[$i])-1;
		}
		$blkngkoma = max($oke);
			$k = number_format($kn,$blkngkoma);
			$ak = pow(10, -$blkngkoma);

			$query['k'] = $k-$k*0.1;
			$query['data1'] = $min;
			$query['data2'] = ($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + $ak;
			$query['data3'] = ($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + $ak;
			$query['data4'] = ($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + $ak;
			$query['data5'] = ($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + $ak;
			$query['data6'] = $max;			

			}else{

	$query['totals'] = $total;
				$query['total'] = $total;
				if ($disparitas > 4) {
		

			//rumus mencari kelas kelas = j / n
			$query['k'] = floor($k) ;
			$query['data1'] = $min;
			$query['data2'] = floor($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + 1;
			$query['data3'] = floor($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + 1;
			$query['data4'] = floor($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + 1;
			$query['data5'] = floor($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + 1;
			$query['data6'] = $max;	
				}else{
			$depan = strcspn($k, ".");
			$totalchar = strlen($k);
			$blkngkoma = ($totalchar - $depan) - 1;
			$ak = pow(10, -$blkngkoma);
			//rumus mencari kelas kelas = j / n
			$query['k'] = $k-$k*0.1;
			$query['data1'] = $min;
			$query['data2'] = ($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + $ak;
			$query['data3'] = ($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + $ak;
			$query['data4'] = ($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + $ak;
			$query['data5'] = ($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + $ak;
			$query['data6'] = $max;	
				}
		
			}


			}elseif($total == 0){
$query['totals'] = $total;
$query['total'] = $total; 
$query['k'] = 0;
$query['data1'] = 0;
$query['data2x'] = 0;
$query['data2'] = 0;
$query['data3x'] = 0;
$query['data3'] = 0;
$query['data4x'] = 0;
$query['data4'] = 0;
$query['data5'] = 0;
$query['data5x'] = 0;
$query['data6'] = 0;
			}


 

		$this->db->select('*');
		$this->db->from('indikator');
		$query['wilad'] = $this->db->get()->result_array();


		$this->load->view("cobapeta", $query);
		
		}

		}
		public function mapss()
		{	
			$no = $this->input->post('no');
			$this->db->select('nama_peta');
			$this->db->where('nosubsubindikator',$no);
			$idsubindikator = $this->db->get('subsubindikator');
			foreach ($idsubindikator->result() as $key) {
				$input = $key->nama_peta;
			}
			$query['ts'] = null;

			if ($input != null && $input != '') {
					$judul=null;
					$this->db->select('*');
					$this->db->where('opsi',$input);
					$ket=$this->db->get('keterangan');
					foreach ($ket->result() as $key ) {
						$judul = $key->judul;
					}


					if ($judul != '' && $judul != null) {
					$query['judulnya'] = $judul;
					}else{
						$query['judulnya'] = "PETA";
					}
				}	
			$this->db->select('*')->where('opsi', $input);
			$cbtp = $this->db->get('keterangan');
			foreach ($cbtp->result() as $key ) {
						$query['check'] = $key->ket;
						$query['ts'] = $key->totalsendiri;

			}			
			$query['indikatornya']=$input;
			$this->db->select_sum($input);
			$total = $this->db->get('indikator'); 
			foreach ($total->result() as $row)
			{
			        $total  = $row->$input;
			}


			$this->db->select_max($input);
			$que = $this->db->get('indikator'); 
			foreach ($que->result() as $row)
			{
			        $max  = $row->$input;
			}
			$this->db->select_min($input);
			$this->db->where($input.'>', 0);

			$ques = $this->db->get('indikator'); 
			foreach ($ques->result() as $row)
			{
			        $min  = $row->$input;
			}
						$k = ($max - $min) / 5;
						$disparitas = $max - $min;




			if ($total != 0) {
				
			$strpos = strpos($total, ".");
			if ($strpos > 0 ) {
			$xi = 0;
			$this->db->select($input);
			$gettin = $this->db->get('indikator');
			foreach ($gettin->result() as $key ) {
				$arrays[$xi] = $key->$input;
				$xi++;
			}
			$maxn = max($arrays);
			$minn = min($arrays);
			$kn = ($maxn - $minn) /5 ;
			$arraysum = array_sum($arrays);
			

			$min = $minn;
			$max = $maxn;
			$k = $kn;
			$query['totals'] = $total;

			$query['total'] = $arraysum;
		for ($i=0; $i < count($arrays) ; $i++) {
			$depan[$i]= strcspn($arrays[$i], "."); 
			$jmlkar[$i] = strlen($arrays[$i]);
			$oke[$i]= ($jmlkar[$i] - $depan[$i])-1;
		}
		$blkngkoma = max($oke);
			$k = number_format($kn,$blkngkoma);
			$ak = pow(10, -$blkngkoma);

			$query['k'] = $k-$k*0.1;
			$query['data1'] = $min;
			$query['data2'] = ($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + $ak;
			$query['data3'] = ($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + $ak;
			$query['data4'] = ($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + $ak;
			$query['data5'] = ($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + $ak;
			$query['data6'] = $max;			

			}else{

$query['totals'] = $total;
				$query['total'] = $total;
				if ($disparitas > 4) {
		

			//rumus mencari kelas kelas = j / n
			$query['k'] = floor($k) ;
			$query['data1'] = $min;
			$query['data2'] = floor($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + 1;
			$query['data3'] = floor($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + 1;
			$query['data4'] = floor($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + 1;
			$query['data5'] = floor($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + 1;
			$query['data6'] = $max;	
				}else{
			$depan = strcspn($k, ".");
			$totalchar = strlen($k);
			$blkngkoma = ($totalchar - $depan) - 1;
			$ak = pow(10, -$blkngkoma);
			//rumus mencari kelas kelas = j / n
			$query['k'] = $k-$k*0.1;
			$query['data1'] = $min;
			$query['data2'] = ($query['data1'] + $k);
			$query['data2x'] = $query['data2'] + $ak;
			$query['data3'] = ($query['data2'] + $k);
			$query['data3x'] = $query['data3'] + $ak;
			$query['data4'] = ($query['data3'] + $k);
			$query['data4x'] = $query['data4'] + $ak;
			$query['data5'] = ($query['data4'] + $k);
			$query['data5x'] = $query['data5'] + $ak;
			$query['data6'] = $max;	
				}
			

			}


			}elseif($total == 0){
$query['totals'] = $total;
$query['total'] = $total; 
$query['k'] = 0;
$query['data1'] = 0;
$query['data2x'] = 0;
$query['data2'] = 0;
$query['data3x'] = 0;
$query['data3'] = 0;
$query['data4x'] = 0;
$query['data4'] = 0;
$query['data5'] = 0;
$query['data5x'] = 0;
$query['data6'] = 0;
			}




 

		$this->db->select('*');
		$this->db->from('indikator');
		$query['wilad'] = $this->db->get()->result_array();


		$this->load->view("cobapeta", $query);



		
		




		}
}


?>