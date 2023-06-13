<?php

defined('BASEPATH') or exit('No direct script access allowed');



class User_controller extends Base_Controller

{

	public function __construct()

	{

		parent::__construct();

		date_default_timezone_set("Asia/Kolkata");

		ini_set('memory_limit', '1024M');

		ini_set('max_execution_time', 2000);

		$value = base_url();

		setcookie("multicare", $value, time() + 3600 * 24, '/');

		$this->load->model('common_model');

		$this->load->model('user_model');
	}

	public function user_list()

	{

		$data['user_data'] = $this->user_model->user_details();

		$this->load->view('user-list', $data);
	}

	public function add_user()

	{

		$data['role_data'] = $this->common_model->fetchDataDesc('tbl_role', 'role_id');

		$data['designation_data'] = $this->common_model->fetchDataDesc('tbl_designation', 'designation_id');
		$data['role_data'] = $this->common_model->fetchDataDesc('tbl_role', 'role_id');

		$this->load->view('add-user', $data);
	}

	public function save_user()

	{
       

		  
             
		   if (!empty($_FILES['home_addr_proof']) && $_FILES['home_addr_proof']['name'] !='') {
			$home_ad_proof = explode(".",$_FILES['home_addr_proof']['name']);
			$extension = end($home_ad_proof);
            $name = rand(100000000, 999999999) . '.' . $extension;
			$location = './uploads/home_addr_proof/'.$name;
			move_uploaded_file($_FILES['home_addr_proof']['tmp_name'], $location);
			$home_ad_proof_file_path = base_url().'uploads/home_addr_proof/'.$name;
			// echo $name;echo "<br>";
			// echo $home_ad_proof_file_path;
			// // exit;
			
		   }

		   if(!empty($_FILES['native_addr_proof']) && $_FILES['native_addr_proof']['name'] !=''){

			$native_addr_proof = explode(".",$_FILES['native_addr_proof']['name']);

			$extension = end($native_addr_proof);
            $name = rand(100000000, 999999999) . '.' . $extension;
			$location = './uploads/native_addr_proof/'.$name;
			move_uploaded_file($_FILES['native_addr_proof']['tmp_name'], $location);
			$native_addr_proof_file_path = base_url().'uploads/native_addr_proof/'.$name;
			// echo $name;echo "<br>";
			// echo $file_path;

		   }



		   if(!empty($_FILES['local_addr_proof']) && $_FILES['local_addr_proof']['name'] !=''){

			$local_addr_proof = explode(".",$_FILES['local_addr_proof']['name']);

			$extension = end($local_addr_proof);
            $name = rand(100000000, 999999999) . '.' . $extension;
			$location = './uploads/local_addr_proof/'.$name;
			move_uploaded_file($_FILES['local_addr_proof']['tmp_name'], $location);
			$local_addr_proof_file_path = base_url().'uploads/local_addr_proof/'.$name;

		   }
		   if(!empty($_FILES['perm_addr_proof']) && $_FILES['perm_addr_proof']['name'] !='' ){

			
			$perm_addr_proof = explode(".",$_FILES['perm_addr_proof']['name']);

			$extension = end($perm_addr_proof);
            $name = rand(100000000, 999999999) . '.' . $extension;
			$location = './uploads/perm_addr_proof/'.$name;
			move_uploaded_file($_FILES['perm_addr_proof']['tmp_name'], $location);
			$perm_addr_proof_file_path = base_url().'uploads/perm_addr_proof/'.$name;

		   }
		
		   if(!empty($_FILES['drive_lic_proof']) && $_FILES['drive_lic_proof']['name'] !=''){

			

			$drive_lic_proof = explode(".",$_FILES['drive_lic_proof']['name']);

			$extension = end($drive_lic_proof);
            $name = rand(100000000, 999999999) . '.' . $extension;
			$location = './uploads/drive_lic_proof/'.$name;
			move_uploaded_file($_FILES['drive_lic_proof']['tmp_name'], $location);
			$drive_lic_proof_file_path = base_url().'uploads/drive_lic_proof/'.$name;

		   }
		   if(!empty($_FILES['passport_proof'])&& $_FILES['passport_proof']['name'] !='' ){

			
			$passport_proof = explode(".",$_FILES['passport_proof']['name']);

			$extension = end($passport_proof);
            $name = rand(100000000, 999999999) . '.' . $extension;
			$location = './uploads/passport_proof/'.$name;
			move_uploaded_file($_FILES['passport_proof']['tmp_name'], $location);
			$passport_proof_file_path = base_url().'uploads/passport_proof/'.$name;

		   }
		   if(!empty($_FILES['pan_proof']) && $_FILES['pan_proof']['name'] !=''){

			
			
			
			$pan_proof = explode(".",$_FILES['pan_proof']['name']);

			$extension = end($pan_proof);
            $name = rand(100000000, 999999999) . '.' . $extension;
			$location = './uploads/pan_proof/'.$name;
			move_uploaded_file($_FILES['pan_proof']['tmp_name'], $location);
			$pan_proof_file_path = base_url().'uploads/pan_proof/'.$name;

		   }
		
		
		    
	   


		$user_id = $this->session->userdata('user_id');
		$emp_no = $this->input->post('emp_no');

		$id = $this->input->post('id');
		
		$fullname = $this->input->post('fullname');

		$m_name = $this->input->post('m_name');

		$s_name = $this->input->post('s_name');

		$blood_group = $this->input->post('blood_group');

		$dob = $this->input->post('dob');

		$marital_status = $this->input->post('marital_status');

		$home_addr = $this->input->post('home_addr');
		$address = $this->input->post('home_addr');
		

		$native_addr = $this->input->post('native_addr');

		$emergency_contact = $this->input->post('emergency_contact');

		$lived_days = $this->input->post('lived_days');

		$local_addr = $this->input->post('local_addr');
		$perm_addr = $this->input->post('perm_addr');
		$mobile1 = $this->input->post('mobile1');
		$mobile2 = $this->input->post('mobile2');
		$email1 = $this->input->post('email1');
		$nationality = $this->input->post('nationality');
		$religion = $this->input->post('religion');
		$language = $this->input->post('language');
		$mother_tongue = $this->input->post('mother_tongue');
		$drive_lic_no = $this->input->post('drive_lic_no');
		$drive_lic_date = $this->input->post('drive_lic_date');
		$passport_no = $this->input->post('passport_no');
		$passport_date = $this->input->post('passport_date');
		$passport_place = $this->input->post('passport_place');
		$passport_expiry = $this->input->post('passport_expiry');
		$pan_no = $this->input->post('pan_no');
		$bank_details = $this->input->post('bank_details');
		// $home_addr_proof = $home_ad_proof_file_path;


		$email = $this->input->post('email');

		$mobile = $this->input->post('mobile');

		// $address = $this->input->post('address');

		$role_id = $this->input->post('role_id');

		// 		$designation_id=$this->input->post('role_id');

		$username = $this->input->post('username');

		$password = $this->input->post('password');



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






		$data = array(
			'fullname' => $fullname, 'm_name' => $m_name, 's_name' => $s_name, 'blood_group' => $blood_group, 'marital_status' => $marital_status, 'dob' => $dob, 'home_addr' => $home_addr, 'native_addr' => $native_addr, 'emergency_contact' => $emergency_contact,
			'address' => $address,
			'emp_no' => $emp_no,
			'lived_days' => $lived_days,
			'local_addr' => $local_addr,
			'perm_addr' => $perm_addr,
			'mobile1' => $mobile1,
			'mobile2' => $mobile2,
			'email1' => $email1,
			'nationality' => $nationality,
			'religion' => $religion,
			'language' => $language,
			'mother_tongue' => $mother_tongue,
			'drive_lic_no' => $drive_lic_no,
			'drive_lic_date' => $drive_lic_date,
			'passport_no' => $passport_no,
			'passport_date' => $passport_date,
			'passport_place' => $passport_place,
			'passport_expiry' => $passport_expiry,
			'pan_no' => $pan_no,
			'bank_details' => $bank_details,
			'home_addr_proof' => isset($home_ad_proof_file_path) && !empty($home_ad_proof_file_path)?$home_ad_proof_file_path:'',
			'native_addr_proof' => isset($native_addr_proof_file_path) && !empty($native_addr_proof_file_path)?$native_addr_proof_file_path:'',
			'local_addr_proof' => isset($local_addr_proof_file_path) && !empty($local_addr_proof_file_path)?$local_addr_proof_file_path:'',
			'perm_addr_proof' => isset($perm_addr_proof_file_path) && !empty($perm_addr_proof_file_path)?$perm_addr_proof_file_path:'',
			'drive_lic_proof' => isset($drive_lic_proof_file_path) && !empty($drive_lic_proof_file_path)?$drive_lic_proof_file_path:'',
			'passport_proof' =>isset($passport_proof_file_path) && !empty($passport_proof_file_path)?$passport_proof_file_path:'',
			'pan_proof' =>isset($pan_proof_file_path) && !empty($pan_proof_file_path)?$pan_proof_file_path:'',

			'email' => $email, 'mobile' => $mobile, 'address' => $address, 'role_id' => $role_id,
			// 			'designation_id'=>$designation_id,
			'username' => $username, 'password' => $password
		);
        
		// var_dump(isset($id) && !empty($id));
		

		if (isset($id) && !empty($id)) {

			$data['modified_by'] = $user_id;

			$data['modified_on'] = date('Y-m-d H:i:s');

			$result = $this->common_model->updateDetails('tbl_user', 'user_id', $id, $data);

			$data_user_education = $this->common_model->selectDetailsWhere('tbl_user_education', 'user_id',$id);
		$data_user_emphistory = $this->common_model->selectDetailsWhere('tbl_user_emphistory', 'user_id',$id);
		$data_user_family = $this->common_model->selectDetailsWhere('tbl_user_family','user_id',$id);
   
		       if( is_array($data_user_education) && count($data_user_education) > 0){

				   foreach ($data_user_education as $key => $value) {
					   
					 $delete = $this->common_model->deleteRow('tbl_user_education',$value->id);
	 
				   }
			   }


			   if(is_array($data_user_emphistory) && count($data_user_emphistory) > 0){


				   foreach ($data_user_emphistory as $key => $value) {
					   
					 $delete = $this->common_model->deleteRow('tbl_user_emphistory',$value->id);
	 
				   }
			   }
			   if(is_array($data_user_family) && count($data_user_family) > 0){



				   foreach ($data_user_family as $key => $value) {
					   
					 $delete = $this->common_model->deleteRow('tbl_user_family',$value->id);
	 
				   }
			   }

			foreach ($edus as $edu) {

				$ed = array(

					"user_id" => $id,
					"college" => $edu['college'],
					"passing_year" => $edu['passing_year'],
					"degree_diploma" => $edu['degree_diploma'],
					"special_sub" => $edu['special_sub'],
					"percent_obtain" => $edu['percent_obtain'],


				);
				$edu_id = $this->common_model->addData('tbl_user_education', $ed);
			}

			if ($result) {

				$this->json->jsonReturn(array(

					'valid' => TRUE,

					'msg' => '<div class="alert modify alert-info"><strong>Welldone!</strong> User Details Updated Successfully.</div>'

				));
			} else {

				$this->json->jsonReturn(array(

					'valid' => FALSE,

					'msg' => '<div class="alert modify alert-danger"><strong>Oops!</strong> Something Went Wrong.</div>'

				));
			}
		} else {
			


			$data['created_by'] = $user_id;

			$data['created_on'] = date('Y-m-d, H:i:s');

			$result = $this->common_model->addData('tbl_user', $data);

			if ($result) {

				foreach ($familys as $family) {
                               if($family['relation'] != "" && $family['f_name'] != ""){





							 
					$fam = array(

						"user_id" => $result,
						"relation" => $family['relation'],
						"f_name" => $family['f_name'],
						"f_dob" => $family['f_dob'],
						"f_age" => $family['f_age'],
						"f_education" => $family['f_education'],
						"f_occup" => $family['f_occup'],

					);
					$fam_id = $this->common_model->addData('tbl_user_family', $fam);
				}
				}


				foreach ($edus as $edu) {



                      if($edu['college'] != "" && $edu['special_sub'] != ""){




					  
					$ed = array(

						"user_id" => $result,
						"college" => $edu['college'],
						"passing_year" => $edu['passing_year'],
						"degree_diploma" => $edu['degree_diploma'],
						"special_sub" => $edu['special_sub'],
						"percent_obtain" => $edu['percent_obtain'],


					);
					$edu_id = $this->common_model->addData('tbl_user_education', $ed);
				}
				}

				foreach ($empdetail as $empde) {


                           if($edu['position'] != "" && $edu['employer_details'] != ""){



						

					$emp = array(

						"user_id" => $result,
						"position" => $empde['position'],
						"from" => $empde['from'],
						"to" => $empde['to'],
						"employer" => $empde['employer_details'],
						"responsibilities" => $empde['responsibilities'],
						"ctc" => $empde['cost_to_company'],


					);
					$emp_id = $this->common_model->addData('tbl_user_emphistory', $emp);
				}
				}



				$this->json->jsonReturn(array(

					'valid' => TRUE,

					'msg' => '<div class="alert modify alert-info"><strong>Welldone!</strong> User Details Saved Successfully.</div>',

					'redirect' => base_url() . 'user-list'

				));
			} else {

				$this->json->jsonReturn(array(

					'valid' => FALSE,

					'msg' => '<div class="alert modify alert-danger"><strong>Oops!</strong> Something Went Wrong.</div>'

				));
			}
		}
	}

	public function edit_user()

	{

		$id = $this->input->post('id');

		$data['role_data'] = $this->common_model->fetchDataDesc('tbl_role', 'role_id');

		$data['designation_data'] = $this->common_model->fetchDataDesc('tbl_designation', 'designation_id');
		$data['user_education'] = $this->common_model->selectDetailsWhere('tbl_user_education', 'user_id',$id);
		$data['user_emphistory'] = $this->common_model->selectDetailsWhere('tbl_user_emphistory', 'user_id',$id);
		$data['user_family'] = $this->common_model->selectDetailsWhere('tbl_user_family','user_id',$id);
		
		

		$data['user_data'] = $this->user_model->edit_user_details($id);
		

		$this->load->view('add-user', $data);
	}

	public function delete_user()

	{

		$id = $this->input->post('id');

		$data = array('display' => 'N');

		$result = $this->common_model->updateDetails('tbl_user', 'user_id', $id, $data);

		if ($result) {

			$this->json->jsonReturn(array(

				'valid' => TRUE,

				'msg' => '<div class="alert modify alert-info"><strong>Welldone!</strong> Data Deleted Successfully.</div>'

			));
		} else {

			$this->json->jsonReturn(array(

				'valid' => FALSE,

				'msg' => '<div class="alert modify alert-danger"><strong>Oops!</strong> Something Went Wrong.</div>'

			));
		}
	}

	public function active_user_status()

	{

		$id = $this->input->post('id');

		$data = array('user_status' => 'Active');

		$result = $this->common_model->updateDetails('tbl_user', 'user_id', $id, $data);

		// echo $this->db->last_query(); die;

		if ($result) {

			$this->json->jsonReturn(array(

				'valid' => TRUE,

				'msg' => '<div class="alert modify alert-info"><strong>Welldone!</strong>User Status Changed Successfully!</div>'

			));
		} else {

			$this->json->jsonReturn(array(

				'valid' => FALSE,

				'msg' => '<div class="alert modify alert-danger"><strong>Error</strong> While User Status Changing!</div>'

			));
		}
	}

	public function block_user_status()

	{

		$id = $this->input->post('id');

		$data = array('user_status' => 'Block');

		$result = $this->common_model->updateDetails('tbl_user', 'user_id', $id, $data);

		if ($result) {

			$this->json->jsonReturn(array(

				'valid' => TRUE,

				'msg' => '<div class="alert modify alert-info"><strong>Welldone!</strong>User Status Changed Successfully!</div>'

			));
		} else {

			$this->json->jsonReturn(array(

				'valid' => FALSE,

				'msg' => '<div class="alert modify alert-danger"><strong>Error</strong> While User Status Changing!</div>'

			));
		}
	}
}
