<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Message_Model extends Model 
{
	/* 
	* dont get confused in chain functions such as 
	* $this->db->select()->from()->where()->get(); this is just a shortcut
	* it is the same as 
	* $this->db->select();
	* $this->db->from();
	* $this->db->where();
	* $this->db->get();
	*/

	// just thought of unread messages, do we need to add a field "unread" or something else to be used as a flag so the system can detect wether the message is already read or unread :)
	// gonna try this if it's working, but i think this will work ;)
	private $options;
	// im doing this global variable thing to minimize the redundancy since we are using the same fields for inserting and update, so i thought it would be better if i declare it globally then use it using $this->data *wink*
	private $data = array(
		'sent_to' 	=> $this->options['sent_to'];
		'from'		=> $this->options['from'];
		'date_sent' => $this->options['date_sent'];
		'message'	=> $this->options['message'];
		'user_id'	=> $this->options['user_id'];
	);
	
	public function post_message($this->options = array())
	{	
		$result = $this->db->insert('message', $this->data);
		
		// return if successful or failed
		return $result;
		
		// function name is not final and might be subject for changes
		// will continue later
	}
	
	public function get_message($id)
	{
		// im thinking if i will use join here again, i need to confirm the process and data that are needed to display, so im leaving this for awhile
		// since this is a get_message, means only 1 message will be fetch, it is advisable to limit it to 1 to prevent data flood and it will also speed up the process of selecting rows inside the table
		$result = $this->db->select('*')->where('id', $id)->get('message', 1); 
		
		// this will return all retrived data
		return $result;
		
		// function that will get 1 message (view message)
		// function name is not final and might be subject for changes
		// will continue later
	}
	
	public function get_user_messages($user_id, $limit, $offset)
	{
		// the limit will determine how many data it will retrieve
		// offset will be the starting data that will be retrive (used in paginations) example: the message table has 20 data then you declared the $offset to be 10 so it will retrieve the data starting from 10 onwards
		// not so sure about this, i forgot what i did in our thesis XD
		// this will join two tables, so basically it will retrieve data of both user and message tables
		// the * is subject for changes to filter only needed data to be retrieved
		$this->db->select('*')->join('user', 'user.id = message.user_id');
		
		$this->db->where('message.user_id', $user_id);
		
		$result = $this->db->get('message', $limit, $offset); 
	
		return $result;
	
		// function that will all messages of a user? am i correct? (view all messages)
		// function name is not final and might be subject for changes
		// will continue later
	}
	
	public function get_all_mesages($limit, $offset)
	{
		// the limit will determine how many data it will retrieve
		// offset will be the starting data that will be retrive (used in paginations) example: the message table has 20 data then you declared the $offset to be 10 so it will retrieve the data starting from 10 onwards
		$result = $this->db->get('message', $limit, $offset);
		
		// return if successful or failed
		return $result;
	
		// function that will get all messages. is there a feature that will get all messages of all users? o.o sounds weird lol :) (view all messages)
		// function name is not final and might be subject for changes
		// will continue later
	}
	
	public function update_message($this->options = array())
	{	
		$this->db->where('id', $this->options['id']);
		$result = $this->db->insert('message', $this->data);
	
		// return if successful or failed
		return $result;
	
		// function that will update the user message, but wait! is it allowed for user to update their messages?
		// function name is not final and might be subject for changes
		// will continue later	
	}
	
	public function delete_message($id)
	{
		$result = $this->db->where('id', $id)->delete('message');
		
		// return if successful or failed
		return $result;
		
		// function that will delete message or messages
		// function name is not final and might be subject for changes
		// will continue later
	}
}
