<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fetcher extends CI_Model {

	public function getFrom($table_name, $where=NULL)	//Dynamic method to get values from the table
	{
		if($where)
		{
			$this->db->where($where);
		}	
		$result = $this->db->get($table_name);
		return $result->result();
	}

	public function email_availability($email)		//Checking email availability
	{
		$this->db->where('u_email', $email);
		$result = $this->db->get('users');
		return $result->result();		
	}

	public function getCount($table_name)	//Counting all the rows in a table
	{
		$result = $this->db->count_all($table_name);
		return $result;
	}

	public function incrementor($table_name, $uid)	//Incrementing a value from the table
	{
		$query = "UPDATE ".$table_name." SET u_rev_posted = u_rev_posted+1 WHERE u_id = ".$uid;

		$result = $this->db->query($query);
		return $result;
	}

	public function getJoinWithOffset($table_name1, $table_name2, $table1_id, $table2_id, $limit, $offset)	//Get details and Join 2 tables
	{
		$query = "SELECT * FROM $table_name1 as a JOIN $table_name2 as b ON a.$table1_id = b.$table2_id LIMIT $offset, $limit";

		$query = $this->db->query($query);
		return $query->result();
	}

	public function getJoinPoll($table_name1, $table_name2, $table_name3, $table1_id, $table2_id, $table3_id, $table3_id_matcher)	//Get details and Join 3 tables
	{
		$query = "SELECT * FROM $table_name1 as a JOIN $table_name2 as b JOIN $table_name3 as c ON a.$table1_id = b.$table2_id and c.$table3_id = $table3_id_matcher";

		$query = $this->db->query($query);
		return $query->result();
	}


	public function getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit = NULL)	//Get exact detail needed while joining 2 table and setting the limit
	{
		$query = "SELECT * FROM $table_name1 as a JOIN $table_name2 as b ON a.$table1_id = b.$table2_id where $where $limit";

		$query = $this->db->query($query);
		return $query->result();
	}

	public function book_search($keyword)	//Main book search function with 2 filters
	{
		$this->db->like('book_title', $keyword);
		$this->db->or_like('book_author', $keyword);
		$this->db->or_like('book_publisher', $keyword);
		$this->db->or_like('book_pubyear', $keyword);

		$result = $this->db->get('book_detail');
		return $result->result();
	}

	public function count_search_results($keyword)	//Counting search results
	{
		$this->db->like('book_title', $keyword);
		$this->db->or_like('book_author', $keyword);
		$this->db->or_like('book_publisher', $keyword);
		$this->db->or_like('book_pubyear', $keyword);

		$count = $this->db->count_all_results('book_detail');
		return $count;
	}

	public function product_rated($url)	//Fetching disting products
	{
		$this->db->distinct('prod_id');
		$where = array(
			'rev_url' => $url
			);
		$this->db->where($where);
		$this->db->get('reviews');
		$result = $this->db->count_all_results();
		return $result;
	}

	public function getLimit($table_name, $limit, $orderby)	//Getting table details using the limit
	{
		$orderby = explode(",", $orderby);
		$this->db->order_by($orderby[0], $orderby[1]); 
		$this->db->limit($limit);
		$result = $this->db->get($table_name);
		return $result->result();
	}

	public function getFromWithOffset($table_name, $limit, $offset)
	{
		$result = $this->db->get($table_name, $limit, $offset)->result();
		return $result;
	}
}

/* End of file fetcher.php */
/* Location: ./application/models/fetcher.php */