<?php
class Signin extends CI_Controller {

	function __construct()      
		{         
			parent::__construct();      
			$this->load->model("User_model");		
			$this->load->model("Common");
		} 

	public function index(){
		if (isset($_SESSION["logged_in"]))
				redirect("profile");
		else {
			$TITLE=$this->parser->parse('template/User/Signin/Title',array(),true);
			$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
			$WRAPPER=$this->parser->parse('template/User/Signin/Wrapper',array(),true);
			$CONTENT=$this->parser->parse('template/User/Signin/Content',array(),true);
			$this->parser->parse('template/User/Signin/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);}
	}

	public function verify(){


		$data = new stdClass();

		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'username', 'required|alpha_numeric');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() == false) {
			
			if (validation_errors()){
				$this->Common->message_warn(validation_errors());
				$TITLE="Ooops !";
				$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
				$WRAPPER=$this->parser->parse('template/User/Signin/Wrapper',array(),true);
				$CONTENT=$this->parser->parse('template/User/Signin/Content',array(),true);
				$this->parser->parse('template/User/Signin/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
			} 
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			if ($this->User_model->resolve_user_login($username, $password)) {
				
				$user_id = $this->User_model->get_user_id_from_username($username);
				$user    = $this->User_model->get_user($user_id);
				
				// set session user datas
				$_SESSION['user_id']      = (int)$user_id;
				$_SESSION['username']     = (string)$user->username;
				$_SESSION['email']    	  = (string)$user->email;
				$_SESSION['photo']        = (string)$user->photo;
				$_SESSION['created_at']   = (string)$user->created_at;
				$_SESSION['newsletter']   = (string)$user->newsletter;
				$_SESSION['logged_in']    = (bool)true;
				$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				$_SESSION['is_admin']     = (bool)$user->is_admin;

				$this->Common->message_done("<br> Now let's prepare your account for the first use :D");
				redirect("welcome");

			} else {
				
			// login failed

			$this->Common->message_warn("<br> An unexpected error occured ! Please try again later.");	
			$TITLE="Ooops !";
			$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
			$WRAPPER=$this->parser->parse('template/User/Signin/Wrapper',array(),true);
			$CONTENT=$this->parser->parse('template/User/Signin/Content',array(),true);
			$this->parser->parse('template/User/Signin/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
			}
		}	
		}
}//class ends
?>