<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Controller 
{

	function view(){
	
		$this->ion_auth->is_logged_in_redirect();
		$this->data['title']="Profile";
		$this->data['user']=$this->ion_auth->get_user_array();//gets user data from the database
		$this->data['main_content']="includes/view_user";
		$this->load->view('master_page', $this->data);

	}

	function update()
	{
		$this->ion_auth->is_logged_in_redirect();
		$this->load->library('form_validation'); //load validation library
		$this->form_validation->set_rules('first_name', 'First name', 'required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Surname', 'required|xss_clean');
		$this->form_validation->set_rules('phone', 'Contact #', 'required|xss_clean|min_length[7]|max_length[20]');
		if ($this->form_validation->run() == TRUE)//checks if there are no rules voilated
		{
			$user=$this->ion_auth->get_user();
			$id = $user->id;
			$data = array( //puts all the inputs of the user into $user_data 
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'location' => $this->input->post('location'),
					'company' => $this->input->post('company'),
					'phone' => $this->input->post('phone'),
					
			);
			if ($this->form_validation->run() == true && $this->ion_auth->update_user($id, $data))//checks if there are no rules voilated and if data is updated
			{
				$this->data['title'] = "Update Successfull";
				$this->data['main_content'] = 'includes/edit_user_successfull'; // loads success page for update user
				$this->load->view('master_page', $this->data);
			}
			else
			{
				$this->edit();
			}	
		}
		else
		{
			$this->edit();
		}
	}

	function edit()
	{
		$user = $this->ion_auth->get_user_array();
		$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
		$this->data['title'] = "Edit Profile";
		$this->data['first_name'] = array('name' => 'first_name',
			'id' => 'first_name',
			'type' => 'text',
			'maxlength'   => '100',
			'size' => '50',
			'value' => $user['first_name'], 
		);
		$this->data['last_name'] = array('name' => 'last_name',
			'id' => 'last_name',
			'type' => 'text',
			'maxlength'   => '100',
			'size' => '50',
			'value' => $user['last_name'], 
		);
		$this->data['company'] = array('name' => 'company',
			'id' => 'company',
			'type' => 'text',
			'maxlength'   => '100',
			'size' => '50',
			'value' => $user['company'], 
		);
		$this->data['phone'] = array('name' => 'phone',
			'id' => 'phone',
			'type' => 'text',
			'maxlength'   => '100',
			'size' => '50',
			'value' => $user['phone'], 
		);

		$this->data['main_content'] = 'auth/edit_user'; // loads post_item view
		$this->load->view('master_page', $this->data); // passes all the data into master page view
	}
	
}