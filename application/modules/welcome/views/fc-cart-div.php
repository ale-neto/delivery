
			<div>
			<?php 
			$this->load->library(array('session','cart'));
		
			$currency_symbol = $this->config->item('site_settings')->currency_symbol;
			$cart_total=0;
			
			if (count($this->cart->contents())>0) { ?>
			
      		<div class="cs-card-content card-items-list">
			
      			<ul class="list-left-right">
				
				<?php foreach ($this->cart->contents() as $items) { 
				
				$cart_total += $items['subtotal'];
				if (isset($items['options']['extra_costs_total'])) {
					$cart_total += $items['options']['extra_costs_total'];
				}
				?>
				
				
      				<li class="clearfix">
      					<div class="list-left">
      						<div class="cart-item-title"><?php echo $items['name'];?></div>
							
							<?php 
							if ((isset($items['options']['addons_cost_per_item']) || isset($items['options']['item_option_name'])) && $items['options']['is_offer'] == 0) { ?>
							
      						<div class="cart-item-cutomize mt-08">
							<a href="javascript:void(0);" class="btn-cutomize" href="javascript:void(0);" onclick="get_cart_itm_adns_options('<?php echo $items['id'];?>')"><?php echo get_languageword('customize');?></a>
							</div>
							
							<?php } else if ($items['options']['is_offer'] == 1) { ?>
							
							<div class="cart-item-cutomize mt-08">
							<a href="javascript:void(0);" onclick="get_offer_popup('<?php echo $items['id'];?>','cart')" class="btn-cutomize"><?php echo get_languageword('view');?></a>
							</div>
							
							<?php } ?>
							
							
      					</div>
						
						<?php 
						$itm_total=$items['subtotal'];
						if (isset($items['options']['extra_costs_total'])) 
							$itm_total += $items['options']['extra_costs_total'];
						
						?>
      					<div class="list-right">
      						<div class="card-item-price"><?php echo $currency_symbol;?><span><?php echo $itm_total;?></span></div>
							
      						<div class="card-item-actions mt-08">
      							<i class="pe-7s-less" onclick="update_qty('<?php echo $items['rowid'];?>','decr')"></i><span><?php echo $items['qty'];?></span><i class="pe-7s-plus" onclick="update_qty('<?php echo $items['rowid'];?>','incr')"></i>
      						</div>
							
      					</div>
      				</li>
					
			  
				<?php } ?>
			  
			  
      			</ul>
				
			
				
      		</div>
			
      		<div class="cs-card-content">
      			<ul class="list-left-right cart-total-details">
      				<li class="clearfix">
      					<div class="list-left"><?php echo get_languageword('total');?></div>
      					<div class="list-right"><?php echo $currency_symbol;?> <?php echo $cart_total;?></div>
      				</li>
      			</ul>
				
      		</div>
			
			<?php } else { ?>
			<div class="p-20"><h5><?php echo get_languageword('no_items_in_your_cart');?></h5></div>
			<?php } ?>
			
			</div>
			<div class="modal-class">
			 <?php 
			    if (count($this->cart->contents())>0) {
			    ?>
			    <button id="myBtn" class="bag-end">
			        <div class='bag-end-dentro'>
			            <div class='bag-item'>
			                <div><span class="icon-marmita icon-marmita--bag"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 23"><style>.st0{fill-rule:evenodd;clip-rule:evenodd}</style><path class="st0" d="M8.7.2c-1.1 0-2 .3-2.6.9-.6.6-1 1.4-1.2 2.2-.2.6-.3 1.1-.3 1.7H2C.9 5 0 5.9 0 7l.1 13c0 1.7 1.3 3 3 3H15c1.7 0 3-1.3 3-3V7c0-1.1-.9-2-2-2h-3.2c-.1-.6-.1-1.1-.3-1.6-.2-.8-.6-1.7-1.2-2.2-.7-.6-1.5-1-2.6-1zm2.7 6.3v2.6c0 .4.3.7.8.7.4 0 .7-.3.7-.8v-.8-1.8H16c.3 0 .5.2.5.5l-.1 13c0 .8-.7 1.5-1.5 1.5H3.1c-.8 0-1.5-.7-1.5-1.5L1.5 7c0-.3.2-.5.5-.5h2.5v2.6c0 .4.3.8.7.8.4 0 .8-.4.8-.8v-.8-1.8h5.4zM11.3 5c0-.4-.1-.8-.2-1.2-.2-.7-.4-1.2-.8-1.5-.4-.3-.8-.5-1.6-.5s-1.3.2-1.6.5c-.4.3-.6.8-.8 1.5-.1.4-.2.8-.2 1.2h5.2z"></path></svg></span></div>
			                <div ><span class='bag-titulo'>Ver pedido</span></div>
      		                <div ><?php echo $currency_symbol;?> <?php echo  number_format($cart_total,2,",",".");?></div>
      		            </div>
			        </div>
			    </button>
			    <?php } ?>
			</div>
			
			<div id="myModal" class="modal">
                 <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">&times;</span>
                        <h3>Pedido</h3>
                    </div>
                <div class="modal-body">

			<div>
			<?php 
			$this->load->library(array('session','cart'));
		
			$currency_symbol = $this->config->item('site_settings')->currency_symbol;
			$cart_total=0;
			
			if (count($this->cart->contents())>0) { ?>
			
      		<div class="cs-card-content card-items-list">
			
      			<ul class="list-left-right">
				
				<?php foreach ($this->cart->contents() as $items) { 
				
				$cart_total += $items['subtotal'];
				if (isset($items['options']['extra_costs_total'])) {
					$cart_total += $items['options']['extra_costs_total'];
				}
				?>
				
				
      				<li class="clearfix">
      					<div class="list-left">
      						<div class="cart-item-title"><?php echo $items['name'];?></div>
							
							<?php 
							if ((isset($items['options']['addons_cost_per_item']) || isset($items['options']['item_option_name'])) && $items['options']['is_offer'] == 0) { ?>
							
      						<div class="cart-item-cutomize mt-08">
							<a href="javascript:void(0);" class="btn-cutomize" href="javascript:void(0);" onclick="get_cart_itm_adns_options('<?php echo $items['id'];?>')"><?php echo get_languageword('customize');?></a>
							</div>
							
							<?php } else if ($items['options']['is_offer'] == 1) { ?>
							
							<div class="cart-item-cutomize mt-08">
							<a href="javascript:void(0);" onclick="get_offer_popup('<?php echo $items['id'];?>','cart')" class="btn-cutomize"><?php echo get_languageword('view');?></a>
							</div>
							
							<?php } ?>
							
							
      					</div>
						
						<?php 
						$itm_total=$items['subtotal'];
						if (isset($items['options']['extra_costs_total'])) 
							$itm_total += $items['options']['extra_costs_total'];
						
						?>
      					<div class="list-right">
      						<div class="card-item-price"><?php echo $currency_symbol;?><span><?php echo $itm_total;?></span></div>
							
      						<div id='teste' class="card-item-actions mt-08">
      							<i class="pe-7s-less" onclick="update_qty('<?php echo $items['rowid'];?>','decr')"></i><span><?php echo $items['qty'];?></span><i class="pe-7s-plus" onclick="update_qty('<?php echo $items['rowid'];?>','incr')"></i>
      						</div>
							
      					</div>
      				</li>
					
			  
				<?php } ?>
			  
			  
      			</ul>
				
			
				
      		</div>
			
      		<div class="cs-card-content">
      			<ul class="list-left-right cart-total-details">
      				<li class="clearfix">
      					<div class="list-left"><?php echo get_languageword('total');?></div>
      					<div class="list-right"><?php echo $currency_symbol;?> <?php echo $cart_total;?></div>
      				</li>
      			</ul>
				
      		</div>
			
			<?php } else { ?>
			<div class="p-20"><h5><?php echo get_languageword('no_items_in_your_cart');?></h5></div>
			<?php } ?>
			
			</div>
                </div>
            </div>

            </div>
			
			<style>
            	@media (min-width: 765px){
            .bag-end {
                                display: none;

            }
            	}

			
			@media (max-width: 765px){
                .bag-end {
			        width: 100%;
                    position: fixed;
                    bottom: 50px;
                    background-color: #ea1d2c;
                    z-index: 999999;
                    left: 0px;
                    border: none;
                    padding: 0;
                    
                }
                .bag-end-dentro{
                    height: 50px;
                    width: 100%;
                    font-weight: 500;
                    text-align: center;
                    color: #ffffff;
                    overflow: hidden;
                }
                
                .bag-item{
                    display: flex;
                    height: 50px;
                    width: 100%;
                    padding: 20px;
                    position: relative;
                    justify-content: space-between;
                    align-items: center;
                }
                .bag-titulo{
                    position: absolute;
                    width: 100%;
                    left: 0;
                    top: 14px;
                    font-size: 14px;
                }
                
                

			}
			
			/* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 4; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
    margin-top: 12px !important;

}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  margin-top: 12px;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
  
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
			
            button.bag-end:focus,button.bag-end:active {
                outline: none;
            }
			</style>
			
<script>

    $(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});
    
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }
    
    i.onclick = function (event){
        modal.style.display = "block";
    }
// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "block";
  }
  
  
}
</script>
			
      		