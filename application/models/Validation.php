<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Model {

	public function validate()
	{
		$username = $this->session->userdata('username');
		
		if(empty($username))
		{
			$this->session->sess_destroy();
			redirect('auth');
		}
	}	
}
