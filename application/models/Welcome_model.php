<?php
class Welcome_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function insert_contact_form($data)
	{
		$this->db->insert('contact_form', $data);
		return $this->db->insert_id();
	}

	public function insert_booking_form($data)
	{
		$this->db->insert('booking_form', $data);
		return $this->db->insert_id();
	}
}