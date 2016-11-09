<?php

class Produk_model extends CI_Model
{
	
	
	public function get_produk()
	{
		$sql = $this->db->query("SELECT * FROM produk");
		return $sql;

	}

	public function simpan($data)
	{
		$this->db->insert('produk',$data);

	}


}

?>