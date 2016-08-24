<?php

class Info extends CI_Controller {
	function __construct()      
	{         
		parent::__construct();      
		
		//$this->load->model("info_pages");		
	} 
	function index()
	{
		redirect("welcome");
	}
	/*
	function view($seo_url){		
		$page=$this->info_pages->get_page($seo_url);
		if ($page){
			$TITLE = $page->page_title;	
			$CONTENT=$page->page_content;
			$CONTINUT=$this->parser->parse('template/continut',array("CONTENT"=>$CONTENT,"TITLE"=>$TITLE),TRUE);	
		}
		else
			redirect("welcome");

		$this->parser->parse('template/frame-pagini.php', array( "CONTINUT"=>$CONTINUT), false);
	}
	
	function pricing(){
		$TITLE = "";	
		$CONTENT=$this->parser->parse('pricing',array(),TRUE);		
   		$data = array(
				    	"TITLE"=>$TITLE,
						"CONTENT"=>$CONTENT				
					 );	
		$this->parser->parse("template/fructe",$data);	
	}
*/
}
?>