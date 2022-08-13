<?php 

	/**
	 * 
	 */
	class Upload extends CI_Controller
	{
			
		public function do_upload()
		{
			$config['upload_path']="./aset/imagesbc";
			$config['allowed_types']='gif|jpg|jpeg|png';
			$config['encrypt_name']=FALSE;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload("filegambar")) {
				$data = array('upload_data' => $this->upload->data());
				$judul = $this->input->post('title');
				$gambar = $_FILES['filegambar']['name'];

				$datas = array(
						'judulp' => $judul,
						'namag' => $gambar
						);
				$result = $this->db->insert('gambarutama', $datas);
				echo json_decode($result);
			}
		}

		public function updategambar()
		{
			$judul = $this->input->post('judul');

			$this->db->select('namag')->where('judulp',$judul);
			$result= $this->db->get('gambarutama');
			foreach ($result->result() as $keygambar) {
				$gambar = $keygambar->namag;
			}
			$gambarr=str_replace(" ","_",$gambar);
			$data = array(
			        'namag' => $gambarr,
			);

			$this->db->where('judulp','s');
			$this->db->update('gambarpeta', $data);
			echo $gambarr;
		}
	}
 ?>