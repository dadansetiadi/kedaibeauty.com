<?php

class User_model extends CI_Model
{
	public function update($id,$data)
	{
		$this->db->where("id",$id);
		$this->db->update('users',$data);

	}

	public function edit($id)
	{
		$this->db->where("id",$id);
		return $this->db->get('users');

	}

	public function hapus($id)
	{
		$this->db->where("id",$id);
		$this->db->delete('users');

	}

	public function simpan($data)
	{
		$this->db->insert('users',$data);

	}
	
	public function get_users()
	{
		$sql = $this->db->query("SELECT * FROM users");
		return $sql;

	}

	public function login_user($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$result = $this->db->get('users');

		if ($result->num_rows() == 1) {
			return $result->row(0)->id;
		} else{
			return false;
		}


	}

	public function create_users($data)
	{
		$this->db->insert('users',$data);

	}
}

?>