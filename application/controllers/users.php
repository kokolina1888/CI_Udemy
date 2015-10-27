<?php 
class Users extends CI_Controller {

	public function show($user_id)
	{
		$data['result'] = $this->user_model->get_users($user_id);

		/*foreach ($result as $object) {
			echo $object->username.'<br>';
		}*/

		$this->load->view('user_view', $data);
	}


	public function insert() 
	{

		$username = 'peter';
		$password = '123456';

		$this->user_model->create_users([

			'username'=>$username,
			'password'=>$password

			]);
	}

	public function update() 
	{

		$id  = 3;

		$username = 'steven';
		$password = 'secret';

		$this->user_model->update_users([

			'username'=>$username,
			'password'=>$password

			], $id);
	}

	public function delete() {
		$id = 3;
		$this->user_model->delete_user($id);
	}
}



?>