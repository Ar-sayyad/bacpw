<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kpis extends CI_Controller {

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
            $data['title'] = "KPIs <i class='fa fa-angle-double-right'></i> Overall Plant";
            $data['titlebar'] = "KPIs >> Overall Plant";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/kpisOverallPlant',$data);		
               
	}
        
        public function overallPlant(){
            $data['title'] = "KPIs <i class='fa fa-angle-double-right'></i> Overall Plant";
            $data['titlebar'] = "KPIs >> Overall Plant";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/kpisOverallPlant',$data);
        }
        
        public function plantHead(){
            $data['title'] = "KPIs <i class='fa fa-angle-double-right'></i> Plant Head";
            $data['titlebar'] = "KPIs >> Plant Head";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/kpisPlantHead',$data);
        }
        
        public function cop(){
            $data['title'] = "KPIs <i class='fa fa-angle-double-right'></i> COP";
            $data['titlebar'] = "KPIs >> COP";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/kpisCop',$data);
        }
       
        public function copBreakup(){
            $data['title'] = "KPIs <i class='fa fa-angle-double-right'></i> COP Breakup";
            $data['titlebar'] = "KPIs >> COP Breakup";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/kpisCopBreakup',$data);
        }
        
      
}
