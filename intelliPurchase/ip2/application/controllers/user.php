<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Fetcher');
		$this->load->model('Add');
		$this->is_logged_in();
		$this->load->library('form_validation');
		$this->load->helper('date');
	}

	public function index($id)
	{
		//Loading user profile
		$data['main_content'] = 'user';
		$where = array(
			'u_id' => $this->session->userdata('u_id')
			);
		
		$url = base_url();
		$url = $url."index.php/user/index/".$this->session->userdata('u_id');
		//Fetching the user details
		$data['results'] = $this->Fetcher->getFrom('users', $where);
		
		//Fetching the products rated by the user
		$result = $this->Fetcher->product_rated($url);

		$data2 = array(
			'u_prod_rated' => $result
			);

		//Updating the fetched products rated by the user to the user_details table
		$res = $this->Add->updateTo('user_details', $where, $data2);

		if($res)
		{
			$data['results2'] = $this->Fetcher->getFrom('user_details', $where);
			$this->load->view('includes/template', $data);
		}
	}

	public function is_logged_in()
	{
		if($this->session->userdata('is_logged_in'))
		{
		}
		else
		{
			$msg = "<script>alert('You need to be logged in to view this page.')</script>";
			echo $msg;
			redirect(base_url(), 'refresh');
		}
	}

	public function ai_edit()
	{
		$ai_name = $this->input->post('ai-name');
		$ai_pwd = $this->input->post('ai-pwd');
		$ai_cpwd = $this->input->post('ai-cpwd');
		
		$where = array(
			'u_id' => $this->session->userdata('u_id')
			);

		if($ai_pwd == "" && $ai_cpwd == "")	//If Password Fields are blank, Update the name only.
		{
			$data = array(
				'u_name' => $ai_name
				);

			$result = $this->Add->updateTo('users', $where, $data);
			
			if($result)
			{
				$msg = "Your details have been updated.";
			}
			else
			{
				$msg = "There was an error connecting to the database. Please try again later.";
			}	
		}
		else 	//If the password fields are not blank, Update the password.
		{
			//Form Validation Rules for confirm password field
			$this->form_validation->set_rules('ai-pwd', 'New Password', 'trim|matches[ai-cpwd]');
	
			if($this->form_validation->run() == FALSE)
			{
				$msg = "Your Password does not match with the confirm password field.";
			}
			else
			{
	    		//If both the password field matches, Fetch the data and update the DB.
	    		$data = array(
	    			'u_name' => $ai_name,
	    			'u_pwd' => sha1(md5($ai_pwd))
	    			);
	    		
				$result1 = $this->Add->updateTo('users', $where, $data);

				if($result1)
					$msg = "Your Password has been Updated.";
				else
					$msg = "There was an error connecting to the database. Please try again later.";
			}
			
		}
   		$this->finish($msg);

	}

	public function oi_edit()
	{
		$aemail = $this->input->post('oi-aemail');
		$gender = $this->input->post('oi-gender');
		$dob = $this->input->post('oi-dob');

		//Check to see if the row already exists
		$where = array('u_id' => $this->session->userdata('u_id'));
		$results = $this->Fetcher->getFrom('user_details', $where);
		
		if($results)
		{
			if($aemail == "") //If the Email field is left blank, do not update the Alternate email column.
			{
				$data = array(
				'u_gender' => $gender,
				'u_dob' => $dob
				);
			}
			else 	//If not, then update the Alternate email field too.
			{
				$data = array(
				'u_a_email' => $aemail,
				'u_gender' => $gender,
				'u_dob' => $dob
				);	
			}		
			$results1 = $this->Add->updateTo('user_details', $where, $data);
			if($results1)
			{
				$msg = "Your details have been updated.";
				$this->finish($msg);
			}
		}
		else 	//If There isnt any record created already, Create one.
		{
			$data = array(
			'u_id' => $this->session->userdata('u_id'),
			'u_a_email' => $aemail,
			'u_gender' => $gender,
			'u_dob' => $dob
			);	
			$results2 = $this->Add->addTo('user_details', $data);
			if($results2)
			{
				$msg = "Your details have been added.";
				$this->finish($msg);
			}
		}
	}

	public function change_dp()
	{
		$url = base_url();	
		$image = $this->input->post('dp-image');
		if($image == "")	//If user did not select any image and submitted save changes, update the image to noimage.jpg
			$url = $url."images/user/noimage.jpg";
		else
			$url = $url."images/avatars/".$image.".jpg";
		$data = array(
			'u_dp' => $url
			);
		$id = $this->session->userdata('u_id');
		$where = array(
			'u_id' => $id
			);
		$result = $this->Add->updateTo('users', $where, $data);
		if($result)
			$msg = "Your Avatar has been saved Successfully.";
		else
			$msg = "There was an error while saving your avatar. Please Try again later.";
		$this->finish($msg);
	}

	private function finish($msg)
	{
		$msg = "<script>alert('".$msg."')</script>";
		echo $msg;
		$referrer = $this->agent->referrer();
		redirect($referrer, 'refresh'); //Redirecting the user to the previous page.
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */