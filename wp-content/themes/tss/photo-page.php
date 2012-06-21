<?php
/**
 * Template Name: Photo TSS
 *
 */

require_once("phpFlickr/phpFlickr.php");

// Create new phpFlickr object
$f = new phpFlickr("0917e22e53058d093989f8e15b5511ea","99c26be2a385501c");


$user = $f->urls_lookupUser('http://www.flickr.com/photos/61997267@N05');
$nsid = $user['id'];
$set_id = '';
if(isset($_GET['gid'])){
	$set_id = $_GET['gid'];
}
//ulteriorepicure
//28838206@N02

//61997267@N05
//7633821@N08



$sets = $f->photosets_getList($nsid);


ob_start();	// gather all photo information and determine the width of #gallery-inner
$g = 0;
foreach($sets['photoset'] as $set){
	$g++;
	$farm = $set['farm'];
	$server = $set['server'];
	$title = $set['title'];
	$primary = $set['primary'];
	$gid = $set['id'];
	if($set_id == '') $set_id = $gid;
	if($set_id == $gid) $active = 'curgal'; else $active = '';
	$secret = $set['secret'];
	?>
	<div class="gthumb <?php echo $active; if($g == 1){ echo ' nml';}?>">
		<a href="<?php echo get_bloginfo('url').'/photo-gallery/?gid='.$gid; ?>">
			<img <?php echo "src='http://farm{$farm}.static.flickr.com/{$server}/{$primary}_{$secret}_s.jpg' alt='{$title}'"; ?> />
		</a>
		<div class="gthumb-title">
			<?php echo $title; ?>
		</div>
	</div>
	<?php
}
$galleries = ob_get_contents();
ob_end_clean();

$photos = $f->photosets_getPhotos($set_id);


ob_start();	// gather all photo information and determine the width of #thumb-inner
$n = 0;
foreach($photos as $photoa){
	
	if($photoa != 0){
		foreach($photoa['photo'] as $photo){
			$n++;
			$farm = $photo['farm'];
			$server = $photo['server'];
			$id = $photo['id'];
			$secret = $photo['secret'];
			$title = $photo['title'];
			?>
			<div class="thumb">
				<!--<a target="_blank" href="<?php echo "http://www.flickr.com/photos/{$nsid}/{$id}"; ?>">-->
					<img <?php echo "src='http://farm{$farm}.static.flickr.com/{$server}/{$id}_{$secret}_s.jpg' alt='{$title}'"; ?> />
				<!--</a>-->
				<div class="large-thumb">
					<a target="_blank" href="<?php echo "http://www.flickr.com/photos/{$nsid}/{$id}"; ?>">
						<img <?php echo "src='http://farm{$farm}.static.flickr.com/{$server}/{$id}_{$secret}.jpg' alt='{$title}'"; ?> />
					</a>
				</div>
				<div class="thumb-text">
					<?php echo $title; ?>
				</div>
			</div>
			<?php
		}
	}

}

$thumbs = ob_get_contents();
ob_end_clean();


 
get_header(); 


?>
	
	<section id="content" class="photo-back" >
		<div id="top-boo"></div>
		<div id="left-boo"></div><div id="right-boo"></div>
		
		<div id="photo-content">
			<div id="main-previous" class="mb-over"></div>
			<div id="main-next" class="mb-over"></div>
			<div id="the-photo">
				<?php
					
				?>
				<!-- <img src="<?php bloginfo('template_url'); ?>/images/photo-sample.jpg" alt="Sample" /> -->
			</div>
			<div id="photo-text">
				
			</div>
			<div id="thumb-content">
				<div id="thumb-previous" class="tb-over"></div>
				
				<div id="thumb-container">
					<div id="thumb-inner" style="width:<?php echo $n*107; //107 = 75+2+30 ?>px;">
						<?php echo $thumbs; ?>
					</div>
				</div>
				
				<div id="thumb-next" class="tb-over"></div>
			</div>
			<div style="width:100%;float:left;text-align:center;">
				<div class="see-more">
					<a href="#gallery-content" class="see-more-button">See More Photos</a>
					<span class="end-piece"></span>
				</div>
			</div>
		</div>
		
		<div id="bottom-boo"></div>
		
	</section>
	<section class="paper-back" >
		<div id="top-boo"></div>
		<div id="left-boo"></div><div id="right-boo"></div>
		<div class="fixed-chain" style="left:75px;top:-78px;"></div>
		<div class="fixed-chain" style="left:370px;top:-78px;"></div>
		<div class="fixed-chain" style="left:629px;top:-78px;"></div>
		<div class="fixed-chain" style="right:83px;top:-78px;"></div>
		
		<div id="gallery-content">
			<div id="gallery-previous" class="tb-over"></div>
			
			<div id="gallery-container">
				<div id="gallery-inner" style="width:<?php echo ($g*107) -30; //107 = 75+2+30 ?>px;">
					<?php echo $galleries; ?>
				</div>
			</div>
			
			<div id="gallery-next" class="tb-over"></div>
		</div>
		
		<div id="bottom-boo"></div>
		
	</section>
	
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
