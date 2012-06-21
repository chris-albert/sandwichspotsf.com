<?php
/**
 * Template Name: Story TSS
 *
 */

get_header(); 


?>
	
	<section id="content" class="story-back" >
		<div id="top-boo"></div>
		<div id="left-boo"></div><div id="right-boo"></div>
		
		<div id="story-content">
			
			<div id="photo-container">
				<div class="p-group">
					<div id="the-spot" class="polaroid">
						<img src="<?php bloginfo('template_url'); ?>/images/the-spot-photo.png" alt="The Spot" />
					</div>
					<div id="jack-lucky" class="polaroid">
						<img src="<?php bloginfo('template_url'); ?>/images/jack-lucky-photo.png" alt="Jack Lucky" />
					</div>
					<div id="reviews" class="polaroid">
						<img src="<?php bloginfo('template_url'); ?>/images/reviews-photo.png" alt="Reviews" />
					</div>
				</div>
			</div>
			
			<div id="text-container">
				<div id="the-spot-text" class="active-text">
					<h2>the Sandwich Spot<br/> A Sunny Place For Shady Characters</h2>
					
					<p>In 2005 Colonel Tom Slick started the Sandwich Spot, and in 2010 Captain Jack and
					Col Tom Slick joined forces, and the mother of all Sandwich Spots, from which the others
					were all born, was opened in the fabulous Marina District of SF. They would like to license
					the rights to own and operate your independent store, and their 24 plus favorite sandwiches
					they've created and including secret sauces. They basically build a "turn key" custom and
					Independent Family Owned Business you can drive away with... and it comes with the
					Financial Freedom and exploding growth that are yours for the taking from the ground 
					floor up to infinity...and beyond!</p>

					<p>The Sandwich Spot is a full service deli offering delicious specialty sandwiches, made to
					order sandwiches, salads, a variety of beverages and chips. They have a friendly and personable
					staff that deliver superior service. Come on in and give them a try so they can be your one stop sandwich shop!</p>

					<p>Choose from signature sandwiches like The Soul Surfer with Pastrami, Swiss Cheese, Sauerkraunt,
					Thousand Island dressing, or for something with chicken try their Silva Ranch, Marinated Chicken,
					Ham, Swiss, Spicy Dijan, Honey Mustard, Frenchies Crispy Fried Onions on Dutch Crunch. For something
					Italian style, try The My Cousin Vinny, with meatball, provolone, and marinara sauce. Yum! All sandwiches
					include mayo, mustard, secret sauce, lettuce, tomato, pickles, peppers, and onions with your choice
					of bread like San Francisco sourdough, sweet roll, wheat rolls, sliced wheat or dutch crunch roll. </p>
				</div>
				<div id="jack-lucky-text" >
					<script type="text/javascript">
						$(function() {
						//change the main div to overflow-hidden as we can use the slider now
						$('#scroll-pane').css('overflow','hidden');
						console.log('run');
						//compare the height of the scroll content to the scroll pane to see if we need a scrollbar
						var difference = $('#scroll-content').height()-$('#scroll-pane').height();//eg it's 200px longer 

						if(difference>0)//if the scrollbar is needed, set it up...
						{
						   var proportion = difference / $('#scroll-content').height();//eg 200px/500px
						   var handleHeight = Math.round((1-proportion)*$('#scroll-pane').height());//set the proportional height - round it to make sure everything adds up correctly later on
						   handleHeight -= handleHeight%2; 

						   $("#scroll-pane").after('<\div id="slider-wrap"><\div id="slider-vertical"><\/div><\/div>');//append the necessary divs so they're only there if needed
						   $("#slider-wrap").height($("#scroll-pane").height());//set the height of the slider bar to that of the scroll pane


						   //set up the slider 
						   $('#slider-vertical').slider({
							  orientation: 'vertical',
							  min: 0,
							  max: 100,
							  value: 100,
							  slide: function(event, ui) {//used so the content scrolls when the slider is dragged
								 var topValue = -((100-ui.value)*difference/100);
								 $('#scroll-content').css({top:topValue});//move the top up (negative value) by the percentage the slider has been moved times the difference in height
							  },
							  change: function(event, ui) {//used so the content scrolls when the slider is changed by a click outside the handle or by the mousewheel
								 var topValue = -((100-ui.value)*difference/100);
								 $('#scroll-content').css({top:topValue});//move the top up (negative value) by the percentage the slider has been moved times the difference in height
							  }
						   });

						   //set the handle height and bottom margin so the middle of the handle is in line with the slider
						   $(".ui-slider-handle").css({height:handleHeight,'margin-bottom':-0.5*handleHeight});
							
						   var origSliderHeight = $("#slider-vertical").height();//read the original slider height
						   var sliderHeight = origSliderHeight - handleHeight ;//the height through which the handle can move needs to be the original height minus the handle height
						   var sliderMargin =  (origSliderHeight - sliderHeight)*0.5;//so the slider needs to have both top and bottom margins equal to half the difference
						   $(".ui-slider").css({height:sliderHeight,'margin-top':sliderMargin});//set the slider height and margins
						   
						}//end if

						$(".ui-slider").click(function(event){//stop any clicks on the slider propagating through to the code below
							event.stopPropagation();
						   });
						   
						$("#slider-wrap").click(function(event){//clicks on the wrap outside the slider range
							  var offsetTop = $(this).offset().top;//read the offset of the scroll pane
							  var clickValue = (event.pageY-offsetTop)*100/$(this).height();//find the click point, subtract the offset, and calculate percentage of the slider clicked
							  $("#slider-vertical").slider("value", 100-clickValue);//set the new value of the slider
						}); 
						
						$("#jack-lucky-text").hide();
							 


					});
					</script>
					<style type="text/css">
					/* css for scrollbar below here*/
					#scroll-pane { float:left;overflow: auto; width: 700px; height:430px;position:relative;display:inline;margin-left:10px;}
					#scroll-content {position:absolute;top:0;left:0;padding-right:10px;}
					#slider-wrap{float:left;width:15px;border-left:none;background-color:#E7B480;-moz-border-radius:8px;}
					#slider-vertical{position:relative;height:100%}
					.ui-slider-handle{width:15px;height:10px;margin:0 auto;background-color:#A52727;display:block;position:absolute;-moz-border-radius:8px;}
					</style>
					<h2>Meet the Sandwich king, Jack Lucky!!</h2>
					
					<div id="scroll-pane">
						<div id="scroll-content">
							<p>Experience counts. So does style and personality, and Jack's got more of it in his little pinky then
							most people do in their whole body.</p>

							<p>Jack is a dedicated artist, lover and entrepreneur who continually strives for excellence by staying
							current with market changes, technology and his client's needs. Jack is known and respected up and down
							the West Coast, West Africa, West Nile, West Chicago, Western Australia, parts of Western Montreal,
							Saskatchewan, Westside Oahu, Western areas of NYC, the greater Caribbean, Brazil, Western Europe,
							some parts of Thailand, the Philippines and Indonesia. He is unknown in Russia, China and North Korea
							at this time.</p>

							<p>Jack was a successful international model in the late 80's & early 90's, has been in numerous television
							commercials and is an accomplished actor who has studied Marlon Brando's method acting extensively. 
							He was the creator of the "Blue Steely Eye" look, which was stolen and later turned into a movie. He
							spent the last decade working undercover as a Senior Sales Consultant in Corporate America for a Title
							Insurance giant where he won numerous top salesperson awards in Real Estate, performed a tracheotomy 
							with a Mont Blanc, delivered a baby in his best suit barehanded, exposed greedy CEO's and sent them to
							prison, tirelessly fought for the downtrodden and cleared off many an executive admin's desk while waiting 
							for appointments. Jack timed his withdrawal strategy well and never hand kids until just recently. He is
							very excited about getting back to his artistic/creative pursuits in developing & supporting his incredible
							cast of characters with the launching of <a href="http://jacklucky.com" target="_blank">www.JackLucky.com</a>.</p>
							
							<p>He calls Himself the SANDWICH KING, and he may just be... the most interesting man in the world...!!</p>

							<p>Jack makes his bed in San Francisco close to his beloved Ocean Beach in a sunny and secluded area of 
							Golden Gate Park, but he won't say exactly where. A family man, avid surfer, Harley and hot rod enthusiast,
							chess player, admitted gun nut, patron of the Arts, docent at the De Young Museum, singer/songwriter, lover,
							fighter, streaker, UFC sparing partner of Chuck Liddell, founder of the Internet, founder of the Surfrider
							Foundation, creator of the "Green" movement towards recycling, organic and sustainable products, Jack is also
							the co-founder of a multi-billion dollar natural and organic sunscreen and after sun skin care product company,
							<a href="http:jettyrockshores.com" target="_blank">www.JettyRockShores.com</a>. Jack also speaks 7 languages 
							including English, Spanish, Italian, Japanese, parts of Mandarin Chinese, bad words in Portuguese, and a little French.</p>

							<p>While attending college in Southern California majoring in Dramatic Arts, business and surfing, Jack was
							discovered by a local talent scout downtown "illegally" skateboarding. After one late night at her place, 
							so began a career in the modeling industry. Jack traveled the globe for years working in high fashion doing runway shows, print and
							catalog work, commercials, live event hosting and more in Japan, Mexico City, Europe, South America and Los Angeles. After 9/11,
							 he enlisted in Naval Officer's school at West Point and served two tours in the Persian Gulf as a Navy Seal where he was highly 
							 decorated. Jack was one of the first Seals to hit "100" kills; a short list. He has been to the White House
							 on two occasions and partied with past President George Bush and the guy from the Men's Warehouse, frequents
							 the Playboy Mansion, shacks up at the Hard Rock luxury suite in Vegas, watches LA Laker games with the 
							 other Jack, goes bow hunting with Ted Nugent, tours with rockstar "Fieldy" in the band KORN, tickles Pamela
							 Anderson's...toes all the while enjoying fine dining, Baccarat, stimulating conversation and back massages with happy endings.</p>

							<p>Jack is a natural leader, active listener and consummate negotiator: skills absolutely necessary in
							the cutthroat business of representing and booking talent. Because of his experience, intimate knowledge
							of the business, sex appeal and consistent work ethic, he has earned the trust and commitment of
							Northern California and the World's top tier of marketable, unique talent. His positive attitude,
							attention to detail, presentation, technical knowledge, large...hands, thorough follow up, support, 
							rugged good looks and commitment to excellence sets the bar high for all who follow. Did somebody say bar?</p>

							<p>If you're looking to wolf down a unique and above average sandwich on freshly baked bread,then Jack Lucky
							is the one you want making your sando. </p>

							<p>He calls Himself the SANDWICH KING, and he may just be... the most interesting man in the world...!!</p>
						
						</div>
					
					</div>
				</div>
				<div id="reviews-text" style="display:none">
					<h2>Hear What People Are Saying</h2>
					
					<h3>150 Reviews / 4.5 Star Average...</h3>
					<h4>Don't take our word for it... get it from the source!</h4>
					
					<a href="http://www.yelp.com/biz/the-sandwich-spot-san-francisco" target="_blank" class="yelp-button">
						<img src="<?php bloginfo('template_url'); ?>/images/yelp-button.png" alt="Yelp" />
					</a>
					
				</div>
			</div>
		</div>
		
		<div id="bottom-boo"></div>
		
	</section>
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
