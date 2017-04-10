<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Fetcher');
		$this->load->helper('inflector');
	}

	public function index()
	{
		$search = $this->input->post('search');
		$data['results'] = $this->Fetcher->book_search($search);	//Fetching search results
		$data['results_count'] = $this->Fetcher->count_search_results($search);	//Counting search results
		if(ucfirst($search) == "Book" || ucfirst(singular($search)) == "Book")	//If the user entered book/books, redirect him to the home page of books
		{
			$data['main_content'] = 'books/home';
			$table_name1 = 'book_detail';
			$table_name2 = 'book_prices';
			$table1_id = 'book_id';
			$table2_id = 'book_id';
			$limit = "LIMIT 3";

			//Set the book category and fetch the results by joining them with the book prices table
			$where = "book_cat = 'Biographies'";
			$data['results_bio'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);
			$where = "book_cat = 'Fiction & Non Fiction'";
			$data['results_fict'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);
			$where = "book_cat = 'Action & Adventure'";
			$data['results_act'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);
			$data['count'] = $this->Fetcher->getCount($table_name1);
		}
		else
			$data['main_content'] = 'search_book';
		$data['keyword'] = $search;
		$this->load->view('includes/template', $data);
	}

	public function author()	//Searching the books using the Author
	{
		$name = $this->input->post('author');
		$where = array(
			'book_author' => $name
			);
		$table_name = 'book_detail';
		$data['result'] = $this->Fetcher->getFrom($table_name, $where);
		$data['main_content'] = 'search';
		$this->load->view('includes/template', $data);
	}

}

/* End of file search.php */
/* Location: ./application/controllers/search.php */