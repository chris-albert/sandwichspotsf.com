<?php
/**
 * The main template file.
 *
 */

get_header(); ?>


	<header>
		<div id="frame">
			
			<div id="tb"></div><div id="lb"></div><div id="rb"></div><div id="bb"></div>
			<div id="slides">
				
				<div id="inner-slides">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/landing_promo.jpg" alt="The Sandwich Spot" />
					<a href="<?php echo bloginfo('url');?>/food-menu/#catering-menu"><img src="<?php bloginfo('template_url'); ?>/images/catering_deals.jpg" alt="The Sandwich Spot Catering Deals" /></a>
				</div>
			</div>
		</div>
	</header>
	
	<section id="bottom-links">
		<div class="thchain" style="left:50px;top:-49px;"></div>
		<div class="thchain" style="left:259px;top:-49px;"></div>
		
		<div class="thchain" style="left:355px;top:-49px;"></div>
		<div class="thchain" style="left:597px;top:-49px;"></div>
		
		<div class="thchain" style="left:692px;top:-49px;"></div>
		<div class="thchain" style="right:45px;top:-49px;"></div>
		
		<!--
		
		<div class="chain" style="left:42px;top:-57px;"></div>
		<div class="chain" style="right:50px;top:-57px;"></div>
		<div class="chain" style="left:30px;top:-30px;"></div>
		<div class="chain" style="right:33px;top:-30px;"></div>
		<div class="chain" style="left:39px;top:-72px;"></div>
		<div class="chain" style="right:23px;top:-72px;"></div>
		
		-->
		<a href="<?php bloginfo('url'); ?>/food-menu"><div id="menu-sign" class="sign">
			<div class="chain" style="left:42px;top:-57px;"></div>
			<div class="chain" style="right:50px;top:-57px;"></div>
		</div></a>
		<a href="<?php bloginfo('url'); ?>/our-story"><div id="story-sign" class="sign">
			<div class="chain" style="left:30px;top:-30px;"></div>
			<div class="chain" style="right:33px;top:-30px;"></div>
		</div></a>
		<a href="<?php bloginfo('url'); ?>/photo-gallery"><div id="photo-sign" class="sign">
			<div class="chain" style="left:39px;top:-72px;"></div>
			<div class="chain" style="right:23px;top:-72px;"></div>
		</div></a>
	</section>
	
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
