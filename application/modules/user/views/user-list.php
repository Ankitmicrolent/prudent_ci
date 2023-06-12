<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <title>User List | <?php echo project_name; ?> </title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/global/css/components-rounded.css?<?php echo date('Y-m-d H:i:s'); ?>" id="style_components" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/admin/layout4/css/layout.css?<?php echo date('Y-m-d H:i:s'); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>/assets/admin/layout4/css/light.css?<?php echo date('Y-m-d H:i:s'); ?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url(); ?>assets/site/css/validationEngine.jquery.css" rel="stylesheet">

</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo ">

    <?php $this->load->view('common/header'); ?>

    <div class="clearfix">

    </div>

    <div class="page-container">

        <?php $this->load->view('common/sidebar'); ?>

        <div class="page-content-wrapper">

            <div class="page-content">

                <div class="portlet-body">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="portlet light">

                                <div class="portlet-title">

                                    <div class="caption font-blue">

                                        <i class="fa fa-bars font-blue"></i>

                                        <span class="caption-subject bold uppercase"> Team Member List</span>

                                    </div>

                                    <div class="actions tools">

                                        <a href="<?php echo base_url(); ?>add-user" class="btn blue btn-sm" style="height:28px ;"><i class="fa fa-plus-circle "></i> ADD NEW TEAM MEMBER</a>



                                    </div>

                                </div>

                                <div class="portlet-body form">

                                    <table class="table table-striped table-bordered table-hover masterTable">

                                        <thead>

                                            <tr>

                                                <th class="font-blue-madison bold" style="width:8%;"> Sr.No </th>

                                                <th class="font-blue-madison bold"> Full Name </th>

                                                <th class="font-blue-madison bold"> Contact Details </th>

                                                <th class="font-blue-madison bold"> Address </th>

                                                <th class="font-blue-madison bold"> Role </th>

                                                <th class="font-blue-madison bold"> Designation </th>

                                                <th class="font-blue-madison bold" style="text-align: center;"> Action </th>

                                            </tr>

                                        </thead>

                                        <tbody>

                                            <?php if (isset($user_data) && !empty($user_data)) {
                                                $i = 1;

                                                foreach ($user_data as $key) { ?>

                                                    <tr>

                                                        <td><?php echo $i++; ?></td>

                                                        <td>
                                                            <?php echo (isset($key->fullname) && !empty($key->fullname)) ? $key->fullname : ''; ?>
                                                            <?php echo (isset($key->m_name) && !empty($key->m_name)) ? $key->m_name : ''; ?>
                                                            <?php echo (isset($key->s_name) && !empty($key->s_name)) ? $key->s_name : ''; ?>

                                                        </td>

                                                        <td>

                                                            <b>Email : </b><?php echo (isset($key->email) && !empty($key->email)) ? $key->email : ''; ?><br>

                                                            <b>Mobile No. : </b><?php echo (isset($key->mobile) && !empty($key->mobile)) ? $key->mobile : ''; ?>

                                                        </td>

                                                        <td><?php echo (isset($key->address) && !empty($key->address)) ? $key->address : ''; ?></td>

                                                        <td><?php echo (isset($key->role_name) && !empty($key->role_name)) ? $key->role_name : ''; ?></td>

                                                        <td><?php echo (isset($key->role_name) && !empty($key->role_name)) ? $key->role_name : ''; ?></td>

                                                        <td style="text-align: center; vertical-align: middle;">

                                                            <?php if ($key->user_status == 'Active') { ?>

                                                                <span style="cursor: pointer;" class="tooltips status_change btn btn-xs btn-success" rel="<?php echo (isset($key->user_id) && !empty($key->user_id)) ? $key->user_id : ''; ?>" data-title="Block User" rev="block_user_status"> Active

                                                                </span>

                                                            <?php } else { ?>

                                                                <span style="cursor: pointer;" class="tooltips status_change btn btn-xs btn-danger" rel="<?php echo (isset($key->user_id) && !empty($key->user_id)) ? $key->user_id : ''; ?>" data-title="Active User" rev="active_user_status">

                                                                    Block

                                                                </span>

                                                            <?php } ?>

                                                            <a href="javascript:;" class="edit tooltips editRecord" rel="<?php echo (isset($key->user_id) && !empty($key->user_id)) ? $key->user_id : ''; ?>" title="Edit User" rev="edit_user"><i class="fa fa-edit" style="color:#3598dc; font-size:15px;"></i></a>&nbsp;

                                                            <a href="javascript:;" class="delete tooltips deleteRecord" rel="<?php echo (isset($key->user_id) && !empty($key->user_id)) ? $key->user_id : ''; ?>" title="Delete User" rev="delete_user"><i class="fa fa-trash-o" style="color:#a94442; font-size: 15px;"></i></a>

                                                        </td>

                                                    </tr>

                                            <?php }
                                            } ?>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php $this->load->view('common/footer'); ?>

    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/select2/select2.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/admin/pages/scripts/components-pickers.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/datatables/table-advanced.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/bootbox/bootbox.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/js/additional-methods.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/global/plugins/jquery-validation/lib/jquery.form.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/site/js/jquery.validationEngine.js"></script>

    <script src="<?php echo base_url(); ?>assets/site/js/jquery.validationEngine-en.js"></script>

    <script src="<?php echo base_url(); ?>js/common.js" type="text/javascript"></script>
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