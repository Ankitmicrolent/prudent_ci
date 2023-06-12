<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Invoice Closure | <?php echo project_name; ?> </title>
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
                                    <div class="caption font-blue"> <i class="fa fa-plus-circle font-blue"></i> <span class="caption-subject bold uppercase"><?php if(isset($tax_invc_no) && !empty($tax_invc_no)){ echo '(#'.$tax_invc_no.')'; } ?> Invoice Closure</span> </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="save_invoice_closure" id="save_invoice_closure" class="horizontal-form" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Statutory Deductions </h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row"><div class="col-md-12"><label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">GTDS</label></div></div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>GTDS Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="gtds_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="GTDS Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">Confirmation Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="confirmation_date" id="confirmation_date" class="form-control" readonly="" placeholder="Confirmation Date" >		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">Return Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="return_date" id="return_date" class="form-control" readonly="" placeholder="Return Date">		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                									<div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="upload_gtds_doc" id="upload_gtds_doc" class="upload_gtds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                                            <span id="upload_gtds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"><div class="col-md-12"><label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">TDS</label></div></div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>TDS Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="tds_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="TDS Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">26AS Confirmation Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="tds_confirmation_date" id="tds_confirmation_date" class="form-control" readonly="" placeholder="Confirmation Date" >		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="upload_tds_doc" id="upload_tds_doc" class="upload_tds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                                            <span id="upload_tds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row"><div class="col-md-12"><label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Any Other Deduction</label></div></div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Amount</label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                										<div class="form-group">
                											<label class="">Confirmation Date</label>
                											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                												<input type="text" name="tconfirmation_date" id="tconfirmation_date" class="form-control" readonly="" placeholder="Confirmation Date" >		
                												<span class="input-group-btn">
                													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                												</span>
                											</div>
                										</div> 
                									</div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Document</label><br>
                                                            <input type="file" name="upload_t_doc" id="upload_t_doc" class="upload_t_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                                            <span id="upload_tds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Refundable </h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row"><div class="col-md-12"><label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Security Deposit Retention Amount</label></div></div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                                <div class="input-icon right">
                                                                     <i class="fa"></i>
                                                                     <input type="text" class="form-control " name="asr_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Security Deposit Retention Amount" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                    										<div class="form-group">
                    											<label class="">Bank Credit Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                    											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                    												<input type="text" name="sdrbc_date" id="sdrbc_date" class="form-control" readonly="" placeholder="Bank Credit Date" >		
                    												<span class="input-group-btn">
                    													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                    												</span>
                    											</div>
                    										</div> 
                    									</div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                                <input type="file" name="upload_sdrbc_doc" id="upload_sdrbc_doc" class="upload_sdrbc_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                                                <span id="upload_sdrbc_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"><div class="col-md-12"><label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Any Other Deposit Amount</label></div></div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Amount</label>
                                                                <div class="input-icon right">
                                                                     <i class="fa"></i>
                                                                     <input type="text" class="form-control " name="damount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Amount" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                    										<div class="form-group">
                    											<label class="">Bank Credit Date</label>
                    											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                    												<input type="text" name="anobankcdate" id="anobankcdate" class="form-control" readonly="" placeholder="Bank Credit Date" >		
                    												<span class="input-group-btn">
                    													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                    												</span>
                    											</div>
                    										</div> 
                    									</div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Upload Document</label><br>
                                                                <input type="file" name="upload_t_doc" id="upload_t_doc" class="upload_t_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                                                <span id="upload_tds_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row"><div class="col-md-12"><label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Withheld Amount</label></div></div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label>Withheld Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                                <div class="input-icon right">
                                                                     <i class="fa"></i>
                                                                     <input type="text" class="form-control " name="withheld_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Withheld Amount" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                    										<div class="form-group">
                    											<label class="">Bank Credit Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
                    											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
                    												<input type="text" name="withheld_confirmation_date" id="withheld_confirmation_date" class="form-control" readonly="" placeholder="Bank Credit Date" >		
                    												<span class="input-group-btn">
                    													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
                    												</span>
                    											</div>
                    										</div> 
                    									</div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">Upload Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                                <input type="file" name="upload_withheld_doc" id="upload_withheld_doc" class="upload_tds_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                                                <span id="upload_withheld_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">Any other Deposit / Deductiob Confirmation </h4>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Upload Any other Deposit / Deductiob Confirmation Document<span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                                <input type="file" name="upload_anydepo_doc" id="upload_anydepo_doc" class="upload_anydepo_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf">
                                                                <span id="upload_anydepo_doc_error" style="font-size: 12px;color:#a94442;"></span>
                                                            </div>
                                                        </div>
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
    </script>
</body>

</html>