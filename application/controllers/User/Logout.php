<?php
class Logout extends CI_Controller {
	public function index(){		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}
			// user logout ok
            redirect("welcome");
			
		} else {
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('/');
		}
    }
}
?>