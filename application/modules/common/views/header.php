<?php if($this->authentication->chk_login()==false){ redirect('login'); } ?>
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <div class="page-header-inner">
        <div class="page-logo">
            <img src="<?php echo base_url(); ?>uploads/images/logo2.png" alt="logo" class="logo-default" style="width:150px;">
            <div class="menu-toggler sidebar-toggler"></div>
        </div>
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <div class="page-top">
            <?php
            $this->load->model('common_model');
        	$notification_data = $this->common_model->NotReadNotification();
        	$reminder_data = $this->common_model->NotReadReminder();
        	date_default_timezone_set('Asia/Kolkata');
        	?>
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide">
                    </li>
                    <li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-original-title="Reminder" title="Reminder">
						<i class="fa fa-calendar"></i>
						<span class="badge badge-default"><?php echo (isset($reminder_data) && !empty($reminder_data))?count($reminder_data):'0'; ?></span>
						</a>
						<ul class="dropdown-menu">
							<?php if(isset($reminder_data) && !empty($reminder_data)){ ?>
    							<li class="external">
    								<h3>You have <strong><?php echo (isset($reminder_data) && !empty($reminder_data))?count($reminder_data):'0'; ?> pending</strong> Reminder</h3>
    								<a href="<?php echo base_url(); ?>view-all-reminder/<?php echo base64_encode(0); ?>">view all</a>
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
    								<a href="<?php echo base_url(); ?>view-all-reminder/<?php echo base64_encode(0); ?>">view all</a>
    							</li>
							<?php } ?>
						</ul>
					</li>
					<li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" data-original-title="Notification" title="Notification">
						<i class="icon-bell"></i>
						<span class="badge badge-default"><?php echo (isset($notification_data) && !empty($notification_data))?count($notification_data):'0'; ?></span>
						</a>
						<ul class="dropdown-menu">
							<?php if(isset($notification_data) && !empty($notification_data)){ ?>
    							<li class="external">
    								<h3>You have <strong><?php echo (isset($notification_data) && !empty($notification_data))?count($notification_data):'0'; ?> pending</strong> Notification</h3>
    								<a href="<?php echo base_url(); ?>view-all-notification/<?php echo base64_encode(0); ?>">view all</a>
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
    								<a href="<?php echo base_url(); ?>view-all-notification/<?php echo base64_encode(0); ?>">view all</a>
    							</li>
							<?php } ?>
						</ul>
					</li>
					<li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span class="username username-hide-on-mobile">
                        <?php $username = $this->session->userdata('username'); 
                        echo ucwords($username); ?></span>
                        <img alt="" class="img-circle" src="<?php echo base_url(); ?>assets/admin/layout4/img/default.png"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="<?php echo base_url(); ?>logout">
                                <i class=" icon-arrow-right"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>