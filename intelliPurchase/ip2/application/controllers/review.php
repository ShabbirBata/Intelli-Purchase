<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Review extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Add');
		$this->load->model('Fetcher');
		$this->load->helper('date');
	}

	public function post()
	{
		$rev_name = $this->session->userdata('u_name');
		$u_id = $this->session->userdata('u_id');
		$rev_url = base_url();
		$rev_url = $rev_url."index.php/user/index/".$u_id; //generating user url from the base url and session data
		$rev_rating = $this->input->post('review-rating');
		$rev_desc = $this->input->post('review-desc');
		$rev_subject = $this->input->post('review-subject');
		$rev_date = unix_to_human(time()); //current time
		$rev_store_url = base_url();
		$rev_store_url = $rev_store_url."images/store/intellipurchase.png"; //default image for in store reviews
		$rev_helpful = 0;
		$product_id = $this->input->post('uri3');

		$data = array(
			'prod_id' => $product_id,
			'rev_name' => $rev_name,
			'rev_url' => $rev_url,
			'rev_rating' => $rev_rating,
			'rev_subject' => $rev_subject,
			'rev_desc' => $rev_desc,
			'rev_date' => $rev_date,
			'rev_store_url' => $rev_store_url,
			'rev_helpful' => $rev_helpful
			);

		$tablename = "reviews";
		$result = $this->Add->addTo($tablename, $data);	//Pushing the review to the table.
		if($result)
		{
			$result = $this->Fetcher->incrementor('user_details', $u_id);
			if($result)
			{
				$msg = "Your Review has been successfully submitted.";
			}
		}
		else
		{
			$msg = "There was some problem with your review, it cannot be submitted. Please try again.";
		}	
		$this->finish($msg);
	}

	private function finish($msg)	//Function to redirect user back to the referrer page.
	{
		$message = "<script>alert('".$msg."')</script>";
		echo $message;
		$referrer = $this->agent->referrer();
		redirect($referrer, 'refresh'); //Redirecting the user to the previous page.
	}

}

/* End of file review.php */
/* Location: ./application/controllers/review.php */