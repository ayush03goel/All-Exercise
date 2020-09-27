<?php

class Login extends MY_Controller
{
	public function index()
	{
		if($this->session->userdata('u_id'))
			return redirect('admin/dashboard');
		$this->load->helper('form');
		$this->load->view('login');
	}
		
	public function admin_login()
    {
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		//$config = $this->validation_rules();
		//$this->form_validation->set_rules($config);
		if($this->form_validation->run('form_login')== TRUE)
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('db_operations');
			$user_id = $this->db_operations->check_login($username,$password);
			if(!empty($user_id))
			{
				$this->load->library('session');
				$this->load->helper('cookie');
				set_cookie('user_name',$username,'3600');
				$this->session->set_userdata('u_id',$user_id);
				return redirect('admin/dashboard');
				//$this->load->view('admin/dashboard');
			}
			else
			{
				$data['error'] = "Password does not match";
				$this->load->view('login',$data);
			}
		}
		else
		{
			$this->load->view('login');
		}
    }	
}

?>
