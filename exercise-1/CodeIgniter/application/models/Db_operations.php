<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Db_operations extends CI_Model
{
	public function get_data()
	{
		$this->load->database();
		$q = $this->db->query("SELECT * FROM node_test");
		return $q->result_array();
	}
	
	public function check_login($username,$pass)
	{
		$query = $this->db->get_where('user_info', array('user_name'=>$username,'password'=>$pass));
		if($query->num_rows())
		{
			return $query->row()->id;
		}
		else
		{	
			return false;
		}
	}
}
?>
