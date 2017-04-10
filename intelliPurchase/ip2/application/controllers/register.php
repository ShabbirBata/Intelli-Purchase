<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();	//Uses of these includes.
		$this->load->model('Add');	//For inserting rows in table.
		$this->load->model('Fetcher');	//For Logging in the newly created user.
		$this->load->library('form_validation');	//For Form Validation.
		$this->load->helper('date');	//For Setting current time in HUMAN readable format.
		$this->is_logged_in();	//For redirecting the user to the referrer page if already logged in.
	}

	public function submit()
	{
       	//Call to recaptcha to get the data validation set within the class. 
		$this->recaptcha->recaptcha_check_answer();

        if ($this->recaptcha->getIsValid()) //Captcha Validation Check
        {    
        	//Setting form validation rules.
        	$this->form_validation->set_rules('name', 'Name', 'required');
        	$this->form_validation->set_rules('email', 'Email', 'trim|required');
        	$this->form_validation->set_rules('pwd-register', 'Password', 'trim|required|matches[cpwd]');
        	$this->form_validation->set_rules('cpwd', 'Confirm Password', 'trim|required');


        	if($this->form_validation->run() == FALSE)
        	{
        		$msg = "Please Check your form for errrors and try again.";
        		$this->finish($msg);
        	}
        	else
        	{	//If Form Validation is successfull, Check for Email Availability.
        		$email = $this->input->post('email');
        		$result1 = $this->Fetcher->email_availability($email);
        		if($result1) //If Resulset returns true, then email already in database.
        		{
					$msg = "Email Address already registered.";
        		}
        		else
        		{	//If Resultset is false, then insert the details in the database.
            		$data = array(
            			'u_email' => strtolower($this->input->post('email')),
            			'u_name' => $this->input->post('name'),
            			'u_pwd' => sha1(md5($this->input->post('pwd-register'))),
		                'u_dp' => '',
            			'u_regdate' => unix_to_human(time()),
            			'u_role' => 'Subscriber',
            			'u_activestatus' => '1'
            			);
            		
					$result1 = $this->Add->addTo('users', $data);
					if($result1)	//If Data gets added, Account is created.
					{
						$msg = "Your Account has been Successfully Created.";
						
						//Now Log in the newly registered user with this where condition.
						$where = array(
							'u_email' => strtolower($this->input->post('email')),
							'u_pwd' => sha1(md5($this->input->post('pwd-register'))),
							'u_activestatus' => '1'
							);
						

						$result = $this->Fetcher->getFrom('users', $where);
						if($result)	//If the resultset returns true, the user is logged in.
						{
							//Now make an array to set a session for the user.
							$user = array(
				               'u_id' => $result[0]->u_id,
				               'u_name' => $result[0]->u_name,
				               'u_email' => $result[0]->u_email,
				               'u_role' => $result[0]->u_role,
				               'is_logged_in' => TRUE
				            );

							$this->session->set_userdata($user);	//Set the session of the just logged in user.
						}
						else 	//If data does not gets added, DB wouldnt be available, so ask the user to try again.
						{
							//Generate a message for the alert pop up box.
							$messagesg = "There is some error. Please try again after some time.";
						}
        			}
        		}
				$this->finish($msg);
        	}
        } 
        else 
        {
        	//Problem in CAPTCHA validation, create a message and send it to alert pop up.
         	$msg = "Captcha Validation Failed. Please Check again.";
            $this->finish($msg);
        }
	}

	private function finish($msg)
	{
		//Generic method for Displaying Alert pop up boxes.
		$message = "<script>alert('".$msg."')</script>";
		echo $message;
		$referrer = $this->agent->referrer();
		redirect($referrer, 'refresh'); //Redirecting the user to the previous page.
	}

	private function is_logged_in()
	{
		if($this->session->userdata('is_logged_in'))
		{
			$referrer = $this->agent->referrer();
			redirect($referrer, 'refresh'); //Redirecting the user to the previous page.
		}
	}
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */