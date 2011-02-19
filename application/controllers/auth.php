<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! class_exists('Controller'))
{
	class Controller extends CI_Controller {}
}

class Auth extends Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('url');
	}

	//redirect if needed, otherwise display the user list
	function index()
	{
		if (!$this->ion_auth->logged_in()) // check user if he is already logged in
		{
			//redirect them to the members area
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin())
		{
			//redirect them to the home page because they must be an administrator to view this
			redirect('site/members_area', 'refresh');
		}
		else
		{
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->get_users_array();
			$this->data['title'] = 'User list' ;
			$this->data['main_content'] = 'auth/index'; // this loads the auth index view
			$this->load->view('master_page', $this->data);
		}
	}

	//log the user in
	function login()
	{
		if (!$this->ion_auth->logged_in()) // check user if he is already logged in
		{
			
				$this->data['title'] = "Login";
		
				//validate form input
				$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
				$this->form_validation->set_rules('password', 'Password', 'required');
		
				if ($this->form_validation->run() == true)
				{ //check to see if the user is logging in
					//check for "remember me"
					$remember = (bool) $this->input->post('remember');
		
					if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password'), $remember))
					{ //if the login is successful
						//redirect them back to members page
						$this->session->set_flashdata('message', $this->ion_auth->messages());
						//redirect($this->config->item('base_url'), 'refresh');
						redirect('site/members_area', 'refresh');
						
					}
					else
					{ //if the login was un-successful
						//redirect them back to the login page
						$this->session->set_flashdata('message', $this->ion_auth->errors());
						redirect('auth/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
					}
				}
				else
				{  //the user is not logging in so display the login page
					//set the flash data error message if there is one
					$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		
					$this->data['email'] = array('name' => 'email',
						'id' => 'email',
						'type' => 'text',
						'value' => $this->form_validation->set_value('email'),
					);
					$this->data['password'] = array('name' => 'password',
						'id' => 'password',
						'type' => 'password',
					);
					
					$this->data['main_content'] = 'auth/login'; // loads auth/login view
		
					$this->load->view('master_page', $this->data);
				}
		}
		
		else  // if user is logged in redirect them to members area
		{
			redirect('site/members_area','refresh');
		}
	}

	//log the user out
	function logout()
	{
		$this->data['title'] = "Logout";

		//log the user out
		$logout = $this->ion_auth->logout();

		//redirect them back to the page they came from
		redirect('site', 'refresh');
	}

	//change password
	function change_password()
	{
		$this->form_validation->set_rules('old', 'Old password', 'required');
		$this->form_validation->set_rules('new', 'New Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', 'Confirm New Password', 'required');

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		$user = $this->ion_auth->get_user($this->session->userdata('user_id'));

		if ($this->form_validation->run() == false)
		{ //display the form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['old_password'] = array('name' => 'old',
				'id' => 'old',
				'type' => 'password',
			);
			$this->data['new_password'] = array('name' => 'new',
				'id' => 'new',
				'type' => 'password',
			);
			$this->data['new_password_confirm'] = array('name' => 'new_confirm',
				'id' => 'new_confirm',
				'type' => 'password',
			);
			$this->data['user_id'] = array('name' => 'user_id',
				'id' => 'user_id',
				'type' => 'hidden',
				'value' => $user->id,
			);

			$this->data['title'] = 'change password'; 
			$this->data['main_content'] = 'auth/change_password'; // loads auth/changepassword view
			$this->load->view('master_page', $this->data);
		}
		else
		{
			$identity = $this->session->userdata($this->config->item('identity', 'ion_auth'));

			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

			if ($change)
			{ //if the password was successfully changed
				$this->session->set_flashdata('message', $this->ion_auth->messages());
						
				$this->data['main_content'] = 'auth/change_password_successful'; // loads auth/change_password_successful view
				$this->load->view('master_page', $this->data);
			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect('auth/change_password', 'refresh');
			}
		}
	}

	//forgot password
	function forgot_password()
	{
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		if ($this->form_validation->run() == false)
		{
			//setup the input
			$this->data['email'] = array('name' => 'email',
				'id' => 'email',
			);
			//set any errors and display the form
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			
			$this->data['title'] ="Forgot password"; //this displays the title of the page
			$this->data['main_content'] = 'auth/forgot_password';  // this loads the forgot password view
			$this->load->view('master_page', $this->data);
			
		}
		else
		{
			//run the forgotten password method to email an activation code to the user
			$forgotten = $this->ion_auth->forgotten_password($this->input->post('email'));

			if ($forgotten)
			{ //if there were no errors
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				
				$this->data['title'] ="Password reset email sent !"; 
				$this->data['main_content'] = 'auth/forgot_password_successful'; 
				$this->load->view('master_page', $this->data);

			}
			else
			{
				$this->session->set_flashdata('message', $this->ion_auth->errors());
				redirect("auth/forgot_password", 'refresh');
			}
		}
	}

	//reset password - final step for forgotten password
	public function reset_password($code)
	{
		$reset = $this->ion_auth->forgotten_password_complete($code);

		if ($reset)
		{  //if the reset worked then send them to the login page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			
			$this->data['title'] = 'Password reset successful !'; 
			$this->data['main_content'] = 'auth/password_reset_successful'; //Displays password reset confirmation
			$this->load->view('master_page', $this->data);
		}
		else
		{ //if the reset didnt work then send them back to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("auth/forgot_password", 'refresh');
		}
	}

	//activate the user
	function activate($id, $code=false)
	{
		$activation = $this->ion_auth->activate($id, $code);

		if ($activation)// if activation is valid
		{
			//redirect them to the Activation successful page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			
			$this->data['title'] = 'Account Activation Succesful !';  //this displays the title of the page
			$this->data['main_content'] = 'auth/activate_successful';  // this loads the activate successfull view
			$this->load->view('master_page', $this->data);
		}
		else
		{
			//redirect them to the forgot password page
			$this->session->set_flashdata('message', $this->ion_auth->errors());
			redirect("auth/forgot_password", 'refresh');
		}
	}

	//deactivate the user
	function deactivate($id = NULL)
	{
		// no funny business, force to integer
		$id = (int) $id;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('confirm', 'confirmation', 'required');
		$this->form_validation->set_rules('id', 'user ID', 'required|is_natural');

		if ($this->form_validation->run() == FALSE)
		{
			// insert csrf check
			$this->data['csrf'] = $this->_get_csrf_nonce();
			$this->data['user'] = $this->ion_auth->get_user($id);
			
			$this->data['title'] = 'Deactivate User!';  //this displays the title of the page
			$this->data['main_content'] = 'auth/deactivate_user'; // loads auth/deactive_user view
			$this->load->view('master_page', $this->data);
			
		}
		else
		{
			// do we really want to deactivate?
			if ($this->input->post('confirm') == 'yes')
			{
				// do we have a valid request?
				if ($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post('id'))
				{
					show_404();
				}

				// do we have the right userlevel?
				if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin())
				{
					$this->ion_auth->deactivate($id);
				}
			}

			//redirect them back to the auth page
			redirect('auth', 'refresh');
		}
	}

	//create a new user
	function signup()
	{
		if (!$this->ion_auth->logged_in() || $this->ion_auth->is_admin() )
		{
			$this->data['title'] = "Sign Up";
			//validate form input
			$this->form_validation->set_rules('first_name', 'First Name', 'required|xss_clean');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|xss_clean');
			$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|callback_email_check');
			$this->form_validation->set_rules('phone', 'Contact Number', 'required|xss_clean|min_length[7]|max_length[20]');
			$this->form_validation->set_rules('company', 'Company Name', 'required|xss_clean');
			$this->form_validation->set_rules('username', 'Username', 'required|xss_clean|callback_username_check');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
			$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required');
			$this->form_validation->set_rules('cbx_agree', 'I agree', 'callback_agreement_check');
	
			if ($this->form_validation->run() == true)
			{
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
	
				$additional_data = array('first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'company' => $this->input->post('company'),
					'phone' => $this->input->post('phone') ,
					'location' => $this->input->post('location') 
				);
			}
			if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data))
			{ //check to see if we are creating the user
				//redirect them back to the admin page
				$this->session->set_flashdata('message', "User Created");
				redirect("site/index", 'refresh');
			}
			else
			{ //display the create user form
				//set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
	
				$this->data['first_name'] = array('name' => 'first_name',
					'id' => 'first_name',
					'type' => 'text',
					'value' => $this->form_validation->set_value('first_name'),
				);
				$this->data['last_name'] = array('name' => 'last_name',
					'id' => 'last_name',
					'type' => 'text',
					'value' => $this->form_validation->set_value('last_name'),
				);
				$this->data['email'] = array('name' => 'email',
					'id' => 'email',
					'type' => 'text',
					'value' => $this->form_validation->set_value('email'),
				);
				$this->data['company'] = array('name' => 'company',
					'id' => 'company',
					'type' => 'text',
					'value' => $this->form_validation->set_value('company'),
				);
				$this->data['phone'] = array('name' => 'phone',
					'id' => 'phone',
					'type' => 'text',
					'value' => $this->form_validation->set_value('phone'),
				);
				
				$this->data['username'] = array('name' => 'username',
					'id' => 'username',
					'type' => 'text',
					'value' => $this->form_validation->set_value('username'),
				);
				
				$this->data['password'] = array('name' => 'password',
					'id' => 'password',
					'type' => 'password',
					'value' => $this->form_validation->set_value('password'),
				);
				$this->data['password_confirm'] = array('name' => 'password_confirm',
					'id' => 'password_confirm',
					'type' => 'password',
					'value' => $this->form_validation->set_value('password_confirm'),
				);
				
				$this->data['cbx_agree'] = array('name' => 'cbx_agree',
					'id' => 'cbx_agree',
					'value'  => 'accept',
					  'checked'     =>  $this->form_validation->set_checkbox('cbx_agree','accept'),
				);
				
				
				$this->data['main_content'] = 'auth/signup'; // loads auth/signup view
				$this->load->view('master_page', $this->data);
			}
		}
		else
		{
			redirect('site/members_area'); // redirects user to member page if user is logged in
		}
	}

	function _get_csrf_nonce()
	{
		$this->load->helper('string');
		$key = random_string('alnum', 8);
		$value = random_string('alnum', 20);
		$this->session->set_flashdata('csrfkey', $key);
		$this->session->set_flashdata('csrfvalue', $value);

		return array($key => $value);
	}

	function _valid_csrf_nonce()
	{
		if ($this->input->post($this->session->flashdata('csrfkey')) !== FALSE &&
				$this->input->post($this->session->flashdata('csrfkey')) == $this->session->flashdata('csrfvalue'))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	
///////////// My Functions -Alvin Pablo /////////////

	function username_check($username) // function for checking username if exist
	{
		$this->form_validation->set_message('username_check', 'Username  is already taken');
		if (!$this->ion_auth->username_check($username))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	
	function email_check($email)// function for checking email if exist
	{
		$this->form_validation->set_message('email_check', 'Email  is already taken');
		
		if (!$this->ion_auth->email_check($email))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	
	function agreement_check($cbx_agree)// function for checking user agreed to our policy
	{
		$this->form_validation->set_message('agreement_check','Please accept our Policy');
		$agree = 'accept';
		if($cbx_agree == $agree)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	
	function remote_username_check() // checks username if exist for remote validation of jquery
	{
		$username = $this->input->post('username');
		if (!$this->ion_auth->username_check($username))
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}
	}
	
	function remote_email_check()// checks username if exist for remote validation of jquery
	{
		$email = $this->input->post('email');
		if (!$this->ion_auth->email_check($email))
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}
	}

}