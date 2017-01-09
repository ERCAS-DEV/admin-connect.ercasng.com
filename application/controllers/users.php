<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

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
        $this->load->model(array('user_model','basic_model'));
		$this->load->library('upload');
	    $this->load->helper(array('url'));
	} 
	
	/***** function for user listing ******/

	public function index()
	{		
		if(!isAdminLoggedIn())
		{
			$this->session->set_flashdata('errors', 'You dont have permission to access this part of the site.');
			redirect(getUrl('apperror'));
		}
		$data = array();
		$data['menu'] = 'user_privileges';
		$data['sub_menu'] = 'user_accounts';
		$data['page_title'] = 'Client User Listing Module';
		$data['user_listing'] = $this->user_model->user_listing();
		$this->load->view('users',$data);
	}
	/****** end of function *****/

	/******* Edit User function ********/
	public function edit_user($id)
	{
		if(!isAdminLoggedIn())
		{
			$this->session->set_flashdata('errors', 'You dont have permission to access this part of the site.');
			redirect(getUrl('apperror'));
		}
		$data = array();		
		$data['menu'] = 'user_privileges';
		$data['sub_menu'] = 'user_accounts';
		if($this->input->post('email')!=''){
			$save = array();
			if($this->input->post('password')!=''){
				$save['password']   = sha1(md5($this->input->post('password')));
			}			
			$save['first_name']  = $this->input->post('firstname');
			$save['last_name']   = $this->input->post('lastname');
			$save['mobile']     = $this->input->post('mobile');
			$save['user_group_id'] = $this->input->post('user_group');
			$upd['id'] = $id;
			$this->basic_model->customupd('user',$save,$upd);
			$this->session->set_flashdata('success',"User edited successfully.");
			redirect(getUrl('users'));
		}
		$data['page_title'] = 'Client User Edit Module';
		$data['user_detail'] = $this->user_model->user_detail($id);
		$this->load->view('edit_user',$data);
	}
	/****** EOF ******/

	// delete user record for given id
    public function delete_user($id)
    {
		if(!isAdminLoggedIn())
		{
			$this->session->set_flashdata('errors', 'You dont have permission to access this part of the site.');
			redirect(getUrl('apperror'));
		}
		$data = array();
		$this->basic_model->dele('user',$id);
		$this->session->set_flashdata('success',"User deleted successfully.");
		redirect(getUrl('users'));
    }
}

/* End of file users.php */
/* Location: ./application/controllers/users.php */