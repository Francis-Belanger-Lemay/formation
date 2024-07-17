<?php
	class User_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function register($enc_password)
		{
			print_r($enc_password);
			// User data array
			$data = array
			(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $enc_password,
				'zipcode' => $this->input->post('zipcode')
			);

			// Insert user into DB

			return $this->db->insert('users', $data);
		}

		public function check_username_exists($username)
		{
			$query = $this->db->get_where('users', array('username' => $username));
			$returnvalue = $query->row_array();
			if(empty($returnvalue))
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		public function check_email_exists($email)
		{
			$query = $this->db->get_where('users', array('email' => $email));
			$returnvalue = $query->row_array();
			if(empty($returnvalue))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
