<!DOCTYPE html>
<html lang="<?php echo get_language_code(); ?>" dir="<?php echo language_type(); ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Conquerors Team">

	<meta name="keywords" content="<?php if (isset($this->config->item('seo_settings')->meta_keyword)) echo $this->config->item('seo_settings')->meta_keyword; ?>">
	<meta name="description" content="<?php if (isset($this->config->item('seo_settings')->meta_description)) echo $this->config->item('seo_settings')->meta_description; ?>">

	<link rel="icon" href="<?php echo get_fevicon(); ?>">

	<title><?php if (isset($pagetitle)) echo $pagetitle; ?> :: <?php if (isset($this->config->item('site_settings')->site_title)) echo $this->config->item('site_settings')->site_title; ?> ::</title>


	<link href="<?php echo CSS_FRONT_MAIN; ?>" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	<link href="<?php echo CSS_CHOSEN_MIN; ?>" rel="stylesheet" />

	<!-- PNOTIFY CSS-->
	<link href="<?php echo PNOTIFY_ALL_CSS; ?>" rel="stylesheet">




	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!--Slick Slider Section-->


	<script src="<?php echo JS_FRONT_JQUERY_MIN; ?>"></script>

	<!--script> <?php if (isset($this->config->item('seo_settings')->google_analytics)) echo $this->config->item('seo_settings')->google_analytics; ?> </script-->

	<style>
		html {
			scroll-behavior: smooth;
		}
	</style>

</head>
<!-- =======================NAVBAR=========================== -->

<body>
	<div class="main-wrapper">

		<div class="navbar-wrapper">
			<!--Food Court Navbar Section-->
			<nav class="navbar navbar-static-top ct-navbar-statictop navbar-secondary">
				<div class="container">
					<div class="row">
						<div class="ct-logo">
							<div class="navbar-header ct-toggle2">
								<div class="navbar-toggle offcanvas-toggle">
									
									<li class="hidden-xs">
										<a class="nav-cart" href="<?php echo URL_CART_INDEX; ?>"><span>
										    <span class="icon-marmita icon-marmita--bag"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 23"><style>.st0{fill-rule:evenodd;clip-rule:evenodd}</style><path class="st0" d="M8.7.2c-1.1 0-2 .3-2.6.9-.6.6-1 1.4-1.2 2.2-.2.6-.3 1.1-.3 1.7H2C.9 5 0 5.9 0 7l.1 13c0 1.7 1.3 3 3 3H15c1.7 0 3-1.3 3-3V7c0-1.1-.9-2-2-2h-3.2c-.1-.6-.1-1.1-.3-1.6-.2-.8-.6-1.7-1.2-2.2-.7-.6-1.5-1-2.6-1zm2.7 6.3v2.6c0 .4.3.7.8.7.4 0 .7-.3.7-.8v-.8-1.8H16c.3 0 .5.2.5.5l-.1 13c0 .8-.7 1.5-1.5 1.5H3.1c-.8 0-1.5-.7-1.5-1.5L1.5 7c0-.3.2-.5.5-.5h2.5v2.6c0 .4.3.8.7.8.4 0 .8-.4.8-.8v-.8-1.8h5.4zM11.3 5c0-.4-.1-.8-.2-1.2-.2-.7-.4-1.2-.8-1.5-.4-.3-.8-.5-1.6-.5s-1.3.2-1.6.5c-.4.3-.6.8-.8 1.5-.1.4-.2.8-.2 1.2h5.2z"></path></svg></span>
												<span id="items_cnt" class="fc-count"><?php echo count($this->cart->contents()); ?></span>

											</span> </a>

									</li>
								</div>

								<a class="navbar-brand" href="<?php echo SITEURL; ?>"><img class="img-responsive flogo" src="<?php echo get_second_site_logo(); ?>" alt="FoodCourt">
								</a>
							</div>
						</div>
						<div class="ct-navbar">
							<div class="navbar-offcanvas navbar-offcanvas-touch navbar-right" id="ct-bootstrap-offcanvas">
								<ul class="nav navbar-nav ct-list">

									<li><a href="<?php echo URL_MENU; ?>"><i class="pe-7s-home" style="display:block;"></i><?php echo get_languageword('menu'); ?></a></li>


								<li>
					<a href="<?php echo URL_USER_MY_ORDERS; ?>"><i class="pe-7s-note2" style="display:block;"></i>Pedidos</a>
				</li>

									<?php if (!$this->ion_auth->logged_in()) :
										$login_popup = 'login';
									?>
										<li><a class="btn btn nav-btn" href="javascript:void(0);" onclick="show_popup('<?php echo $login_popup; ?>')"><?php echo get_languageword('login'); ?></a></li>

									<?php else : ?>
										<li class="dropdown">

											<a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown"><img src="<?php echo get_user_image(); ?>" class="nav-profile-img" alt="Your Account"><?php echo get_languageword('my_account'); ?>

												<span class="fa fa-angle-up"></span></a>

											<ul class="dropdown-menu">

												<li><a href="<?php echo URL_USER_PROFILE; ?>"><i class="pe pe-7s-user"></i> <?php echo get_languageword('my_profile'); ?></a></li>

												<li><a href="<?php echo URL_USER_MY_ORDERS; ?>"><i class="pe pe-7s-box1"></i><?php echo get_languageword('my_orders'); ?></a></li>

												<li><a href="<?php echo URL_USER_MY_POINTS; ?>"><i class="pe pe-7s-wallet"></i><?php echo get_languageword('my_points'); ?></a></li>


												<li role="separator" class="divider"></li>
												<li><a href="<?php echo URL_AUTH_LOGOUT; ?>"><i class="pe pe-7s-next-2"></i><?php echo get_languageword('logout'); ?></a></li>

											</ul>
										</li>
									<?php endif; ?>



				<li  class="hidden-xs" style="margin-top: -5px;">
				    <a href="<?php echo URL_CART_INDEX; ?>"><span class='icon-car'><span class="icon-marmita icon-marmita--bag" style="height: 16px !important; width: 16px; " ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 23"><style>.st0{fill-rule:evenodd;clip-rule:evenodd}</style><path class="st0" d="M8.7.2c-1.1 0-2 .3-2.6.9-.6.6-1 1.4-1.2 2.2-.2.6-.3 1.1-.3 1.7H2C.9 5 0 5.9 0 7l.1 13c0 1.7 1.3 3 3 3H15c1.7 0 3-1.3 3-3V7c0-1.1-.9-2-2-2h-3.2c-.1-.6-.1-1.1-.3-1.6-.2-.8-.6-1.7-1.2-2.2-.7-.6-1.5-1-2.6-1zm2.7 6.3v2.6c0 .4.3.7.8.7.4 0 .7-.3.7-.8v-.8-1.8H16c.3 0 .5.2.5.5l-.1 13c0 .8-.7 1.5-1.5 1.5H3.1c-.8 0-1.5-.7-1.5-1.5L1.5 7c0-.3.2-.5.5-.5h2.5v2.6c0 .4.3.8.7.8.4 0 .8-.4.8-.8v-.8-1.8h5.4zM11.3 5c0-.4-.1-.8-.2-1.2-.2-.7-.4-1.2-.8-1.5-.4-.3-.8-.5-1.6-.5s-1.3.2-1.6.5c-.4.3-.6.8-.8 1.5-.1.4-.2.8-.2 1.2h5.2z"></path></svg></span>
						<span id="items_cnt" class="fc-count-new"><?php echo count($this->cart->contents()); ?></span></span>Sacola </a>

					</li>


								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		
			<div class="menu-footer" id="menu-footer">
			<ul class='menu-footer-ul'>
				<li class='menu-footer-li'>
					<a href="<?php echo URL_MENU; ?>"><i class="pe-7s-home" style="display:block;"></i> <?php echo get_languageword('menu'); ?></a>
				</li>
				<li class='menu-footer-li'>
					<a href="<?php echo URL_USER_MY_ORDERS; ?>"><i class="pe-7s-note2" style="display:block;"></i>Pedidos</a>
				</li>
				<?php if (!$this->ion_auth->logged_in()) :
					$login_popup = 'login';
				?>
					<li class='menu-footer-li'>
					<a href="javascript:void(0);" onclick="show_popup('<?php echo $login_popup; ?>')"><i class="pe-7s-user" style="display:block;" aria-hidden="true"></i><?php echo get_languageword('login'); ?></a>
					</li>
				<?php else : ?>
					<li id="menu-footer-li" class="dropdown" >
						<a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown"><img src="<?php echo get_user_image(); ?>" class="nav-profile-img" alt="Your Account"><?php echo get_languageword('my_account'); ?>
							<span class="fa fa-angle-down"></span>
						</a>

						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo URL_USER_PROFILE; ?>"><i class="pe pe-7s-user"></i> <?php echo get_languageword('my_profile'); ?></a>
							</li>
							<li>
								<a href="<?php echo URL_USER_MY_ORDERS; ?>"><i class="pe pe-7s-box1"></i><?php echo get_languageword('my_orders'); ?></a>
							</li>
							<li>
								<a href="<?php echo URL_USER_MY_POINTS; ?>"><i class="pe pe-7s-wallet"></i><?php echo get_languageword('my_points'); ?></a>
							</li>
							<li role="separator" class="divider"></li>
							<li>
								<a href="<?php echo URL_AUTH_LOGOUT; ?>"><i class="pe pe-7s-next-2"></i><?php echo get_languageword('logout'); ?></a>
							</li>
						</ul>
					</li>
				<?php endif; ?>
				<li class='menu-footer-li'>
				    <a href="<?php echo URL_CART_INDEX; ?>"><span class='icon-car'><span class="icon-marmita icon-marmita--bag" style="height: 16px !important; width: 16px;right: 16px;" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 23"><style>.st0{fill-rule:evenodd;clip-rule:evenodd}</style><path class="st0" d="M8.7.2c-1.1 0-2 .3-2.6.9-.6.6-1 1.4-1.2 2.2-.2.6-.3 1.1-.3 1.7H2C.9 5 0 5.9 0 7l.1 13c0 1.7 1.3 3 3 3H15c1.7 0 3-1.3 3-3V7c0-1.1-.9-2-2-2h-3.2c-.1-.6-.1-1.1-.3-1.6-.2-.8-.6-1.7-1.2-2.2-.7-.6-1.5-1-2.6-1zm2.7 6.3v2.6c0 .4.3.7.8.7.4 0 .7-.3.7-.8v-.8-1.8H16c.3 0 .5.2.5.5l-.1 13c0 .8-.7 1.5-1.5 1.5H3.1c-.8 0-1.5-.7-1.5-1.5L1.5 7c0-.3.2-.5.5-.5h2.5v2.6c0 .4.3.8.7.8.4 0 .8-.4.8-.8v-.8-1.8h5.4zM11.3 5c0-.4-.1-.8-.2-1.2-.2-.7-.4-1.2-.8-1.5-.4-.3-.8-.5-1.6-.5s-1.3.2-1.6.5c-.4.3-.6.8-.8 1.5-.1.4-.2.8-.2 1.2h5.2z"></path></svg></span>
						<!--  <span id="items_cnt" class="fc-count-new"><?php echo count($this->cart->contents()); ?></span>--> </span>Sacola </a>

					</li>
					
			</ul>
		</div>

		<style>
		.menu-footer{
		    display: none;
		}
		@media (max-width: 765px){

			.menu-footer {
				position: fixed;
				bottom: 0;
				height: 50px;
				display: flex;
				justify-content: space-around;
				background: #4c0100;
				left: 0;
				right: 0;
				box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.24);
				z-index: 10000;
			}

			.menu-footer-ul {
				padding: 0px;
				margin: 0px;
				list-style: none;
				width: 100%;
			}

			.menu-footer-li {
				list-style: none;
                display: inline-block;
                width: calc(120% / 5);
                height: 120px;
                text-align: center;
			}
			
			#menu-footer-li {
				list-style: none;
                display: inline-block;
                width: calc(120% / 5);
                height: 120px;
                text-align: center;
			}

			#menu-footer ul li a {
				padding: 2px 8px;
				display: inline-block;

				/* visual do link */
				color: #fff;
				text-decoration: none;
			}
			.fc-count-new{
                position: relative;
                top: -9px;
                color: #fff;
                width: 20px;
                height: 20px;
                text-align: center;
                font-size: 12px;
                font-weight: 500;
			}
			.icon-car{
			    display: list-item;
			    text-align: center;
			}
			.tab-bar {
  position: fixed;
  bottom: 0;
  height: 50px;
  display: flex;
  justify-content: space-around;
  background: #fff;
  left: 0;
  right: 0;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.24);
  z-index: 10000; }
  .tab-bar--with-home-button {
    height: 70px;
    padding-bottom: 20px; }
    @media only screen and (min-width: 960px) {
        .tab-bar {
            display: none; 
        } 
    }
    .tab-bar .tab-bar-item {
        position: relative;
        overflow: hidden;
        padding: 8px 0;
        width: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: #3f3e3e;
        text-decoration: none;
        border: none;
        background: none; 
    }
    .tab-bar .tab-bar-item__badge {
        background: #ea1d2c;
        border-radius: 10px;
        position: absolute;
        color: #fff;
        font-size: 0.5rem;
        line-height: 0.5rem;
        height: 16px;
        top: 2px;
        -webkit-transform: translateX(8px);
        transform: translateX(8px);
        z-index: 1;
        min-width: 16px;
        border: 2px solid #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
         padding: 1px 3px 0 3px; 
    }
    .tab-bar .tab-bar-item__icon {
      position: relative; 
    }
    .tab-bar .tab-bar-item__icon .icon-marmita {
        width: 21px; 
    }
    .tab-bar .tab-bar-item__icon .icon-marmita svg {
        color: #3f3e3e; 
    }
    .tab-bar .tab-bar-item--has-notifications {
        position: absolute;
        right: 19px;
        top: 0; 
    }
    .tab-bar .tab-bar-item canvas {
      z-index: 1; 
    }
    .tab-bar .tab-bar-item__title {
        color: #3e3e3e;
        font-weight: 300;
        font-size: 0.75rem;
        line-height: 0.875rem; 
    }
    .tab-bar .tab-bar-item__title--active {
        font-weight: 500; 
    }
    .cart-bar__container > span {
        display: table;
        vertical-align: baseline; 
    }
    .cart-bar__bag {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative; 
    }
    .cart-bar__bag .icon-marmita {
        height: 21px;
        width: 21px; 
    }
    .cart-bar__bag .icon-marmita svg {
        fill: #ffffff; 
    }
    .icon-marmita svg {
        fill: #ffffff;
        padding: 0px 5px;
        padding-top: 5px;
    }

    .icon-marmita {
        height: 21px;
        width: 21px;
        right: 8px;
        display: inline-block;
        position: relative;
        color: #ffffff;
    }
        
}
		
	.icon-car {
		display: list-item;
		text-align: right;
	}
	.icon-marmita svg {
        fill: #ffffff;
        padding: 0px 5px;
        padding-top: 5px;
    }
    .icon-marmita {
        height: 21px;
        width: 21px;
        right: 8px;
        display: inline-block;
        position: relative;
        color: #ffffff;
    }
    .fc-count-new{
        position: relative;
        top: -9px;
        color: #fff;
        width: 20px;
        height: 20px;
        text-align: center;
        font-size: 16px;
        font-weight: 500;
	}
		</style>