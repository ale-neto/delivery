<!-- /. NAV SIDE  -->
<section class="navbar-side collapse navbar-collapse" id="navbarNav">
   <ul class="nav crunchy-navigation sidebar-menu">
   
      <!--DASHBOARD-->
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADMIN) echo 'class="active-menu"';?>  href="<?php echo SITEURL;?>"><i class="fa fa-dashboard fa-3x"></i> <?php echo get_languageword('dashboard');?> </a>
      </li>
	  
	  
      <!--MENU-->	
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_MENU) echo 'class="active-menu"';?> href="<?php echo URL_MENU_INDEX;?>"><i class="fa fa-bars fa-3x"></i> <?php echo get_languageword('menu');?> </a>
      </li>
      <!--MENU-->

	  
      <!--ITEMS-->	
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ITEMS) echo 'class="active-menu"';?> href="<?php echo URL_ITEMS_INDEX;?>"><i class="fa fa-cutlery fa-3x"></i> <?php echo get_languageword('items');?> </a>
      </li>
      <!--ITEMS-->
	  
      <!--ADD ONS-->
	  <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADDONS) echo 'class="active-menu"';?> href="<?php echo URL_ADDONS_INDEX;?>"><i class="fa fa-plus fa-3x"></i> <?php echo get_languageword('addons');?> </a>
      </li>
	  <!--ADD ONS-->

	  <!--OPTIONS-->
	  <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_OPTIONS) echo 'class="active-menu"';?> href="<?php echo URL_OPTIONS_INDEX;?>"><i class="fa fa-stack-exchange fa-3x"></i> <?php echo get_languageword('options');?> </a>
      </li>
	  <!--OPTIONS-->
	  
	  
	 <!--ITEM TYPES-->
	  <li>
         <a <?php if(isset($activemenu) && $activemenu=="item_types") echo 'class="active-menu"';?> href="<?php echo URL_ITEM_TYPES_INDEX;?>"><i class="fa fa-stack-exchange fa-3x"></i> <?php echo get_languageword('item_types');?> </a>
      </li>
	  <!--ITEM TYPES-->
	  
	  <!--OFFERS-->
	  <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_OFFERS) echo 'class="active-menu"';?> href="<?php echo URL_OFFERS_INDEX;?>"><i class="fa fa-bolt fa-3x"></i> <?php echo get_languageword('offers');?> </a>
      </li>
	  <!--OFFERS-->
	  
	  <!--USERS-->  
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_USERS) echo 'class="active-menu"';?> href="#"><i class="fa fa-users fa-3x"></i> <?php echo get_languageword('users');?> </a>
         <ul class="sidebar-submenu">
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='km_users') echo 'class="active-menu"';?> href="<?php echo URL_USERS_INDEX;?>"> <?php echo get_languageword('kitchen_managers');?> </a></li>
         </ul>
      </li>
	  <!--USERS-->  
	  
	  <!--CUSTOMERS-->
	  <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_CUSTOMERS) echo 'class="active-menu"';?> href="<?php echo URL_CUSTOMERS_INDEX;?>"><i class="fa fa-user fa-3x"></i> <?php echo get_languageword('customers');?> </a>
      </li>
	  <!--CUSTOMERS-->
	  
	  <!--ORDERS-->
	  <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ORDERS) echo 'class="active-menu"';?> href="#"><i class="fa fa-list fa-3x"></i> <?php echo get_languageword('orders');?> </a>
         <ul class="sidebar-submenu">
            <li><a <?php if (isset($actv_submenu) && $actv_submenu=='new') echo 'class="active-menu"';?> href="<?php echo URL_ORDERS_INDEX.'new';?>"> <?php echo get_languageword('new_orders');?> </a></li>
			
            <li><a <?php if (isset($actv_submenu) && $actv_submenu=='process') echo 'class="active-menu"';?> href="<?php echo URL_ORDERS_INDEX.'process';?>"> <?php echo get_languageword('under_process_orders');?> </a></li>
			
			<li><a <?php if (isset($actv_submenu) && $actv_submenu=='out_to_deliver') echo 'class="active-menu"';?> href="<?php echo URL_ORDERS_INDEX.'out_to_deliver';?>"> <?php echo get_languageword('out_to_deliver_orders');?> </a></li>
			
			<li><a <?php if (isset($actv_submenu) && $actv_submenu=='delivered') echo 'class="active-menu"';?> href="<?php echo URL_ORDERS_INDEX.'delivered';?>"> <?php echo get_languageword('delivered_orders');?> </a></li>
			
			<li><a <?php if (isset($actv_submenu) && $actv_submenu=='cancelled') echo 'class="active-menu"';?> href="<?php echo URL_ORDERS_INDEX.'cancelled';?>"> <?php echo get_languageword('cancelled_orders');?> </a></li>
         </ul>
      </li>
	  <!--ORDERS-->
	  
	  
	  
	  <!--Loyality Points-->  
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_LOYALITY_POINTS) echo 'class="active-menu"';?> href="#"><i class="fa fa-gift fa-3x"></i> <?php echo get_languageword('loyality_points');?> </a>
         <ul class="sidebar-submenu">
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='point_settings') echo 'class="active-menu"';?> href="<?php echo URL_POINTS_SETTINGS;?>"> <?php echo get_languageword('points_settings');?> </a></li>
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='reward_points') echo 'class="active-menu"';?> href="<?php echo URL_USER_REWARD_POINTS;?>"> <?php echo get_languageword('user_reward_points');?> </a></li>
         </ul>
      </li>
	  <!--Loyality Points-->  
	  
	  <!--REFERRAL SETTINGS-->  
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_REFERRAL) echo 'class="active-menu"';?> href="#"><i class="fa fa-gift fa-3x"></i> <?php echo get_languageword('referral_settings');?> </a>
         <ul class="sidebar-submenu">
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='rsettings') echo 'class="active-menu"';?> href="<?php echo URL_REFERRAL_SETTINGS;?>"> <?php echo get_languageword('referral_settings');?> </a></li>
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='rusers') echo 'class="active-menu"';?> href="<?php echo URL_REFERRAL_USERS;?>"> <?php echo get_languageword('refferal_users');?> </a></li>
         </ul>
      </li>
	  <!--REFERRAL SETTINGS-->  
	  
	  <!--Location Master-->  
      <li>
         <a <?php if(isset($activemenu) && $activemenu==ACTIVE_LOCATIONS) echo 'class="active-menu"';?> href="#"><i class="fa fa-map-marker fa-3x"></i> <?php echo get_languageword('location_master');?> </a>
         <ul class="sidebar-submenu">
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='cities') echo 'class="active-menu"';?> href="<?php echo URL_LOCATIONS_INDEX;?>"> <?php echo get_languageword('cities');?> </a></li>
            <li><a <?php if(isset($actv_submenu) && $actv_submenu=='dlocations') echo 'class="active-menu"';?> href="<?php echo URL_DELIVERY_LOCATIONS;?>"> <?php echo get_languageword('service_provide_locations');?> </a></li>
         </ul>
      </li>
	  <!--Location Master-->


	  <!--Logout-->  
      <li>
      	 <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ADMIN) echo 'class="active-menu"';?> href="<?php echo URL_AUTH_LOGOUT;?>"><i class="fa fa-square-o fa-3x"></i> <?php echo get_languageword('logout');?> </a>
      </li>
	  <!--Logout-->
	  
   </ul>
</section>
<script src="<?php echo JS_ADMIN_SIDEBAR_MENU;?>"></script>
<script>
   $.sidebarMenu($('.sidebar-menu'))
</script>