<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Dashboard | <?php echo project_name; ?> </title>
    <base href="<?php echo base_url(); ?>" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!----- PAGE CSS------->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
    <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
    <!----- COMMON CSS------->
    <link href="<?php echo base_url();?>/assets/global/css/components-md.css?<?php echo date('Y-m-d H:i:s');?>" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/global/css/plugins-md.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/admin/layout4/css/layout.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>/assets/admin/layout4/css/light.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>assets/site/css/validationEngine.jquery.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/admin/layout/css/custom.css?<?php echo date('Y-m-d H:i:s');?>" rel="stylesheet" type="text/css"/>
<style>
.border-left-primary {
    border-left: 0.25rem solid #4e73df!important;
}
.pb-2, .py-2 {
    padding-bottom: 0.5rem!important;
}
.pt-2, .py-2 {
    padding-top: 0.5rem!important;
}
.shadow {
    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
}
.border-left-success {
    border-left: 0.25rem solid #1cc88a!important;
}
.border-left-info {
    border-left: 0.25rem solid #36b9cc!important;
}
.border-left-warning {
    border-left: 0.25rem solid #f6c23e!important;
}
.text-warning {
    color: #f6c23e!important;
}
.border-left-orange {
    border-left: 0.25rem solid #8B4000!important;
}
.text-orange {
    color: #8B4000!important;
}
.border-left-red {
    border-left: 0.25rem solid #C70039!important;
}
.text-red {
    color: #C70039!important;
}
.border-left-oblue {
    border-left: 0.25rem solid #00BEC7!important;
}
.text-oblue {
    color: #00BEC7!important;
}
.border-left-orange-light {
    border-left: 0.25rem solid #FF5733!important;
}
.text-orange-light {
    color: #FF5733!important;
}
.no-gutters>.col, .no-gutters>[class*=col-] {
    padding-right: 0;
    padding-left: 0;
}
.text-gray-300 {
    color: #dddfeb!important;
}
.mr-2, .mx-2 {
    margin-right: 0.5rem !important;
}
.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
}
.col-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
}
.h-100 {
    height: 100%!important;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}
.text-xs {
    font-size: 1.1rem;
}
.text-gray-800 {
    color: #5a5c69!important;
}
.text-primary {
    color: #4e73df!important;
}
.font-weight-bold {
    font-weight: 700!important;
}
.mb-1, .my-1 {
    margin-bottom: 0.25rem!important;
}
.align-items-center {
    align-items: center!important;
}
.no-gutters {
    margin-right: 0;
    margin-left: 0;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e3e6f0;
    border-radius: 0.35rem;
}
.no-gutters {
    display: flex;
    flex-wrap: wrap;
}
</style>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
    <?php $this->load->view('common/header'); ?>
    <div class="clearfix"></div>
    <div class="page-container">
        <?php $this->load->view('common/sidebar'); ?> 
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="row">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ORDER AMT <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 1,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">ORDER AMT <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 1,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TAX INVOICE <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TAX INVOICE <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">INCOMING PAYMENT <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">INCOMING PAYMENT <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">INCOMING PAYMENT <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 36,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">INCOMING PAYMENT <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 36,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DIRECT COST PAID <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 36,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Direct COST PAID <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 15,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DIRECT COST UNPAID <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 36,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Direct COST UNPAID <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 15,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">INDIRECT COST PAID <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 36,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">INDIRECT COST PAID <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 15,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">INDIRECT COST UNPAID <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 36,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">INDIRECT COST UNPAID <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 15,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PROFORMA INVOICE <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">PROFORMA INVOICE <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DIRECT COST PAID <br>(FY TILL DATE)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 36,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Direct COST PAID <br>(FY TILL MONTH)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 15,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DEPOSITS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 36,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">RETENTIONS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 15,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-orange-light shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange-light text-uppercase mb-1">BANK GUARANTEE IN FORCE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 15,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-orange shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange text-uppercase mb-1">LOAN ACCOUNT BALANCE</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;"><i class="fa fa-inr" style="font-weight: 400 !important;font-size: smaller;"></i> 15,00,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-inr fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-red shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-red text-uppercase mb-1">ACTIONS REQUIRED</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4">
                            <div class="card border-left-orange shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-orange text-uppercase mb-1">ACTION NOT TAKEN</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-3 mb-4" onclick="location.href = '<?php echo base_url(); ?>pending-compliance';" style="cursor:pointer;">
                            <div class="card border-left-oblue shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-oblue text-uppercase mb-1">COMPLIANCE PENDING</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="font-weight: 400 !important;font-size: smaller;">20</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('common/footer'); ?>
    <!-- END FOOTER -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets/global/plugins/jquery.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/global/plugins/uniform/jquery.uniform.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" ></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-multiselect/js/components-bootstrap-multiselect.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/jquery-validation/lib/jquery.form.js"></script>
    <!-- COMMON LEVEL js -->
    <script type="text/javascript" src="<?php echo base_url();?>/assets/global/scripts/metronic.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/admin/layout4/scripts/layout.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootbox/bootbox.min.js"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
    <script>
    jQuery(document).ready(function() {    
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo features
        // Index.init(); // init index page
        Tasks.initDashboardWidget(); // init tash dashboard widget  
    });
    </script>
</body>
</html>