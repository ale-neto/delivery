<!-- /. NAV SIDE  -->
<section class="navbar-side">
   <ul class="nav crunchy-navigation sidebar-menu">
   
      <!--DASHBOARD-->
      <li>
         <a <?php if(isset($activemenu) && $activemenu=='dm_dashboard') echo 'class="active-menu"';?>  href="<?php echo SITEURL;?>"><i class="fa fa-dashboard fa-3x"></i> <?php echo get_languageword('dashboard');?> </a>
      </li>
	  
	  
	  
	  <!--Language Settings-->  
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_LANGAUGE) echo 'class="active-menu"';?> href="#"><i class="fa fa-language fa-3x"></i> <?php echo get_languageword('language_settings');?> </a>
         <ul class="sidebar-submenu">
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='languages') echo 'class="active-menu"';?> href="<?php echo URL_LANGUAGE_INDEX;?>"> <?php echo get_languageword('languages');?> </a></li>
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='phrases') echo 'class="active-menu"';?> href="<?php echo URL_LANGUAGE_PHRASES;?>"> <?php echo get_languageword('phrases');?> </a></li>
         </ul>
      </li>
	  <!--Language Settings-->  
	  
	  
	  
	 <!--Master Settings-->  
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_MASTER_SETTINGS) echo 'class="active-menu"';?> href="#"><i class="fa fa-qrcode fa-3x"></i> <?php echo get_languageword('master_settings');?> </a>
         <ul class="sidebar-submenu">
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='site_settings') echo 'class="active-menu"';?> href="<?php echo URL_SITE_SETTINGS;?>"> <?php echo get_languageword('site_settings');?> </a></li>
			
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='paypal_settings') echo 'class="active-menu"';?> href="<?php echo URL_PAYPAL_SETTINGS;?>"> <?php echo get_languageword('paypal_settings');?> </a></li>
			
		    <li><a <?php if(isset($actv_submenu) && $actv_submenu=='email_settings') echo 'class="active-menu"';?> href="<?php echo URL_EMAIL_SETTINGS;?>"> <?php echo get_languageword('email_settings');?> </a></li>
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='social_networks') echo 'class="active-menu"';?> href="<?php echo URL_SOCIAL_NETWORKS;?>"> <?php echo get_languageword('social_networks');?> </a></li>
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='seo_settings') echo 'class="active-menu"';?> href="<?php echo URL_SEO_SETTINGS;?>"> <?php echo get_languageword('seo_settings');?> </a></li>
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='email_templates') echo 'class="active-menu"';?> href="<?php echo URL_EMAIL_TEMPLATES;?>"> <?php echo get_languageword('email_templates');?> </a></li>
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='sms_gateways') echo 'class="active-menu"';?> href="<?php echo URL_SMS_GATEWAYS;?>"> <?php echo get_languageword('sms_gateways');?> </a></li>
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='sms_templates') echo 'class="active-menu"';?> href="<?php echo URL_SMS_TEMPLATES;?>"> <?php echo get_languageword('sms_templates');?> </a></li>
			
			<!--li><a <?php //if(isset($actv_submenu) && $actv_submenu=='push_notification') echo 'class="active-menu"';?> href="<?php //echo URL_PUSH_NOTIFICATION_SETTINGS;?>"> <?php //echo get_languageword('push_notification_settings');?> </a></li-->
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='pusher_notification') echo 'class="active-menu"';?> href="<?php echo URL_PUSHER_NOTIFICATION_SETTINGS;?>"> <?php echo get_languageword('pusher_notification_settings');?> </a></li>
			
			<!--li><a <?php //if(isset($actv_submenu) && $actv_submenu=='app_settings') echo 'class="active-menu"';?> href="<?php //echo URL_APP_SETTINGS;?>"> <?php //echo get_languageword('app_settings');?> </a></li-->
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='tinify_settings') echo 'class="active-menu"';?> href="<?php echo URL_TINIFY_SETTINGS;?>"> <?php echo get_languageword('tinify_settings');?> </a></li>
			
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu==ACTIVE_CARDS) echo 'class="active-menu"';?> href="<?php echo URL_CARDS_INDEX;?>"> <?php echo get_languageword('stripe_cards');?> </a></li>
			
         </ul>
      </li>
	  <!--Master Settings-->  	  
	  
	  
	  
	 <!--Reports-->  
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_REPORTS) echo 'class="active-menu"';?> href="#"><i class="fa fa-bar-chart fa-3x"></i> <?php echo get_languageword('reports');?> </a>
         <ul class="sidebar-submenu">
		 
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='date_wise') echo 'class="active-menu"';?> href="<?php echo URL_REPORTS_INDEX;?>"> <?php echo get_languageword('date_wise_reports');?> </a></li>
			
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='customer_wise') echo 'class="active-menu"';?> href="<?php echo URL_REPORTS_CLIENT_WISE;?>"> <?php echo get_languageword('customer_wise_reports');?> </a></li>
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='location_wise') echo 'class="active-menu"';?> href="<?php echo URL_REPORTS_LOCATION_WISE;?>"> <?php echo get_languageword('location_wise_reports');?> </a></li>
			
			<li><a <?php if(isset($actv_submenu) && $actv_submenu=='item_wise') echo 'class="active-menu"';?> href="<?php echo URL_REPORTS_ITEM_WISE;?>"> <?php echo get_languageword('item_wise_reports');?> </a></li>
         </ul>
      </li>
	  <!--Reports-->
	  
	  
      <!--Pages-->
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_PAGES) echo 'class="active-menu"';?> href="<?php echo URL_PAGES_INDEX;?>"><i class="fa fa-square-o fa-3x"></i> <?php echo get_languageword('pages');?> </a>
      </li>
      <!--Pages-->  
	  
	   
	 <!--FAQS-->  
      <li>
         <a <?php if(isset($activemenu) && $activemenu=='faqs_menu') echo 'class="active-menu"';?> href="#"><i class="fa fa-question fa-3x"></i> <?php echo get_languageword('faqs');?> </a>
         <ul class="sidebar-submenu">
		 
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='faqs_categories') echo 'class="active-menu"';?> href="<?php echo URL_FAQS_CATEGORIES_INDEX;?>"> <?php echo get_languageword('faqs_categories');?> </a></li>
			
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='faqs') echo 'class="active-menu"';?> href="<?php echo URL_FAQS_INDEX;?>"> <?php echo get_languageword('faqs');?> </a></li>
			
         </ul>
      </li>
	  <!--FAQS-->

   </ul>
</section>
<script src="<?php echo JS_ADMIN_SIDEBAR_MENU;?>"></script>
<script>
   $.sidebarMenu($('.sidebar-menu'))
</script>