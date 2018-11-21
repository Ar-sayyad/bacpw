<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class performance extends CI_Controller {

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
           $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> Overall Plant";
            $data['titlebar'] = "Performance >> Overall Plant";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/overallPlantPerformance',$data);               
	} 
        
        public function overallPlant(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> Overall Plant";
            $data['titlebar'] = "Performance >> Overall Plant";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/overallPlantPerformance',$data); 
        }
        
        /***********540MW START**************/
        
        public function unitOnefft(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #1";
            $data['titlebar'] = "Performance >> 540 MW > Unit #1";
            $data['icons'] = "bubble_chart";            
            $this->load->view('balco/unitOneFFTPerformance',$data);
        }
        
         public function unitTwofft(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #2";
            $data['titlebar'] = "Performance >> 540 MW > Unit #2";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitTwoFFTPerformance',$data);
        }
        
         public function unitThreefft(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #3";
            $data['titlebar'] = "Performance >> 540 MW > Unit #3";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitThreeFFTPerformance',$data);
        }
        
         public function unitFourfft(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Unit #4";
            $data['titlebar'] = "Performance >> 540 MW > Unit #4";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitFourFFTPerformance',$data);
        }
        
         public function bopDcsfft(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Balance of Plant";
            $data['titlebar'] = "Performance >> 540 MW > Balance of Plant";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/bopDcsFFTPerformance',$data);
        }
        
         public function boilerfft(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Performance >> 540 MW > Boiler";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/boilerFFTPerformance',$data);
        }
        
         public function turbinefft(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 540 MW <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Performance >> 540 MW > Turbine";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/turbineFFTPerformance',$data);
        }
        
         /***********540MW END**************/
        
        /***********1200MW START**************/
       
         public function unitOnetwh(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #1";
            $data['titlebar'] = "Performance >> 1200 MW > Unit #1";
            $data['icons'] = "bubble_chart";            
            $this->load->view('balco/unitOneTWHPerformance',$data);
        }
        
         public function unitTwotwh(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #2";
            $data['titlebar'] = "Performance >> 1200 MW > Unit #2";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitTwoTWHPerformance',$data);
        }
        
         public function unitThreetwh(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #3";
            $data['titlebar'] = "Performance >> 1200 MW > Unit #3";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitThreeTWHPerformance',$data);
        }
        
         public function unitFourtwh(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Unit #4";
            $data['titlebar'] = "Performance >> 1200 MW > Unit #4";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/unitFourTWHPerformance',$data);
        }
        
         public function bopDcstwh(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Balance of Plant";
            $data['titlebar'] = "Performance >> 1200 MW > Balance of Plant";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/bopDcsTWHPerformance',$data);
        }
        
         public function boilertwh(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Boiler";
            $data['titlebar'] = "Performance >> 1200 MW > Boiler";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/boilerTWHPerformance',$data);
        }
        
         public function turbinetwh(){
            $data['title'] = "Performance <i class='fa fa-angle-double-right'></i> 1200 MW <i class='fa fa-angle-right'></i> Turbine";
            $data['titlebar'] = "Performance >> 1200 MW > Turbine";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/turbineTWHPerformance',$data);
        }
        
         /***********1200MW END**************/
}
