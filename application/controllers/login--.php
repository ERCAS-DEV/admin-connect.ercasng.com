<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function  __construct()
	{
		parent::__construct();
        $this->load->model('user_model');
	} 

	public function index()
	{
		
		$data               = array();
		$data['page_title'] = 'Client Module Login';
		if($this->input->post('email')!=''){
			$data['email']      = $this->input->post('email');
			$data['password']   = $this->input->post('password');		
			$result             = $this->user_model->login($data);
			
			if(!empty($result))
			{
				$this->session->set_userdata('user_id', $result[0]['id']);
				$this->session->set_flashdata('success',"Login Successfully"); 
				redirect('dashboard');
			}
			else
			{
				$this->session->set_flashdata('error',"Please Enter Correct Email And Password");	
				redirect('login');
			}
		}
		$this->load->view('login',$data);
	}

	/**** Start  of function For logout of client ****/
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		redirect(getUrl('login'));
	}

	/*********   End of function   ********/

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */