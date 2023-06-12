<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_controller extends Base_Controller 
{
	public function __construct()
  	{
	    parent::__construct();
	    date_default_timezone_set("Asia/Kolkata"); 
        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', 2000);
        $value = base_url();
        setcookie("multicare",$value, time()+3600*24,'/'); 
	    $this->load->model('common_model');
    }
	public function duplicate() 
    {
        $id=$this->input->post('id');
        $p_key=$this->input->post('p_key');
        $tbl=$this->input->post('tbl');
        $where=$this->input->post('where');     
        $value=$this->input->post('value');
        $result=$this->common_model->duplicate($id,$p_key,$tbl,$where,$value);
        if($result->numrows>0)
        {
            $this->json->jsonReturn(array(
                'valid'=>true,
                'msg'=>'<strong>"'. $value.'" </strong> Record Already Exist !'
            ));
        }
        else
        {
            $this->json->jsonReturn(array(
                'valid'=>False
            ));
        }
    }
	
}
