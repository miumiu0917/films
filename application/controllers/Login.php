<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $user_id = $this->input->post('user_id');
    $password = $this->input->post('password');

    $this->load->model('Login_check');
    $auth_success = $this->Login_check->check($user_id, $password);


    if ($auth_success)
    {
      echo "SUCCESS!!";
    }
    else
    {
      echo "ERROR!!!";
    }
	}
}
