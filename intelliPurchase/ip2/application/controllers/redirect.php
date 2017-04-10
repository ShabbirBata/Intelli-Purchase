<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Redirect extends CI_Controller {

	public function index()
	{
		$url = $this->input->post('url');
		if(urlencode($this->input->post('url')))	//If encoded url is present in the DB, decode it
			$url = urldecode($url);
		redirect($url, 'refresh');	//Redirecting the user to the store
	}

}

/* End of file redirect.php */
/* Location: ./application/controllers/redirect.php */