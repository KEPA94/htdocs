<?php
class Profile extends CI_Controller {
	
	function __construct()      
		{         
			parent::__construct();      
			$this->load->model("User_model");		
			$this->load->model("Common");			
		} 
		


	public function index(){

			if (isset($_SESSION["logged_in"])){
			$user_id = $_SESSION['user_id'];
			$user    = $this->User_model->get_user($user_id);
			//print_r($user_id);
			//print_r($user);
		// set session user datas
			$_SESSION['user_id']      = (int)$user_id;
			$_SESSION['username']     = (string)$user->username;
			$_SESSION['email']    	  = (string)$user->email;
			//$_SESSION['photo']        = (string)$user->photo;
			$_SESSION['created_at']   = (string)$user->created_at;
			$_SESSION['newsletter']   = (string)$user->newsletter;
			//$_SESSION['logged_in']    = (bool)true;
			//$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
			//$_SESSION['is_admin']     = (bool)$user->is_admin;

		
			$TITLE=$this->parser->parse('template/Account/Myprofile/Title',array('USERNAME'=>$_SESSION['username']),true);
			$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
			$WRAPPER=$this->parser->parse('template/Account/Myprofile/Wrapper',array(),true);
			$CONTENT=$this->parser->parse('template/Account/Myprofile/Content',array("USERNAME"=>$_SESSION['username'],
																					"EMAIL"=>$_SESSION['email'],
																					"PHOTO"=>$_SESSION['photo'],
																					"NEWSLETTER"=>$_SESSION['newsletter']),true);
			$this->parser->parse('template/Account/Myprofile/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
			}
				else {
					redirect("User/Signup");
					}
	}

		public function view($username){
			$users=$this->User_model->get_users();
			$user = $this->User_model->get_username($username);
			if (!in_array($username, $users)) {
					redirect("user_not_found");
				}
				else{
			if (isset($_SESSION["logged_in"])){
				// setting user datas
				$userdata['username'] = (string)$user->username;
				$userdata['email'] = 	(string)$user->email;
				$userdata['created_at'] = (string)$user->created_at;
				//$userdata['photo'] = (string)$user->photo;
				$TITLE=$this->parser->parse('template/Account/OtherProfiles/Title',array('USERNAME'=>$userdata['username']),true);
				$HEADER_SCRIPTS=$this->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
				$WRAPPER=$this->parser->parse('template/Account/OtherProfiles/Wrapper',array(),true);
				$CONTENT=$this->parser->parse('template/Account/OtherProfiles/Content',array("USERNAME"=>$userdata['username'],
																						"EMAIL"=>$userdata['email']),
																						/*"PHOTO"=>$userdata['photo'])*/true);
				$this->parser->parse('template/Account/OtherProfiles/Skeleton',array("CONTENT"=>$CONTENT,"WRAPPER"=>$WRAPPER,"HEADER_SCRIPTS"=>$HEADER_SCRIPTS),false);
		}
		else redirect("User/Signin");
		}
	}
		
}
?>