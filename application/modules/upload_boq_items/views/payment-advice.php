<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Payment Receipt | <?php echo project_name; ?> </title>
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
        .adbtn {
            padding: 2px 6px;
            background: #26a69a;
            color: #fff;
            border-radius: 50%;
            width: 20px;
            font-size: 7px;
            height: 20px;
            cursor: pointer;
            margin: 25px auto;
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
                                    <div class="caption font-blue"> <i class="fa fa-plus-circle font-blue"></i> <span class="caption-subject bold uppercase"><?php if(isset($tax_invc_no) && !empty($tax_invc_no)){ echo '(#'.$tax_invc_no.')'; } ?> Payment Receipt</span> </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="save_payment_advice" id="save_payment_advice" class="horizontal-form" method="post" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"></h4>
                                            </div>
                                            <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">
            										<div class="form-group">
            											<label class="">Payment Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
            											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
            												<input type="text" name="payment_date" id="payment_date" class="form-control" readonly="" placeholder="Payment Date" >		
            												<span class="input-group-btn">
            													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
            												</span>
            											</div>
            										</div> 
            									</div>
            									<!--<div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="">Payment Account <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <select class="form-control select2me" name="payment_account_name" id="payment_account_name" required>
                                                                <option value="">--Select--</option>
                                                                <option value="1">Payment Account 1</option>
                                                                <option value="2">Payment Account 2</option>
                                                                <option value="3">Payment Account 3</option>
                                                            </select>
                                                        </div>
                                                </div>-->
            									<div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="">Payment Account <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <select class="form-control select2me" name="bank_acc_no" id="bank_acc_no" required>
                                                                <option value="1">--Select--</option>
                                                                <option value="2">30495326861/HDFC</option>
                                                                <option value="3">30495326862/SBI</option>
                                                                <option value="4">30495326863/ICICI</option>
                                                            </select>
                                                        </div>
                                                </div>
            									<div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Payment Amount Received <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                        <div class="input-icon right">
                                                             <i class="fa"></i>
                                                             <input type="text" class="form-control " id="payment_received_amount" name="payment_received_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Payment Amount Received" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
            									<div class="row">
            									<div class="col-md-3">
            										<div class="form-group">
            											<label class="">Invoice Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
            											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
            												<input type="text" name="invoice_date" id="invoice_date" class="form-control" readonly="" placeholder="Invoice Date">		
            												<span class="input-group-btn">
            													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
            												</span>
            											</div>
            										</div> 
            									</div>
            									<div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Invoice No <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                        <div class="input-icon right">
                                                             <i class="fa"></i>
                                                             <input type="text" class="form-control" id="invoice_no" name="invoice_no" placeholder="Invoice No" value="<?php if(isset($tax_invc_no) && !empty($tax_invc_no)){ echo $tax_invc_no; } ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Invoice Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                        <div class="input-icon right">
                                                             <i class="fa"></i>
                                                             <input type="text" class="form-control " id="invoice_amount" name="invoice_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Invoice Amount" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Client Name <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                        <div class="input-icon right">
                                                             <i class="fa"></i>
                                                             <input type="text" class="form-control " id="client_name" name="client_name" value="Client Name" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Remark <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                        <div class="input-icon right">
                                                             <i class="fa"></i>
                                                             <input type="text" class="form-control " id="remark" name="remark" placeholder="Remark" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="">Contract Deposit (EMD) <br>Received <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="dflx">
                                                            <input type="radio" name="contarct_deposit_emd_rec" id="contarct_deposit_emd_rec_yes" class="contarct_deposit_emd_recclass" value="Yes" required><span style="padding: 0 10px 0px 5px;">Yes</span>
                                                            <input type="radio" name="contarct_deposit_emd_rec" id="contarct_deposit_emd_rec_no" class="contarct_deposit_emd_recclass" value="No" checked required><span style="padding: 0 10px 0px 5px;">No</span>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label class="">Contract Deposit (ASD) <br>Received <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="dflx">
                                                            <input type="radio" name="contarct_deposit_asd_rec" id="contarct_deposit_asd_rec_yes" class="contarct_deposit_asd_rec_class" value="Yes" required><span style="padding: 0 10px 0px 5px;">Yes</span>
                                                            <input type="radio" name="contarct_deposit_asd_rec" id="contarct_deposit_asd_rec_no" class="contarct_deposit_asd_rec_class" value="No" checked required><span style="padding: 0 10px 0px 5px;">No</span>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div id="contarct_deposit_emd_div"></div>
                                            <div id="contarct_deposit_asd_div"></div>
                                            </div>
                                            </div>
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Statutory Deductions</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>IT TDS Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="it_tds_amount" id="it_tds_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="IT TDS Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>GTDS Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="gtds_amount" id="gtds_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="GTDS Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="margin: 10px 0;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Any Other Tax Deduction</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Tax Deduction Description <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="tax_deduction_desc" id="tax_deduction_desc" placeholder="Tax Deduction Description" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Tax Deduction Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="tax_deduction_amt" id="tax_deduction_amt" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Tax Deduction Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><div class="adbtn"><i class="fa fa-plus" aria-hidden="true" style="font-size:10px;"></i></div></div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Refundables</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Security Deposit Retention Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="security_deposit_retn_amount" id="security_deposit_retn_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Security Deposit Retention Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="margin: 10px 0;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Any Other Deposit</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Deposit Description <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="deposit_desc" id="deposit_desc" placeholder="Deposit Description" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Deposit Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="deposit_amount" id="deposit_amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Deposit Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><div class="adbtn"><i class="fa fa-plus" aria-hidden="true" style="font-size:10px;"></i></div></div>
                                                </div>
                                                <hr style="margin: 10px 0;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Withheld</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Withheld Description <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="withheld_desc" id="withheld_desc" placeholder="Withheld Description" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Withheld Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="withheld_amt" id="withheld_amt" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Withheld Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><div class="adbtn"><i class="fa fa-plus" aria-hidden="true" style="font-size:10px;"></i></div></div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Non-Refundables</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Labour Cess <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="labour_cess" id="labour_cess" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Labour Cess" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Debit Note / Credit Note / LD <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="debit_note" id="debit_note" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Debit Note / Credit Note / LD" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr style="margin: 10px 0;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Any Other Cess</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Cess Description <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="other_cess_desc" id="other_cess_desc" placeholder="Cess Description" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Cess Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="other_cess_amt" id="other_cess_amt" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Cess Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><div class="adbtn"><i class="fa fa-plus" aria-hidden="true" style="font-size:10px;"></i></div></div>
                                                </div>
                                                <hr style="margin: 10px 0;">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label style="font-weight: 600;font-size: 14px;margin-bottom:10px;">Any Other Deductions</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Deduction Description <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="deduction_desc" id="deduction_desc" placeholder="Deduction Description" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label>Deduction Amount <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="input-icon right">
                                                                 <i class="fa"></i>
                                                                 <input type="text" class="form-control " name="deduction_amt" id="deduction_amt" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" placeholder="Deduction Amount" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1"><div class="adbtn"><i class="fa fa-plus" aria-hidden="true" style="font-size:10px;"></i></div></div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"></h4>
                                            </div>
                                            <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="">Payment Receipt Copy Received <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                            <div class="dflx">
                                                            <input type="radio" name="payment_advice_received" id="payment_advice_received_yes" value="Yes" checked required><span style="padding: 0 10px 0px 5px;">Yes</span>
                                                            <input type="radio" name="payment_advice_received" id="payment_advice_received_no" value="No" required><span style="padding: 0 10px 0px 5px;">No</span>
                                                            </div>
                                                        </div>
                                                </div>
                                                
                                                <div class="col-md-4">
            										<div class="form-group">
            											<label class="">Payment Receipt Copy Received Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
            											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
            												<input type="text" name="payment_advice_received_date" id="payment_advice_received_date" class="form-control" readonly="" placeholder="Payment Advice Copy Received Date" >		
            												<span class="input-group-btn">
            													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
            												</span>
            											</div>
            										</div> 
            									</div>
            									<div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Upload Payment Receipt Document <span class="require" aria-required="true" style="color:#a94442">*</span></label><br>
                                                            <input type="file" name="payment_advice_doc" id="payment_advice_doc" class="payment_advice_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />
                                                            <span id="payment_advice_doc_error" style="font-size: 12px;color:#a94442;"></span>
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