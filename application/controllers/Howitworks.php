<?php
class Howitworks extends CI_Controller {
	public function index()
	{
		$TITLE=$this->parser->parse('template/Howitworks/Title',array(),true);
		$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
		$WRAPPER=$this->parser->parse('template/Howitworks/Wrapper',array(),true);
		$CONTENT=$this->parser->parse('template/Howitworks/Content',array(),true);
        $this->parser->parse('template/Howitworks/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
	}
}
?>