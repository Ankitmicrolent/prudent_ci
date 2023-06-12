<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_controller extends Base_Controller 
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
    public function vendor_list() 
    {
        $data['vendor_data']=$this->common_model->fetchDataDesc('tbl_vendor','vendor_id');
        $this->load->view('vendor-list',$data);
    }
	public function add_vendor() 
    {
        $this->load->view('add-vendor');
    }
    public function edit_vendor($id=NULL)
    {
        $data['vendor_data']=$this->common_model->selectDetailsWhr('tbl_vendor','vendor_id',$id);
        $this->load->view('add-vendor',$data);  
    }
    public function save_vendor() 
    {
        $user_id=$this->session->userdata('user_id');
        $id=$this->input->post('id');
        $name_of_company =$this->input->post('name_of_company');
        if(isset($name_of_company) && !empty($name_of_company)) {$name_of_company=trim($name_of_company); } else {$name_of_company=''; }
        $business_type =$this->input->post('business_type');
        if(isset($business_type) && !empty($business_type)) {$business_type=trim($business_type); } else {$business_type=''; }
        $name_of_dir_part =$this->input->post('name_of_dir_part');
        if(isset($name_of_dir_part) && !empty($name_of_dir_part)) {$name_of_dir_part=trim($name_of_dir_part); } else {$name_of_dir_part=''; }
        $dir_part_contact_no =$this->input->post('dir_part_contact_no');
        if(isset($dir_part_contact_no) && !empty($dir_part_contact_no)) {$dir_part_contact_no=trim($dir_part_contact_no); } else {$dir_part_contact_no=''; }
        $dir_part_contact_address =$this->input->post('dir_part_contact_address');
        if(isset($dir_part_contact_address) && !empty($dir_part_contact_address)) {$dir_part_contact_address=trim($dir_part_contact_address); } else {$dir_part_contact_address=''; }
        $dir_cin_act_reng_nos =$this->input->post('dir_cin_act_reng_nos');
        if(isset($dir_cin_act_reng_nos) && !empty($dir_cin_act_reng_nos)) {$dir_cin_act_reng_nos=trim($dir_cin_act_reng_nos); } else {$dir_cin_act_reng_nos=''; }
        $reg_house_building_no =$this->input->post('reg_house_building_no');
        if(isset($reg_house_building_no) && !empty($reg_house_building_no)) {$reg_house_building_no=trim($reg_house_building_no); } else {$reg_house_building_no=''; }
        $reg_street =$this->input->post('reg_street');
        if(isset($reg_street) && !empty($reg_street)) {$reg_street=trim($reg_street); } else {$reg_street=''; }
        $reg_city_post_code =$this->input->post('reg_city_post_code');
        if(isset($reg_city_post_code) && !empty($reg_city_post_code)) {$reg_city_post_code=trim($reg_city_post_code); } else {$reg_city_post_code=''; }
        $reg_country =$this->input->post('reg_country');
        if(isset($reg_country) && !empty($reg_country)) {$reg_country=trim($reg_country); } else {$reg_country=''; }
        $corporate_house_building_no =$this->input->post('corporate_house_building_no');
        if(isset($corporate_house_building_no) && !empty($corporate_house_building_no)) {$corporate_house_building_no=trim($corporate_house_building_no); } else {$corporate_house_building_no=''; }
        $corporate_street =$this->input->post('corporate_street');
        if(isset($corporate_street) && !empty($corporate_street)) {$corporate_street=trim($corporate_street); } else {$corporate_street=''; }
        $corporate_city_post_code =$this->input->post('corporate_city_post_code');
        if(isset($corporate_city_post_code) && !empty($corporate_city_post_code)) {$corporate_city_post_code=trim($corporate_city_post_code); } else {$corporate_city_post_code=''; }
        $corporate_country =$this->input->post('corporate_country');
        if(isset($corporate_country) && !empty($corporate_country)) {$corporate_country=trim($corporate_country); } else {$corporate_country=''; }
        $contact_person_name =$this->input->post('contact_person_name');
        if(isset($contact_person_name) && !empty($contact_person_name)) {$contact_person_name=trim($contact_person_name); } else {$contact_person_name=''; }
        $telephone_incl_ext =$this->input->post('telephone_incl_ext');
        if(isset($telephone_incl_ext) && !empty($telephone_incl_ext)) {$telephone_incl_ext=trim($telephone_incl_ext); } else {$telephone_incl_ext=''; }
        $comm_mobile_phone =$this->input->post('comm_mobile_phone');
        if(isset($comm_mobile_phone) && !empty($comm_mobile_phone)) {$comm_mobile_phone=trim($comm_mobile_phone); } else {$comm_mobile_phone=''; }
        $comm_fax =$this->input->post('comm_fax');
        if(isset($comm_fax) && !empty($comm_fax)) {$comm_fax=trim($comm_fax); } else {$comm_fax=''; }
        $comm_email =$this->input->post('comm_email');
        if(isset($comm_email) && !empty($comm_email)) {$comm_email=trim($comm_email); } else {$comm_email=''; }
        $stand_communication_method =$this->input->post('stand_communication_method');
        if(isset($stand_communication_method) && !empty($stand_communication_method)) {$stand_communication_method=trim($stand_communication_method); } else {$stand_communication_method=''; }
        $gst_registration_no =$this->input->post('gst_registration_no');
        if(isset($gst_registration_no) && !empty($gst_registration_no)) {$gst_registration_no=trim($gst_registration_no); } else {$gst_registration_no=''; }
        $pan_number =$this->input->post('pan_number');
        if(isset($pan_number) && !empty($pan_number)) {$pan_number=trim($pan_number); } else {$pan_number=''; }
        $bank_key =$this->input->post('bank_key');
        if(isset($bank_key) && !empty($bank_key)) {$bank_key=trim($bank_key); } else {$bank_key=''; }
        $bank_acc_no_vendor =$this->input->post('bank_acc_no_vendor');
        if(isset($bank_acc_no_vendor) && !empty($bank_acc_no_vendor)) {$bank_acc_no_vendor=trim($bank_acc_no_vendor); } else {$bank_acc_no_vendor=''; }
        $name_of_bank =$this->input->post('name_of_bank');
        if(isset($name_of_bank) && !empty($name_of_bank)) {$name_of_bank=trim($name_of_bank); } else {$name_of_bank=''; }
        $name_of_branch =$this->input->post('name_of_branch');
        if(isset($name_of_branch) && !empty($name_of_branch)) {$name_of_branch=trim($name_of_branch); } else {$name_of_branch=''; }
        $bank_ifsc_code =$this->input->post('bank_ifsc_code');
        if(isset($bank_ifsc_code) && !empty($bank_ifsc_code)) {$bank_ifsc_code=trim($bank_ifsc_code); } else {$bank_ifsc_code=''; }
        $bank_branch_code =$this->input->post('bank_branch_code');
        if(isset($bank_branch_code) && !empty($bank_branch_code)) {$bank_branch_code=trim($bank_branch_code); } else {$bank_branch_code=''; }
        $bank_address =$this->input->post('bank_address');
        if(isset($bank_address) && !empty($bank_address)) {$bank_address=trim($bank_address); } else {$bank_address=''; }
        $bank_city =$this->input->post('bank_city');
        if(isset($bank_city) && !empty($bank_city)) {$bank_city=trim($bank_city); } else {$bank_city=''; }
        $micr_cheque_no_of_cheque =$this->input->post('micr_cheque_no_of_cheque');
        if(isset($micr_cheque_no_of_cheque) && !empty($micr_cheque_no_of_cheque)) {$micr_cheque_no_of_cheque=trim($micr_cheque_no_of_cheque); } else {$micr_cheque_no_of_cheque=''; }
        $tele_no_of_bank =$this->input->post('tele_no_of_bank');
        if(isset($tele_no_of_bank) && !empty($tele_no_of_bank)) {$tele_no_of_bank=trim($tele_no_of_bank); } else {$tele_no_of_bank=''; }
        $fax_no_of_bank =$this->input->post('fax_no_of_bank');
        if(isset($fax_no_of_bank) && !empty($fax_no_of_bank)) {$fax_no_of_bank=trim($fax_no_of_bank); } else {$fax_no_of_bank=''; }
        $bank_type_of_account =$this->input->post('bank_type_of_account');
        if(isset($bank_type_of_account) && !empty($bank_type_of_account)) {$bank_type_of_account=trim($bank_type_of_account); } else {$bank_type_of_account=''; }
        $bank_region =$this->input->post('bank_region');
        if(isset($bank_region) && !empty($bank_region)) {$bank_region=trim($bank_region); } else {$bank_region=''; }
        $bank_large_customers =$this->input->post('bank_large_customers');
        if(isset($bank_large_customers) && !empty($bank_large_customers)) {$bank_large_customers=trim($bank_large_customers); } else {$bank_large_customers=''; }
        $bank_for_office_purpose =$this->input->post('bank_for_office_purpose');
        if(isset($bank_for_office_purpose) && !empty($bank_for_office_purpose)) {$bank_for_office_purpose=trim($bank_for_office_purpose); } else {$bank_for_office_purpose=''; }
        $ref_vendor_emp_frd =$this->input->post('ref_vendor_emp_frd');
        if(isset($ref_vendor_emp_frd) && !empty($ref_vendor_emp_frd)) {$ref_vendor_emp_frd=trim($ref_vendor_emp_frd); } else {$ref_vendor_emp_frd=''; }
        $data = array(
            'name_of_company' =>$name_of_company,
            'business_type' =>$business_type,
            'name_of_dir_part' =>$name_of_dir_part,
            'dir_part_contact_no' =>$dir_part_contact_no,
            'dir_part_contact_address' =>$dir_part_contact_address,
            'dir_cin_act_reng_nos' =>$dir_cin_act_reng_nos,
            'reg_house_building_no' =>$reg_house_building_no,
            'reg_street' =>$reg_street,
            'reg_city_post_code' =>$reg_city_post_code,
            'reg_country' =>$reg_country,
            'corporate_house_building_no' =>$corporate_house_building_no,
            'corporate_street' =>$corporate_street,
            'corporate_city_post_code' =>$corporate_city_post_code,
            'corporate_country' =>$corporate_country,
            'contact_person_name' =>$contact_person_name,
            'telephone_incl_ext' =>$telephone_incl_ext,
            'comm_mobile_phone' =>$comm_mobile_phone,
            'comm_fax' =>$comm_fax,
            'comm_email' =>$comm_email,
            'stand_communication_method' =>$stand_communication_method,
            'gst_registration_no' =>$gst_registration_no,
            'pan_number' =>$pan_number,
            'bank_key' =>$bank_key,
            'bank_acc_no_vendor' =>$bank_acc_no_vendor,
            'name_of_bank' =>$name_of_bank,
            'name_of_branch' =>$name_of_branch,
            'bank_ifsc_code' =>$bank_ifsc_code,
            'bank_branch_code' =>$bank_branch_code,
            'bank_address' =>$bank_address,
            'bank_city' =>$bank_city,
            'micr_cheque_no_of_cheque' =>$micr_cheque_no_of_cheque,
            'tele_no_of_bank' =>$tele_no_of_bank,
            'fax_no_of_bank' =>$fax_no_of_bank,
            'bank_type_of_account' =>$bank_type_of_account,
            'bank_region' =>$bank_region,
            'bank_large_customers' =>$bank_large_customers,
            'bank_for_office_purpose' =>$bank_for_office_purpose,
            'ref_vendor_emp_frd' =>$ref_vendor_emp_frd
        );
        if(isset($id) && !empty($id))
        {
            $data['modified_by']=$user_id;
            $data['modified_on']=date('Y-m-d H:i:s');
            $result=$this->common_model->updateDetails('tbl_vendor','vendor_id',$id,$data);
            if($result)
            {
                $this->json->jsonReturn(array(
                    'valid'=>TRUE,
                    'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> Vendor Details Updated Successfully.</div>'
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
            $result=$this->common_model->addData('tbl_vendor',$data);
            if($result)
            {
                $this->json->jsonReturn(array(
                    'valid'=>TRUE,
                    'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> Vendor Details Saved Successfully.</div>',
                     'redirect' => base_url().'add-vendor'
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
}
