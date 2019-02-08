<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reports extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
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
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> Overall Plant";
            $data['titlebar'] = "Reports >> Overall Plant";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/overallPlantReport',$data);		
               
	}
        
        public function overallPlant(){
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> Overall Plant";
            $data['titlebar'] = "Reports >> Overall Plant";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/overallPlantReport',$data);
        }
        
        /********540 MW *******/
        
         public function unitonefft()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1";
            $data['titlebar'] = "Reports >> 540 MW > Unit #1";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitOneFFTReport',$data);
	}     
       
         public function unittwofft()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2";
            $data['titlebar'] = "Reports >> 540 MW > Unit #2";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitTwoFFTReport',$data);
	}     
        
         public function unitthreefft()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3";
            $data['titlebar'] = "Reports >> 540 MW > Unit #3";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitThreeFFTReport',$data);
	}  
        
         public function unitfourfft()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4";
            $data['titlebar'] = "Reports >> 540 MW > Unit #4";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitFourFFTReport',$data);
	}   
        
        public function performancefft()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Reports >> 540 MW > Performance";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/performanceFFTReport',$data);
	}     
        
        /***********1200 MW************/
      
         public function unitonetwh()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1";
            $data['titlebar'] = "Reports >> 1200 MW > Unit #1";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitOneTWHReport',$data);
	}   
        
        public function unittwotwh()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2";
            $data['titlebar'] = "Reports >> 1200 MW > Unit #2";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitTwoTWHReport',$data);
	}  
        
         public function unitthreetwh()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3";
            $data['titlebar'] = "Reports >> 1200 MW > Unit #3";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitThreeTWHReport',$data);
	}  
        
         public function unitfourtwh()
	{
            $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4";
            $data['titlebar'] = "Reports >> 1200 MW > Unit #4";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitFourTWHReport',$data);
	}  
        
        public function performancetwh()
	{
             $data['title'] = "Reports <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Performance";
            $data['titlebar'] = "Reports >> 1200 MW > Performance";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/performanceTWHReport',$data);
	}  
}
