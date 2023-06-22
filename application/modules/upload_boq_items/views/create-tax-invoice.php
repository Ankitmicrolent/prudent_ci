<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Tax Invoice | <?php echo project_name; ?> </title>
    <base href="<?php echo base_url(); ?>" >
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/global/css/components-rounded.css?<?php echo date('Ymd H:i:s'); ?>" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/global/css/plugins.css?<?php echo date('Ymd H:i:s'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css?<?php echo date('Ymd H:i:s'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/admin/layout4/css/light.css?<?php echo date('Ymd H:i:s'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/css/validationEngine.jquery.css" rel="stylesheet">
    <style type="text/css">
        .dataTables_filter{
            float:right;
        }
        .has-error-p{
            border: 1px solid #a94442;
        }
        table.dataTable thead>tr>th.sorting_asc, table.dataTable thead>tr>th.sorting_desc, table.dataTable thead>tr>th.sorting, table.dataTable thead>tr>td.sorting_asc, table.dataTable thead>tr>td.sorting_desc, table.dataTable thead>tr>td.sorting {
            padding-right: 19px;
        }
        .table-scrollable {
            width: 100%;
            overflow-x: auto;
            overflow-y: hidden;
            border: 1px solid #dddddd; 
            margin: 10px 0 !important;
        }
        .dflx {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
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
                                    <div class="caption font-blue">
                                        <i class="fa fa-plus-circle font-blue"></i>
                                        <span class="caption-subject bold uppercase"> Create Tax Invoice</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="save_tax_invoice_details" enctype="multipart/form-data" id="save_tax_invoice_details"  method="post" class="horizontal-form">
                                        <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url();?>">
                                        <div class="form-body">
                                        <p id="invaliderrorgst" style="padding: 0 10px;font-size: 12px;color:#a94442;"></p>
                                            <div class="row">
                                                <div class="col-md-5">
            										<div class="form-groupp">
            											<label class="control-label">Select Project <span class="required" aria-required="true" style="color:#a94442">*</span></label>
            											<input type="text" class="form-control allprojects" id="project_id" name="project_id" placeholder="Select Project Code" required>
            											<span id="projlaoding"></span>
            									    </div>
            									</div>
            									<div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="">Tax Invoice No <span class="require" aria-required="true" style="color:#a94442">*</span></label>
                                                        <div class="input-icon right">
                                                            <i class="fa"></i>
                                                            <input type="text" class="form-control" name="tax_invoice_no" id="tax_invoice_no" value="" placeholder="Tax Invoice No" required="">
                                                        </div>
                                                    </div>
                                                </div>
            									<div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="">Gst Type <span class="require" aria-required="true" style="color:#a94442;" >*</span></label>
                                                        <div class="input-icon right">
                                                            <!-- <i class="fa"></i>
                                                            <input type="text" class="form-control" name="tax_invoice_no" id="tax_invoice_no" value="" placeholder="Tax Invoice No" required=""> -->
                                                            <select class="form-control select2me" name="gst_type" style="padding-left:0px !important;" id="gst_type" required>

                                                         <option value="">Select</option>
                                                         <option value="igst">IGST</option>
                                                         <option value="cgst_sgst">CGST/SGST</option>
                                                        </select>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                </div>
                                                <div class="col-md-3">
            										<div class="form-group">
            											<label class="">Tax Invoice Date <span class="required" aria-required="true" style="color:#a94442">*</span></label>
            											<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">
            												<input type="text" name="invoice_date" id="invoice_date" class="form-control" readonly="" placeholder="Tax Invoice Date">		
            												<span class="input-group-btn">
            													<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>
            												</span>
            											</div>
            										</div> 
            									</div>
            									
            								</div>

                                            <!-- //table for igst  -->
                                            <div id="displayTaxInvc" style="display:none;">
                                                <table width="100%" id="taxinvcdisplay" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">BOQ Sr No</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">HSN/SAC Code</th>
                                                            <th style="min-width: 150px;width:150px;font-size:13px;">Item Description</th>
                                                            <th style="min-width: 80px;width:80px;font-size:13px;">Unit</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">Qty</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">Rate</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">Taxable Amount</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">IGST%</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">IGST Amt</th>
                                                            <!-- <th style="min-width: 50px;width:50px;font-size:13px;">Total Amount</th> -->
                                                            <th style="min-width: 10px;width:10px;font-size:13px;">-</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                    <tfoot>
                                                        <!-- <tr>
                                                          <td rowspan="1" colspan="6" style="text-align: right;"><span style="font-weight:600;">Sub Total</span></td>
                                                          <td id="subtotal" style="text-align: right;font-weight:600;"></td>
                                                          <td></td> -->
                                                          <!-- <td></td> -->
                                                          <!-- <td>-</td> -->
                                                         
                                                        <!-- </tr> -->
                                                        <!-- <tr>
                                                          <td rowspan="1" colspan="6" style="text-align: right;"><span style="font-weight:600;">CGST@9%</span></td>
                                                          <td class="gst_amt" style="text-align: right;font-weight:600;"></td>
                                                          <td></td> -->
                                                          <!-- <td></td> -->
                                                          <!-- <td>-</td> -->
                                                         
                                                        <!-- </tr> -->
                                                        <!-- <tr>
                                                          <td rowspan="1" colspan="6" style="text-align: right;"><span style="font-weight:600;">SGST@9%</span></td>
                                                          <td class="gst_amt" style="text-align: right;font-weight:600;"></td>
                                                          <td></td> -->
                                                          <!-- <td></td> -->
                                                          <!-- <td>-</td> -->
                                                         
                                                        <!-- </tr> -->
                                                        <tr>
                                                          <td rowspan="1" colspan="6" style="text-align: right;"><span style="font-weight:600;">Total Amount of This Invoice</span></td>
                                                          <td id="finaltotal" style="text-align: right;font-weight:600;"></td>
                                                          <td></td>
                                                          <!-- <td></td> -->
                                                          <td>-</td>
                                                         
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <p id="invaliderrorid" style="padding: 0 10px;font-size: 12px;color:#a94442;"></p>
                                            </div>

                                            <!-- //table for cgst and sgst -->
                                            <div id="displayTaxInvccgst" style="display:none;">
                                                <table width="100%" id="taxinvcdisplaysgst" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">BOQ Sr No</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">HSN/SAC Code</th>
                                                            <th style="min-width: 150px;width:150px;font-size:13px;">Item Description</th>
                                                            <th style="min-width: 80px;width:80px;font-size:13px;">Unit</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">Qty</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">Rate</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">Taxable Amount</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">SGST%</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">SGST Amt</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">CGST%</th>
                                                            <th style="min-width: 50px;width:50px;font-size:13px;">CGST Amt</th>
                                                            <!-- <th style="min-width: 50px;width:50px;font-size:13px;">Total Amount</th> -->
                                                            <th style="min-width: 10px;width:10px;font-size:13px;">-</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                    <tfoot>
                                                        <!-- <tr> -->
                                                          <!-- <td rowspan="1" colspan="6" style="text-align: right;"><span style="font-weight:600;">Sub Total</span></td>
                                                          <td id="subtotal" style="text-align: right;font-weight:600;"></td>
                                                          <td></td> -->
                                                          <!-- <td></td> -->
                                                          <!-- <td>-</td> -->
                                                         
                                                        <!-- </tr> -->
                                                        <!-- <tr> -->
                                                          <!-- <td rowspan="1" colspan="6" style="text-align: right;"><span style="font-weight:600;">CGST@9%</span></td>
                                                          <td class="gst_amt" style="text-align: right;font-weight:600;"></td>
                                                          <td></td> -->
                                                          <!-- <td></td> -->
                                                          <!-- <td>-</td> -->
                                                         
                                                        <!-- </tr> -->
                                                        <!-- <tr>
                                                          <td rowspan="1" colspan="6" style="text-align: right;"><span style="font-weight:600;">SGST@9%</span></td>
                                                          <td class="gst_amt" style="text-align: right;font-weight:600;"></td>
                                                          <td></td> -->
                                                          <!-- <td></td> -->
                                                          <!-- <td>-</td> -->
                                                         
                                                        <!-- </tr> -->
                                                        <tr>
                                                          <td rowspan="1" colspan="6" style="text-align: right;"><span style="font-weight:600;">Total Amount of This Invoice</span></td>
                                                          <td id="finaltotal" style="text-align: right;font-weight:600;"></td>
                                                          <td></td>
                                                          <!-- <td></td> -->
                                                          <td>-</td>
                                                         
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <p id="invaliderrorid" style="padding: 0 10px;font-size: 12px;color:#a94442;"></p>
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                            <button type="button" class="btn btn-danger cancel clearData" title="click To Cancel"> Cancel</button>                          
                                            <button type="submit" class="btn green common_save" title="click To Save" rel="0"><i class="fa fa-dot-circle-o"></i> Save</button>
                                        </div>
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
                                        <span class="caption-subject bold uppercase">Tax Invoice List</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                      <table width="100%" id="taxInvclist" class="table table-striped table-bordered table-hover" style="font-size:12px;">
            							<thead>
            								<tr>
            									<th scope="col" style="min-width:10px;width:10px;">Sr.no</th>
            									<th scope="col" style="min-width:50px;width:50px;">Tax Invoice No</th>
            								    <th scope="col" style="min-width:50px;width:50px;">BP Code</th>
            								    <th scope="col" style="min-width:150px;width:150px;">Cust. Name</th>
            								    <th scope="col" style="min-width:100px;width:100px;">Status</th>
            								    <th scope="col" style="min-width:150px;width:150px;">Created On</th>
            									<th scope="col" style="min-width:50px;width:50px;">Invoice Amt</th>
            									<th scope="col" style="min-width:50px;width:50px;">Payment Receipt</th>
            									<th scope="col" style="min-width:50px;width:50px;">Balance Payment</th>
            									<th scope="col" style="min-width:160px;width:160px;">Action</th>
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
    <script src="<?php echo base_url();?>js/common.js?<?php echo date('Ymd H:i:s'); ?>" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/4.15.0/lodash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/select2pagination.js?<?php echo date('Ymd H:i:s'); ?>"></script>
    <script>
    jQuery(document).ready(function() {


        $(document).on('click', '.date1', function() {

$('.date1').datepicker({
    orientation: "right",
    autoclose: true
});
});

        Metronic.init(); // init metronic core components
        Layout.init(); 
        ComponentsPickers.init();
    });
    $(document).on('change', '#project_id', function() {

        var gst_type = $('#gst_type').val();
      
            if(gst_type == '' || gst_type == null){
                $('#displayTaxInvc').hide();
                $('#invaliderrorgst').html('Please Select Gst Type!');
                return
            }
        var project_id = $(this).val();
        if(gst_type == "igst"){

            if(project_id){
            $('#invaliderrorgst').html('');
            $('#displayTaxInvc').show();
            $('#displayTaxInvccgst').hide();
            $('#taxinvcdisplay').dataTable({
            	    "bDestroy" : true,
            	    "bInfo" : false,
            	    "ordering": false,
            	    "searching":false,
            	    "paging": false,
            		"deferRender": true,
                    "responsive": true,
                    "processing": true,
            		"serverSide": true,
                    "order": [],
                    "ajax": {
                        "url": "<?php echo base_url('get_proforma_by_project'); ?>",
                        "type": "POST",
                        "data":{project_id:project_id ,gst_type : gst_type }
                    },
                    "columnDefs": [{ 
                        "targets": [0],
                        "orderable": false
                    }]
            });    
        }else{
            
        
    }













        }else{





       
        if(project_id){
            $('#invaliderrorgst').html('');
            $('#displayTaxInvc').hide();
            $('#displayTaxInvccgst').show();
            $('#taxinvcdisplaysgst').dataTable({
            	    "bDestroy" : true,
            	    "bInfo" : false,
            	    "ordering": false,
            	    "searching":false,
            	    "paging": false,
            		"deferRender": true,
                    "responsive": true,
                    "processing": true,
            		"serverSide": true,
                    "order": [],
                    "ajax": {
                        "url": "<?php echo base_url('get_proforma_by_project'); ?>",
                        "type": "POST",
                        "data":{project_id:project_id ,gst_type : gst_type }
                    },
                    "columnDefs": [{ 
                        "targets": [0],
                        "orderable": false
                    }]
            });    
        }else{
            
        
    }
}
    });
    $('#taxInvclist').dataTable({
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
            "url": "<?php echo base_url('project_taxInvc_list'); ?>",
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