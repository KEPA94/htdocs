<?php
class Signin extends CI_Controller {
	public function index()
	{
	if (isset($userdata["logged_in"]))
			redirect("welcome");//or my account
	else {
		$TITLE=$this->parser->parse('template/Signin/Title',array(),true);
		$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
		$WRAPPER=$this->parser->parse('template/Signin/Wrapper',array(),true);
		$CONTENT=$this->parser->parse('template/Signin/Content',array(),true);
        $this->parser->parse('template/Signin/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);}
	}
}
?>