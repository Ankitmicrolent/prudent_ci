<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_controller extends Base_Controller 
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
	    $this->load->model('role_model');
    }
	public function add_role()
	{
		$id = $this->input->post('id');
		$data['role_data']=$this->common_model->fetchDataDesc('tbl_role','role_id');
		$this->load->view('add-role');
	}

	public function role_list()
	{
		$data['role_data']=$this->common_model->fetchDataDesc('tbl_role','role_id');
		$this->load->view('role-list',$data);
	}
	public function save_role()
	{
		$user_id=$this->session->userdata('user_id');
		$id=$this->input->post('id');
		$role_name =$this->input->post('role_name');
		$role_desc =$this->input->post('role_desc');
		$data = array('role_name'=>$role_name, 'role_desc'=>$role_desc);
		if(isset($id) && !empty($id))
		{
			$data['modified_by']=$user_id;
			$data['modified_on']=date('Y-m-d H:i:s');
			$result=$this->common_model->updateDetails('tbl_role','role_id',$id,$data);
			if($result)
			{
				$this->json->jsonReturn(array(
					'valid'=>TRUE,
					'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> Role Details Updated Successfully.</div>'
				));
			}
			else
			{
				$this->json->jsonReturn(array(
					'valid'=>FALSE,
					'msg'=>'<div class="alert modify alert-danger"><strong>Oops!</strong> Something Went Wrong.</div>'
				));
			}
		}
		else
		{
			$data['created_by']=$user_id;
            $data['created_on']=date('Y-m-d H:i:s');
			$result=$this->common_model->addData('tbl_role',$data);
			if($result)
			{
				$this->json->jsonReturn(array(
					'valid'=>TRUE,
					'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> Role Details Saved Successfully.</div>',
					 'redirect' => base_url().'role-list'
				));

			}
			else
			{
				$this->json->jsonReturn(array(
					'valid'=>FALSE,
					'msg'=>'<div class="alert modify alert-danger"><strong>Oops!</strong> Something Went Wrong.</div>'
				));
			}
		}
	}
	public function edit_role()
	{
		$id=$this->input->post('id');
		$data['role_data']=$this->common_model->selectDetailsWhr('tbl_role','role_id',$id);
		$this->load->view('add-role',$data);   
	}
	public function delete_role()
	{
		$id=$this->input->post('id');
		$data=array('display'=>'N');
		$result=$this->common_model->updateDetails('tbl_role','role_id',$id,$data);
		if($result)
		{
			$this->json->jsonReturn(array(
				'valid'=>TRUE,
				'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> Record Deleted Successfully.</div>'
			));
		}
		else
		{
			$this->json->jsonReturn(array(
				'valid'=>FALSE,
				'msg'=>'<div class="alert modify alert-danger"><strong>Oops! </strong> Something Went Wrong.</div>'
			));
		}
	}
	public function role_management()
	{
		$data['role_data']=$this->common_model->fetchDataDesc('tbl_role','role_id');
		$this->load->view('role-management',$data);
	}
	public function fetch_role_config()
	{
		$role_id=$this->input->post('id');
		$data['menu_data']=$this->role_model->menu_list1($role_id);
		$view=$this->load->view('prev_table',$data,true);
        $this->json->jsonReturn(array(
            'valid'=>true,
            'view'=>$view
        ));
	}
	public function save_role_config()
    {
		

        $role_id=$this->input->get('name_of_role');
        $submenu=$this->input->get('submenu');
		
        $result = $this->role_model->save_role_config($role_id,$submenu);

        
        if($result)
        {
            $this->json->jsonReturn(array(
                'valid'=>TRUE,
                'msg'=>'<div class="alert modify alert-info"><strong>Well Done!</strong> Role Configuration Saved Successfully!</div>'
            ));
        }
        else
        {
            $this->json->jsonReturn(array(
                'valid'=>TRUE,
                'msg'=>'<div class="alert modify alert-danger"><strong>Error!</strong> While Saving Role Configuration Details.</div>'
            ));
        } 
    }
}
