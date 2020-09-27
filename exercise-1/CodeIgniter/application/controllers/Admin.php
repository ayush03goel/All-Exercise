<?php

class Admin extends MY_Controller
{
	//global $data;
	public function __construct()
	{
		global $data;
		parent::__construct();
		if(!$this->session->userdata('u_id'))
		{
			return redirect('login');
		}
		else
		{
			$data['session'] = $this->session->userdata('u_id');
	        $data['user_name'] = get_cookie('user_name');
		}
	}
	public function dashboard()
	{
		global $data;
		$this->load->model('articles');
		$art = $this->articles->get_articles();
		$data['articles'] = $art;
		$this->load->view("admin/dashboard",$data);
	}

	public function add_article()
	{
		global $data;
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view("admin/add_article",$data);	
	}
	
	public function edit_article($article_id)
	{
		global $data;
        $this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->model('articles');
		$articles = $this->articles->get_article_single($article_id);
		$data['articles'] = $articles;	
        $this->load->view("admin/edit_article",$data);
	}

	public function update_article()
	{
		global $data;
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if($this->form_validation->run('add_articles')== TRUE)
		{
			$array = $this->input->post();
            $this->load->model('articles'); 
            $msg = $this->articles->upd_articles($array);
			$this->session->set_flashdata('feedback',$msg);
            $data['error_msg'] = $msg;
			if($msg == "Record Successfully Updated")
            {
                return redirect("admin/dashboard",$data);
            }
            else
            {
                $this->load->view("admin/edit_article",$data);
            }
		}
		else
		{
			$this->load->view('admin/edit_article',$data);
		}
	}

	public function remove_article($id)
	{
		global $data;
		$this->load->model('articles');
        $msg = $this->articles->delete_article($id);
		$this->session->set_flashdata('feedback',$msg);
		return redirect("admin/dashboard",$data);
	}

	public function store_article()
	{
		global $data;
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run('add_articles')== TRUE)
		{
			$array = $this->input->post();
			$this->load->model('articles');	
			$msg = $this->articles->add_articles($array);
			$this->session->set_flashdata('feedback',$msg);
			$data['error_msg'] = $msg;
			if($msg == "Record Successfully Inserted")
			{
				return redirect("admin/dashboard",$data);
			}
			else
			{
				$this->load->view("admin/add_article",$data);
			}
		}
		else
		{
			//return redirect('admin/add_article',$data);
			$this->load->view('admin/add_article',$data);
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('u_id');
		delete_cookie('user_name');
		return redirect('login');
	}
}
?>

