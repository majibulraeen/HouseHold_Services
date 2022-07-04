<?php
class Common_model extends CI_Model
{
	public function __construct()
	{
		parent ::__construct();
	}
	public function insert_data($table_name,$data)
	{
		return $this->db->insert($table_name,$data);
	}

}

?>