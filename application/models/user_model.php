<?php 

class User_model extends CI_Model {

	public function get_users($user_id)
	{

		$this->db->where(['id' => $user_id]);

		//$this->db->where('id', $user_id);

		$query = $this->db->get('users');

		return $query->result();




		//$query = $this->db->query("SELECT * FROM users");

		/*return $query->num_fields();

		return $query->num_rows();*/
		


		//$query = $this->db->get('users');
		//return $query->result();
	}//end of get_users


	public function create_users($data)
	{

		$this->db->insert('users', $data);

	}//end of creare_user

	public function update_users($data, $id)
	{

		$this->db->where(['id'=>$id]);
		$this->db->update('users', $data);

	}//end of creare_user

	public function delete_user($id) 
	{

		$this->db->where(['id'=>$id]);
		$this->db->delete('users');

	}//end of delete_user(
}


?>