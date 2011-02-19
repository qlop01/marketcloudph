<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Item_model extends Model
{
	function insert_item ($item_data)
	{
			// set the fields with their corresponding values to be stored
		$data = array(
			'title' 	=> $item_data['item_title'],
			'status' => $item_data['item_status'],
			'category' => $item_data['item_category'],
			'price'	=> $item_data['item_price'],
			'condition'	=> $item_data['item_condition'],
			'description'	=> $item_data['item_description'],
			'date_posted'	=> now(),
			'date_modified'	=> now(),
			'user_id'	=> $item_data['user_id'],
		);
		
		$result = $this->db->insert('item', $data);
		
		// return if successful or failed
		return $result;
	}
	
	function get_item($item_id)
	{
		$result = $this->db->select('*')->where('id', $item_id)->get('item', 1); 

		// return if successful or failed
		return $result;
	}
	
	function edit_item($item_data)
	{
		$data = array(
			'title' 	=> $item_data['item_title'],
			'status' => $item_data['item_status'],
			'category' => $item_data['item_category'],
			'price'	=> $item_data['item_price'],
			'condition'	=> $item_data['item_condition'],
			'description'	=> $item_data['item_description'],
			'date_modified'	=> now(),
		);
		
		$this->db->where('id', $item_data['item_id']);
		return $this->db->update('item', $data);
	}
	
	function is_user_item($item_id) //checks  if item belongs to a certain user
	{
		$user = $this->ion_auth->get_user();
		
		$array = array('id' => $item_id, 'user_id' => $user->id);
		
		$results = $this->db->select('*')->where($array)->get('item', 1);  //queries the database and pass the results to $results
		
		if($results->num_rows() > 0) // checks if there is an existing row in $results
		{
			return TRUE;  //returns true if rows exists
		}
		else
		{
			return FALSE;  //returns false if it fails
		}	
	}
	
	function delete_item($item_id)
	{
		if($this->is_user_item($item_id) == TRUE || $this->ion_auth->is_admin() ) //checks if its users item or is admin
		{
			return $this->db->where('id', $item_id)->delete('item'); //deletes the said item in the DB
		}
		else
		{
			return FALSE; //returns false if it fails
		}
	}
	
	function item_validation()
	{
		$config = array(
	               array(
	                     'field'   => 'item_title',
	                     'label'   => 'Item title',
	                     'rules'   => 'required|min_length[10]|max_length[100]|xss_clean'
	                  ),
	               array(
	                     'field'   => 'item_status',
	                     'label'   => 'Item status',
	                     'rules'   => 'required|xss_clean'
	                  ),
	               array(
	                     'field'   => 'item_condition',
	                     'label'   => 'Item condition',
	                     'rules'   => 'required|xss_clean|callback_check_if_not_null'
	                  ),   
	               array(
	                     'field'   => 'item_category',
	                     'label'   => 'Item category',
	                     'rules'   => 'required|xss_clean|callback_check_if_not_null'
	                  ),
			   array(
	                     'field'   => 'item_price',
	                     'label'   => 'Item price',
	                     'rules'   => 'numeric|xss_clean'
	                  ),
			   array(
	                     'field'   => 'item_description',
	                     'label'   => 'Item description',
	                     'rules'   => 'required|xss_clean|min_length[10]|max_length[250]'
	                  )
	            );
		 
		return $this->form_validation->set_rules($config); //returns all the rules
	}
	
	function get_items($user_id, $limit, $offset, $sort_by, $sort_order)
	 {
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		$sort_columns = array('id', 'title', 'category', 'price','date_posted');
		$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'title';
		
		// results query
		$query = $this->db->select('id, title, category, price, date_posted')
			->where('user_id',$user_id)
			->limit($limit, $offset)
			->order_by($sort_by, $sort_order)
			->get('item');
			
		$results['rows'] = $query->result();
		
		// count query for pagination
		$query = $this->db->select('COUNT(*) as count', FALSE)
			->get('item');
		
		$tmp = $query->result();
		
		$results['total_rows'] = $tmp[0]->count;
		
		return $results ;
	}
}