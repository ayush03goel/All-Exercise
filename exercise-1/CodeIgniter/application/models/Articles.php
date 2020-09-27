<?php
class Articles extends CI_Model{

	public function get_articles()
	{
		$rows = $this->db->get_where('articles',array('status'=>'0'));
		return $rows->result_array();
	}
	
	public function add_articles($array)
	{
		$data['title'] = $array['title'];
		$data['body'] = $array['desc'];
		$data['created_by'] = $array['created_by'];
		$q = $this->db->get_where('articles',array('title'=>$data['title']));
		if($q->num_rows()>0)
		{
			$msg = "Record Alreday exist";
		}
		else
		{
			$rows = $this->db->insert('articles',$data);
			$insert_id = $this->db->insert_id();
			if($insert_id)
				$msg = "Record Successfully Inserted";
			else
				$msg = "Error";
		}
		return $msg;
	}

	public function upd_articles($array)
    {
        $data['title'] = $array['title'];
        $data['body'] = $array['desc'];
        $data['created_by'] = $array['created_by'];
		$id = $array['id'];
        $q = $this->db->get_where('articles',array('id'=>$id));
        if($q->num_rows()>0)
        {
            $this->db->where('id',$id);
			$q = $this->db->update('articles',$data);
			if($q)
				$msg = "Record Successfully Updated";
			else
				$msg = "Error";
        }
        else
        {
                $msg = "Error";
        }
        return $msg;
    }

	function delete_article($id)
	{
		$q = $this->db->delete('articles',array('id'=>$id));
		if($q)
			$msg = "Record Successfully deleted";
		else
			$msg = "Record Not deleted";
		return $msg;
	}	
	
	public function get_article_single($id)
	{
		$this->db->select('id,title,body,created_by');
		$q = $this->db->get_where('articles',array('id'=>$id));
		return $q->result_array();
	}
}

?>
