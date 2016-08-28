<?php
class Errors extends CI_Controller {
	public function index(){
         $this->parser->parse('template/Error_messages/Page_not_found.php',array(),false);
    }

    function user_not_found(){
        $this->parser->parse('template/Error_messages/User_not_found.php',array(),false);
    }
}
?>