<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Biller_administration extends CI_Controller {

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
		$this->load->library('upload');
		$this->load->helper(array('url'));
	} 
	
	/***** function for biller listing ******/

	public function index()
	{		
		if(!isAdminLoggedIn())
		{
			$this->session->set_flashdata('errors', 'You dont have permission to access this part of the site.');
			redirect(getUrl('apperror'));
		}
		$data = array();
		$data['menu'] = 'biller_management';
		$data['sub_menu'] = 'biller_configuration';
		$data['sub_sub_menu'] = 'biller_administration';
		$data['page_title'] = 'Biller Administration Module';
		$data['biller_listing'] = $this->biller_model->approved_biller_listing();
		$this->load->view('biller_administration',$data);
	}
	/****** end of function *****/

	public function edit_biller($id){
		if(!isAdminLoggedIn())
		{
			$this->session->set_flashdata('errors', 'You dont have permission to access this part of the site.');
			redirect(getUrl('apperror'));
		}
		$data = array();
		
		$data['menu'] = 'biller_management';
		$data['sub_menu'] = 'biller_configuration';
		$data['sub_sub_menu'] = 'biller_administration';
		
		if($this->input->post('accept')!=''){
			$save = array();
			$save['approverId'] = $this->input->post('approverId');
			$save['status'] = $this->input->post('accept');
			$save['comment'] = stripslashes($this->input->post('comment'));
			$save['approvedDate']   = date('Y-m-d H:i:s');
			$upd['id'] = $id;
			$this->basic_model->customupd('biller',$save,$upd);
			$this->session->set_flashdata('success',"Biller edited successfully.");
			redirect(getUrl('biller'));
		}
		$data['page_title'] = 'Biller Edit Module';
		$data['biller_detail'] = $this->biller_model->biller_detail($id);
		$this->load->view('edit_biller',$data);
	}	
	
	public function biller_configuration($id){
		if(!isAdminLoggedIn())
		{
			$this->session->set_flashdata('errors', 'You dont have permission to access this part of the site.');
			redirect(getUrl('apperror'));
		}
		$data = array();
		
		$data['menu'] = 'biller_management';
		$data['sub_menu'] = 'biller_configuration';
		$data['sub_sub_menu'] = 'biller_dbconfig';
		
		$data['page_title'] = 'Biller Configuration Module';
		$data['biller_detail'] = $this->biller_model->biller_detail($id);
		$data['biller_services'] = $this->biller_model->approved_biller_configuration($id);
		$this->load->view('biller_configuration',$data);	
	}

	public function biller_configuration_change($id){
		if(!isAdminLoggedIn())
		{
			$this->session->set_flashdata('errors', 'You dont have permission to access this part of the site.');
			redirect(getUrl('apperror'));
		}
		
		$data = array();
		
		$data['menu'] = 'biller_management';
		$data['sub_menu'] = 'biller_configuration';
		$data['sub_sub_menu'] = 'biller_dbconfig';
		
		$data['page_title'] = 'Biller Table Configuration Module';
		$data['biller_detail'] = $this->biller_model->biller_detail($id);
		$data['biller_services'] = $this->biller_model->approved_biller_configuration($id);
		$servicetbl = $this->input->post('services');
		if (isset($_POST['show_structure'])) {
			$data['biller_id'] = $id;
			$data['servicedt'] = $this->biller_model->biller_services_table_structure($servicetbl);
			$data['alter_table_name'] = $servicetbl;
			$this->load->view('biller_configuration_tbl_structure',$data);			
		}
		elseif (isset($_POST['alter_table'])) {			
			$data['biller_id'] = $id;
			$data['alter_no'] = $this->input->post('alter_no');
			$data['alter_table_name'] = $servicetbl;
			$this->load->view('biller_configuration_tbl_alter',$data);
		}
	}
	
	public function alter_table($id){
		if(!isAdminLoggedIn())
		{
			$this->session->set_flashdata('errors', 'You dont have permission to access this part of the site.');
			redirect(getUrl('apperror'));
		}
		
		$data = array();
		
		$data['menu'] = 'biller_management';
		$data['sub_menu'] = 'biller_configuration';
		$data['sub_sub_menu'] = 'biller_dbconfig';
		
		$data['page_title'] = 'Biller Table Configuration Module';
		if($this->input->post('addfld')!=''){
			$biller_id = $this->input->post('biller_id');
			$i=1;
			$sqlstr = 'alter table '.$this->input->post('alter_table_name');
			while($i <= $this->input->post('alter_no')){
				$flnme = $this->input->post('fieldname_'.$i);
				$fldtype = $this->input->post('fld_type_'.$i);
				$typelngth = $this->input->post('fld_length_'.$i);
				if($flnme!= ''){
					if($fldtype!='DATE' && $fldtype!='DATETIME' && $fldtype!='TEXT'){
						$sqlstr .= ' add column '.$flnme.' '.$fldtype.'('.$typelngth.'),';
					}else{
						$sqlstr .= ' add column '.$flnme.' '.$fldtype.',';
					}
				}
				$i++;
			}
			$sql = substr($sqlstr, 0, -1);
			$this->basic_model->updatesql($sql);
			$this->session->set_flashdata('success',"Biller table altered successfully.");
			redirect(getUrl('biller_administration/biller_configuration/'.$biller_id));
		}
		//$data['biller_detail'] = $this->biller_model->biller_detail($id);
	
	}
}

/* End of file biller_administration.php */
/* Location: ./application/controllers/biller_administration.php */