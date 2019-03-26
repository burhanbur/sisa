<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Auth extends CI_Controller
{
	var $table = 'users';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$role = $this->session->userdata('role');

		if ($role == 1) {
			redirect('kepsek/home');
		} elseif ($role == 2){
			redirect('bendahara/home');
		} else {
			$this->load->view('login');
		}
	}

	public function login()
	{
		$data = array('username' => $this->input->post('username', TRUE),
					  'password' => md5($this->input->post('password', TRUE))
		);

		$check = $this->m_login->getLogin($data);

		if($check->num_rows() == TRUE) 
		{
			foreach($check->result() as $sess) 
			{
				$sess_data['id'] = $sess->id;
				$sess_data['nama'] = $sess->nama;
				$sess_data['username'] = $sess->username;
				$sess_data['role'] = $sess->role_id;
				$sess_data['login_terakhir'] = $sess->login_terakhir;
				$this->session->set_userdata($sess_data);
			}

			$this->db->where('id', $sess->id)->update($this->table, array('login_terakhir' => date('Y-m-d H:i:s')));

            $role = $this->session->userdata('role');
            
  			if ($role == 2) {
				redirect('bendahara/home');
			}else{
				redirect('kepsek/home');
			}
		}
		else
		{
			echo "<script>alert('Gagal login: Cek username atau password!');history.go(-1);</script>";
		}
	}	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}