<?php

class MY_Controller extends CI_Controller{

	public function validation_rules ()
	{
		$config_array = array(
								array("field"=>"username","label"=>"User Name", "rules"=>"required|trim|alpha"),	
								array("field"=>"password","label"=>"Password", "rules"=>"required|trim")			
				
							);
		return $config_array;
	}

}

?>

