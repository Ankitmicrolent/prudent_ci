<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Project Details | <?php echo project_name; ?> </title>
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
    <link href="<?php echo base_url();?>assets/global/css/plugins.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/admin/layout4/css/light.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/css/createp.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/css/validationEngine.jquery.css" rel="stylesheet">
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo">
    <?php $this->load->view('common/header');?>
    <div class="clearfix">
    </div>
    <div class="page-container">
        <?php $this->load->view('common/sidebar');?>
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light">
                            <div class="portlet-title">
                                <div class="caption font-blue">
                                    <i class="fa fa-bars font-blue"></i>
                                    <span class="caption-subject bold uppercase"><?php echo(isset($create_project_data->bp_code) && !empty($create_project_data->bp_code))?'(#'.$create_project_data->bp_code.')':''?> Project Details</span>
                                </div>
                                <div class="actions" style="display: inline-flex;">
                                    <div class="page-header navbar" style="height:10px;min-height:10px;">
                                    <div class="page-top">
                                        <div class="top-menu">
                                        <ul class="nav navbar-nav pull-right">
                                        <li class="separator hide">
                                        </li>
                                        <li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar" style="height:auto;">
                    						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-original-title="Reminder" title="Reminder" style="background: #fff;padding: 0 10px;">
                    						<i class="fa fa-calendar"></i>
                    						<span class="badge badge-default"><?php echo (isset($reminder_data) && !empty($reminder_data))?count($reminder_data):'0'; ?></span>
                    						</a>
                    						<ul class="dropdown-menu">
                    							<?php if(isset($reminder_data) && !empty($reminder_data)){ ?>
                        							<li class="external">
                        								<h3>You have <strong><?php echo (isset($reminder_data) && !empty($reminder_data))?count($reminder_data):'0'; ?> pending</strong> Reminder</h3>
                        								<a href="<?php echo base_url(); ?>view-all-reminder/<?php echo base64_encode($project_id); ?>">view all</a>
                        							</li>
                        							<li>
                    								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                    								    <?php foreach($reminder_data as $key){
                    								    $datetime = $this->common_model->time_elapsed_string($key->created_date, true).PHP_EOL; ?>
                        								    <li>
                        										<a href="javascript:;">
                        										<div class="details" style="display: flex;justify-content: flex-start;align-items: center;">
                        										  <div class="">
                        										      <span class="label label-sm label-icon label-success" style="padding: 2px;"><?php echo (isset($key->icon) && !empty($key->icon))?$key->icon:''; ?></span>
                        										  </div>
                        										  <div class="">
                        										        <?php echo (isset($key->notification) && !empty($key->notification))?$key->notification:''; ?> 
                        										        <p class="timep"><?php echo (isset($datetime) && !empty($datetime))?$datetime:'0'; ?></p>
                        										  </div>
                        										  </div>
                        										</a>
                        									</li>
                    								    <?php } ?>
                    								</ul>
                    								</li>
                    							<?php }else{ ?>
                        							<li class="external">
                        								<h3><strong>No Reminder Found!</strong></h3>
                        								<a href="<?php echo base_url(); ?>view-all-reminder/<?php echo base64_encode($project_id); ?>">view all</a>
                        							</li>
                    							<?php } ?>
                    						</ul>
                    					</li>
                    					<li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar" style="height:auto;">
                    						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-original-title="Notification" title="Notification" style="background: #fff;padding: 0 10px;">
                    						<i class="icon-bell"></i>
                    						<span class="badge badge-default"><?php echo (isset($notification_data) && !empty($notification_data))?count($notification_data):'0'; ?></span>
                    						</a>
                    						<ul class="dropdown-menu">
                    							<?php if(isset($notification_data) && !empty($notification_data)){ ?>
                        							<li class="external">
                        								<h3>You have <strong><?php echo (isset($notification_data) && !empty($notification_data))?count($notification_data):'0'; ?> pending</strong> Notification</h3>
                        								<a href="<?php echo base_url(); ?>view-all-notification/<?php echo base64_encode($project_id); ?>">view all</a>
                        							</li>
                        							<li>
                    								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                    								    <?php foreach($notification_data as $key){
                    								    $datetime = $this->common_model->time_elapsed_string($key->created_date, true).PHP_EOL; ?>
                        								    <li>
                        										<a href="javascript:;">
                        										<div class="details" style="display: flex;justify-content: flex-start;align-items: center;">
                        										  <div class="">
                        										      <span class="label label-sm label-icon label-success" style="padding: 2px;"><?php echo (isset($key->icon) && !empty($key->icon))?$key->icon:''; ?></span>
                        										  </div>
                        										  <div class="">
                        										        <?php echo (isset($key->notification) && !empty($key->notification))?$key->notification:''; ?> 
                        										        <p class="timep"><?php echo (isset($datetime) && !empty($datetime))?$datetime:'0'; ?></p>
                        										  </div>
                        										  </div>
                        										</a>
                        									</li>
                    								    <?php } ?>
                    								</ul>
                    								</li>
                    							<?php }else{ ?>
                        							<li class="external">
                        								<h3><strong>No Notification Received!</strong></h3>
                        								<a href="<?php echo base_url(); ?>view-all-notification/<?php echo base64_encode($project_id); ?>">view all</a>
                        							</li>
                    							<?php } ?>
                    						</ul>
                    					</li>
                    					
                    					</ul>
                    					</div>
                    					</div>
                    					</div>
    						    </div>
                            </div>
                            <div class="portlet-body form">
                                <nav id="menu-container" class="arrow">
                                    <div id="btn-nav-previous" style="fill: #5b9bd1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 24 24">
                                                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                                                <path d="M0 0h24v24H0z" fill="none" /></svg>
                                    </div>
                                    <div id="btn-nav-next">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 24 24">
                                                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                                                <path d="M0 0h24v24H0z" fill="none" /></svg>
                                    </div>
                                    <div class="menu-inner-box">
                                        <div class="menu">
                                        <a role="presentation" href="<?php echo base_url(); ?>project-details/<?php echo base64_encode($project_id); ?>" class="cm menu-item menu-item-active project-details">Project Details</a>
                                        <a role="presentation" href="<?php echo base_url(); ?>boq-transaction/<?php echo base64_encode($project_id); ?>" class="cm menu-item boq-transaction">BOQ Transactions</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>view-boq/<?php echo base64_encode($project_id); ?>" class="cm menu-item boq-view">BOQ View</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>operational-scheduled/<?php echo base64_encode($project_id); ?>" class="cm menu-item boq-operational-view">BOQ Operable Schedule View</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>delivery-challan/<?php echo base64_encode($project_id); ?>" class="cm menu-item delivery-challan">Client Delivery Challan</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>warehouse/<?php echo base64_encode($project_id); ?>" class="cm menu-item virtual-stock">Warehouse</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>installed-wip/<?php echo base64_encode($project_id); ?>" class="cm menu-item installed-wip">Installed WIP</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>provisional-wip/<?php echo base64_encode($project_id); ?>" class="cm menu-item provisional-wip">Provisional WIP</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>proforma-invoice/<?php echo base64_encode($project_id); ?>" class="cm menu-item proforma-invoice">Proforma Invoice</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>tax-invoice/<?php echo base64_encode($project_id); ?>" class="cm menu-item tax-invoice">Tax Invoice</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>approval-waiting/<?php echo base64_encode($project_id); ?>" class="cm menu-item waiting-approval">Waiting for Approval</a>
                                    	<a role="presentation" href="<?php echo base_url(); ?>wip-status/<?php echo base64_encode($project_id); ?>" class="cm menu-item wip-status">WIP Status</a>
                                        </div>
                                    </div>
                                </nav>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="project-details">
                                    <div class="portlet-body form">
                                        <div class="form-body">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"> Customer Details </h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Customer Name</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="customer_name" id="customer_name" readonly><?php echo(isset($create_project_data->customer_name) && !empty($create_project_data->customer_name))?$create_project_data->customer_name:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">BP Code</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="bp_code" id="bp_code" readonly><?php echo(isset($create_project_data->bp_code) && !empty($create_project_data->bp_code))?$create_project_data->bp_code:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">PO/LOI No</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="po_loi_no" id="po_loi_no" readonly><?php echo(isset($create_project_data->po_loi_no) && !empty($create_project_data->po_loi_no))?$create_project_data->po_loi_no:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">PO/LOI Received Date</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="po_loi_received_data" id="po_loi_received_data" readonly><?php echo(isset($create_project_data->po_loi_received_data) && !empty($create_project_data->po_loi_received_data))?$create_project_data->po_loi_received_data:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Registered Address</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="registered_address" id="registered_address" readonly><?php echo(isset($create_project_data->registered_address) && !empty($create_project_data->registered_address))?$create_project_data->registered_address:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Client PO Address</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="client_po_addr" id="client_po_addr" readonly><?php echo(isset($create_project_data->client_po_addr) && !empty($create_project_data->client_po_addr))?$create_project_data->client_po_addr:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Our Address on PO</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="our_address_on_po" id="our_address_on_po" readonly><?php echo(isset($create_project_data->our_address_on_po) && !empty($create_project_data->our_address_on_po))?$create_project_data->our_address_on_po:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="">Name of Work</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="name_of_work" id="name_of_work" readonly><?php echo(isset($create_project_data->name_of_work) && !empty($create_project_data->name_of_work))?$create_project_data->name_of_work:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Work Order On</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="work_order_on" id="work_order_on" readonly><?php echo(isset($create_project_data->work_order_on) && !empty($create_project_data->work_order_on))?$create_project_data->work_order_on:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Site Address</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="site_address" id="site_address" readonly><?php echo(isset($create_project_data->site_address) && !empty($create_project_data->site_address))?$create_project_data->site_address:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Taxable Amount</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="taxable_amount" id="taxable_amount" readonly><?php echo(isset($create_project_data->taxable_amount) && !empty($create_project_data->taxable_amount))?$create_project_data->taxable_amount:'0.00'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">GST Amount</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="gst_amount" id="gst_amount" readonly><?php echo(isset($create_project_data->gst_amount) && !empty($create_project_data->gst_amount))?$create_project_data->gst_amount:'0.00'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Total Amount</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="total_amount" id="total_amount" readonly><?php echo(isset($create_project_data->total_amount) && !empty($create_project_data->total_amount))?$create_project_data->total_amount:'0.00'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php if(isset($create_project_data->emd_paid) && !empty($create_project_data->emd_paid) && $create_project_data->emd_paid == 'Y'){ ?>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">EMD</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->emd_paid) && !empty($create_project_data->emd_paid) && $create_project_data->emd_paid == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">EMD Amount</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control " name="emd_paid_num" id="emd_paid_num" readonly><?php echo(isset($create_project_data->emd_paid_num) && !empty($create_project_data->emd_paid_num))?$create_project_data->emd_paid_num:'0.00'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">EMD Paid</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->emd_paid_status) && !empty($create_project_data->emd_paid_status) && $create_project_data->emd_paid_status == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->upload_emd_paid_file) && !empty($create_project_data->upload_emd_paid_file)){ ?>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">EMD Paid</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/emd_paid_document/<?php echo $create_project_data->upload_emd_paid_file; ?>" download>Download EMD Paid</a>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <?php } ?>
                                                        <?php if(isset($create_project_data->asd_paid) && !empty($create_project_data->asd_paid) && $create_project_data->asd_paid == 'Y'){ ?>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">ASD</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->asd_paid) && !empty($create_project_data->asd_paid) && $create_project_data->asd_paid == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">ASD Amount</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->asd_paid_num) && !empty($create_project_data->asd_paid_num))?$create_project_data->asd_paid_num:'0.00'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">ASD Paid</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->asd_paid_status) && !empty($create_project_data->asd_paid_status) && $create_project_data->asd_paid_status == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->upload_asd_paid_file) && !empty($create_project_data->upload_asd_paid_file)){ ?>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label">ASD Paid</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/asd_paid_document/<?php echo $create_project_data->upload_asd_paid_file; ?>" download>Download ASD Paid</a>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <?php } ?>
                                                        <?php if(isset($create_project_data->performance_paid) && !empty($create_project_data->performance_paid) && $create_project_data->performance_paid == 'Y'){ ?>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Performance Bank Guarantee</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->performance_paid) && !empty($create_project_data->performance_paid) && $create_project_data->performance_paid == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Performance Bank Guarantee Amount</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->performance_guarantee_num) && !empty($create_project_data->performance_guarantee_num))?$create_project_data->performance_guarantee_num:'0.00'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Performance Bank Guarantee Paid</label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->asd_paid_status) && !empty($create_project_data->asd_paid_status) && $create_project_data->asd_paid_status == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Performance Bank Guarantee Validity (Months) </label>
                                                                    <div class="input-icon right"><i class="fa"></i>
                                                                    <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->pbg_validity) && !empty($create_project_data->pbg_validity))?$create_project_data->pbg_validity:'0'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                        <div class="row">
                                                            <?php if(isset($create_project_data->performance_paid) && !empty($create_project_data->performance_paid) && $create_project_data->performance_paid == 'Y'){ ?>
                                                                <?php if(isset($create_project_data->draft_performance_paid_file) && !empty($create_project_data->draft_performance_paid_file)){ ?>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Draft Performance Bank Guarantee</label><br>
                                                                        <a href="<?php echo base_url(); ?>uploads/performance_gaurantee_document/<?php echo $create_project_data->draft_performance_paid_file; ?>" download>Download Draft Performance Bank Guarantee</a>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                                <?php if(isset($create_project_data->final_performance_paid_file) && !empty($create_project_data->final_performance_paid_file)){ ?>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Final Performance Bank Guarantee</label><br>
                                                                        <a href="<?php echo base_url(); ?>uploads/performance_gaurantee_document/<?php echo $create_project_data->final_performance_paid_file; ?>" download>Download Final Performance Bank Guarantee</a>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                            <?php } ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Security Deposit Retention(%)</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="security_deposite_num" id="security_deposite_num" data-id="sec_deposite" id="security_deposite_num" readonly><?php echo(isset($create_project_data->security_deposite_num) && !empty($create_project_data->security_deposite_num))?$create_project_data->security_deposite_num:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Warranty Period (Months)</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="warranty_period" data-id="warranty_period" id="warranty_period" readonly><?php echo(isset($create_project_data->warranty_period) && !empty($create_project_data->warranty_period))?$create_project_data->warranty_period:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>            
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"> Key Persons of Customer </h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Billing Related</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="billing_related" id="billing_related" readonly><?php echo(isset($create_project_data->billing_related) && !empty($create_project_data->billing_related))?$create_project_data->billing_related:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">PO Related</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="po_related" id="po_related" value="" readonly><?php echo(isset($create_project_data->po_related) && !empty($create_project_data->po_related))?$create_project_data->po_related:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Execution Related</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="execution_related" id="execution_related" readonly><?php echo(isset($create_project_data->execution_related) && !empty($create_project_data->execution_related))?$create_project_data->execution_related:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Engineer In-charge</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="engineer_in_charge" id="engineer_in_charge" readonly><?php echo(isset($create_project_data->engineer_in_charge) && !empty($create_project_data->engineer_in_charge))?$create_project_data->engineer_in_charge:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Completion Period (Months)</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" name="completion_period" id="completion_period" readonly><?php echo(isset($create_project_data->completion_period) && !empty($create_project_data->completion_period))?$create_project_data->completion_period:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Client GST No</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control " name="gst_no" id="gst_no" readonly><?php echo(isset($create_project_data->gst_no) && !empty($create_project_data->gst_no))?$create_project_data->gst_no:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Price inclusive of AMC</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->price_inslusive_of_amc) && !empty($create_project_data->price_inslusive_of_amc) && $create_project_data->price_inslusive_of_amc == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->price_inslusive_of_amc) && !empty($create_project_data->price_inslusive_of_amc) && $create_project_data->price_inslusive_of_amc == 'Y'){ ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">AMC Applicable After (Months)</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->amc_applicable_after) && !empty($create_project_data->amc_applicable_after))?$create_project_data->amc_applicable_after:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Is billing Inter-State</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->is_billing_inter_state) && !empty($create_project_data->is_billing_inter_state) && $create_project_data->is_billing_inter_state == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->is_billing_inter_state) && !empty($create_project_data->is_billing_inter_state) && $create_project_data->is_billing_inter_state == 'Y'){ ?>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="">Billing Address</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->billing_address) && !empty($create_project_data->billing_address))?$create_project_data->billing_address:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php } ?>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Delivery Address</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->delivery_address) && !empty($create_project_data->delivery_address))?$create_project_data->delivery_address:''?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"> Insurance Required </h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Insurance Required</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->insurance_req) && !empty($create_project_data->insurance_req) && $create_project_data->insurance_req == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->insurance_req) && !empty($create_project_data->insurance_req) && $create_project_data->insurance_req == 'Y'){ ?>
                                                            <?php if(isset($insurance_data) && !empty($insurance_data)){ ?>
                                                            <?php foreach($insurance_data as $key){ ?>
                                                            <div class="row dflxd" id="insurance_req_div">
                                                                <div class="col-md-5">
                                                                    <div class="form-group">
                                                                        <label class="">Insurance Details</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <p class="readonlytext form-control" readonly><?php echo(isset($key->remark) && !empty($key->remark))?$key->remark:'-'?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="">Insurance up to which date</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <p class="readonlytext form-control" readonly><?php echo(isset($key->insdate) && !empty($key->insdate))?date('d-m-Y',strtotime($key->insdate)):'-'?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label class="">Amount Of Risk <br> Coverage</label>
                                                                        <div class="input-icon right">
                                                                            <i class="fa"></i>
                                                                            <p class="readonlytext form-control" readonly><?php echo(isset($key->amount) && !empty($key->amount))?$key->amount:'0.00'?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php if(isset($key->insurance_required_doc) && !empty($key->insurance_required_doc)){ ?>
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Insurance Documment</label><br>
                                                                        <a href="<?php echo base_url(); ?>uploads/insurance_required/<?php echo $key->insurance_required_doc; ?>" download>Download Insurance Documment</a>
                                                                    </div>
                                                                </div>
                                                                <?php } ?>
                                                            </div>
                                                            <?php } } } ?>
                                                            <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Agreement Prepared</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->agreement_prepared) && !empty($create_project_data->agreement_prepared) && $create_project_data->agreement_prepared == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->agreement_prepared) && !empty($create_project_data->agreement_prepared) && $create_project_data->agreement_prepared == 'Y'){ ?>
                                                            <?php if(isset($create_project_data->draft_doc_file) && !empty($create_project_data->draft_doc_file)){ ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Draft Agreement Document</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/document_upload/<?php echo $create_project_data->draft_doc_file; ?>" download>Download Draft Agreement Document</a>
                                                                </div>
                                                            </div>
                                                            <?php } } ?>
                                                            <?php if(isset($create_project_data->agreement_prepared) && !empty($create_project_data->agreement_prepared) && $create_project_data->agreement_prepared == 'Y'){ ?>
                                                            <?php if(isset($create_project_data->sign_doc_file) && !empty($create_project_data->sign_doc_file)){ ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Signed Agreement Document</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/document_upload/<?php echo $create_project_data->sign_doc_file; ?>" download>Download Signed Agreement Document</a>
                                                                </div>
                                                            </div>
                                                            <?php } } ?>
                                                            </div>
                                                            <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Penalty Clause</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->penalty_clause) && !empty($create_project_data->penalty_clause))?$create_project_data->penalty_clause:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->penalty_clause_file) && !empty($create_project_data->penalty_clause_file)){ ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Penalty Clause</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/document_upload/<?php echo $create_project_data->penalty_clause_file; ?>" download>Download Penalty Clause</a>
                                                                </div>
                                                            </div>
                                                            <?php  } ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Power of Attorney</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->power_of_attorney) && !empty($create_project_data->power_of_attorney))?$create_project_data->power_of_attorney:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->power_of_attorney_file) && !empty($create_project_data->power_of_attorney_file)){ ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Power of Attorney</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/document_upload/<?php echo $create_project_data->power_of_attorney_file; ?>" download>Download Power of Attorney</a>
                                                                </div>
                                                            </div>
                                                            <?php  } ?>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"> Pre-dispatch Requisites </h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Sample</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->sample) && !empty($create_project_data->sample) && $create_project_data->sample == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->sample) && !empty($create_project_data->sample) && $create_project_data->sample == 'Y'){ ?>
                                                            <?php if(isset($sample_data) && !empty($sample_data)){ ?>
                                                            <?php $i=0; foreach($sample_data as $key){ ?>
                                                            <?php if($i > 0){ ?><div class="col-md-2"></div><?php }  ?>
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <?php if($i == 0){ ?><label class="">Sample</label><?php }  ?>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($key->sample) && !empty($key->sample))?$key->sample:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $i++; } }  } ?>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Prototype</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->prototype) && !empty($create_project_data->prototype) && $create_project_data->prototype == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->prototype) && !empty($create_project_data->prototype) && $create_project_data->prototype == 'Y'){ ?>
                                                            <?php if(isset($prototype_data) && !empty($prototype_data)){ ?>
                                                            <?php $i=0; foreach($prototype_data as $key){ ?>
                                                            <?php if($i > 0){ ?><div class="col-md-2"></div><?php }  ?>
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <?php if($i == 0){ ?><label class="">Prototype</label><?php }  ?>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($key->prototype) && !empty($key->prototype))?$key->prototype:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $i++; } }  } ?>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Inspection</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->inspection) && !empty($create_project_data->inspection) && $create_project_data->inspection == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->inspection) && !empty($create_project_data->inspection) && $create_project_data->inspection == 'Y'){ ?>
                                                            <?php if(isset($inspection_data) && !empty($inspection_data)){ ?>
                                                            <?php $i=0; foreach($inspection_data as $key){ ?>
                                                            <?php if($i > 0){ ?><div class="col-md-2"></div><?php }  ?>
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <?php if($i == 0){ ?><label class="">Inspection</label><?php }  ?>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($key->inspection) && !empty($key->inspection))?$key->inspection:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $i++; } }  } ?>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">FAT</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->fat) && !empty($create_project_data->fat) && $create_project_data->fat == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->fat) && !empty($create_project_data->fat) && $create_project_data->fat == 'Y'){ ?>
                                                            <?php if(isset($fat_data) && !empty($fat_data)){ ?>
                                                            <?php $i=0; foreach($fat_data as $key){ ?>
                                                            <?php if($i > 0){ ?><div class="col-md-2"></div><?php }  ?>
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <?php if($i == 0){ ?><label class="">FAT</label><?php }  ?>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($key->fat) && !empty($key->fat))?$key->fat:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $i++; } }  } ?>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">SAT</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->sat) && !empty($create_project_data->sat) && $create_project_data->sat == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->sat) && !empty($create_project_data->sat) && $create_project_data->sat == 'Y'){ ?>
                                                            <?php if(isset($sat_data) && !empty($sat_data)){ ?>
                                                            <?php $i=0;foreach($sat_data as $key){ ?>
                                                            <?php if($i > 0){ ?><div class="col-md-2"></div><?php }  ?>
                                                            <div class="col-md-10">
                                                                <div class="form-group">
                                                                    <?php if($i == 0){ ?><label class="">SAT</label><?php }  ?>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($key->sat) && !empty($key->sat))?$key->sat:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php $i++;} }  } ?>
                                                            </div>
                                                            <?php if(isset($create_project_data->payment_terms) && !empty($create_project_data->payment_terms) && $create_project_data->payment_terms != 'S&I'){ ?>
                                                            <div class="row">
                                                             <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Payment Terms</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->payment_terms) && !empty($create_project_data->payment_terms) && $create_project_data->payment_terms == 'S&I')?'S&I':'SITC'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                </div>
                                                <?php if(isset($create_project_data->payment_terms) && !empty($create_project_data->payment_terms) && $create_project_data->payment_terms == 'S&I'){ ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">Billing Split Up Details </h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <p style="color:#a94442;font-size:12px;">Note * : Billing Split Up must be less than or equal to 100%</p>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Payment Terms</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->payment_terms) && !empty($create_project_data->payment_terms) && $create_project_data->payment_terms == 'S&I')?'S&I':'SITC'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Supply(%)</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->bill_split_supply) && !empty($create_project_data->bill_split_supply))?$create_project_data->bill_split_supply:'0'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Installation(%)</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->bill_installation) && !empty($create_project_data->bill_installation))?$create_project_data->bill_installation:'0'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Testing & Commissioning(%)</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->testing_commissioning) && !empty($create_project_data->testing_commissioning))?$create_project_data->testing_commissioning:'0'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label class="">Handover(%)</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->bill_handover) && !empty($create_project_data->bill_handover))?$create_project_data->bill_handover:'0'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>  
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"> Additional Details </h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Invoice to be submitted on customer website</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->invoice_submitted) && !empty($create_project_data->invoice_submitted) && $create_project_data->invoice_submitted == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->invoice_submitted) && !empty($create_project_data->invoice_submitted) && $create_project_data->invoice_submitted == 'Y'){ ?>
                                                            <div class="col-md-9">
                                                                <div class="form-group">
                                                                    <label class="">Invoice to be submitted on <br> customer website</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->invoice_submitted_text) && !empty($create_project_data->invoice_submitted_text))?$create_project_data->invoice_submitted_text:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php }  ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">Invoice to be sent on different address</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->invoice_submitted_address) && !empty($create_project_data->invoice_submitted_address) && $create_project_data->invoice_submitted_address == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->invoice_submitted_address) && !empty($create_project_data->invoice_submitted_address) && $create_project_data->invoice_submitted_address == 'Y'){ ?>
                                                            <div class="col-md-9">
                                                                <div class="form-group">
                                                                    <label class="">Invoice to be sent on <br> different address</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->invoice_submitted_address_text) && !empty($create_project_data->invoice_submitted_address_text))?$create_project_data->invoice_submitted_address_text:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php }  ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">ESIC Required</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->esic_required) && !empty($create_project_data->esic_required) && $create_project_data->esic_required == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->esic_required) && !empty($create_project_data->esic_required) && $create_project_data->esic_required == 'Y'){ ?>
                                                            <div class="col-md-9">
                                                                <div class="form-group">
                                                                    <label class="">ESIC Required</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->esic_required_text) && !empty($create_project_data->esic_required_text))?$create_project_data->esic_required_text:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php }  ?>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="">PF Required</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->pf_required) && !empty($create_project_data->pf_required) && $create_project_data->pf_required == 'Y')?'Yes':'No'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php if(isset($create_project_data->pf_required) && !empty($create_project_data->pf_required) && $create_project_data->pf_required == 'Y'){ ?>
                                                            <div class="col-md-9">
                                                                <div class="form-group">
                                                                    <label class="">PF Required</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->pf_required_text) && !empty($create_project_data->pf_required_text))?$create_project_data->pf_required_text:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php }  ?>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="">Any Other Details</label>
                                                                    <div class="input-icon right">
                                                                        <i class="fa"></i>
                                                                        <p class="readonlytext form-control" readonly><?php echo(isset($create_project_data->any_other_details) && !empty($create_project_data->any_other_details))?$create_project_data->any_other_details:'-'?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">Attachments</h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Project Completion Schedule</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/emd_paid_document/<?php echo(isset($create_project_data->projectcmpl_doc_file) && !empty($create_project_data->projectcmpl_doc_file))?$create_project_data->projectcmpl_doc_file:'-'?>" download>Download Project Completion Schedule</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Project Design Report</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/emd_paid_document/<?php echo(isset($create_project_data->projectdesig_doc_file) && !empty($create_project_data->projectdesig_doc_file))?$create_project_data->projectdesig_doc_file:'-'?>" download>Download Project Design Report</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Project Cash Flow</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/emd_paid_document/<?php echo(isset($create_project_data->projectcashflw_doc_file) && !empty($create_project_data->projectcashflw_doc_file))?$create_project_data->projectcashflw_doc_file:'-'?>" download>Download Project Cash Flow</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="control-label">Project Investment Schedule</label><br>
                                                                    <a href="<?php echo base_url(); ?>uploads/emd_paid_document/<?php echo(isset($create_project_data->projectinvstsch_doc_file) && !empty($create_project_data->projectinvstsch_doc_file))?$create_project_data->projectinvstsch_doc_file:'-'?>" download>Download Project Investment Schedule</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
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
    <script src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/admin/pages/scripts/components-pickers.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url()?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js" type="text/javascript" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/site/js/jquery.validationEngine.js"></script>
    <script src="<?php echo base_url(); ?>assets/site/js/jquery.validationEngine-en.js"></script>
    <script src="<?php echo base_url();?>js/common.js?<?php echo date('Y-m-d H:i:s');?>" type="text/javascript"></script>
    <script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); 
        ComponentsPickers.init();
    });
    </script>
</body>
</html>