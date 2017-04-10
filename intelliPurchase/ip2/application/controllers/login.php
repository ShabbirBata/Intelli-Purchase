<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Fetcher');
	}

	public function submit()	//Login Submit method
	{
		$uname = strtolower($this->input->post('s-email'));
		$pwd = $this->input->post('s-pwd');
		$where = array(
			'u_email' => $uname,
			'u_pwd' => sha1(md5($pwd)),	//encrypting the user password
			'u_activestatus' => '1'
			);
		$result = $this->Fetcher->getFrom('users', $where);	//Method to check if the entered details are present in the users table
		if($result)
		{
			$user = array(
               'u_id' => $result[0]->u_id,
               'u_name' => $result[0]->u_name,
               'u_email' => $result[0]->u_email,
               'u_role' => $result[0]->u_role,
               'is_logged_in' => TRUE
            );

			$this->session->set_userdata($user);	//if User validated, set the session
			$user = $result[0]->u_name;	//Fetching the username from the resultset
			$msg = $user." logged in successfully.";
		}
		else
		{
			$msg = 'Invalid Details or Account not Active.';
		}	
		$this->finish($msg);
	}

	private function finish($msg)
	{
		$message = "<script>alert('".$msg."')</script>";
		echo $message;
		$referrer = $this->agent->referrer();
		redirect($referrer, 'refresh'); //Redirecting the user to the previous page.
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */