<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compliance_controller extends Base_Controller 
{
	public function __construct()
  	{
	    parent::__construct();
	    $this->clear_cache();  
        date_default_timezone_set("Asia/Kolkata"); 
        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', 2000);
        $value = base_url();
        setcookie("multicare",$value, time()+3600*24,'/'); 
	    $this->load->model('common_model');
        $this->load->model('admin_model');
        error_reporting(E_ALL & ~E_NOTICE);
    }
    public function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
    public function add_or_view_compliance() 
    {
        $this->load->view('add-or-view-compliance');
    }
    public function pending_compliance() 
    {
        $this->load->view('pending-compliance');
    }
    public function pending_compliance_list_display() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$i = $_POST['start'];
		$allCount = 0;
		$countFiltered = 0;
		$data[0] = array('1','GSTR-1A','April 2023','');
		$data[1] = array('2','TDS','April 2023','');
		$data[2] = array('3','Professional Tax (PT)','April 2023','');
		$data[3] = array('4','Provident Fund (PF)','May 2023','');
		$data[4] = array('5','GSTR-1A','May 2023','');
		$output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    
}