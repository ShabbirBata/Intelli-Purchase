<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

	function __construct()	//Constructor to load all the necessary models for usage
	{
		parent::__construct();
		$this->load->model('Fetcher');
		$this->load->model('Add');
	}

	public function home()
	{
		$data['main_content'] = 'books/home';
		$table_name1 = 'book_detail';	//Setting the Conditions
		$table_name2 = 'book_prices';
		$table1_id = 'book_id';
		$table2_id = 'book_id';
		$limit = "LIMIT 3";		//Setting limits and where clause
		$where = "book_cat = 'Biographies'";
		$data['results_bio'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);	//Joining book_detail and book_prices table to produce one array result
		$where = "book_cat = 'Fiction & Non Fiction'";
		$data['results_fict'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);
		$where = "book_cat = 'Action & Adventure'";
		$data['results_act'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);
		$data['count'] = $this->Fetcher->getCount($table_name1);	//Getting count of all the rows in the book_detail table
		$this->load->view('includes/template', $data);
	}

	public function index($id)	//Dynamic method to load results as per their primary key on the same page
	{
		$data['main_content'] = 'books/index';	//The main file that gets loaded in the view
		$table_name = 'book_detail';
		$where = array(	//setting the where clause using Associative array
			'book_id' => $id
			);
		//Fetching book results and prices
		$data['result_book'] = $this->Fetcher->getFrom($table_name, $where);
		
		$table_name = 'book_prices';
		$data['results2'] = $this->Fetcher->getFrom($table_name, $where);

		$poll = 'poll';
		$where = array(	//Checking if the user already submitted the poll to the current book being displayed
			'prod_id' => $id,
			'user_id' => $this->session->userdata('u_id')
			);
		$data['poll'] = $this->Fetcher->getFrom($poll, $where);
		
		$where = array(	//setting the where clause to fetch reviews associated with the product id
			'prod_id' => $id
			);
		$table_name = 'reviews';
		$data['result_reviews'] = $this->Fetcher->getFrom($table_name, $where);
		$this->load->view('includes/template', $data);	//After all the data has been fetched, dump them into our template.
	}	

	public function biographies()	//Fetching the books via categories and displaying it on their specific pages categorically
	{
		$data['main_content'] = 'books/biographies';
		$table_name1 = 'book_detail';
		$table_name2 = 'book_prices';
		$table1_id = 'book_id';
		$table2_id = 'book_id';
		$limit = "";
		$where = "book_cat = 'Biographies'";
		$data['results'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);
		$this->load->view('includes/template', $data);
	}

	public function action()
	{
		$data['main_content'] = 'books/action';
		$table_name1 = 'book_detail';
		$table_name2 = 'book_prices';
		$table1_id = 'book_id';
		$table2_id = 'book_id';
		$limit = "";
		$where = "book_cat = 'Action & Adventure'";
		$data['results'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);
		$this->load->view('includes/template', $data);
	}

	public function fiction()
	{
		$data['main_content'] = 'books/fiction';
		$table_name1 = 'book_detail';
		$table_name2 = 'book_prices';
		$table1_id = 'book_id';
		$table2_id = 'book_id';
		$limit = "";
		$where = "book_cat = 'Fiction & Non Fiction'";
		$data['results'] = $this->Fetcher->getJoinWhere($table_name1, $table_name2, $table1_id, $table2_id, $where, $limit);
		$this->load->view('includes/template', $data);
	}

	public function poll()	//Poll gets submitted to this method
	{
		if($this->is_logged_in())	//checking for user login status
		{		
			$answer = $this->input->post('poll');
			$bookid = $this->input->post('book-id');
			$userid = $this->session->userdata('u_id');
			$table_name = 'poll';

			$add = array(	//Generating associative array for data to be dumped in the DB table
				'prod_id' => $bookid,
				'user_id' => $userid,
				'answer' => $answer
				);

			$results = $this->Add->addTo($table_name, $add);	
			if($results)	//if the data gets added
			{
				$msg = "Your opinion has been submitted successfully.";
			}
			else 	//if not
			{
				$msg = "There is some error. Please try again after some time.";
			}
		}
		else 	//if the user wasnt logged in.
		{
			$msg = "You need to log in to post a poll";
		}
		$this->finish($msg);	//Once this is finished, we call a generic finish method which takes care of what to do next
	}

	private function finish($msg)
	{
		//Generic method for Displaying Alert pop up boxes.
		$message = "<script>alert('".$msg."')</script>";
		echo $message;	//displaying alert message.
		$referrer = $this->agent->referrer();
		redirect($referrer, 'refresh'); //Redirecting the user to the previous page.
	}

	private function is_logged_in()	//Checking if the user is logged in or not
	{
		if($this->session->userdata('is_logged_in'))
		{
			return true;
		}
		else
			return false;
	}
}

/* End of file books.php */
/* Location: ./application/controllers/books.php */