<?php
	class Users extends CI_Controller
	{
		// Register User
		public function register()
		{
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'required|matches[password]');
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header', $data);
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer', $data);
			}
			else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				// Set Message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
				redirect('posts');
			}
		}

		// Log out user
		public function logout()
		{
			// Unset $userdata
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('user_id');

			$this->session->set_flashdata('logout_success', 'You are now logged out');

			redirect('users/login');
		}

		// Log in User
		public function login()
		{

			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header', $data);
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer', $data);
			}
			else
			{
				// Get username
				$username = $this->input->post('username');
				// Get & Encrypt password
				$password = md5($this->input->post('password'));

				// Login user
				$user_id = $this->user_model->login($username, $password);

				if($user_id)
				{
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);


					$this->session->set_flashdata('login_success', 'You are now logged in');
					redirect('posts');
				}
				else
				{
					// Error
					// Set Message
					$this->session->set_flashdata('login_failed', 'Login failed, please try again');
					redirect('users/login');
				}
			}
		}


		public function check_username_exists($username)
		{
			$this->form_validation->set_message('check_username_exists',
				'That username is already taken. Please choose a different one.');

			if($this->user_model->check_username_exists($username))
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
			$this->form_validation->set_message('check_email_exists',
				'That email is already taken. Please choose a different one.');

			if($this->user_model->check_email_exists($email))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
