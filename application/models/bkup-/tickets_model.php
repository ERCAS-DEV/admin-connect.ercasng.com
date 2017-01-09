<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Model		: Ticket model
 * Author		: Ravi Prakash
 * Dated		: 27/05/16
 */

class Tickets_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	/***  Function for New Ticket ***/
	public function new_ticket($data){
		$this->db->insert('tickets', $data);	
		return $this->db->insert_id();
	}
	/****** EOF *****/

	/******** Function for ticket listing **********/
	public function ticket_listing($id){
		$query = $this->db->where(array('user_id'=>$id))->order_by("creation_date", "desc")->get('tickets')->result();
		return $query;	
	
	}	
	/******** EOF *******/
}


