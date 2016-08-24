<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$TITLE="Welcome to ProtoBusiness !";
		$CONTENT=$this->parser->parse("template/Landing_page/Content.php", array(), true);
		$this->parser->parse('template/Landing_page/Skeleton.php', array( "CONTENT"=>$CONTENT, "TITLE"=>$TITLE), false);
	}
}
