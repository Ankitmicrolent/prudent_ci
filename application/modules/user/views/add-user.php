<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8" />

    <title>Add Team Member | <?php echo project_name; ?> </title>

    <base href="<?php echo base_url();?>">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/global/css/components-rounded.css?<?php echo date('Y-m-d H:i:s');?>" id="style_components" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>/assets/admin/layout4/css/light.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/site/css/validationEngine.jquery.css" rel="stylesheet">

    <style>

        .has-error{

            border: 1px solid #a94442;

        }

    </style>

</head>



<body class="page-header-fixed page-sidebar-closed-hide-logo "> 

    <?php $this->load->view('common/header');?> 

    <div class="clearfix"> </div>

    <div class="page-container"> 

        <?php $this->load->view('common/sidebar');?> 

        <div class="page-content-wrapper">

            <div class="page-content">

                <div class="portlet-body">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="portlet light">

                                <div class="portlet-title">

                                    <div class="caption font-blue"> <i class="fa fa-plus-circle font-blue"></i> <span class="caption-subject bold uppercase"> Team Member test </span> </div>

                                </div>

                                <div class="portlet-body form">

                                    <form action="save_user" id="save_user" class="horizontal-form" method="post" enctype="multipart/form-data">

                                        <div class="form-body">

                                            <div class="row">

                                                <div class="col-md-6">

                                                    <div class="form-group">

                                                        <label>Employee No. <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                        
                                                        <input type="hidden" class="form-control" name="id"
                                                             
                                                             value="<?php echo(isset($user_data->user_id) && !empty($user_data->user_id))?$user_data->user_id:''?>">

                                                        <div class="input-icon right">

                                                             <i class="fa"></i>
                                                             
                                                             <input type="text" class="form-control duplicate" name="emp_no"
                                                             data-tbl="tbl_user" data-p_key="user_id" data-where="emp_no" rel="0" 
                                                             value="<?php echo(isset($user_data->emp_no) && !empty($user_data->emp_no))?$user_data->emp_no:''?>" placeholder="Employee No." required>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-3">

                                                    <div class="form-group"> 

                                                        <label class="control-label">Designation <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                        <div class="input-icon"> 

                                                            <select class="form-control select2me" name="role_id" required>

                                                            <option value="">Select</option>

                                                            <?php if(isset($role_data) && !empty($role_data))

                                                            {

                                                              foreach ($role_data as $key) 

                                                              { ?>

                                                                <option value="<?php echo $key->role_id?>" <?php echo (isset($user_data->role_id) && !empty($user_data->role_id) && ($user_data->role_id==$key->role_id))?'selected="selected"':'';?>><?php echo $key->role_name;?></option>

                                                              <?php }                             

                                                            } ?>                            

                                                          </select> 

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-3">

            										<div class="form-group">

            											<label class="">Date of Joining <span class="required" aria-required="true" style="color:#a94442">*</span></label>

            											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">

            												<input type="text" name="joining_date" id="joining_date" class="form-control" readonly="" placeholder="Date of Joining" value="<?php echo(isset($user_data->joining_date) && !empty($user_data->joining_date))?date("d-F-Y", strtotime($user_data->joining_date)):''?>">		

            												<span class="input-group-btn">

            													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

            												</span>

            											</div>

            										</div> 

            									</div>

                                            </div>

                                            <div class="panel panel-default">

                                            <div class="panel-heading">

                                                <h4 class="panel-title">Part A – Personal Details</h4>

                                            </div>

                                            <div class="panel-body">

                                                <div class="row">

                                                    <div class="col-md-2">

                                                        <div class="form-group"> 

                                                            <label class="control-label">Name <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon"> 

                                                                <select class="form-control select2me" name="name_type" required>

                                                                <option value="Mrs">Mrs</option>

                                                                <option value="Ms">Ms</option>

                                                                <option value="Mr">Mr</option>

                                                                </select> 

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-4">

                                                        <div class="form-group">

                                                            <label>First Name <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <!-- <input type="text" class="form-control " name="first_name" value="<?php echo(isset($user_data->fullname) && !empty($user_data->first_name))?$user_data->first_name:''?>" placeholder="First Name" required> -->

                                       <input type="text" class="form-control " name="fullname" value="<?php echo(isset($user_data->fullname) && !empty($user_data->fullname))?$user_data->fullname:''?>" placeholder="First Name" required>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="form-group">

                                                            <label>Middle Name <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="m_name" value="<?php echo(isset($user_data->m_name) && !empty($user_data->m_name))?$user_data->m_name:''?>" placeholder="Middle Name" required>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="form-group">

                                                            <label>Surname <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="s_name" value="<?php echo(isset($user_data->s_name) && !empty($user_data->s_name))?$user_data->s_name:''?>" placeholder="Surname" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>   

                                                <div class="row">

                                                    <div class="col-md-2">

                                                        <div class="form-group">

                                                            <label>Blood Group <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="blood_group" value="<?php echo(isset($user_data->blood_group) && !empty($user_data->blood_group))?$user_data->blood_group:''?>" placeholder="Blood Group" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-4">

                                                        <div class="form-group">

                                                            <label>Tel. No. <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="mobile" value="<?php echo(isset($user_data->mobile) && !empty($user_data->mobile))?$user_data->mobile:''?>" placeholder="Tel. No." required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                										<div class="form-group">

                											<label class="">Date of Birth <span class="required" aria-required="true" style="color:#a94442">*</span></label>

                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">

                												<input type="text" name="dob" id="dob" class="form-control" readonly="" placeholder="Date of Birth" value="<?php echo(isset($user_data->dob) && !empty($user_data->dob))?$user_data->dob:''?>">		

                												<span class="input-group-btn">

                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

                												</span>

                											</div>

                										</div> 

                									</div>

                									<div class="col-md-3">

                                                        <div class="form-group"> 

                                                            <label class="control-label">Marital Status <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon"> 

                                                                <select class="form-control select2me" name="marital_status" required>

                                                                <option value="">--Select--</option>

                                                                <option value="Married"  <?php echo (isset($user_data->marital_status) && !empty($user_data->marital_status) && ($user_data->marital_status=="Married"))?'selected="selected"':'';?>>Married</option>

                                                                <option value="Unmarried"
                                                                <?php echo (isset($user_data->marital_status) && !empty($user_data->marital_status) && ($user_data->marital_status=="Unmarried"))?'selected="selected"':'';?>  
                                                                >Unmarried</option>

                                                                <option value="Divorced"
                                                                <?php echo (isset($user_data->marital_status) && !empty($user_data->marital_status) && ($user_data->marital_status=="Divorced"))?'selected="selected"':'';?>
                                                                
                                                                >Divorced</option>

                                                                </select> 

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Local Home Address <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                <i class="fa"></i>

                                                                <textarea rows="2" type="text" class="form-control" name="home_addr" id="home_addr" placeholder="Local Home Address" required><?php echo(isset($user_data->home_addr) && !empty($user_data->home_addr))?$user_data->home_addr:''?></textarea>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Native Place Address <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                <i class="fa"></i>

                                                                <textarea rows="2" type="text" class="form-control" name="native_addr" id="native_addr" placeholder="Native Place Address" required><?php echo(isset($user_data->native_addr) && !empty($user_data->native_addr))?$user_data->native_addr:''?></textarea>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Local Home Address Proof <br> (Electricity bill, Rent Agreement, Aadhaar) <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <input type="file" name="home_addr_proof" id="home_addr_proof" class="home_addr_proof" <?php echo(isset($user_data->home_addr_proof) && !empty($user_data->home_addr_proof))?'':'required' ?> />
                                                           

                                                            
                                                            <?php
                                                                    if(isset($user_data->home_addr_proof) && !empty($user_data->home_addr_proof)){


                                                                        echo '<a href="'.$user_data->home_addr_proof.'" download>
                                                                           Home Address
                                                                         </a>';
                                                                        }
                                                                         ?>
                                                            </a>

                                                            <span id="home_addr_proof_error" style="font-size: 12px;color:#a94442;"></span>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Native Place Address Proof <br> (Electricity bill, Rent Agreement, Aadhaar) <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <input type="file" name="native_addr_proof" id="native_addr_proof" class="native_addr_proof" <?php echo(isset($user_data->native_addr_proof) && !empty($user_data->native_addr_proof))?'':'required' ?> />
                                                            

                                                            
                                                            <?php
                                                                    if(isset($user_data->native_addr_proof) && !empty($user_data->native_addr_proof)){


                                                                        echo '<a href="'.$user_data->native_addr_proof.'" download>
                                                                           Native address
                                                                         </a>';
                                                                        }
                                                                         ?>

                                                            <span id="native_addr_proof_error" style="font-size: 12px;color:#a94442;"></span>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <div class="form-group">

                                                            <label class="">Emergency Contact Details <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                <i class="fa"></i>

                                                                <textarea rows="2" type="text" class="form-control" name="emergency_contact" id="emergency_contact" placeholder="Emergency Contact Details" required><?php echo(isset($user_data->emergency_contact) && !empty($user_data->emergency_contact))?$user_data->emergency_contact:''?></textarea>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label>How long have you lived at this address? <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="lived_days" value="<?php echo(isset($user_data->lived_days) && !empty($user_data->lived_days))?$user_data->lived_days:''?>" placeholder="How long have you lived at this address?" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">2nd Local Address for correspondence <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                <i class="fa"></i>

                                                                <textarea rows="2" type="text" class="form-control" name="local_addr" id="local_addr" placeholder="2nd Local Address for correspondence" required><?php echo(isset($user_data->local_addr) && !empty($user_data->local_addr))?$user_data->local_addr:''?></textarea>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Permanent Address <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                <i class="fa"></i>

                                                                <textarea rows="2" type="text" class="form-control" name="perm_addr" id="perm_addr" placeholder="Permanent Address" required><?php echo(isset($user_data->perm_addr) && !empty($user_data->perm_addr))?$user_data->perm_addr:''?></textarea>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">2nd Local Address for correspondence Proof <br> (C/o address of relatives will) <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <input type="file" name="local_addr_proof" id="local_addr_proof" class="local_addr_proof" <?php echo(isset($user_data->local_addr_proof) && !empty($user_data->local_addr_proof))?'':'required' ?>/>
                                                         

                                                            
                                                            <?php
                                                                    if(isset($user_data->local_addr_proof) && !empty($user_data->local_addr_proof)){


                                                                        echo '<a href="'.$user_data->local_addr_proof.'" download>
                                                                           Local address
                                                                         </a>';
                                                                        }
                                                                         ?>

                                                            <span id="local_addr_proof_error" style="font-size: 12px;color:#a94442;"></span>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Permanent Address Proof <br> (Electricity bill, Rent Agreement, Aadhaar) <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <input type="file" name="perm_addr_proof" id="perm_addr_proof" class="perm_addr_proof" <?php echo(isset($user_data->perm_addr_proof) && !empty($user_data->perm_addr_proof))?'':'required' ?> />
                                                           

                                                            
                                                            <?php
                                                                    if(isset($user_data->perm_addr_proof) && !empty($user_data->perm_addr_proof)){


                                                                        echo '<a href="'.$user_data->perm_addr_proof.'" download>
                                                                          Permanent address
                                                                         </a>';
                                                                        }
                                                                         ?>

                                                            <span id="perm_addr_proof_error" style="font-size: 12px;color:#a94442;"></span>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Tel. No. 1 <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="mobile1" value="<?php echo(isset($user_data->mobile1) && !empty($user_data->mobile1))?$user_data->mobile1:''?>" placeholder="Tel. No. 1" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Tel. No. 2 <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="mobile2" value="<?php echo(isset($user_data->mobile2) && !empty($user_data->mobile2))?$user_data->mobile2:''?>" placeholder="Tel. No. 2" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Email address 1 <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="email" value="<?php echo(isset($user_data->email) && !empty($user_data->email))?$user_data->email:''?>" placeholder="Email address 1" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Email address 2 <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="email1" value="<?php echo(isset($user_data->email1) && !empty($user_data->email1))?$user_data->email1:''?>" placeholder="Email address 2" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-3">

                                                        <div class="form-group">

                                                            <label class="">Nationality <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="nationality" value="<?php echo(isset($user_data->nationality) && !empty($user_data->nationality))?$user_data->nationality:''?>" placeholder="Nationality" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="form-group">

                                                            <label class="">Religion <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="religion" value="<?php echo(isset($user_data->religion) && !empty($user_data->religion))?$user_data->religion:''?>" placeholder="Religion" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-4">

                                                        <div class="form-group">

                                                            <label class="">Language known <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="language" value="<?php echo(isset($user_data->language) && !empty($user_data->language))?$user_data->language:''?>" placeholder="Language Known" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-2">

                                                        <div class="form-group">

                                                            <label class="">Mother Tongue <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="mother_tongue" value="<?php echo(isset($user_data->mother_tongue) && !empty($user_data->mother_tongue))?$user_data->mother_tongue:''?>" placeholder="Mother Tongue" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Driving License No. <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="drive_lic_no" value="<?php echo(isset($user_data->drive_lic_no) && !empty($user_data->drive_lic_no))?$user_data->drive_lic_no:''?>" placeholder="Driving License No." required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                										<div class="form-group">

                											<label class="">Validity Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>

                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">

                												<input type="text" name="drive_lic_date" id="drive_lic_no" class="form-control" readonly="" placeholder="Validity Date" value="<?php echo(isset($user_data->drive_lic_no) && !empty($user_data->drive_lic_no))?$user_data->drive_lic_no:''?>">		

                												<span class="input-group-btn">

                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

                												</span>

                											</div>

                										</div> 

                									</div>

                									<div class="col-md-3">

                                                        <div class="form-group">

                                                            <label class="">Driving License Proof <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <input type="file" name="drive_lic_proof" id="drive_lic_proof" class="drive_lic_proof" <?php echo(isset($user_data->drive_lic_proof) && !empty($user_data->drive_lic_proof))?'':'required' ?> />


                                                            


                                                            
                                                            <?php
                                                                    if(isset($user_data->drive_lic_proof) && !empty($user_data->drive_lic_proof)){


                                                                        echo '<a href="'.$user_data->drive_lic_proof.'" download>
                                                                              Driving license
                                                                         </a>';
                                                                        }
                                                                         ?>

                                                            <span id="drive_lic_proof_error" style="font-size: 12px;color:#a94442;"></span>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-3">

                                                        <div class="form-group">

                                                            <label class="">Passport No. <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="passport_no" value="<?php echo(isset($user_data->passport_no) && !empty($user_data->passport_no))?$user_data->passport_no:''?>" placeholder="Passport No." required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                										<div class="form-group">

                											<label class="">Date of Issue <span class="required" aria-required="true" style="color:#a94442">*</span></label>

                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">

                												<input type="text" name="passport_date" id="passport_date" class="form-control" readonly="" placeholder="Date of Issue" value="<?php echo(isset($user_data->passport_date) && !empty($user_data->passport_date))?$user_data->passport_date:''?>">		

                												<span class="input-group-btn">

                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

                												</span>

                											</div>

                										</div> 

                									</div>

                								    <div class="col-md-3">

                                                        <div class="form-group">

                                                            <label class="">Place of Issue <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="passport_place" value="<?php echo(isset($user_data->passport_place) && !empty($user_data->passport_place))?$user_data->passport_place:''?>" placeholder="Place of Issue" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                										<div class="form-group">

                											<label class="">Expiry Date <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">

                												<input type="text" name="passport_expiry" id="passport_expiry" class="form-control" readonly="" placeholder="Expiry Date" value="<?php echo(isset($user_data->passport_expiry) && !empty($user_data->passport_expiry))?$user_data->passport_expiry:''?>">		

                												<span class="input-group-btn">

                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

                												</span>

                											</div>

                										</div> 

                									</div>

                								</div>

                								<div class="row">

                                                    <div class="col-md-6">

                                                        <div class="form-group">

                                                            <label class="">Passport Proof <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <input type="file" name="passport_proof" id="passport_proof" class="passport_proof" <?php echo(isset($user_data->passport_proof) && !empty($user_data->passport_proof))?'':'required' ?> />
                                                            <?php
                                                                    if(isset($user_data->passport_proof) && !empty($user_data->passport_proof)){


                                                                        echo '<a href="'.$user_data->passport_proof.'" download>
                                                                            Passport proof
                                                                         </a>';
                                                                        }
                                                                         ?>
                                                                    
                                                            <span id="passport_proof_error" style="font-size: 12px;color:#a94442;"></span>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="form-group">

                                                            <label class="">Income-tax PAN <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                 <i class="fa"></i>

                                                                 <input type="text" class="form-control " name="pan_no" value="<?php echo(isset($user_data->pan_no) && !empty($user_data->pan_no))?$user_data->pan_no:''?>" placeholder="Income-tax PAN" required>

                                                            </div>

                                                        </div>

                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="form-group">

                                                            <label class="">Income-tax PAN Proof <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <input type="file" name="pan_proof" id="pan_proof" class="pan_proof" <?php echo(isset($user_data->pan_proof) && !empty($user_data->pan_proof))?'':'required' ?> />

                                                            

                                                            <?php
                                                                    if(isset($user_data->pan_proof) && !empty($user_data->pan_proof)){


                                                                        echo '<a href="'.$user_data->pan_proof.'" download>
                                                                           Pan proof
                                                                         </a>';
                                                                        }
                                                                         ?>

                                                            <span id="pan_proof_error" style="font-size: 12px;color:#a94442;"></span>

                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <div class="form-group">

                                                            <label class="">Bank Account Details <span class="require" aria-required="true" style="color:#a94442">*</span></label>

                                                            <div class="input-icon right">

                                                                <i class="fa"></i>

                                                                <textarea rows="2" type="text" class="form-control" name="bank_details" id="bank_details" placeholder="Bank Account Details" required><?php echo(isset($user_data->bank_details) && !empty($user_data->bank_details))?$user_data->bank_details:''?></textarea>

                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>

                                                

                                            </div>

                                            </div>

                                            <div class="panel panel-default">

                                            <div class="panel-heading">

                                                <h4 class="panel-title">Part B – Family Background</h4>
                                               
                                            </div>

                                             <div class="panel-body">

                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <table width="100%" id="familytbl" class="table table-striped table-bordered table-hover">

                                                        <thead>

                                                            <tr>

                                                                <th style="min-width: 30px;width:30px;font-size: 13px;">Relation <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 150px;width:150px;font-size: 13px;">Name <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 150px;width:150px;font-size: 13px;">DOB <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 50px;width:50px;font-size: 13px;">Age <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 150px;width:150px;font-size: 13px;">Education <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 100px;width:100px;font-size: 13px;">Occupation <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 10px;width:10px;">-</th>

                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                        <?php
                                                            
                                                             if(isset($user_family) && !empty($user_family)){
                                                               
                                                           
                                                        for ($i=0; $i < count($user_family) ; $i++) { 

                                                            
                                                               $count = $i; 
                                                         echo 
                                                          '<tr>

                                                            <td>

                                                                <div class="form-group"> 

                                                                    <select class="form-control" name="relation[]" id="relation'.$count.'" required style="font-size: 13px;" readonly>

                                                                        <option value="">--Select--</option>

                                                                        <option value="Father" '.($user_family[$i]->relation == "Father" ? "selected" : "").'>Father</option>

                                                                        <option value="Mother"
                                                                        '.($user_family[$i]->relation == "Mother" ? "selected" : "").'
                                                                        >Mother</option>

                                                                        <option value="Sister"
                                                                        '.($user_family[$i]->relation == "Sister" ? "selected" : "").'
                                                                        >Sister(s)</option>

                                                                        <option value="Brother"
                                                                        '.($user_family[$i]->relation == "Brother" ? "selected" : "").'
                                                                        >Brother(s)</option>

                                                                        <option value="Spouse"
                                                                        '.($user_family[$i]->relation == "Spouse" ? "selected" : "").'
                                                                        >Spouse</option>

                                                                        <option value="Children"
                                                                        '.($user_family[$i]->relation == "Children" ? "selected" : "").'
                                                                        >Children</option>

                                                                    </select> 

                                                                </div>

                                                            </td>

                                                            <td>

                                                                <input  type="text" class="form-control " name="f_name[]" readonly
                                                                value="'.$user_family[$i]->f_name.'"  id="f_name'.$count.'" placeholder="Name"  style="font-size: 13px;" required>

                                                            </td>



                                                            <td>
                                                          <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">
                                                           <input type="text" name="f_dob[]" id="f_dob'.$count.'" value="'.$user_family[$i]->f_dob.'" class="form-control" readonly="" placeholder="DOB" readonly>
                                                           <span class="input-group-btn">
                                                           <button class="btn default" type="button">
                                                           <span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span>
                                                           <i class="fa fa-calendar"></i></button></span></div>
                                                            </td>

                                                           

                                                            <td>

                                                                <input type="number" value="'.$user_family[$i]->f_age.'" class="form-control" readonly name="f_age[]" id="f_age'.$count.'" placeholder="Age" maxlength="3" min="1"  style="font-size: 13px;" required>

                                                            </td>

                                                            <td>

                                                                <input type="text" class="form-control invalidferror"
                                                                readonly
                                                                value="'.$user_family[$i]->f_education.'" 
                                                                 name="f_education[]" id="f_education'.$count.'" placeholder="Education"  style="font-size: 13px;" required>

                                                            </td>

                                                            <td>

                                                                <input type="text" class="form-control" name="f_occup[]" 
                                                                readonly
                                                                value="'.$user_family[$i]->f_occup.'" 
                                                                id="f_occup'.$count.'" placeholder="Occupation"  style="font-size: 13px;" required>

                                                            </td>

                                                            <td>
                                                            <div class="addDeleteButton">
                                                            <span class="tooltips deleteFRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>
                                                            </div>
                                                            </td>

                                                        </tr>';
                                                           
                                                        }
                                                    }
                                                    
                                                        
                                                        
                                                        ?>

                                                            <tr>

                                                                <td>

                                                                    <div class="form-group"> 
                       
                                                                          
                                                                        <select class="form-control invalidferror" name="relation[]" id="relation0" required style="font-size: 13px;">

                                                                            <option value="">--Select--</option>

                                                                            <option value="Father">Father</option>

                                                                            <option value="Mother"
                                                                           
                                                                           
                                                                            >Mother</option>

                                                                            <option value="Sister">Sister(s)</option>

                                                                            <option value="Brother">Brother(s)</option>

                                                                            <option value="Spouse">Spouse</option>

                                                                            <option value="Children">Children</option>

                                                                        </select> 

                                                                    </div>

                                                                </td>

                                                                <td>

                                                                    <input  type="text" class="form-control invalidferror" name="f_name[]" id="f_name0" placeholder="Name"  style="font-size: 13px;" required>

                                                                </td>

                                                                <td>

                                                                    <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">

                        												<input type="text" name="f_dob[]" id="f_dob0" class="form-control invalidferror"
                                                                         readonly="" placeholder="DOB"  style="font-size: 13px;">		

                        												<span class="input-group-btn">

                        													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

                        												</span>

                        											</div>

                                                                </td>

                                                                <td>

                                                                    <input type="number" class="form-control invalidferror" name="f_age[]" 
                                                                   id="f_age0" placeholder="Age" maxlength="3" min="1"  style="font-size: 13px;" required>

                                                                </td>

                                                                <td>

                                                                    <input type="text" class="form-control invalidferror"
                                                                    name="f_education[]" id="f_education0" placeholder="Education"  style="font-size: 13px;" required>

                                                                </td>

                                                                <td>

                                                                    <input type="text" class="form-control invalidferror" name="f_occup[]"
                                                                         id="f_occup0" placeholder="Occupation"  style="font-size: 13px;" required>

                                                                </td>

                                                                <td>

                                                                    <div class="addDeleteButton">

                                                                        <span class="tooltips addFRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>

                                                                    </div>

                                                                </td>

                                                            </tr>
                                                         
                                                        </tbody>

                                                    </table>

                                                    <p id="invalidferrorid" style="padding: 0 10px;font-size: 12px;color:#a94442;"></p>

                                                    </div>

                                                </div>

                                            </div>

                                            </div>

                                             <div class="panel panel-default">

                                            <div class="panel-heading">

                                                <h4 class="panel-title">Part C – Educational Details (List in reverse order starting from highest/professional qualification to X Std.)</h4>

                                            </div>

                                            <div class="panel-body">

                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <table width="100%" id="edutabel" class="table table-striped table-bordered table-hover">

                                                        <thead>



                                                            <tr>

                                                                <th style="min-width: 150px;width:150px;">Name of School/College/<br>University <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 30px;width:30px;">Year of <br> Passing <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 30px;width:30px;">Degree/ <br> Diploma <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 200px;width:200px;">Specialized <br> Subject <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 30px;width:30px;">Percentage <br>Obtained <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 10px;width:10px;">-</th>

                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                             <?php
                                                              if(isset($user_education) && !empty($user_education)){
                                                                

                                                             for ($i=0; $i < count($user_education) ; $i++) { 
                                                                $count = $i +1;

                                                               echo 
                                                               '  <tr>

                                                               <td>

                                                                   <div class="form-group">

                                                                       <input type="text" value="'.$user_education[$i]->college.'" class="form-control invalideduerror" name="college[]" id="college'.$count.'" placeholder="Name of School/College/University" readonly required>

                                                                   </div>

                                                               </td>



                                                               <td>
            <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">
            <input type="text" name="passing_year[]" id="passing_year'.$count.'" value="'.$user_education[$i]->passing_year.'" class="form-control" readonly="" placeholder="Year of Passing">
            <span class="input-group-btn">
            <button class="btn default" type="button">
            <span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span>
            <i class="fa fa-calendar"></i></button></span></div>
            </td>

                                                             
                                                               <td>

                                                                   <div class="form-group">

                                                                       <input type="text" class="form-control invalideduerror" id="degree_diploma'.$count.'" value="'.$user_education[$i]->degree_diploma.'" name="degree_diploma[]" placeholder="Degree/Diploma"  readonly required>

                                                                   </div>

                                                               </td>

                                                               <td>

                                                                   <div class="form-group">

                                                                       <input type="text" class="form-control invalideduerror" id="special_sub0" name="special_sub[]" 
                                                                       readonly value="'.$user_education[$i]->special_sub.'" placeholder="Specialized Subject" required>

                                                                   </div>

                                                               </td>

                                                               <td>

                                                                   <div class="form-group">

                                                                       <input type="text" class="form-control invalideduerror" id="percent_obtain0" name="percent_obtain[]" readonly value="'.$user_education[$i]->percent_obtain.'"   placeholder="Percentage Obtained" required>

                                                                   </div>

                                                               </td>


                                                               <td>
                                                              <div class="addDeleteButton">
                                                              <span class="tooltips deleteduRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>
                                                              </div>
                                                              </td>

                                                           

                                                           </tr>
                                                               ';


                                                               
                                                             }
                                                            }
                                                             
                                                             
                                                             
                                                             ?>

                                                            <tr>

                                                                <td>

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control invalideduerror" name="college[]" id="college0" placeholder="Name of School/College/University" required>

                                                                    </div>

                                                                </td>

                                                                <td>
                                                                    
                                                                     <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">

                        												<input type="text" name="passing_year[]" id="passing_year0" class="form-control invalideduerror" readonly="" placeholder="Year of Passing"  style="font-size: 13px;">		

                        												<span class="input-group-btn">

                        													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

                        												</span>

                        											</div>

                                                                    <!--<div class="form-group">-->

                                                                    <!--    <input type="text" class="form-control invalideduerror" id ="passing_year0" name="passing_year[]" placeholder="Year of Passing" required>-->

                                                                    <!--</div>-->

                                                                </td>

                                                                <td>

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control invalideduerror" id="degree_diploma0" name="degree_diploma[]" placeholder="Degree/Diploma" required>

                                                                    </div>

                                                                </td>

                                                                <td>

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control invalideduerror" id="special_sub0" name="special_sub[]" placeholder="Specialized Subject" required>

                                                                    </div>

                                                                </td>

                                                                <td>

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control invalideduerror" id="percent_obtain0" name="percent_obtain[]" placeholder="Percentage Obtained" required>

                                                                    </div>

                                                                </td>

                                                                <td>

                                                                    <div class="addDeleteButton">

                                                                        <span class="tooltips addedurow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>

                                                                    </div>

                                                                </td>

                                                            </tr>

                                                        </tbody>

                                                    </table>

                                                    <p id="invalideduerrorid" style="padding: 0 10px;font-size: 12px;color:#a94442;"></p>

                                                    </div>

                                                </div>

                                            </div>

                                            </div>

                                            <div class="panel panel-default">

                                            <div class="panel-heading">

                                                <h4 class="panel-title">Part D – Employment History (Starting from Present Employment)</h4>

                                            </div>

                                            <div class="panel-body">

                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <table width="100%" id="emptble" class="table table-striped table-bordered table-hover">

                                                        <thead>

                                                            <tr>

                                                                <th style="min-width: 150px;width:150px;">Position Held <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 80px;width:80px;">From <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 80px;width:80px;">To <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 200px;width:200px;">Employer <br> (Name, address and contact nos.) <span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 200px;width:200px;">Main Responsibilities<span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 50px;width:50px;">Cost to Company<span class="require" aria-required="true" style="color:#a94442">*</span></th>

                                                                <th style="min-width: 10px;width:10px;">-</th>

                                                            </tr>

                                                        </thead>

                                                        <tbody>

                                                        <?php
                                                              if(isset($user_emphistory) && !empty($user_emphistory)){
                                                                

                                                                for ($i=0; $i < count($user_emphistory) ; $i++) { 
                                                                    $count = $i +1;

                                                                    echo'
                                                                    <tr><td>
                                                                    
                                                                    <div class="form-group">
            <input type="text" class="form-control" name="position[]" id="position'.$count.'" value="'.$user_emphistory[$i]->position.'" placeholder="Position Held" required readonly>
            </div>
            </td>
            <td>
            <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">
            <input type="text" name="from[]" id="from'.$count.'" value="'.$user_emphistory[$i]->from.'" class="form-control" readonly="" placeholder="From">
            <span class="input-group-btn">
            <button class="btn default" type="button">
            <span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span>
            <i class="fa fa-calendar"></i></button></span></div>
            </td>
            <td>
            <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">
            <input type="text" name="to[]" id="to'.$count.'" value="'.$user_emphistory[$i]->to.'" class="form-control" readonly="" placeholder="To">
            <span class="input-group-btn">
            <button class="btn default" type="button">
            <span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span>
            <i class="fa fa-calendar"></i></button></span></div>
            </td>
            <td>
            <input type="text" class="form-control" name="employer_details[]" value="'.$user_emphistory[$i]->employer.'" id="employer_details'.$count.'" placeholder="Employer (Name, address and contact nos.)" required readonly>
            </td>
            <td>
            <input type="text" class="form-control" name="responsibilities[]" id="responsibilities'.$count.'" value="'.$user_emphistory[$i]->responsibilities.'" placeholder="Main Responsibilities" required readonly>
            </td>
            <td>
            <input type="text" class="form-control" name="cost_to_company[]" id="cost_to_company'.$count.'" value="'.$user_emphistory[$i]->ctc.'" placeholder="Cost to Company" required readonly>
            </td>
            <td>
            <div class="addDeleteButton">
            <span class="tooltips deletempRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>
            </div></td></tr>
                                                                    
                                                                    
                                                                    ';
                                                                }


                                                              }

                                                              ?>


                                                            <tr>

                                                                <td>

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control invalidemperror" name="position[]" id="position0" placeholder="Position Held" required>

                                                                    </div>

                                                                </td>

                                                                <td>
                                                                    
                                                                    
                                                                    <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">

                        												<input type="text" name="from[]" id="from0" class="form-control invalidemperror" readonly="" placeholder="From"  style="font-size: 13px;">		

                        												<span class="input-group-btn">

                        													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

                        												</span>

                        											</div>
                                                                    
                                                                    
                                                                    

                                                                    <!--<div class="form-group">-->

                                                                    <!--    <input type="text" class="form-control invalidemperror" id="from0" name="from[]" placeholder="From" required>-->

                                                                    <!--</div>-->

                                                                </td>

                                                                <td>
                                                                    
                                                                    <div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">

                        												<input type="text" name="to[]" id="to0" class="form-control invalidemperror" readonly="" placeholder="To"  style="font-size: 13px;">		

                        												<span class="input-group-btn">

                        													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>

                        												</span>

                        											</div>

                                                                    <!--<div class="form-group">-->

                                                                    <!--    <input type="text" class="form-control invalidemperror" id="to0" name="to[]" placeholder="From" required>-->

                                                                    <!--</div>-->

                                                                </td>

                                                                <td>

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control invalidemperror" id="employer_details0" name="employer_details[]" id="employer_details" placeholder="Employer (Name, address and contact nos.)" required>

                                                                    </div>

                                                                </td>

                                                                <td>

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control invalidemperror" name="responsibilities[]" id="responsibilities0" placeholder="Main Responsibilities" required>

                                                                    </div>

                                                                </td>

                                                                <td>

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control invalidemperror" id="cost_to_company0" name="cost_to_company[]" placeholder="Cost to Company" required>

                                                                    </div>

                                                                </td>

                                                                <td>

                                                                    <div class="addDeleteButton">

                                                                        <span class="tooltips addempRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>

                                                                    </div>

                                                                </td>

                                                            </tr>

                                                        </tbody>

                                                    </table>

                                                    <p id="invalidemperrorid" style="padding: 0 10px;font-size: 12px;color:#a94442;"></p>

                                                    </div>

                                                </div>

                                            </div>
 
                                            </div>

                                            <div class="row">

                                                <div class="col-md-4">

                                                    <div class="form-group"> <label class="control-label">Username<span class="require" aria-required="true" style="color:red">*</span></label>

                                                        <div class="input-icon right"> <i class="fa"></i> <input type="text" class="form-control duplicate" name="username" id="user_id" data-tbl="tbl_user" data-p_key="user_id" data-where="username" rel="0" value="<?php echo(isset($user_data->username) && !empty($user_data->username))?$user_data->username:''?>" placeholder="Username"> </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="form-group"> <label class="control-label">Password<span class="require" aria-required="true" style="color:red">*</span></label>

                                                        <div class="input-icon right"> <i class="fa"></i> <input type="Password" class="form-control" id="user_pass" name="password" value="<?php echo(isset($user_data->password) && !empty($user_data->password))?$user_data->password:''?>" placeholder="Password"> </div>

                                                    </div>

                                                </div>

                                                <div class="col-md-4">

                                                    <div class="form-group"> <label class="control-label">Confirm Password<span class="require" aria-required="true" style="color:red">*</span></label>

                                                        <div class="input-icon right"> <i class="fa"></i> <input type="Password" class="form-control" name="cpassword" value="<?php echo(isset($user_data->password) && !empty($user_data->password))?$user_data->password:''?>" placeholder="Confirm Password"> </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-actions right"> <a href="<?php echo base_url();?>user-list" class="btn blue" style="float: left;">Back</a> <button type="button" class="btn btn-danger cancel clearData" title="click To Cancel"> Cancel</button> <button type="submit" class="btn green common_save" title="click To Save" rel="<?php echo(isset($user_data->user_id) && !empty($user_data->user_id))?$user_data->user_id:''?>"><i class="fa fa-dot-circle-o"></i> <?php if(isset($user_data->user_id) && !empty($user_data->user_id)) {echo 'Update';} else { echo 'Save'; }?></button> </div>

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
     <?php $this->load->view('common/footer');?>
      <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/admin/pages/scripts/components-pickers.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url()?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/datatables/table-advanced.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/site/js/jquery.validationEngine.js"></script>

    <script src="<?php echo base_url(); ?>assets/site/js/jquery.validationEngine-en.js"></script>

    <script src="<?php echo base_url();?>js/common.js?<?php echo date('Y-m-d H:i:s'); ?>" type="text/javascript"></script>

    <script src="<?php echo base_url();?>js/user.js?<?php echo date('Y-m-d H:i:s'); ?>" type="text/javascript"></script>

    <script>

        jQuery(document).ready(function() {

            Metronic.init(); // init metronic core components

            Layout.init(); 

            ComponentsPickers.init();

            TableAdvanced.init();

        });

    </script>



</body>



</html>