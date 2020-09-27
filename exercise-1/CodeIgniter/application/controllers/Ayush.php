<?php
class Ayush extends CI_Controller
{
	public function index()
	{
		$this->load->model("db_operations");
		$result  = $this->db_operations->get_data();
		print_r($result);
		//$this->load->view('ayush');
	}
}
?>
