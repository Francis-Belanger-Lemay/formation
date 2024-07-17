<?php
	class User_model extends CI_Model
	{
		public function register($encrypted_password)
		{
			// User data array
			$data = array
			(
				name => $this->input->post('name'), // ss
				email => $this->input->post('email'),
				username => $this->input->post('username'),
				password => $this->input->post($encrypted_password),
				zipcode => $this->input->post('zipcode')

			);

			// Insert user into DB

			return $this->db->insert('users', $data);
		}
	}
