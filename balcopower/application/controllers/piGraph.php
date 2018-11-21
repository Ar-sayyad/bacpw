<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class piGraph extends CI_Controller {

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
            $data['title'] = "PI <i class='fa fa-angle-double-right'></i> Graph";
            $data['titlebar'] = "PI >> Graph";
            $data['icons'] = "bubble_chart";
            $this->load->view('balco/piGraph',$data);
	}
        
        public function getPlotData(){
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://devdata.osisoft.com/piwebapi/streams/F1AbEIRAQC7zjPUOfBqai218IAwifUOTEAv5xGAzgANOhDHzg4VRBlNqet1wMQswtjrtN2AUElTUlYxXEZPUkVDQVNUU1xDREYxNDR8UkFXREFUQQ/plot",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "Authorization: Basic d2ViYXBpdXNlcjohdHJ5My4xNHdlYmFwaSE=",
                "Cache-Control: no-cache",
                "Postman-Token: c83d5fda-c51e-455e-8689-4191e2eb47f9"
              ),
            ));

              $response = curl_exec($curl);
             $ans= json_decode($response,true);
             $answer = array($ans['Items']);
                      //print_r($answer);
                      foreach($answer as $ans){
                                       $trainarr            = array();
                                       $sr =1; foreach (array_slice($ans, 0, 10) as $t){
                                                    $chars = 'ABCDEF0123456789';
                                               $color = '#';
                                               for ( $i = 0; $i < 6; $i++ ) {
                                                      $color .= $chars[rand(0, strlen($chars) - 1)];
                                               }
                                $new_entry  = array('value' => !empty($t['Value'])?$t['Value']:'', 'Name' => 'Val'.$sr,'color' => $color);
                            array_push($trainarr, $new_entry);
                                            $sr++;
                            }
                echo json_encode($trainarr);
           
          }   
            
        }
               
}
