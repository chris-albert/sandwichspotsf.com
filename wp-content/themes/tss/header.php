<?php
/**
 * The Header
 *
 * Displays all of the <head> section
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>The Sandwich Spot</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.cycle.all.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.scrollTo-min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery-ui-1.8.12.custom.min.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.ui.slider.js" type="text/javascript"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/script.js" type="text/javascript"></script>

<!--[if IE]>
	<script type="text/javascript">
		(function(){
			var html5elmeents = "address|article|aside|audio|canvas|command|datalist|details|dialog|figure|figcaption|footer|header|hgroup|keygen|mark|meter|menu|nav|progress|ruby|section|time|video".split('|');
			for(var i = 0; i < html5elmeents.length; i++) { document.createElement(html5elmeents[i]); }
		})();
	</script>
<![endif]-->
<!--[if IE 7]>
	<style type="text/css">
	nav .link-text{
		float:left;
		margin-top:16px;
		cursor:pointer;
	}

	nav .star{
		margin:0 5px;
		margin-top:16px;
		float:left;
	}
	nav .first-link-text{
		margin-left:24px;
	}
	
	#icon-box a{
		margin:0 8px;
	}
	#twtr-social-menu{
		overflow-y:scroll;
		position:relative;
	}
	#menu-links .link-button{
		float:left;
		margin-left:5px;
	}
	#menu-links{
		margin-left:60px;
	}
	#board-content ol li{
		display:list-item;
	}
	#board-content .uol-num{
		top:12px;
	}
	#directions-content{
		padding-top:42px;
	}
	#d-links .link-button{
		float:left;
		margin-left:5px;
	}
	#d-links{
		margin-left:304px;
	}
	.see-more{
		float:left;
		margin-left:422px;
	}
	.fb-link{
		margin-right:10px;
	}
	.twt-link{
		margin-right:10px;
	}
	.dred{
		padding-left:10px;
	}
	</style>
<![endif]-->

<?php
	/* Hook for the head */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div id="torches">
<div id="wrapper">
	<!-- <div id="backdrop"></div> -->
	<div id="container">
	
		<nav>
			<div id="left-nav">	
				<a <?php if(is_page('our-story')) echo 'class="anav"';?> href="<?php bloginfo('url'); ?>/our-story" title="Our Story">
					<div class="link-text first-link-text" style="background:url('<?php bloginfo('template_url'); ?>/images/our-story-link.png');height:14px;width:106px;">
					</div>
				</a>
				<img class="star" src="<?php bloginfo('template_url'); ?>/images/star.png" alt="Nautical Star" />
				<a <?php if(is_page('food-menu')) echo 'class="anav"';?> href="<?php bloginfo('url'); ?>/food-menu" title="Food Menu">
					<div class="link-text" style="background:url('<?php bloginfo('template_url'); ?>/images/food-menu-link.png');height:14px;width:111px;">
					</div>
				</a>
				<img class="star" src="<?php bloginfo('template_url'); ?>/images/star.png" alt="Nautical Star" /> 
				<a <?php if(is_page('directions')) echo 'class="anav"';?> href="<?php bloginfo('url'); ?>/directions" title="Directions">
					<div class="link-text" style="background:url('<?php bloginfo('template_url'); ?>/images/directions-link.png');height:14px;width:110px;">
					</div>
				</a>
			</div>
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>" title="The Sandwich Spot Home"><img src="<?php bloginfo('template_url'); ?>/images/new-logo.png" alt="The Sandwich Spot Marina District" /></a>
			</div>
			<div id="right-nav">
				<a <?php if(is_page('photo-gallery')) echo 'class="anav"';?> href="<?php bloginfo('url'); ?>/photo-gallery" title="Photo Gallery">
					<div class="link-text" style="background:url('<?php bloginfo('template_url'); ?>/images/photo-gallery-link.png');height:14px;width:153px;">
					</div>
				</a>
				<img class="star" src="<?php bloginfo('template_url'); ?>/images/star.png" alt="Nautical Star" />
				<a <?php if(is_page('be-social')) echo 'class="anav"';?> href="<?php bloginfo('url'); ?>/be-social" title="Be Social">
					<div class="link-text" style="background:url('<?php bloginfo('template_url'); ?>/images/be-social-link.png');height:14px;width:96px;">
					</div>
				</a>
				<img class="star" src="<?php bloginfo('template_url'); ?>/images/star.png" alt="Nautical Star" /> 
				<a <?php if(is_page('aloha')) echo 'class="anav"';?> href="<?php bloginfo('url'); ?>/aloha" title="Aloha!">
					<div class="link-text" style="background:url('<?php bloginfo('template_url'); ?>/images/aloha-link.png');height:14px;width:72px;">
					</div>
				</a>
			</div>
		</nav>
