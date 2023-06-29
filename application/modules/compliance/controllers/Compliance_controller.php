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

    public function Add_View_Compliance(){

        $error = 'N';
        $error_message = '';
        $user_id = $this->session->userdata('user_id');
        if(isset($user_id) && empty($user_id)){
        $error = 'Y';
        $error_message = 'Please loggedin!';
        }
        $month = $this->input->post('month');
        $gstr_1a_confirmation_date = $this->input->post('gstr_1a_confirmation_date');
        $gstr_3b_confirmation_date = $this->input->post('gstr_3b_confirmation_date');
        $pro_fund_confirmation_date = $this->input->post('pro_fund_confirmation_date');
        $tds_confirmation_date = $this->input->post('tds_confirmation_date');
        $esic_confirmation_date = $this->input->post('esic_confirmation_date');
        $proof_tax_confirmation_date = $this->input->post('proof_tax_confirmation_date');
        

        $upload_gtds_doc = $_FILES['upload_gtds_doc']['name']; //here [] name attribute
          $upload_gtds_doc_fileImg = array('upload_path' =>'./uploads/compliance_upload/',
                   'fieldname' => 'upload_gtds_doc',
                     'encrypt_name' => TRUE,        
                     'overwrite' => FALSE,
                   'allowed_types' => 'doc|pdf|txt|png|PNG|jpg|JPG|jpeg|JPEG' );
          $upload_gtds_doc_fileImg = $this->imageupload->image_upload($upload_gtds_doc_fileImg);
          $errormsg= $this->upload->display_errors();
          if(isset($upload_gtds_doc_fileImg) && !empty($upload_gtds_doc_fileImg))
          {
            $upload_gtds_doc_fileData = $this->upload->data();      
            $upload_gtds_doc = $upload_gtds_doc_fileData['file_name'];
          }
        $gstr_3b_doc = $_FILES['gstr_3b_doc']['name']; //here [] name attribute
          $gstr_3b_doc_fileImg = array('upload_path' =>'./uploads/compliance_upload/',
                   'fieldname' => 'gstr_3b_doc',
                     'encrypt_name' => TRUE,        
                     'overwrite' => FALSE,
                   'allowed_types' => 'doc|pdf|txt|png|PNG|jpg|JPG|jpeg|JPEG' );
          $gstr_3b_doc_fileImg = $this->imageupload->image_upload($gstr_3b_doc_fileImg);
          $errormsg= $this->upload->display_errors();
          if(isset($gstr_3b_doc_fileImg) && !empty($gstr_3b_doc_fileImg))
          {
            $gstr_3b_doc_fileData = $this->upload->data();      
            $gstr_3b_doc = $gstr_3b_doc_fileData['file_name'];
          }
        $tds_doc = $_FILES['tds_doc']['name']; //here [] name attribute
          $tds_doc_fileImg = array('upload_path' =>'./uploads/compliance_upload/',
                   'fieldname' => 'tds_doc',
                     'encrypt_name' => TRUE,        
                     'overwrite' => FALSE,
                   'allowed_types' => 'doc|pdf|txt|png|PNG|jpg|JPG|jpeg|JPEG' );
          $tds_doc_file_img = $this->imageupload->image_upload($tds_doc_fileImg);
          $errormsg= $this->upload->display_errors();
          if(isset($tds_doc_file_img) && !empty($tds_doc_file_img))
          {
            $tds_doc_file_img_fileData = $this->upload->data();      
            $tds_doc = $tds_doc_file_img_fileData['file_name'];
          }
        $proof_tax_doc = $_FILES['proof_tax_doc']['name']; //here [] name attribute
          $proof_tax_doc_fileImg = array('upload_path' =>'./uploads/compliance_upload/',
                   'fieldname' => 'proof_tax_doc',
                     'encrypt_name' => TRUE,        
                     'overwrite' => FALSE,
                   'allowed_types' => 'doc|pdf|txt|png|PNG|jpg|JPG|jpeg|JPEG' );
          $proof_tax_doc_file_img = $this->imageupload->image_upload($proof_tax_doc_fileImg);
          $errormsg= $this->upload->display_errors();
          if(isset($proof_tax_doc_file_img) && !empty($proof_tax_doc_file_img))
          {
            $proof_tax_doc_fileData = $this->upload->data();      
            $proof_tax_doc = $proof_tax_doc_fileData['file_name'];
          }
        $pro_fund_doc = $_FILES['pro_fund_doc']['name']; //here [] name attribute
          $pro_fund_doc_file_img = array('upload_path' =>'./uploads/compliance_upload/',
                   'fieldname' => 'pro_fund_doc',
                     'encrypt_name' => TRUE,        
                     'overwrite' => FALSE,
                   'allowed_types' => 'doc|pdf|txt|png|PNG|jpg|JPG|jpeg|JPEG' );
          $pro_fund_doc_file_img = $this->imageupload->image_upload($pro_fund_doc_file_img);
          $errormsg= $this->upload->display_errors();
          if(isset($pro_fund_doc_file_img) && !empty($pro_fund_doc_file_img))
          {
            $pro_fund_doc_fileData = $this->upload->data();      
            $pro_fund_doc = $pro_fund_doc_fileData['file_name'];
          }
        $esic_doc = $_FILES['esic_doc']['name']; //here [] name attribute
          $esic_doc_fileImg = array('upload_path' =>'./uploads/compliance_upload/',
                   'fieldname' => 'esic_doc',
                     'encrypt_name' => TRUE,        
                     'overwrite' => FALSE,
                   'allowed_types' => 'doc|pdf|txt|png|PNG|jpg|JPG|jpeg|JPEG' );
          $esic_doc_file_img = $this->imageupload->image_upload($esic_doc_fileImg);
          $errormsg= $this->upload->display_errors();
          if(isset($esic_doc_file_img) && !empty($esic_doc_file_img))
          {
            $esic_doc_fileData = $this->upload->data();      
            $esic_doc = $esic_doc_fileData['file_name'];
          }
        
           $save_array = array(

            "month" => $month,
            "gstr_1a_confirmation_date" => $gstr_1a_confirmation_date,
            "gstr_1a_doc" => $upload_gtds_doc,
            "gstr_3b_confirmation_date" => $gstr_3b_confirmation_date,
            "gstr_3b_doc" => $gstr_3b_doc,
            "tds_confirmation_date" => $tds_confirmation_date,
            "tds_doc" => $tds_doc,
            "proof_tax_confirmation_date" => $proof_tax_confirmation_date,
            "proof_tax_doc" => $proof_tax_doc,
            "pro_fund_confirmation_date" => $pro_fund_confirmation_date,
            "pro_fund_doc" => $pro_fund_doc,
            "esic_confirmation_date" => $esic_confirmation_date,
            "esic_doc" => $esic_doc,
            "created_by" => $user_id,
            "created_at" => date('Y-m-d H:i:s')
           );
                 if($error == "N"){
           if(isset($save_array) && !empty($save_array)){
            $this->common_model->addData('table_compliance',$save_array);
            // $this->common_model->addData('tbl_delivery_challan',$main_arr);
            $this->json->jsonReturn(array(
                'valid'=>TRUE,
                'msg'=>'<div class="alert modify alert-info">Compliance Details Saved Successfully!</div>',
                'redirect' => base_url().'add-or-view-compliance'
            ));    
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Please Enter Valid Compliance Details!!</div>'
            ));    
        }

    }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">'.$error_message.'</div>'
            ));
          }

            
    }



    public function compliance_list(){


		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		
		$data = $row = array();
		$memData = $this->admin_model->compliance_data($_POST);
		$allCount = $this->admin_model->countcompliance_data();
		$countFiltered = $this->admin_model->compliance_dataListFiltered($_POST);

        $i = $_POST['start'];
		foreach($memData as $member){
            
            $i++;
            if(isset($member->month) && !empty($member->month)) { $month = $member->month; }else { $month = '-'; }
            if(isset($member->gstr_1a_confirmation_date) && !empty($member->gstr_1a_confirmation_date)) { $gstr_1a = $member->gstr_1a_confirmation_date; }else { $gstr_1a = '-'; }
			if(isset($member->gstr_3b_confirmation_date) && !empty($member->gstr_3b_confirmation_date)) { $gstr_3b = $member->gstr_3b_confirmation_date; }else { $gstr_3b = '-'; }
			if(isset($member->tds_confirmation_date) && !empty($member->tds_confirmation_date)) { $tds_date = $member->tds_confirmation_date; }else { $tds_date = '-'; }
			if(isset($member->proof_tax_confirmation_date) && !empty($member->proof_tax_confirmation_date)) { $proof_tax_date = $member->proof_tax_confirmation_date; }else { $proof_tax_date = '-'; }
			if(isset($member->pro_fund_confirmation_date) && !empty($member->pro_fund_confirmation_date)) { $pf_fund_date = $member->pro_fund_confirmation_date; }else { $pf_fund_date = '-'; }
			if(isset($member->esic_confirmation_date) && !empty($member->esic_confirmation_date)) { $esic_date = $member->esic_confirmation_date; }else { $esic_date = '-'; }


			if(isset($member->gstr_1a_doc) && !empty($member->gstr_1a_doc)) { 
                $gstr_1a_doc = '<a href="'.base_url().'uploads/compliance_upload/'.$member->gstr_1a_doc.'" download="">Download</a>';
                 //$member->gstr_1a_doc; }else { 
            }else{
                $gstr_1a_doc = '-'; 
            }
			if(isset($member->gstr_3b_doc) && !empty($member->gstr_3b_doc)) { 
                $gstr_3b_doc = '<a href="'.base_url().'uploads/compliance_upload/'.$member->gstr_3b_doc.'" download="">Download</a>';
                 //$member->gstr_3b_doc; }else { 
            }else{
                $gstr_3b_doc = '-'; 
            }
			if(isset($member->tds_doc) && !empty($member->tds_doc)) { 
                $tds_doc = '<a href="'.base_url().'uploads/compliance_upload/'.$member->tds_doc.'" download="">Download</a>';
                 //$member->tds_doc; }else { 
            }else{
                $tds_doc = '-'; 
            }
			if(isset($member->proof_tax_doc) && !empty($member->proof_tax_doc)) { 
                $proof_tax_doc = '<a href="'.base_url().'uploads/compliance_upload/'.$member->proof_tax_doc.'" download="">Download</a>';
                 //$member->proof_tax_doc; }else { 
            }else{
                $proof_tax_doc = '-'; 
            }
			if(isset($member->pro_fund_doc) && !empty($member->pro_fund_doc)) { 
                $pro_fund_doc = '<a href="'.base_url().'uploads/compliance_upload/'.$member->pro_fund_doc.'" download="">Download</a>';
                 //$member->pro_fund_doc; }else { 
            }else{
                $pro_fund_doc = '-'; 
            }
			if(isset($member->esic_doc) && !empty($member->esic_doc)) { 
                $esic_doc = '<a href="'.base_url().'uploads/compliance_upload/'.$member->esic_doc.'" download="">Download</a>';
                 //$member->esic_doc; }else { 
            }else{
                $esic_doc = '-'; 
            }




			// if(isset($member->gstr_3b_doc) && !empty($member->gstr_3b_doc)) { $gstr_3b_doc = $member->gstr_3b_doc; }else { $gstr_3b_doc = '-'; }
			// if(isset($member->tds_doc) && !empty($member->tds_doc)) { $tds_doc = $member->gstr_3b_doc; }else { $tds_doc = '-'; }
			// if(isset($member->proof_tax_doc) && !empty($member->proof_tax_doc)) { $proof_tax_doc = $member->proof_tax_doc; }else { $proof_tax_doc = '-'; }
			// if(isset($member->pro_fund_doc) && !empty($member->pro_fund_doc)) { $pro_fund_doc = $member->pro_fund_doc; }else { $pro_fund_doc = '-'; }
			// if(isset($member->esic_doc) && !empty($member->esic_doc)) { $esic_doc = $member->esic_doc; }else { $esic_doc = '-'; }
            // <a href="https://trackigo.in/prudent/uploads/native_addr_proof/142556437.png" download=""> Native address </a>
			// if(isset($member->status) && !empty($member->status) && $member->status !='Under Approval') { $status = $member->status; }else { $status = 'Under Approval'; }
			if(isset($member->created_at) && !empty($member->created_at)) { $created_on = $member->created_at; }else { $created_on = '-'; }
			
			$html = '-';
			// $html .= '<a href="javascript:;" class="edit tooltips" rel="'.$member->id.'" title="Edit Provisional WIP" rev="edit_provisional_wip" data-original-title="Edit Installed WIP"><i class="fa fa-edit" style="color:#3598dc; font-size:15px;"></i></a>';
			// $html .= '&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="edit tooltips" rel="'.$member->id.'" title="Delete Provisional WIP" rev="delete_provisional_wip" data-original-title="Delete Installed WIP"><i class="fa fa-trash" style="color:#a94442; font-size: 15px;"></i></a>';
			// $html .= '&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-xs active_link_cmn" href="javascript:void(0);" rev="approved_provisional_wip" rel="'.$member->id.'" title="Click here to Approved Record" data-status="Y">Approve</a>';
			
			$htmlp = '<a class="popup_save" href="javascript:void(0);" rev="view_dcpwip_items" rel="'.$member->id.'" data-title="(#'.$member->id.') Provisional WIP Item List" data-status="allow" style="margin-top:10px;"><span class="md-click-circle md-click-animate" style="height: 97px; width: 97px; top: -38.5312px; left: 29.4896px;"></span> '.$member->id.'</a>';
			$data[] = array(
			$i,
            $month,
            $gstr_1a,
            $gstr_3b,
            $tds_date,
            $proof_tax_date,
            $pf_fund_date,
            $esic_date,
            $gstr_1a_doc,
            $gstr_3b_doc,
            $tds_doc,
            $proof_tax_doc,
            $pro_fund_doc,
            $esic_doc,
			$created_on,
			$html
			);
        }
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