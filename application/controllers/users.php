<?php 
class Users extends CI_Controller {
	
	public function login() 
	{
		//echo "it works";
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

		if($this->form_validation->run() == FALSE) {

			$data = array(

				'errors' => validation_errors()

				);

			
			redirect('home');

		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			echo $username;
			echo $password;

			$user_id = $this->user_model->login_user($username, $password);

			//passing the user info to session cookie
			$newdata = array(
				'username'  => $username,
				'password'     => $password,
				'logged_in' => TRUE
				);
			$this->session->set_userdata($newdata);
			

			if($user_id) {

				$user_data = array(
					'user_id' => $user_id,
					'username'=> $username,
					'logged_in'=> TRUE);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success', 'You are now logged in');

			//redirect('index');

				$data['main_view'] = 'admin_home'; 
				
				$this->load->view('layouts/main', $data);

			} else {


				$this->session->set_flashdata('login_failed', 'Sorry, you are not logged in');
				redirect('home/index');
			}
		//echo $this->input->post('password');
		}



		//echo $this->input->post('username');*/


	}//end of login



	public function logout()
	{

		$this->session->sess_destroy();
		redirect('home/index');

	}//end of logout
}




?>