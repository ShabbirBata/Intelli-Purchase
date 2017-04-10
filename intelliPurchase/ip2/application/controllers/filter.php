<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Filter extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Fetcher');
	}

	public function post()	//Filter output is posted to this method
	{
		$cat = $this->input->post('book_cat');	//Checking the hidden input field to find out the category of books that we're working with
		if($cat == 'bio')
		{
			$book_cat = "Biographies";
			$url = 'biographies';
		}
		else if($cat == 'fict')
		{
			$book_cat = "Fiction & Non Fiction";
			$url = 'fiction';
		}
		else
		{
			$book_cat = "Action & Adventure";
			$url = 'action';
		}			

		$price = $this->input->post('price');
		$binding = $this->input->post('binding');
		$pubyear = $this->input->post('year');

		//Setting the layout for the where clause
		if($pubyear)
			$pubyear = ' book_pubyear = '.$pubyear;

		if($binding)
			$binding = ' book_binding = "'.$binding.'"';

		if($price)
			$price = " store1_price > ".$price;
		
		//Setting where clause based on the input submitted
		if(!$price && !$pubyear)
			$where = $binding;
		else if(!$price && !$binding)
			$where = $pubyear;
		else if(!$pubyear && !$binding)
			$where = $price;
		else if(!$price)
			$where = $binding." and ".$pubyear;
		else if(!$binding)
			$where = $price." and ".$pubyear;
		else if(!$pubyear)
			$where = $price." and ".$binding;
		else
			$where = $price." and ".$binding." and ".$pubyear;

		//Adding book category to narrow down the search results
		$where = 'book_cat = "'.$book_cat.'" and '. $where;

		//Joining the tables and fetching the results
		$data['results'] = $this->Fetcher->getJoinWhere('book_detail', 'book_prices', 'book_id', 'book_id', $where);
		$data['main_content'] = 'books/'.$url;	//Loading the respect view based on the book category
		$this->load->view('includes/template', $data);
	}
}

/* End of file filter.php */
/* Location: ./application/controllers/filter.php */