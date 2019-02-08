<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jsw_model extends CI_Model {

    function __construct() {
        parent::__construct();
		$this->load->database();
		$this->load->library('email');
		$this->load->helper('file');
    }

    function clear_cache() {
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
	
	
    public function select_data_info($table)
    {       
        return $this->db->get_where($table)->result_array();
    }

    public function save_data_info($tbl_name,$data_array)
	{
		$insert_id=$this->db->insert($tbl_name,$data_array);
		//echo $insert_id;die;
		if($insert_id)
		{
			return $insert_id;
		}
		return false;
	}
        
        public function update_data_info($tbl_name,$data,$where)
	{
		$this->db->where($where);
		$details=$this->db->update($tbl_name,$data);
		if($details)
		{
			return $details;
		} 
		return false;			
	}
        
        public function check_data_info($table,$where){
            $this->db->where($where);
            return $this->db->get_where($table)->result_array();
        }
        
         public function select_data_where_info($table){
                
                //$this->db->select('*');
                //$this->db->group_by("Equipment");
//$this->db->distinct("Equipment");
            return $this->db->get($table);
        }
                
    function delete_data_info($tbl_name,$where)
    {
        $this->db->where($where);
        $details = $this->db->delete($tbl_name);
        if($details)
		{
			return $details;
		} 
		return false;
    }
	
    public function call_stored_procedure($fromdate,$todate){
        
        $data = $this->db->query("EXEC SP_ECVesselperformance1 '$fromdate','$todate'")->result_array();
        return $data;
        
    }

	
	
	
}