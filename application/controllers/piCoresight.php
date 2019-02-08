<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class piCoresight extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); 
       // $this->load->library('excel');
        $this->load->library('session');
	$this->load->library('form_validation');
        $this->load->model('balco_model');
        $this->balco_model->is_logged_in();
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
        
       public function index()
	{
            $data['title'] = "PI Coresight";
             $data['titlebar'] = "PI Coresight";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/piCoresight',$data);
	}     
        
     
}
