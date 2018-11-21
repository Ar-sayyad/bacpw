<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balco extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();        	
        $this->load->library('session');
	$this->load->library('form_validation');
        $this->load->model('balco_model');
        $this->load->helper('file');
        $this->load->helper(array('form', 'url'));
         /* cache control */
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');        
         
    }
    
	public function index()
	{
           $this->balco_model->is_logged_in();           
            $data['title'] = "Dashboard";
            $data['titlebar'] = "Dashboard";
            $this->load->view('balco/index',$data);		
               
	}        
       
          public function popup($account_type = '', $page_name = '', $param2 = '', $param3 = '', $param4 = '',$param5 = '',$param6 = '')
	{
                //$account_type               =	$this->session->userdata('login_type');
		$page_data['param2']		=	$param2;
                $page_data['param3']		=	$param3;
                $page_data['param4']		=	$param4;
                $page_data['param5']		=	$param5;
                $page_data['param6']		=	$param6;
                $page_data['month_info'] = $this->balco_model->select_data_info('dbo.tblMonth');
		//echo "hello";
		$this->load->view($account_type.'/'.$page_name,$page_data);		
	}
        
        public function error()
	{
            $data['title'] = "Page Not Found";
            $data['titlebar'] = "Page Not Found";
            $data['icons'] = "perm_data_setting";
            $this->load->view('balco/error',$data);
	} 
        
        function validateLogin() {
             $this->form_validation->set_rules('username', 'user name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE)
                     {
                            echo validation_errors();
                    }
                    else
                     {
                            $user_name= $this->input->post('username');
                            $password = $this->input->post('password');

                            //$credential = array('user_name' => $user_name, 'password' => $password);
                            echo $this->balco_model->validate_login_info($user_name,$password);
                    }
                
                            
        }
        
          public function logout()
	{
		$this->session->sess_destroy();	
		redirect(base_url());
	}  
        
        public function sweet(){
            $data['title'] = "Sweet Alert";
            $data['titlebar'] = "Sweet Alert";
            $this->load->view('balco/sweetalerts',$data);
            
        }
}
