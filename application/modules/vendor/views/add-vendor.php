<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title><?php if(isset($vendor_data->vendor_id) && !empty($vendor_data->vendor_id)) {echo 'Edit';} else { echo 'Add'; }?> Vendor | <?php echo project_name; ?> </title>
    <base href="<?php echo base_url(); ?>" >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/css/components-rounded.css?<?php echo date('Y-m-d H:i:s');?>" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/admin/layout4/css/light.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/css/validationEngine.jquery.css" rel="stylesheet">
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo ">
    <?php $this->load->view('common/header');?>
    <div class="clearfix"> </div>
    <div class="page-container">
        <?php $this->load->view('common/sidebar');?>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption font-blue">
                                    <i class="fa fa-plus-circle font-blue"></i>
                                    <span class="caption-subject bold uppercase"> <?php if(isset($vendor_data->vendor_id) && !empty($vendor_data->vendor_id)) {echo 'Edit';} else { echo 'Add'; }?> Vendor</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form action="save_vendor" enctype="multipart/form-data" id="save_vendor" method="post" class="horizontal-form">
                                    <div class="form-body">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> Company Details </h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Name of Company <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="name_of_company" value="<?php echo(isset($vendor_data->name_of_company) && !empty($vendor_data->name_of_company))?$vendor_data->name_of_company:''?>" placeholder="Name of Company" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Business Type <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <select class="form-control" name="business_type" required>
                                                                    <option value="">Select</option> 
                                                                    <option value="Proprietor" <?php echo (isset($vendor_data->business_type) && !empty($vendor_data->business_type) && ($vendor_data->business_type=='Proprietor'))?'selected="selected"':'';?>>Proprietor</option>
                                                                    <option value="Partnership" <?php echo (isset($vendor_data->business_type) && !empty($vendor_data->business_type) && ($vendor_data->business_type=='Partnership'))?'selected="selected"':'';?>>Partnership</option>
                                                                    <option value="LLP" <?php echo (isset($vendor_data->business_type) && !empty($vendor_data->business_type) && ($vendor_data->business_type=='LLP'))?'selected="selected"':'';?>>LLP</option>
                                                                    <option value="Private Ltd" <?php echo (isset($vendor_data->business_type) && !empty($vendor_data->business_type) && ($vendor_data->business_type=='Private Ltd'))?'selected="selected"':'';?>>Private Ltd</option>
                                                                    <option value="Public Ltd" <?php echo (isset($vendor_data->business_type) && !empty($vendor_data->business_type) && ($vendor_data->business_type=='Public Ltd'))?'selected="selected"':'';?>>Public Ltd</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Name of All Director/Partners <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="name_of_dir_part" value="<?php echo(isset($vendor_data->name_of_dir_part) && !empty($vendor_data->name_of_dir_part))?$vendor_data->name_of_dir_part:''?>" placeholder="Name of All Director/Partners" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Director/Partner Contact Number <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control " name="dir_part_contact_no" value="<?php echo(isset($vendor_data->dir_part_contact_no) && !empty($vendor_data->dir_part_contact_no))?$vendor_data->dir_part_contact_no:''?>" placeholder="Director/Partner Contact Number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Director/Partner Contact Address <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="dir_part_contact_address" value="<?php echo(isset($vendor_data->dir_part_contact_address) && !empty($vendor_data->dir_part_contact_address))?$vendor_data->dir_part_contact_address:''?>" placeholder="Director/Partner Contact Address" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">CIN No/Shop Act No/Any other place of business Reng no. <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control " name="dir_cin_act_reng_nos" value="<?php echo(isset($vendor_data->dir_cin_act_reng_nos) && !empty($vendor_data->dir_cin_act_reng_nos))?$vendor_data->dir_cin_act_reng_nos:''?>" placeholder="CIN No/Shop Act No/Any other place of business Reng no. " required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> Registration Address </h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">House Building Number <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="reg_house_building_no" id="reg_house_building_no" value="<?php echo(isset($vendor_data->reg_house_building_no) && !empty($vendor_data->reg_house_building_no))?$vendor_data->reg_house_building_no:''?>" placeholder="House Building Number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Street <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control " name="reg_street" id="reg_street" value="<?php echo(isset($vendor_data->reg_street) && !empty($vendor_data->reg_street))?$vendor_data->reg_street:''?>" placeholder="Street" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">City/Postal Code </label>
                                                            <input type="text" class="form-control" name="reg_city_post_code" id="reg_city_post_code" value="<?php echo(isset($vendor_data->reg_city_post_code) && !empty($vendor_data->reg_city_post_code))?$vendor_data->reg_city_post_code:''?>" placeholder="City/Postal Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Country <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control " name="reg_country" id="reg_country" value="<?php echo(isset($vendor_data->reg_country) && !empty($vendor_data->reg_country))?$vendor_data->reg_country:''?>" placeholder="Country" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="checkbox"  name="same_address" id="same_address" onchange="address(this.form)"> <label class="control-label">Same As Registration Address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> Corporate Address </h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">House Building Number <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="corporate_house_building_no" id="corporate_house_building_no" value="<?php echo(isset($vendor_data->corporate_house_building_no) && !empty($vendor_data->corporate_house_building_no))?$vendor_data->corporate_house_building_no:''?>" placeholder="House Building Number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Street </label>
                                                            <input type="text" class="form-control " name="corporate_street" id="corporate_street" value="<?php echo(isset($vendor_data->corporate_street) && !empty($vendor_data->corporate_street))?$vendor_data->corporate_street:''?>" placeholder="Street">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">City/Postal Code </label>
                                                            <input type="text" class="form-control" name="corporate_city_post_code" id="corporate_city_post_code" value="<?php echo(isset($vendor_data->corporate_city_post_code) && !empty($vendor_data->corporate_city_post_code))?$vendor_data->corporate_city_post_code:''?>" placeholder="City/Postal Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Country</label>
                                                            <input type="text" class="form-control " name="corporate_country" id="corporate_country" value="<?php echo(isset($vendor_data->corporate_country) && !empty($vendor_data->corporate_country))?$vendor_data->corporate_country:''?>" placeholder="Country">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> Communication Details </h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Contact Person Name <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="contact_person_name" value="<?php echo(isset($vendor_data->contact_person_name) && !empty($vendor_data->contact_person_name))?$vendor_data->contact_person_name:''?>" placeholder="Contact Person Name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Telephone incl. ext.</label>
                                                            <input type="text" class="form-control " name="telephone_incl_ext" value="<?php echo(isset($vendor_data->telephone_incl_ext) && !empty($vendor_data->telephone_incl_ext))?$vendor_data->telephone_incl_ext:''?>" placeholder="Telephone incl. ext." >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Mobile Phone <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="comm_mobile_phone" value="<?php echo(isset($vendor_data->comm_mobile_phone) && !empty($vendor_data->comm_mobile_phone))?$vendor_data->comm_mobile_phone:''?>" placeholder="Mobile Phone" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Fax </label>
                                                            <input type="text" class="form-control " name="comm_fax" value="<?php echo(isset($vendor_data->comm_fax) && !empty($vendor_data->comm_fax))?$vendor_data->comm_fax:''?>" placeholder="Fax">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Email <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="comm_email" value="<?php echo(isset($vendor_data->comm_email) && !empty($vendor_data->comm_email))?$vendor_data->comm_email:''?>" placeholder="Email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Standard Communication Method </label>
                                                            <input type="text" class="form-control " name="stand_communication_method" value="<?php echo(isset($vendor_data->stand_communication_method) && !empty($vendor_data->stand_communication_method))?$vendor_data->stand_communication_method:''?>" placeholder="Standard Communication Method" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> Tax Information </h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">GST Registration Number </label>
                                                            <input type="text" class="form-control" name="gst_registration_no" value="<?php echo(isset($vendor_data->gst_registration_no) && !empty($vendor_data->gst_registration_no))?$vendor_data->gst_registration_no:''?>" placeholder="GST Registration Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">PAN Number </label>
                                                            <input type="text" class="form-control " name="pan_number" value="<?php echo(isset($vendor_data->pan_number) && !empty($vendor_data->pan_number))?$vendor_data->pan_number:''?>" placeholder="Percentage of Tax" >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> Details Of Bank </h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Bank Key </label>
                                                            <input type="text" class="form-control" name="bank_key" value="<?php echo(isset($vendor_data->bank_key) && !empty($vendor_data->bank_key))?$vendor_data->bank_key:''?>" placeholder="Bank Key" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Bank Account Number of Vendor <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control " name="bank_acc_no_vendor" value="<?php echo(isset($vendor_data->bank_acc_no_vendor) && !empty($vendor_data->bank_acc_no_vendor))?$vendor_data->bank_acc_no_vendor:''?>" placeholder="Bank Account Number of Vendor" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Name of Bank <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="name_of_bank" value="<?php echo(isset($vendor_data->name_of_bank) && !empty($vendor_data->name_of_bank))?$vendor_data->name_of_bank:''?>" placeholder="Name of Bank" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Name of Branch <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control " name="name_of_branch" value="<?php echo(isset($vendor_data->name_of_branch) && !empty($vendor_data->name_of_branch))?$vendor_data->name_of_branch:''?>" placeholder="Name of Branch" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Bank IFSC Code <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="bank_ifsc_code" value="<?php echo(isset($vendor_data->bank_ifsc_code) && !empty($vendor_data->bank_ifsc_code))?$vendor_data->bank_ifsc_code:''?>" placeholder="Bank IFSC Code" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Bank Branch Code </label>
                                                            <input type="text" class="form-control" name="bank_branch_code" value="<?php echo(isset($vendor_data->bank_branch_code) && !empty($vendor_data->bank_branch_code))?$vendor_data->bank_branch_code:''?>" placeholder="Bank Branch Code">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Bank Address <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="bank_address" value="<?php echo(isset($vendor_data->bank_address) && !empty($vendor_data->bank_address))?$vendor_data->bank_address:''?>" placeholder="Bank Address" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Bank City <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control " name="bank_city" value="<?php echo(isset($vendor_data->bank_city) && !empty($vendor_data->bank_city))?$vendor_data->bank_city:''?>" placeholder="Bank City" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">9 Digit code appearing on MICR cheque <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control " name="micr_cheque_no_of_cheque" value="<?php echo(isset($vendor_data->micr_cheque_no_of_cheque) && !empty($vendor_data->micr_cheque_no_of_cheque))?$vendor_data->micr_cheque_no_of_cheque:''?>" placeholder="9 Digit code appearing on MICR cheque" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Telephone No. of Bank </label>
                                                            <input type="text" class="form-control" name="tele_no_of_bank" value="<?php echo(isset($vendor_data->tele_no_of_bank) && !empty($vendor_data->tele_no_of_bank))?$vendor_data->tele_no_of_bank:''?>" placeholder="Telephone No. of Bank">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Fax No. of Bank </label>
                                                            <input type="text" class="form-control " name="fax_no_of_bank" value="<?php echo(isset($vendor_data->fax_no_of_bank) && !empty($vendor_data->fax_no_of_bank))?$vendor_data->fax_no_of_bank:''?>" placeholder="Fax No. of Bank">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Type of Account <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <select class="form-control" name="bank_type_of_account" required>
                                                                    <option value="">Select</option> 
                                                                    <option value="For SB A/C=10" <?php echo (isset($vendor_data->bank_type_of_account) && !empty($vendor_data->bank_type_of_account) && ($vendor_data->bank_type_of_account=='For SB A/C=10'))?'selected="selected"':'';?>>For SB A/C=10</option>
                                                                    <option value="Current A/C=11" <?php echo (isset($vendor_data->bank_type_of_account) && !empty($vendor_data->bank_type_of_account) && ($vendor_data->bank_type_of_account=='Current A/C=11'))?'selected="selected"':'';?>>Current A/C=11</option>
                                                                    <option value="CC=13" <?php echo (isset($vendor_data->bank_type_of_account) && !empty($vendor_data->bank_type_of_account) && ($vendor_data->bank_type_of_account=='CC=13'))?'selected="selected"':'';?>>CC=13</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Region </label>
                                                            <input type="text" class="form-control " name="bank_region" value="<?php echo(isset($vendor_data->bank_region) && !empty($vendor_data->bank_region))?$vendor_data->bank_region:''?>" placeholder="Region">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">5 Large Customers </label>
                                                            <input type="text" class="form-control " name="bank_large_customers" value="<?php echo(isset($vendor_data->bank_large_customers) && !empty($vendor_data->bank_large_customers))?$vendor_data->bank_large_customers:''?>" placeholder="5 Large Customers">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">For Office Purpose </label>
                                                            <input type="text" class="form-control " name="bank_for_office_purpose" value="<?php echo(isset($vendor_data->bank_for_office_purpose) && !empty($vendor_data->bank_for_office_purpose))?$vendor_data->bank_for_office_purpose:''?>" placeholder="For Office Purpose">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"> Reference Data </h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Our any vendor/employee/friends reference <span class="require" aria-required="true" style="color:red">*</span></label>
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="ref_vendor_emp_frd" value="<?php echo(isset($vendor_data->ref_vendor_emp_frd) && !empty($vendor_data->ref_vendor_emp_frd))?$vendor_data->ref_vendor_emp_frd:''?>" placeholder="Our any vendor/employee/friends reference" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions right">
                                        <a href="<?php echo base_url();?>vendor-list" class="btn blue" style="float: left;">Back</a>
                                        <button type="button" class="btn btn-danger cancel clearData" title="click To Cancel"> Cancel</button>                          
                                        <button type="submit" class="btn green common_save" title="click To Save" rel="<?php echo(isset($vendor_data->vendor_id) && !empty($vendor_data->vendor_id))?$vendor_data->vendor_id:''?>"><i class="fa fa-dot-circle-o"></i> <?php if(isset($vendor_data->vendor_id) && !empty($vendor_data->vendor_id)) {echo 'Update';} else { echo 'Save'; }?></button>
                                    </div>
                                </form>
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
    <script src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/admin/pages/scripts/components-pickers.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url()?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/datatables/table-advanced.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/site/js/jquery.validationEngine.js"></script>
    <script src="<?php echo base_url(); ?>assets/site/js/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url();?>js/common.js" type="text/javascript"></script>
    <script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); 
        ComponentsPickers.init();
        TableAdvanced.init();
    });
    </script>
    <script type="text/javascript">
        function address() 
        {
            if (document.getElementById("same_address").checked) 
            {
                document.getElementById("corporate_house_building_no").value = document.getElementById("reg_house_building_no").value;
                document.getElementById("corporate_street").value = document.getElementById("reg_street").value;
                document.getElementById("corporate_city_post_code").value = document.getElementById("reg_city_post_code").value;
                document.getElementById("corporate_country").value = document.getElementById("reg_country").value;
            } 
            else 
            {
                document.getElementById("corporate_house_building_no").value = ""; 
                document.getElementById("corporate_street").value = ""; 
                document.getElementById("corporate_city_post_code").value = ""; 
                document.getElementById("corporate_country").value = ""; 
            }
        }
    </script>
</body>
</html>