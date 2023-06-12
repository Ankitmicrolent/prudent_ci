<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class User_controller extends Base_Controller 

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

	    $this->load->model('user_model');

    }

	public function user_list()

	{

		$data['user_data']=$this->user_model->user_details();

		$this->load->view('user-list',$data);

	}

	public function add_user()

	{

		$data['role_data']=$this->common_model->fetchDataDesc('tbl_role','role_id');

		$data['designation_data']=$this->common_model->fetchDataDesc('tbl_designation','designation_id');
		$data['role_data']=$this->common_model->fetchDataDesc('tbl_role','role_id');

		$this->load->view('add-user',$data);

	}

	public function save_user()

	{

		$user_id=$this->session->userdata('user_id');

		$id=$this->input->post('id');

		$fullname=$this->input->post('fullname');

		$m_name=$this->input->post('m_name');

		$s_name=$this->input->post('s_name');

		$blood_group=$this->input->post('blood_group');

		$dob=$this->input->post('dob');

		$marital_status=$this->input->post('marital_status');

		$home_addr=$this->input->post('home_addr');

		$native_addr=$this->input->post('native_addr');

		$emergency_contact=$this->input->post('emergency_contact');

		$lived_days=$this->input->post('lived_days');

		$local_addr=$this->input->post('local_addr');
		$perm_addr=$this->input->post('perm_addr');
		$mobile1=$this->input->post('mobile1');
		$mobile2=$this->input->post('mobile2');
		$email1=$this->input->post('email1');
		$nationality=$this->input->post('nationality');
		$religion=$this->input->post('religion');
		$language=$this->input->post('language');
		$mother_tongue=$this->input->post('mother_tongue');
		$drive_lic_no=$this->input->post('drive_lic_no');
		$drive_lic_date=$this->input->post('drive_lic_date');
		$passport_no=$this->input->post('passport_no');
		$passport_date=$this->input->post('passport_date');
		$passport_place=$this->input->post('passport_place');
		$passport_expiry=$this->input->post('passport_expiry');
		$pan_no=$this->input->post('pan_no');
		$bank_details=$this->input->post('bank_details');
		$home_addr_proof=$this->input->post('home_addr_proof');


		$email=$this->input->post('email');

		$mobile=$this->input->post('mobile');

		$address=$this->input->post('address');

		$role_id=$this->input->post('role_id');

// 		$designation_id=$this->input->post('role_id');

		$username=$this->input->post('username');

		$password=$this->input->post('password');
		
		
		
		$familys_old  = array(
    'relation' => $this->input->post('relation'),
    'f_name' => $this->input->post('f_name'),
    'f_dob' => $this->input->post('f_dob'),
    'f_age' => $this->input->post('f_age'),
    'f_education' => $this->input->post('f_education'),
    'f_occup' => $this->input->post('f_occup'),
);

    $edu_old = array(
        'college' => $this->input->post('college'),
        'passing_year' => $this->input->post('passing_year'),
        'degree_diploma' => $this->input->post('degree_diploma'),
        'special_sub' => $this->input->post('special_sub'),
        'percent_obtain' => $this->input->post('percent_obtain'),
        );
   
   		$employment_old  = array(
    'position' => $this->input->post('position'),
    'from' => $this->input->post('from'),
    'to' => $this->input->post('to'),
    'employer_details' => $this->input->post('employer_details'),
    'responsibilities' => $this->input->post('responsibilities'),
    'cost_to_company' => $this->input->post('cost_to_company'),
);




       $familys = array();
     foreach ($familys_old as $key => $values) {
    for ($i = 0; $i < count($values); $i++) {
        if (!isset($familys[$i])) {
            $familys[$i] = array();
        }
        $familys[$i][$key] = $values[$i];
    }
}
       $edus = array();
     foreach ($edu_old as $key => $values) {
    for ($i = 0; $i < count($values); $i++) {
        if (!isset($edus[$i])) {
            $edus[$i] = array();
        }
        $edus[$i][$key] = $values[$i];
    }
}
       $empdetail = array();
     foreach ($employment_old as $key => $values) {
    for ($i = 0; $i < count($values); $i++) {
        if (!isset($empdetail[$i])) {
            $empdetail[$i] = array();
        }
        $empdetail[$i][$key] = $values[$i];
    }
}

    

		
		
	    

		$data=array('fullname'=>$fullname,'m_name'=>$m_name,'s_name'=>$s_name,'blood_group'=>$blood_group, 'marital_status'=>$marital_status,'dob'=>$dob,'home_addr'=>$home_addr,'native_addr'=>$native_addr,'emergency_contact'=>$emergency_contact,

			'lived_days'=>$lived_days,
			'local_addr'=>$local_addr,
			'perm_addr'=>$perm_addr,
			'mobile1'=>$mobile1,
			'mobile2'=>$mobile2,
			'email1'=>$email1,
			'nationality'=>$nationality,
			'religion'=>$religion,
			'language'=>$language,
			'mother_tongue'=>$mother_tongue,
			'drive_lic_no'=>$drive_lic_no,
			'drive_lic_date'=>$drive_lic_date,
			'passport_no'=>$passport_no,
			'passport_date'=>$passport_date,
			'passport_place'=>$passport_place,
			'passport_expiry'=>$passport_expiry,
			'pan_no'=>$pan_no,
			'bank_details'=>$bank_details,
			'home_addr_proof'=>$home_addr_proof,

			'email'=>$email, 'mobile'=>$mobile, 'address'=>$address, 'role_id'=>$role_id,
// 			'designation_id'=>$designation_id,
			'username'=>$username, 'password'=>$password);

		if(isset($id) && !empty($id))

		{

			$data['modified_by']=$user_id;

			$data['modified_on']=date('Y-m-d H:i:s');

			$result=$this->common_model->updateDetails('tbl_user','user_id',$id,$data);

			if($result)

			{

				$this->json->jsonReturn(array(

					'valid'=>TRUE,

					'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> User Details Updated Successfully.</div>'

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

			$data['created_on']=date('Y-m-d, H:i:s');

			$result=$this->common_model->addData('tbl_user',$data);

			if($result)

			{
			    
			    foreach( $familys as $family){
			        
			        $fam = array(
			            
			               "user_id" => $result,
			               "relation" =>$family['relation'],
			               "f_name" =>$family['f_name'],
			               "f_dob" =>$family['f_dob'],
			               "f_age" =>$family['f_age'],
			               "f_education" => $family['f_education'],
			               "f_occup" =>$family['f_occup'],
			            
			            );
			            	$fam_id=$this->common_model->addData('tbl_user_family',$fam);
			            
			    }
			
			    
			    foreach( $edus as $edu){
			        
			       

			        
			        $ed = array(
			            
			               "user_id" => $result,
			               "college" =>$edu['college'],
			               "passing_year" =>$edu['passing_year'],
			               "degree_diploma" =>$edu['degree_diploma'],
			               "special_sub" =>$edu['special_sub'],
			               "percent_obtain" => $edu['percent_obtain'],
			             
			            
			            );
			            	$edu_id=$this->common_model->addData('tbl_user_education',$ed);
			            
			    }
			    
			    foreach( $empdetail as $empde){
			 


			        
			        $emp = array(
			            
			               "user_id" => $result,
			               "position" =>$empde['position'],
			               "from" =>$empde['from'],
			               "to" =>$empde['to'],
			               "employer" =>$empde['employer_details'],
			               "responsibilities" => $empde['responsibilities'],
			               "ctc" => $empde['cost_to_company'],
			
			            
			            );
			            	$emp_id=$this->common_model->addData('tbl_user_emphistory',$emp);
			            
			    }
			    
			    

				$this->json->jsonReturn(array(

					'valid'=>TRUE,						

					'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> User Details Saved Successfully.</div>',

					'redirect' => base_url().'user-list'

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

	public function edit_user()

	{

		$id=$this->input->post('id');

		$data['role_data']=$this->common_model->fetchDataDesc('tbl_role','role_id');

		$data['designation_data']=$this->common_model->fetchDataDesc('tbl_designation','designation_id');

		$data['user_data']=$this->user_model->edit_user_details($id);

		$this->load->view('add-user',$data);

	}

	public function delete_user()

	{

		$id=$this->input->post('id');

		$data=array('display'=>'N');

		$result=$this->common_model->updateDetails('tbl_user','user_id',$id,$data);

		if($result)

		{

			$this->json->jsonReturn(array(

				'valid'=>TRUE,

				'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> Data Deleted Successfully.</div>'

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

	public function active_user_status()

    {

        $id=$this->input->post('id');

        $data=array( 'user_status'=>'Active' );

        $result=$this->common_model->updateDetails('tbl_user','user_id',$id,$data);

        // echo $this->db->last_query(); die;

        if($result)

        {

            $this->json->jsonReturn(array(

                'valid'=>TRUE,

                'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong>User Status Changed Successfully!</div>'

            ));

        }

        else

        {

            $this->json->jsonReturn(array(

                'valid'=>FALSE,

                'msg'=>'<div class="alert modify alert-danger"><strong>Error</strong> While User Status Changing!</div>'

            ));

        }

    }

    public function block_user_status()

    {

        $id=$this->input->post('id');

        $data=array( 'user_status'=>'Block' );

        $result=$this->common_model->updateDetails('tbl_user','user_id',$id,$data);

        if($result)

        {

            $this->json->jsonReturn(array(

                'valid'=>TRUE,

                'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong>User Status Changed Successfully!</div>'

            ));

        }

        else

        {

            $this->json->jsonReturn(array(

                'valid'=>FALSE,

                'msg'=>'<div class="alert modify alert-danger"><strong>Error</strong> While User Status Changing!</div>'

            ));

        }

    }

}

