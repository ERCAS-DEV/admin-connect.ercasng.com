<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Model		: CSV model
 * Author		: Ravi Prakash
 * Dated		: 27/05/16
 */

class Csv_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();	
	}

	public function generate_analysis_data($tblnm,$startdate,$enddate){
		
		$data = $this->db->query("select *, UNIX_TIMESTAMP( STR_TO_DATE( TransDate,  '%d-%m-%Y %H:%i' ) ) as timestampdate, str_to_date(TransDate,'%d-%m-%Y %H:%i') as datetimestamp FROM $tblnm where str_to_date(TransDate,'%d-%m-%Y %H:%i')>='".$startdate."' and str_to_date(TransDate,'%d-%m-%Y %H:%i') <='".$enddate."'")->result();
		//echo $this->db->last_query(); 	
		return $data;
	}

	function csv($tblnm,$startdate,$enddate)
	{
			$this->load->dbutil();
			$this->load->helper('file');
			$this->load->helper('download');
			//$query = $this->db->query("SELECT * FROM user");
			$query = $this->db->query("select *, UNIX_TIMESTAMP( STR_TO_DATE( TransDate,  '%d-%m-%Y %H:%i' ) ) as timestampdate, str_to_date(TransDate,'%d-%m-%Y %H:%i') as datetimestamp FROM $tblnm where str_to_date(TransDate,'%d-%m-%Y %H:%i')>='".$startdate."' and str_to_date(TransDate,'%d-%m-%Y %H:%i') <='".$enddate."'");
			$delimiter = ",";
			$newline = "\r\n";
			$data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
			force_download('CSV_Report.csv', $data);
	}

}
?>