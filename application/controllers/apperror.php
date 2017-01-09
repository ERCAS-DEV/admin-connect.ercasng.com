<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apperror extends CI_Controller {

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
	 * created by Ravi Prakash
	 */

	public function  __construct()
	{
		parent::__construct();
        $this->load->model(array('user_model','biller_model','basic_model'));
		$this->load->helper(array('url'));
	} 
	
	public function index()
	{	
		$this->permission_denied();
	}
	
	public function permission_denied()
	{	
		$data = array();
		$data['page_title'] = 'Page View Denied';
		$this->load->view('error_operation_denied',$data);
	}
}

/* End of file apperror.php */
/* Location: ./application/controllers/apperror.php */