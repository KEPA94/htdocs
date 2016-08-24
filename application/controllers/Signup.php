<?php
class Signup extends CI_Controller {
	public function index()
	{
		if (isset($userdata["logged_in"]))
			redirect("welcome");//or my account
	else {
		$TITLE=$this->parser->parse('template/Signup/Title',array(),true);
		$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
		$WRAPPER=$this->parser->parse('template/Signup/Wrapper',array(),true);
		$CONTENT=$this->parser->parse('template/Signup/Content',array(),true);
        $this->parser->parse('template/Signup/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
	}
	}
}
?>