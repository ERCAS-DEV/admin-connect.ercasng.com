<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Createpdf extends CI_Controller {

function pdf($tbl,$to,$from)
{
    $this->load->helper('pdf_helper');
	$this->load->model(array('user_model','reports_model','biller_model','basic_model'));
	$data = array();
	//$tbl = 'payment_collection_ewrw';
	//$to = '2016-01-01';
	//$from = '2016-01-20';
	$analysisdata =  $this->reports_model->generate_analysis_data($tbl,$to,$from);
	$link = 'payment_collection_ewrw/2016-01-01/2016-01-20';
	$compnm = explode('_',$tbl);
	$data['billerdt'] = $this->biller_model->biller_acronymn($compnm[2]);
	$data['tbl_str'] = $this->reports_model->tbl_structure($tbl);
	$data['analysisarr'] = $analysisdata;	
    $this->load->view('pdfreport', $data);
}

}
?>