<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Common extends CI_Model {
       function __construct()
            {
                parent::__construct();
            }
    
    function message_done($message)
        {
            $this->session->set_flashdata('message','<div class="alert alert-success margin-bottom-30 col-md-4">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
	        <strong>Well done !</strong>'.$message.'</div>');
        }

    function message_error($message)
        {
            $this->session->set_flashdata('message','<div class="alert alert-danger margin-bottom-30 col-md-4">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               <strong>Error !</strong>'.$message.'</div>');
        }

    function message_info($message)
        {
           $this->session->set_flashdata('message','<div class="alert alert-info margin-bottom-30 col-md-4">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               <strong>Info !</strong>'.$message.'</div>');
        }

    function message_warn($message)
        {
            $this->session->set_flashdata('message','<div class="alert alert-warning margin-bottom-30 col-md-4">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
               <strong>Warning !</strong>'.$message.'</div>');
        }

	/*function get_textarea($name)
        {
            $data = str_replace("../","",$this->input->post($name));
            $data =  str_replace("tinymce","{BASE_URL}/tinymce",$data);
            return $data;
        }
	/*
	function create_or_login($user_profile){
		$fbid=$user_profile["id"];
		$id_user=$this->check_if_user_exists("fbid", $fbid);
		if (!$id_user)
			$id_user=$this->check_if_user_exists("email",$user_profile["email"]);
		
		if(!$id_user){
			// create user
			$u=array("first_name"=>$user_profile["first_name"], 
					 "last_name"=>$user_profile["last_name"],
					 "email"=>$user_profile["email"],
					 "username"=>$user_profile["email"],
					 "photo"=>"https://graph.facebook.com/".$fbid."/picture?type=large",
					 "facebook"=>$user_profile["link"],
					 "create_date"=>date("Y-m-d H:i:s"),
					 "fbid"=>$fbid);
			$this->db->insert("users", $u);
			$id_user=$this->db->insert_id();
		}
				
		return $id_user;
	}
	 
	function check_if_user_exists($field, $value){
		$usr= $this->db->get_where('users', array($field => $value))->row();		
		if (sizeof($usr))
			return $usr->id_user;
		return false;
		
	}
	
	function check_if_user_exists_multiple($fields){
		$usr= $this->db->get_where('users', $fields)->row();
		if (sizeof($usr))
			return $usr->id_user;
		return false;
		
	}*/
}
?>