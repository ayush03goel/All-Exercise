<?php

$config = array(
			
			"form_login"=>array(
								array("field"=>"username","label"=>"User Name", "rules"=>"required|trim|alpha"),
                                array("field"=>"password","label"=>"Password", "rules"=>"required|trim")									
							),
			"add_articles"=>array(
								array("field"=>"title","label"=>"Title", "rules"=>"required|trim"),
                                array("field"=>"desc","label"=>"Description", "rules"=>"required|trim"),
                                array("field"=>"created_by","label"=>"Created By", "rules"=>"required")
							)
			);

?>
