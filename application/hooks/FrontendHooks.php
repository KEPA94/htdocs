<?php
class FrontendHooks
{	
  public function cleantemplate()
  {
	/*********************SETUP VARIABLES*********************/
	$CI=&get_instance();
    $this->output=&$CI->output;
    $output=$this->output->get_output();
	$userdata=$CI->session->get_userdata();

	$MENU=array();
	if (!isset($userdata["logged_in"]))
		$MENU=$CI->parser->parse("template/Menus/Not_logged_in_menu",array(),true);
		//$LOGIN_MENU=$CI->parser->parse("template/Login_menu", array(), true);
	else 
		$MENU=$CI->parser->parse("template/Menus/Logged_in_menu",$CI->session->get_userdata() , true);
	
	//$CI->load->model("info_pages");
	//$pagini=$CI->info_pages->toate_paginile();

	/*************PAGE BUILDING*************/

	/*************LANDING PAGE*************/
	$TITLE=$CI->parser->parse("template/Landing_page/Title.php",array(),true);
	$HEADER_SCRIPTS=$CI->parser->parse("template/Landing_page/Header_scripts.php",array("TITLE"=>$TITLE),true);
		//$MENU=$CI->parser->parse("template/Menu", array(/*"PAGINI"=>$pagini,"LOGIN_MENU"=>$LOGIN_MENU*/),true);
	$WRAPPER=$CI->parser->parse("template/Landing_page/Wrapper.php",array("MENU"=>$MENU),true);
	$SLIDER=$CI->parser->parse("template/Landing_page/Slider.php",array(),true);
	$UNDER_SLIDER=$CI->parser->parse("template/Landing_page/Under_slider.php",array(),true);
	$FOOTER=$CI->parser->parse("template/Landing_page/Footer.php",array(),true);
	$FOOTER_SCRIPTS=$CI->parser->parse("template/Landing_page/Footer_scripts.php",array(),true);
	$SCROLL_PRELOADER=$CI->parser->parse("template/Landing_page/Scroll_preloader.php",array(),true);

	/*************ABOUT US*************/

	/*************HOW IT WORKS*************/

	/*************LETS GET STARTED*************/

	/*************SIGN IN*************/

	/*************REGISTER*************/

	/*************TERMS AND CONDITIONS*************/


	//$HEADER_SCRIPTS_FRUCTE=$CI->parser->parse("template/header_scripts_fructe.php",array(),true);
	//$HEADER_SCRIPTS_LEGUME=$CI->parser->parse("template/header_scripts_legume.php",array(),true);
	//$HEADER_SCRIPTS_CEREALE=$CI->parser->parse("template/header_scripts_cereale.php",array(),true);
	//$HEADER_SCRIPTS_CARNE_ANIMALE=$CI->parser->parse("template/header_scripts_carne_animale.php",array(),true);
	//$HEADER_SCRIPTS_SILVICULTURA=$CI->parser->parse("template/header_scripts_silvicultura.php",array(),true);

	//$MENIU=$CI->parser->parse("template/meniu", array("PAGINI"=>$pagini,"LOGIN_MENU"=>$LOGIN_MENU), true);
	//$BUTON_PLUS=$CI->parser->parse("template/buton_plus.php",array(), true);
	//$WRAPPER=$CI->parser->parse("template/wrapper.php",array("MENIU"=>$MENIU),true);
	//$WRAPPER2=$CI->parser->parse("template/wrapper2.php",array("MENIU"=>$MENIU),true);
	//$SLIDER=$CI->parser->parse("template/slider.php",array(),true);
	//$CONTINUT=$CI->parser->parse("template/continut.php",array(),true);
	//$WELCOME_MESSAGE=$CI->parser->parse("welcome_message.php",array(),true);
	
	//$SCROLL_PRELOADER=$CI->parser->parse("template/scroll_preloader.php",array(),true);
	//$FOOTER2=$CI->parser->parse("template/footer2.php",array(),true);
	//$FOOTER=$CI->parser->parse("template/footer.php",array("PAGINI"=>$pagini,"FOOTER2"=>$FOOTER2), true);
	//$FOOTER_SCRIPTS=$CI->parser->parse("template/footer_scripts.php",array(),true);
	if(($CI->session->flashdata('message'))==""){
        $output = str_replace('{message}','',$output);
    }
    else {
        $output = str_replace('{message}',$CI->session->flashdata('message'),$output);
    }
	
	// cleaning ...
	
	/*************LANDING PAGE*************/
	$output = str_replace('{HEADER_SCRIPTS}',$HEADER_SCRIPTS,$output);
		$output = str_replace('{MENU}',$MENU,$output);
	$output = str_replace('{WRAPPER}',$WRAPPER,$output);
	$output = str_replace('{SLIDER}',$SLIDER,$output);
	$output = str_replace('{UNDER_SLIDER}',$UNDER_SLIDER,$output);
	$output = str_replace('{FOOTER}',$FOOTER,$output);
	$output = str_replace('{FOOTER_SCRIPTS}',$FOOTER_SCRIPTS,$output);
	$output = str_replace('{SCROLL_PRELOADER}',$SCROLL_PRELOADER,$output);

	/*************ABOUT US*************/

	/*************HOW IT WORKS*************/

	/*************LETS GET STARTED*************/

	/*************SIGN IN*************/

	/*************REGISTER*************/

	/*************TERMS AND CONDITIONS*************/


	

	//$output = str_replace('{HEADER_SCRIPTS_FRUCTE}',$HEADER_SCRIPTS_FRUCTE,$output);
	/*$output = str_replace('{HEADER_SCRIPTS_LEGUME}',$HEADER_SCRIPTS_LEGUME,$output);
	$output = str_replace('{HEADER_SCRIPTS_CEREALE}',$HEADER_SCRIPTS_CEREALE,$output);
	$output = str_replace('{HEADER_SCRIPTS_CARNE_ANIMALE}',$HEADER_SCRIPTS_CARNE_ANIMALE,$output);
	$output = str_replace('{HEADER_SCRIPTS_SILVICULTURA}',$HEADER_SCRIPTS_SILVICULTURA,$output);

	$output = str_replace('{BUTON_PLUS}',$BUTON_PLUS,$output);
	$output = str_replace('{WRAPPER}',$WRAPPER,$output);
	$output = str_replace('{WRAPPER2}',$WRAPPER2,$output);
	$output = str_replace('{SLIDER}',$SLIDER,$output);
	$output = str_replace('{WELCOME_MESSAGE}',$WELCOME_MESSAGE,$output);
    $output = str_replace('{CONTINUT}',$CONTINUT,$output);*/
   
    $output = str_replace('{TITLE}','',$output);
	$output = str_replace('{CONTENT}','',$output);
	
	//$output = str_replace('{SCROLL_PRELOADER}',$SCROLL_PRELOADER,$output);
	//$output = str_replace('{FOOTER}',$FOOTER,$output);

	//$output = str_replace('{FOOTER_SCRIPTS}',$FOOTER_SCRIPTS,$output);
	$output = str_replace('{ERROR_MSG}','',$output);
	$output = str_replace('{YEAR}',date("Y"),$output);
	
 
 	$site_url = site_url();
    $base_url = base_url();

	$output = str_replace('{BASE_URL}/',$base_url,$output);
    $output = str_replace('{BASE_URL}',$base_url,$output);
    $output = str_replace('{SITE_URL}',$site_url,$output);
	
    //$output = preg_replace('#\{.*?\}#s',"",$output);
    $this->output->set_output($output);
  
}}
?>