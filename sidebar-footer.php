<div class="container-fluid widget-footer">
	<div class="container widget-footer">
		
			<div class="row">
				<div class="col-md-4 widget-footer">
				<ul> 
				 <?php if ( ! dynamic_sidebar( 'first-footer-widget-area' ) ) : ?>
				 <li id="meta" class="widget-container">
				 <h3 class="widget-title">Meta</h3>
				 <ul>
				 <?php wp_register();?>
				 <li><?php wp_loginout();?></li>
				 <?php wp_meta();?>
				 </ul>
				 </li>
				 <?php endif; ?> 
 			</ul> 
				</div>
			<div class="col-md-4 widget-footer">
				<ul> 
				 <?php if ( ! dynamic_sidebar( 'second-footer-widget-area' ) ) : ?>
				 <li id="meta" class="widget-container">
				 <h3 class="widget-title">Meta</h3>
				 <ul>
				 <?php wp_register();?>
				 <li><?php wp_loginout();?></li>
				 <?php wp_meta();?>
				 </ul>
				 </li>
				 <?php endif; ?> 
 			</ul> 
			</div>
			<div class="col-md-4 widget-footer">
				<ul> 
				 <?php if ( ! dynamic_sidebar( 'third-footer-widget-area' ) ) : ?>
				 <li id="meta" class="widget-container">
				 <h3 class="widget-title">Meta</h3>
				 <ul>
				 <?php wp_register();?>
				 <li><?php wp_loginout();?></li>
				 <?php wp_meta();?>
				 </ul>
				 </li>
				 <?php endif; ?> 
 			</ul> 
			</div>
			</div>
		</div>
</div>