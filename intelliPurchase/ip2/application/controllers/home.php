<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Add');
	}
	
	public function index()
	{
		$data['main_content'] = 'home';
		$this->load->view('includes/template', $data);
	}

	public function about()
	{
		$data['main_content'] = 'about';
		$this->load->view('includes/template', $data);
	}

	public function feedback()
	{
		$data['main_content'] = 'feedback';
		$this->load->view('includes/template', $data);
	}

	public function send_feedback()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$query = $this->input->post('query');
		
		//Setting inputs recieved into an associative array for easy data addition
		$data = array(
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
			'query' => $query
			);

		$result = $this->Add->addTo('feedback', $data);
		if($result)
		{
			echo "<script>alert('Your Query has been successfully Submitted.')</script>";
			redirect(base_url(),'refresh');
		}
		else
		{
			echo "<script>alert('Your Query wasnt submitted. Please Try again later.')</script>";
			$this->feedback();
		}
	}

	public function logout()
	{
		$user = $this->session->userdata('u_name');
		echo "<script>alert('".$user." logged out successfully.')</script>";
		$this->session->sess_destroy();
		$referrer = $this->agent->referrer();
		redirect($referrer, 'refresh'); //Code for Redirecting the user to the previous page goes here.
	}

	private function is_logged_in()
	{
		if($this->session->userdata('is_logged_in'))
			return TRUE;
		else
			return FALSE;
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */