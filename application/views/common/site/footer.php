
<?php ?>
<footer class="ct-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
               
                <img class="img-responsive footer-logo" src="<?php echo get_second_site_logo();?>" alt="FoodCourt">
                

                <div class="ct-social">
                    <?php if(isset($this->config->item('social_networks')->facebook) && $this->config->item('social_networks')->facebook != '') { ?>
                    <a href="<?php echo $this->config->item('social_networks')->facebook;?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    
                    <?php } if(isset($this->config->item('social_networks')->instagram) && $this->config->item('social_networks')->instagram != '') {?>
                    <a href="<?php echo $this->config->item('social_networks')->instagram;?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    
                    
                
                    <?php } ?>
                </div>
            </div>
            <?php $accepted_cards = get_accepted_cards(); 
                    $clg = 3;
                if(!empty($accepted_cards)) {
                    $clg = 2;
            ?>
            
        <?php } ?>
            <div class="col-lg-<?php echo $clg; ?> col-md-4 col-sm-6 col-xs-6">
               
                
            </div>
            <div class="col-lg-<?php echo $clg; ?> col-md-4 col-sm-6 col-xs-6">
                
                <?php 
                $cms_pages = get_pages();
                if (!empty($cms_pages)) {
                ?>

                <h4 class="footer-head"><?php echo get_languageword('our_links');?></h4>
                <ul class="cs-footer-links">
					<?php if (in_array('about-us', $cms_pages)) { ?>
                    <li><a href="<?php echo URL_ABOUT_US;?>"><?php echo get_languageword('about_us');?></a>
                    </li>
                    <?php } if (in_array('how-it-works', $cms_pages)) { ?>

                    <li><a href="<?php echo URL_HOW_IT_WORKS;?>"><?php echo get_languageword('how_it_works');?></a>
                    </li>
                    <?php }  if (in_array('terms-conditions', $cms_pages)) { ?>

                    <li><a href="<?php echo URL_TERMS_CONDITIONS;?>"><?php echo get_languageword('terms_conditions');?></a>
                    </li>
                    <?php } if (in_array('privacy-policy', $cms_pages)) { ?>

                    <li><a href="<?php echo URL_PRIVACY_POLICY;?>"><?php echo get_languageword('privacy_policy');?></a>
                    </li>
                      <?php } ?>
                    
                </ul>

                <?php } ?>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="media cs-media">
                    <div class="media-left ct-icon-font">
                        <a href="<?php echo URL_CONTACT_US;?>"></a>
                    </div>
                    <div class="media-body ct-media-bodys">
                        <h4 class="media-heading"><?php echo get_languageword('opening_time');?></h4>
                        <p> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php if(isset($this->config->item('site_settings')->from_time)) echo $this->config->item('site_settings')->from_time;?> - <?php if(isset($this->config->item('site_settings')->to_time)) echo $this->config->item('site_settings')->to_time;?></p>
                    </div>
                </div>
                <div class="media cs-media">
                    <div class="media-left ct-icon-font">
                        <a href="<?php echo URL_CONTACT_US;?>"></a>
                    </div>
                    <div class="media-body ct-media-bodys">
                        <h4 class="media-heading"><?php echo get_languageword('call_us');?></h4>
                        <p><?php if(isset($this->config->item('site_settings')->land_line)) echo $this->config->item('site_settings')->land_line;?></p>
                    </div>
                </div>
                
                <!-- ANDROID LINK
                <div class="media cs-media">
                    <div class="media-left ct-icon-font">
                         <a href="<?php if(isset($this->config->item('site_settings')->android_url)) echo $this->config->item('site_settings')->android_url;?>" target="_blank"> 
                           <i class="fa fa-android" aria-hidden="true"></i>

                         </a>
                    </div>
                    <div class="media-body ct-media-bodys">
                        <h4><?php echo get_languageword('For Android'); ?></h4>
                        <p><?php echo get_languageword('Visit Playstore Store'); ?></p>
                    </div>
                </div>
                
                -->
                
                <!-- IOS LINK
                
                <div class="media cs-media">
                    <div class="media-left ct-icon-font">
                         <a href="<?php if(isset($this->config->item('site_settings')->ios_url)) echo $this->config->item('site_settings')->ios_url;?>" target="_blank">
                           <i class="fa fa-apple" aria-hidden="true"></i>

                         </a>
                    </div>
                    <div class="media-body ct-media-bodys">
                        <h4><?php echo get_languageword('For IOS'); ?></h4>
                        <p><?php echo get_languageword('Visit Apple Store'); ?></p>
                    </div>
                </div>
                
                -->
               

            </div>
        </div>

         </div>
      </footer>

      <section class="ct-subfoot">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                     <div class="copy-text"><h4>Plataforma desenvolvida por:</h4>
                    <img class="logo-tagmenu" src="/uploads/logo/tagmenu_branca.png"></img>
                </div>
                
				<div class="col-sm-6 hidden-xs">
                    <ul class="copyright-links">
                        <?php if(!$this->ion_auth->logged_in()) {?>

                        
                        <?php } ?>
                    </ul>
                </div>
				
            </div>
       </div>
    </section>
</div>

<!--  Bootstrap core JavaScript
    ============================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!--script src="<?php //echo JS_FRONT_JQUERY_MIN;?>"></script-->

<?php $this->load->view('common/popup_script');?>



<script src="<?php echo JS_FRONT_BOOTSTRAP_MIN;?>"></script>
<script src="<?php echo JS_FRONT_SEARCH_BOX;?>"></script>
<script src="<?php echo JS_FRONT_BOOTSTRAP_OFFCANVAS;?>"></script>


<!--CHOSEN JS-->
<script type="text/javascript" src="<?php echo JS_CHOSEN_JQUERY_MIN;?>"></script>

<!--PNOTIFY JS-->
<script type="text/javascript" src="<?php echo PNOTIFY_MIN_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_ANIMATE_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_BUTTON_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_CALLBACK_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_CONFIRM_JS;?>"></script>
<script type="text/javascript" src="<?php echo PNOTIFY_DESKTOP_JS;?>"></script>

<script src="<?php echo JS_FRONT;?>ResizeSensor.min.js" type="text/javascript"></script>
<script src="<?php echo JS_FRONT;?>theia-sticky-sidebar.min.js" type="text/javascript"></script>


<script>
jQuery(document).ready(function() {
    jQuery('#item-sidebar').theiaStickySidebar({
        additionalMarginTop: 30
    });

    
/*addEventListener(document, "touchstart", function(e) {
    console.log(e.defaultPrevented);  // will be false
    e.preventDefault();   // does nothing since the listener is passive
    console.log(e.defaultPrevented);  // still false
}, Modernizr.passiveeventlisteners ? {passive: true} : false);
*/

});
</script>

<script>
$(document).ready(function() {
    $(".chzn-select").chosen();
});


function photo(input,name)
{
	if (input.files && input.files[0]) 
	{
		var reader = new FileReader();
		reader.onload = function (e) 
		{
			input.style.width = '50%';
			$('#'+name+'').attr('src', e.target.result);
			$('#'+name+'').fadeIn();
		};
		reader.readAsDataURL(input.files[0]);
	}
}

function checkNotify(title,text,type)
{
    var notification = new PNotify({
        title: title,
        text: text,
        type: type
    });

    notification.open();
}
</script>
<style>
    .logo-tagmenu {
        width: 80px;
        height: auto;
        
    }
    
    
</style>



<script src="<?php echo JS_FUNCTIONS;?>"></script>
<script>
var add_cart_target_url = '<?php echo base_url();?>cart/add_cart_item';

var update_cart_target_url = '<?php echo base_url();?>cart/update_cart_item';

var remove_cart_target_url = '<?php echo base_url();?>cart/remove_cart_item';

var currency_symbol = '<?php echo $this->config->item('site_settings')->site_title;?>';
</script>

</body>
</html>
