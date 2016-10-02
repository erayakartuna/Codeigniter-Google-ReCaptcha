<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$data = new stdClass();

		$this->form_validation->set_rules(array());

		if($this->form_validation->run()){
			$data->success = "Form Validated";
		}

		$this->load->view('gcaptcha_example',$data);
	}
}
