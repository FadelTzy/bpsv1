<?php 

	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		public function landingpage()
		{
			$this->load->view('loginpages/landing');
		}
		public function action()
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('M_admin');
			$user = $this->M_admin->get($username);
			if (empty($user)) {
				$this->session->set_flashdata('pesan','Maaf User Tidak di Temukan');
				echo 'hm';
			}else{
				if ($password == $user->pass) {
					$session = array('otentikasi' => true, 'username' => $user->username, 'nama' => $user->nama , 'id' => $user->id );
					$this->session->set_userdata($session);
					echo 'yes';
				}else{
					$this->session->set_flashdata('pesan','password salah');
					echo 'no';
				}
			}


		}
		public function logout($value='')
		{
			$this->session->unset_userdata('otentikasi');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('nama');
			echo 'ok';
		}

		public function kelolaakun()
		{
			$id =  $_SESSION['id'];
			$this->db->select('*')->where('id',$id);
			$dataadmin = $this->db->get('admin');

			foreach ($dataadmin->result() as $key ) {
				$query['username'] = $key->username;
				$query['nama'] = $key->nama;
				$query['tgl'] = $key->tgl_daftar;
				$query['pass'] = $key->pass;
				$query['iduser'] = $key->id;
			}

			$this->db->select('*');
			$query['gambarutamavar']= $this->db->get('gambarutama');
			$this->load->view('kelolaadmin', $query);
		}

		public function Editakun()
		{
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');
			$id = $this->input->post('id');

			$data = array(
			        'nama' => $nama,
			        'username'  => $username,
			        'pass'  => $pass,

			);
			$this->db->where('id', $id);
			$this->db->update('admin', $data);
			echo "yes";
		}

		public function registerakun()
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nama','Nama','required');
			$nama = $this->input->post('nama');
			$this->form_validation->set_rules('username','Username','required');
			$username = $this->input->post('username');			
			$this->form_validation->set_rules('pass','Password','required');
			$pass = $this->input->post('pass');			
			$this->form_validation->set_rules('pass2','Password Confirmation','required|matches[pass]');
			          if ($this->form_validation->run() == FALSE)
                {
                		$errors = validation_errors();
                		echo json_encode(['error' => $errors ]);
                }
                else
                {
                		echo json_encode(['success' => 'Berhasil']);
						$data = array(
						        'nama' => $nama,
						        'username' => $username,
						        'tgl_daftar' => date("Y-m-d"),
						        'pass' => $pass,
						);

						$this->db->insert('admin', $data);

                }
		}
	}
 ?>