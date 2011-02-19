<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends Controller 
{
	function index(){
	
		$this->data['title']="Welcome to Marketcloudph";
		$this->data['main_content']="includes/main_content";
		$this->load->view('master_page', $this->data);
	}

	function members_area()
	{
	
	$this->load->library('ion_auth');
		if (!$this->ion_auth->logged_in()){
			redirect('login');
		}
		
		else{
					
		$this->data['title']="Marketcloudph";
		$this->data['main_content']="includes/logged_in_area";
		$this->load->view('master_page', $this->data);
		}
		
	}
	
	function policy_page()
	{

		$this->data['title']="Marketcloudph Policy";
		$this->data['main_content']="includes/policy_page";
		$this->load->view('master_page', $this->data);
	}
	
	function rules_page()
	{
		$this->data['title']="Marketcloudph Rules on Posting";
		$this->data['main_content']="includes/rules_page";
		$this->load->view('master_page', $this->data);
	}
	
}
