<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Add / View Compliance | <?php echo project_name; ?> </title>
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
                                    <div class="caption font-blue"> <i class="fa fa-plus-circle font-blue"></i> <span class="caption-subject bold uppercase">Add / View Compliance</span> </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="Add_View_Compliance" id="Add_View_Compliance" class="horizontal-form" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row" style="display:flex;">
                                                <div class="col-md-4" style="margin: auto;text-align:center;">
                                                        <div class="form-group">
                                                            <select class="form-control select2me" name="month" id="month" required>
                                                                <option value="">--Select Month--</option>
                                                                <option value="January">January</option>
                                                                <option value="February">February</option>
                                                                <option value="March">March</option>
                                                                <option value="April">April</option>
                                                                <option value="May">May</option>
                                                                <option value="June">June</option>
                                                                <option value="July">July</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                                <option value="October">October</option>
                                                                <option value="November">November</option>
                                                                <option value="December">December</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">GSTR-1A Confirmation Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="gstr_1a_confirmation_date" id="gstr_1a_confirmation_date" class="form-control" readonly="" placeholder="GSTR-1A Confirmation Date" required >		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="upload_gtds_doc" id="upload_gtds_doc" required class="upload_gtds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                                            <span id="upload_gtds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">Professional Tax (PT) Confirmation Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="proof_tax_confirmation_date" id="proof_tax_confirmation_date" class="form-control" required readonly="" placeholder="Professional Tax (PT) Confirmation Date" >		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="proof_tax_doc" id="proof_tax_doc" class="upload_gtds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
                                                            <span id="upload_gtds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">GSTR-3B Confirmation Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="gstr_3b_confirmation_date" id="gstr_3b_confirmation_date" class="form-control" readonly="" placeholder="GSTR-1A Confirmation Date" required >		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="gstr_3b_doc" id="gstr_3b_doc" class="upload_gtds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
                                                            <span id="upload_gtds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">Provident Fund (PF) Confirmation Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="pro_fund_confirmation_date" id="pro_fund_confirmation_date" class="form-control" readonly="" required placeholder="Provident Fund (PF) Confirmation Date" >		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="pro_fund_doc" id="pro_fund_doc" class="upload_gtds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
                                                            <span id="upload_gtds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">TDS Confirmation Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="tds_confirmation_date" id="tds_confirmation_date" class="form-control" readonly="" placeholder="TDS Confirmation Date" required>		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="tds_doc" id="tds_doc" class="upload_gtds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
                                                            <span id="upload_gtds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">ESIC Confirmation Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="esic_confirmation_date" id="esic_confirmation_date" class="form-control" readonly="" placeholder="ESIC Confirmation Date" required>		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="esic_doc" id="esic_doc" class="upload_gtds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" required>
                                                            <span id="upload_gtds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="form-actions right"> <a href="<?php echo base_url();?>create-tax-invoice" class="btn blue" style="float: left;">Back</a> <button type="button" class="btn btn-danger cancel clearData" title="click To Cancel"> Cancel</button> <button type="submit" class="btn green common_save" title="click To Save" rel="0"><i class="fa fa-dot-circle-o"></i>Save</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-blue">
                                        <i class="fa fa-bars font-blue"></i>
                                        <span class="caption-subject bold uppercase">COMPLIANCE LIST</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                      <table width="100%" id="pwiplist" class="table table-striped table-bordered table-hover" style="font-size:12px;">
            							<thead>
            								<tr>
            									<th scope="col">Sr.no</th>
            									<th scope="col">Month</th>
            									<th scope="col">GSTR-1A Date</th>
            									<th scope="col">GSTR-3B Date</th>
            									<th scope="col">TDS Date</th>
            								    <th scope="col">PT Date</th>
            								    <th scope="col">PF Date</th>
            								    <th scope="col">ESIC Date</th>
            								    <th scope="col">GSTR-1A Doc</th>
            								    <th scope="col">GSTR-3B Doc</th>
            								    <th scope="col">TDS Doc</th>
            								    <th scope="col">PT Doc</th>
            								    <th scope="col">PF Doc</th>
            								    <th scope="col">ESIC  Doc</th>
            								    <th scope="col">Created On</th>
            									<th scope="col">Action</th>
            								</tr>
            							</thead>
            							<tbody> 
            					    </table>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div> <?php $this->load->view('common/footer');?> <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
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




        $('#pwiplist').dataTable({
	// Processing indicator
		"paging": true,
		 "iDisplayLength": 10,
         "deferRender": true,
         "responsive": true,
        "processing": true,
		"serverSide": true,
        // Initial no order.
        "order": [],
		
        // Load data from an Ajax source
        "ajax": {
            "url": "<?php echo base_url('compliance_list'); ?>",
            "type": "POST"
        },
		
        //Set column definition initialisation properties
        "columnDefs": [{ 
            "targets": [0],
            "orderable": false
        }]
    } );
    </script>
</body>

</html>