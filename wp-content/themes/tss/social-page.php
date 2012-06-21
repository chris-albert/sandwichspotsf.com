<?php
/**
 * Template Name: Social TSS
 *
 */

get_header(); 


?>
	
	<section id="content" class="social-back" >
		<div id="top-boo"></div>
		<div id="left-boo"></div><div id="right-boo"></div>
		
		<div id="social-content">
			<div id="social-left">
				<h1>
					<a class="fb-link" href="http://www.facebook.com/pages/The-Sandwich-Spot-Marina-District/133391826702459" target="_blank" ></a>
					<img src="<?php bloginfo('template_url');?>/images/facebook-update-h.png" alt="Facebook Updates" />
				</h1>
				<div class="social-menu" style="">
					<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
					<fb:like-box profile_id="133391826702459" width="370" height="392" show_faces="false" stream="true" header="false">
					</fb:like-box>
				</div>
				<div class="social-button">
					<a target="_blank" href="http://www.facebook.com/pages/The-Sandwich-Spot-Marina-District/133391826702459">Follow Us On Facebook</a>
				</div>
			</div>
			
			<div id="social-right">
				<h1>
					<a class="twt-link" href="http://twitter.com/415SandwichKing" target="_blank" ></a>
					<img src="<?php bloginfo('template_url');?>/images/twitter-update-h.png" alt="Twitter Updates" />
				</h1>
				<div class="social-menu" id="twtr-social-menu">
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'profile',
					  rpp: 25,
					  interval: 6000,
					  width: 350,
					  height: 390,
					  theme: {
						shell: {
						  background: 'transparent',
						  color: '#ffffff'
						},
						tweets: {
						  background: 'transparent',
						  color: '#1d1d1d',
						  links: '#a52727'
						}
					  },
					  features: {
						scrollbar: false,
						loop: false,
						live: false,
						hashtags: true,
						timestamp: true,
						avatars: false,
						behavior: 'all'
					  }
					}).render().setUser('415SandwichKing').start();
					</script>
				</div>
				<div class="social-button">
					<a target="_blank" href="http://twitter.com/415SandwichKing">Follow Us On Twitter</a>
				</div>
			</div>
			
		</div>
		
		<div id="bottom-boo"></div>
		
	</section>
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
