<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add extends CI_Model {

	public function addTo($table_name, $data)	//Dynamic Method to add values to the table
	{
		$result = $this->db->insert($table_name, $data);
		return $result;
	}

	public function updateTo($table_name, $where, $data)	//Dynamic method to update values to the table
	{
		$this->db->where($where);
		$result = $this->db->update($table_name, $data); 
		return $result;
	}
}

/* End of file adder.php */
/* Location: ./application/models/adder.php */