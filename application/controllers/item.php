<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends Controller 
{

	public function __construct()
	{
	        parent::Controller();
	        $this->load->model('item_model'); // loads item model
   	 }
	
	function post()
	{
		$this->ion_auth->is_logged_in_redirect(); // check if user is logged in
		
		//set data fields for post_item view
		$data['item_status_option'] = array(
				'For sale' => 'For sale',
				 'Looking for' => 'Looking for',
		);
		$data['item_category_option'] = array(
			'NULL' => 'Select a category',
			'Automobile' => 'Automobile', 
			'Electronics' => 'Electronics', 
			'Books' => 'Books', 
			'Clothes' => 'Clothes'
		);
		$data['item_condition_option'] = array(
			'Brand new' => 'Brand new',
			'Already used' => 'Already used', 
		);
		$data['item_title'] = array('name' => 'item_title',
			'id' => 'item_title',
			'type' => 'text',
			'maxlength'   => '100',
			'size' => '50',
			'value' => $this->form_validation->set_value('item_title'), //re-populate  item_title the user commits any errors upon submission of the post		
		);
		
		$data['item_price'] = array('name' => 'item_price',
			'id' => 'item_price',
			'type' => 'text',
			'value' => $this->form_validation->set_value('item_price'),//re-populate item_price if the user commits any errors upon submission of the post
		);
		
		$data['item_description'] = array('name' => 'item_description',
			'id' => 'item_description',
			'type' => 'text',
			'rows' => '5',
			'cols' => '50',
			'value' => $this->form_validation->set_value('item_description'),//re-populate item_description if the user commits any errors upon submission of the post
		);
		
		$data['title'] = "Post an Item"; // sets the title of the page
		$data['main_content'] = 'includes/post_item'; // loads post_item view
		$this->load->view('master_page', $data); //pass all the data inside $data to master page
	}
	
	function add()
	{
		$this->item_model->item_validation(); // gets all the item validation rules from item_model
		
		if ($this->form_validation->run() == true)
		{
			$user = $this->ion_auth->get_user(); // gets user data 
			$item_data = array( //puts all the inputs of the user into $item_data 
					'item_title' => $this->input->post('item_title'),
					'item_status' => $this->input->post('item_status'),
					'item_condition' => $this->input->post('item_condition'),
					'item_category' => $this->input->post('item_category'),
					'item_price' => $this->input->post('item_price'),
					'item_description' => $this->input->post('item_description'),
					'user_id' => $user->id,
					//'post_duration' = $this->input->post('post_duration');<-- will add this function later
				);
			
			if($this->item_model->insert_item( $item_data)) //inserts all the data for $item_data into database
			{
				redirect("item/post_succesfull", 'refresh');
			}
			else
			{
				redirect("item/post", 'refresh');
			}
		}
		else
		{
			$this->post(); // this loads function post if item validation fails
		}
	}
	
	function view()
	{
		$item_id = $this->uri->segment(3,0); //gets the value of the 3rd segment that will be used for item_id	
		if($item_id == 0)
		{
			redirect("site/members_area", 'refresh'); //if there no 3rd segment value redirect them to the members area
		}
		else
		{
			$results = $this->item_model->get_item($item_id); //puts all records retrieved from item_model to $results			
			if($results->num_rows() > 0) //checks if $results has any rows
			{
				foreach ($results->result_array() as $row) //if any rows exists it will execute foreach to put all the item_data into an array
				{
					$data['item_data'] = array(
						'title' => $row['title'],
						'condition' => $row['condition'],
						'status' => $row['status'],
						'category' => $row['category'],
						'description' => $row['description'],
						'price' => $row['price'],
						'date_posted' => unix_to_human($row['date_posted']),  //converts unix timestamp from DB to Human form
						'date_modified' => unix_to_human($row['date_modified']),  //converts unix timestamp from DB to Human form
					);
				
				}

				$data['title'] = 'View Item'; // sets the title of the page
				$data['main_content'] = 'includes/view_item'; // loads view_item view
				$this->load->view('master_page', $data);  //pass all the data inside $data to master page
			}
			
			else
			{	
				redirect("site/members_area", 'refresh');
			}
		}
	}
	
	function edit($item_id = NULL)
	{	
		$this->ion_auth->is_logged_in_redirect(); // check if user is logged in
		
		if($item_id == NULL) 
		{
			$item_id = $this->uri->segment(3,0); // gets the item_id from 3rd segment of the URI if NULL
		}
	
		//set data fields for post_item view
		$data['item_status_option'] = array(
				'For sale' => 'For sale',
				 'Looking for' => 'Looking for',
		);	
		$data['item_category_option'] = array(
			'NULL' => 'Select a category',
			'Automobile' => 'Automobile', 
			'Electronics' => 'Electronics', 
			'Books' => 'Books', 
			'Clothes' => 'Clothes'
		);
		$data['item_condition_option'] = array(
			'Brand new' => 'Brand new',
			'Already used' => 'Already used', 
		);
					
		$results = $this->item_model->get_item($item_id); //puts all data retrieved from item_model to $results

		if($results->num_rows() > 0) //checks if $results has any rows
		{
			foreach ($results->result_array() as $row)//populates the form foreach data retrived from DB
			{
				$data['item_title'] = array('name' => 'item_title',
					'id' => 'item_title',
					'type' => 'text',
					'maxlength'   => '100',
            				'size' => '50',
					'value' => $row['title'] ,
				);
				
				$data['item_price'] = array('name' => 'item_price',
					'id' => 'item_price',
					'type' => 'text',
					'value' => $row['price'],
				);
				
				$data['item_description'] = array('name' => 'item_description',
					'id' => 'item_description',
					'type' => 'text',
					'rows' => '5',
					'cols' => '50',
					'value' =>$row['description'] ,
				);
				
				$data['selected_item_status'] = $row['status'];
				$data['selected_item_category'] = $row['category'];
				$data['selected_item_condition'] = $row['condition'];
				$data['item_id'] = $row['id'];
				
				$data['title'] = "Edit an item"; // sets the title of the page
				$data['main_content'] = 'includes/edit_item'; // loads post_item view
				$this->load->view('master_page', $data);
			}
		}
		else
		{
			redirect("item/post", 'refresh'); //redirects to item post if item does not exist
		}
	}
	
	function update()
	{
		$this->ion_auth->is_logged_in_redirect(); // check if user is logged in
		
		$item_id = $this->input->post('item_id'); // gets the item_id form the hidden field inside the form
		
		if($this->item_model->is_user_item($item_id) == TRUE || $this->ion_auth->is_admin() ) // checks if this item belongs to the user or is admin
		{
			$this->item_model->item_validation();

			if ($this->form_validation->run() == true)
			{
				$item_data = array(
						'item_title' => $this->input->post('item_title'),
						'item_status' => $this->input->post('item_status'),
						'item_condition' => $this->input->post('item_condition'),
						'item_category' => $this->input->post('item_category'),
						'item_price' => $this->input->post('item_price'),
						'item_description' => $this->input->post('item_description'),
						'item_id' => $item_id,
						);
					
				if($this->item_model->edit_item($item_data))
				{
					redirect("item/edit_succesfull", 'refresh');
				}
				else
				{
					redirect("item/post", 'refresh');
				}
			}
			else
			{
				$this->edit($item_id); // this loads function post if item validation fails
			}
		}
	}
	
	function delete()
	{
		if($this->ion_auth->logged_in() == TRUE) // checks if user is logged in
		{
			$item_id = $this->uri->segment(3,0); //gets the value of the 3rd segment that will be used for item_id
			if($this->item_model->delete_item($item_id) == TRUE)
			{
				redirect("site/members_area", 'refresh'); 
			}
			else
			{
				redirect("item/post", 'refresh');
			}
		}
		else
		{
			redirect("site/members_area", 'refresh');
		}
	}
	
	function user_items($sort_by = 'date_posted', $sort_order = 'asc', $offset = 0)
	{
		$user_id = $this->uri->segment(3,0);
		$limit = 2;
		$data['fields'] = array(
			'title' => 'Title',
			'category' => 'Category',
			'price' => 'Price',
			'date_posted' => 'Date posted'
		);
		
		$results = $this->item_model->get_items($user_id,$limit, $offset, $sort_by, $sort_order);
		
		$data['item_data'] = $results['rows'];
		$data['total_rows'] = $results['total_rows'];
		// pagination
		$this->load->library('pagination');
		
		$config = array(
			'base_url' => site_url("item/user_items/$user_id/$sort_by/$sort_order"),
			'per_page' => $limit,
			'total_rows' => $data['total_rows'],
			'uri_segment' => 6,
		);
			$this->pagination->initialize($config);
			$data['pagination'] = $this->pagination->create_links();
		
		$data['sort_by'] = $sort_by;
		$data['sort_order'] = $sort_order;
		$data['user_id'] = $user_id;

		$data['title'] = 'User Items';// sets the title of the page
		$data['main_content'] = 'includes/user_items'; // loads user_items view
		$this->load->view('master_page', $data);
	}
	
	function post_succesfull()
	{
		$data['title'] = 'Item post successful !';// sets the title of the page
		$data['main_content'] = 'includes/post_item_successfull'; // loads post_item_successfull view
		$this->load->view('master_page', $data);
	}
	
	function edit_succesfull()
	{
		$data['title'] = 'Edit item successful !';// sets the title of the page
		$data['main_content'] = 'includes/edit_item_successfull'; // loads edit_item_successfull view
		$this->load->view('master_page', $data);
	}
	
	function check_if_not_null($str) //used to check if user have entered a category.
	{
		if ($str == 'NULL')
		{
			$this->form_validation->set_message('check_if_not_null','Please select a category !');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}