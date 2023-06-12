<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_controller extends Base_Controller 
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
    public function wip_status_report() 
    {
        $this->load->view('wip-status-report');
    }
    public function stock_wip_report_summary() 
    {
        $this->load->view('stock-wip-report-summary');
    }
    public function stock_or_wip_status() 
    {
        $this->load->view('stock-or-wip-status');
    }
    public function stock_movement_reports() 
    {
        $this->load->view('stock-movement-reports');
    }
    
    public function wipstatusreports_display() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$i = $_POST['start'];
		$allCount = 0;
		$countFiltered = 0;
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