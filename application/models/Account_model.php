<?php

class Account_model extends CI_Model
{
	private $table_name = 'users';

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('id');
	}

	public function getAccountData()
	{
		$query = $this->db->where('id', $this->user_id)->get($this->table_name);

		return $query->row_array();
	}

	public function editAccountData()
	{
		$data = array(
			'first_name' => $this->input->post('settings_first_name'),
			'last_name'  => $this->input->post('settings_last_name'),
			'email'      => $this->input->post('settings_email'),
		);

		$this->db->where('id', $this->user_id)->update($this->table_name, $data);
	}

	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->or_where('email', $username);

		$query = $this->db->get();

		return $query->row_array();
	}

	public function register($data)
	{
		$this->db->insert('users', $data);
	}

}