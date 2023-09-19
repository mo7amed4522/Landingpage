<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        
		 $this->load->helper('url');
		 $this->load->model('home_model');
		 $this->load->database('default');
       

    }
    
/* index of the admin. Default: Dashboard; On No Login Session: Back to login page. */
public function index()
{

 
	
	
	$this->load->view('front/index');
}

}
