<?php
class Signup extends CI_Controller {

	function __construct()      
	{         
		parent::__construct();      
		$this->load->model("User_model");		
		$this->load->model("Common");	
	} 

	public function index()
	{
		if (isset($_SESSION["logged_in"]))
				redirect("myprofile");
			else {
			$TITLE=$this->parser->parse('template/User/Signup/Title',array(),true);
			$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
			$WRAPPER=$this->parser->parse('template/User/Signup/Wrapper',array(),true);
			$CONTENT=$this->parser->parse('template/User/Signup/Content',array(),true);
			$this->parser->parse('template/User/Signup/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
		}
}

	public function proceed(){
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_rules('username', 'username', 'trim|required|alpha_numeric|min_length[4]|max_length[20]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|max_length[30]|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'password', 'trim|min_length[6]|max_length[20]|callback_password_check');
		//$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('password_confirm', 'confirm password', 'trim|required|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
		// validation not ok, send validation errors to the view
		 if (validation_errors()){
			 $this->Common->message_warn(validation_errors());
			 } 

		$TITLE="Ooops !";
		$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
		$WRAPPER=$this->parser->parse('template/User/Signup/Wrapper',array(),true);
		$CONTENT=$this->parser->parse('template/User/Signup/Content',array(),true);
        $this->parser->parse('template/User/Signup/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
			
		} else {
			
			// set variables from the form
			$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			$newsletter = $this->input->post('newsletter');
			//if the signup is successfull, automatically login the user
			if ($this->User_model->create_user($username, $email, $password, $newsletter)){
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
					redirect("myprofile");
			}//login ends here
		} else {
				
			// user creation failed, this should never happen
			$TITLE="An unexpected error occured ! Please try again later.";
			$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
			$WRAPPER=$this->parser->parse('template/User/Signup/Wrapper',array(),true);
			$CONTENT=$this->parser->parse('template/User/Signup/Content',array(),true);
			$this->parser->parse('template/User/Signup/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
			}
			
		}
	}

	public function password_check($password)
        {
				 if (preg_match('#[0-9]#', $password) && preg_match('#[a-zA-Z]#', $password)) {
						return TRUE;
					}
					else{
						 $this->form_validation->set_message('password_check', 'The {field} must contain [0-9], [A-Z] and [a-z] characters.');
						 return FALSE;
					}	
        }
}
?>