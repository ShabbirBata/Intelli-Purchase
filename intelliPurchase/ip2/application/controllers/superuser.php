<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Superuser extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
		$this->load->model('Fetcher');
		$this->load->helper('url');
	}

	public function index()	//Dashboard which displays stats
	{
		$data['active'] = 'dashboard';
		$data['main_content'] = 'superuser/home';
		$data['results'] = $this->Fetcher->getCount('book_detail');
		$data['results1'] = $this->Fetcher->getCount('poll');
		$data['results2'] = $this->Fetcher->getCount('reviews');
		$data['results3'] = $this->Fetcher->getCount('feedback');
		$orderby = "book_id, DESC";
		$data['results4'] = $this->Fetcher->getLimit('book_detail', 5, $orderby);
		$this->load->view('includes/template_su', $data);
	}

	public function feedback($page_id = NULL)
	{	
		//Fetching the submitted feedbacks
		$data['active'] = 'feedback';
		
		$offset = 0;

		if($page_id == NULL)
			$offset = 0;
		else
			$offset = ($page_id * 10);
		
		$limit = 10;
		$data['results'] = $this->Fetcher->getFromWithOffset('feedback', $limit, $offset);
		$data['results_count_total'] = $this->Fetcher->getCount('feedback');
		$data['main_content'] = 'superuser/feedback';
		// print_r($data);
		$this->load->view('includes/template_su', $data);
	}

	public function reviews($page_id = NULL)
	{
		//Fetching the submitted reviews
		$data['active'] = 'reviews';

		$offset = 0;

		if($page_id == NULL)
			$offset = 0;
		else
			$offset = ($page_id * 10);
		
		$limit = 10;

		$table_name1 = 'book_detail';
		$table_name2 = 'reviews';
		$table1_id = 'book_id';
		$table2_id = 'prod_id';
		$data['results'] = $this->Fetcher->getJoinWithOffset($table_name1, $table_name2, $table1_id, $table2_id, $limit, $offset);
		$data['results_count_total'] = $this->Fetcher->getCount('reviews');
		$data['main_content'] = 'superuser/reviews';
		$this->load->view('includes/template_su', $data);
	}

	public function poll($page_id = NULL)
	{
		//Fetching the submitted poll by joining 3 tables
		$data['active'] = 'polls';

		$offset = 0;

		if($page_id == NULL)
			$offset = 0;
		else
			$offset = ($page_id * 10);
		
		$limit = 10;

		$table_name1 = 'book_detail';
		$table_name2 = 'poll';
		$table_name3 = 'users';
		$table1_id = 'book_id';
		$table2_id = 'prod_id';
		$table3_id = 'u_id';
		$table3_id_matcher = 'user_id';
		$data['results'] = $this->Fetcher->getJoinPoll($table_name1, $table_name2, $table_name3, $table1_id, $table2_id, $table3_id, $table3_id_matcher);
		$data['results_count_total'] = $this->Fetcher->getCount('poll');
		$data['main_content'] = 'superuser/poll';
		$this->load->view('includes/template_su', $data);
	}

	private function is_logged_in()
	{
		$role = $this->session->userdata('u_role');
		if($role != "Super User")
		{
			redirect(base_url(), 'refresh');
		}
	}
}

/* End of file superuser.php */
/* Location: ./application/controllers/superuser.php */