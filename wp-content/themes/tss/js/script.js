
 jQuery(document).ready(function($){
 
	$(window).resize(function(){
		screenCheck();
	});screenCheck();
	
	if($("#inner-slides").length > 0){
		$('#inner-slides')
		.cycle({ 
			fx:      'fade', 
			speedIn:  2000, 
			speedOut: 600, 
			timeout:   7300,
			sync:true,
			pause:1
		});
	
	}
	
	if($("#menu-links").length > 0){
		$("#menu-links").find('a').click(function(){
			$.scrollTo($(this).attr('href'),1000,{easing:'easeInOutCubic'});	
			return false;
		});
		$(".to-top").click(function(){
			$.scrollTo(0,1000,{easing:'easeInOutCubic'});
			return false;
		});
	}
	
	if($(".see-more").length > 0){
		$(".see-more").find('a').click(function(){
			$.scrollTo($(this).attr('href'),800,{easing:'easeInOutCubic'});
			return false;
		});
	}
	
	if($("#spot-hours").length > 0){
		$("#spot-hours").click(function(){
			$.scrollTo($(this).attr('href'),800,{easing:'easeInOutCubic'});
			return false;
		});
	}
	
	
	if($("#bottom-links").length > 0){
		// swing the sign
		$("#bottom-links").find('.sign').mouseenter(function(){
			if(!$(this).is(':animated')){
				var ml = parseInt($(this).css('marginLeft'));
				var mt = parseInt($(this).css('marginTop'));

				/*
				$(this).animate({marginLeft:ml-2,marginTop:mt-0},200,'easeInCubic',function(){
					var ml = parseInt($(this).css('marginLeft'));
					var mt = parseInt($(this).css('marginTop'));
					$(this).animate({marginLeft:ml+4,marginTop:mt+0},700,'jswing',function(){
						var ml = parseInt($(this).css('marginLeft'));
						var mt = parseInt($(this).css('marginTop'));
						$(this).animate({marginLeft:ml-2,marginTop:mt-0},400,'easeInCubic');
					});
				});
					*/
				
				$(this).animate({marginLeft:ml-2,marginTop:mt-1},300,'easeInCubic',function(){
					var ml = parseInt($(this).css('marginLeft'));
					var mt = parseInt($(this).css('marginTop'));
					$(this).animate({marginLeft:ml+2,marginTop:mt+1},250,'easeInCubic',function(){
						var ml = parseInt($(this).css('marginLeft'));
						var mt = parseInt($(this).css('marginTop'));
						$(this).animate({marginLeft:ml+2,marginTop:mt-1},300,'easeOutCubic',function(){
							var ml = parseInt($(this).css('marginLeft'));
							var mt = parseInt($(this).css('marginTop'));
							$(this).animate({marginLeft:ml-2,marginTop:mt+1},400,'jswing');
						});
					});
			
				});
				
			}
		});
		
		
	}
	
	
	// Photo Gallery functions
	if($(".thumb").length > 0){
	
		$("#thumb-inner :first").addClass('first-thumb');
		$("#thumb-inner .thumb:last").addClass('last-thumb');
		
		// Activate first thumb
		imageChange($("#thumb-inner :first"));
		// Only works on specific gallery... load Love All Feed All first
		//imageChange($("#thumb-inner :nth-child(8)"));
		checkThumbDirections();
		checkGalleryDirections();
	
		$(".thumb").click(function(){
			imageChange($(this));
		});
		
		
		$(".thumb").hover(function(){
			$(this).css({border:'1px solid #fff'});
		},function(){
			$(this).css({border:'1px solid #ac9346'});
		});
		
		
		$(".gthumb").hover(function(){
			$(this).find('img').css({border:'1px solid #fff'});
			$(this).find('.gthumb-title').css({color:'#791d1d'});
		},function(){
			$(this).find('img').css({border:'1px solid #ac9346'});
			$(this).find('.gthumb-title').css({color:'#1d1d1d'});
		});
		
		
		$("#thumb-next").click(function(){
			var ml = parseInt($("#thumb-inner").css('marginLeft')) -856;
			if(Math.abs(ml) < $("#thumb-inner").width() && !$("#thumb-inner").is(":animated")){
				$("#thumb-inner").animate({marginLeft:ml},function(){
					checkThumbDirections();
				});
			}
		
		});
		$("#thumb-previous").click(function(){
			var ml = parseInt($("#thumb-inner").css('marginLeft')) +856;
			checkThumbDirections();
			if(ml <= 0 && !$("#thumb-inner").is(":animated")){
				$("#thumb-inner").animate({marginLeft:ml},function(){
					checkThumbDirections();
				});
			}
		});
		
		$("#main-next").click(function(){
			if(!$("#thumb-inner").find('.active-thumb').hasClass('last-thumb')){
				imageChange($("#thumb-inner").find('.active-thumb').next());
			}
		});
		$(".mb-over").hover(function(){
			$(this).addClass('m-over');
		},function(){
			$(this).removeClass('m-over');
		});
		$("#main-previous").click(function(){
			if(!$("#thumb-inner").find('.active-thumb').hasClass('first-thumb')){
				imageChange($("#thumb-inner").find('.active-thumb').prev());
			}
		});
		
		$(".tb-over").hover(function(){
			$(this).addClass('t-over');
		},function(){
			$(this).removeClass('t-over');
		});
		
		$("#gallery-next").click(function(){
			var ml = parseInt($("#gallery-inner").css('marginLeft')) -856;
			if(Math.abs(ml) < $("#gallery-inner").width() && !$("#gallery-inner").is(":animated")){
				$("#gallery-inner").animate({marginLeft:ml},function(){
					checkGalleryDirections();
				});
			}
		
		});
		$("#gallery-previous").click(function(){
			var ml = parseInt($("#gallery-inner").css('marginLeft')) +856;
			checkThumbDirections();
			if(ml <= 0 && !$("#gallery-inner").is(":animated")){
				$("#gallery-inner").animate({marginLeft:ml},function(){
					checkGalleryDirections();
				});
			}
		});
	}
	
	
	if($("#photo-container").length > 0){
		$(".polaroid").click(function(){
			var tt = "#"+$(this).attr('id')+'-text';
			$("#text-container").find('.active-text').fadeOut(200,function(){
				$(this).removeClass('active-text');
				$(tt).fadeIn();
				$(tt).addClass('active-text');
			});
			
		});
	
	}

	
});

function imageChange(obj){
	$("#thumb-inner").find('.active-thumb').removeClass('active-thumb');
	obj.addClass('active-thumb');
	
	checkMainDirections();

	var img = obj.find('.large-thumb').html();
	var img_title = obj.find('.thumb-text').html();
	$("#the-photo").html(img);
	$("#photo-text").html(img_title);
	
	$("#the-photo img").hide();
	$("#the-photo img").load(function(){
		if($("#the-photo img").height() > 375){
			$("#the-photo img").css({height:'375px',margin:'0 auto',display:'block'});
		}
		if($("#the-photo img").height() < 375 && $("#the-photo img").height() != 0){
			var mt = (375-$("#the-photo img").height())/2;
			if(mt < 30){
				$("#the-photo img").css({marginTop:mt});
			}
		}
		$("#the-photo img").hide();
		$(this).fadeIn(400);
	});		
	return false;

}

function checkMainDirections(){
	var active = $("#thumb-inner").find('.active-thumb');
	
	if(active.hasClass('first-thumb')){
		$("#main-previous").addClass('m-dead');
	}else{
		$("#main-previous").removeClass('m-dead');
	}
	if(active.hasClass('last-thumb')){
		$("#main-next").addClass('m-dead');
	}else{
		$("#main-next").removeClass('m-dead');
	}
}

function checkThumbDirections(){
	var l = parseInt($("#thumb-inner").css('marginLeft')) -856;
	var r = parseInt($("#thumb-inner").css('marginLeft')) +856;
	
	if(r <= 0){
		$("#thumb-previous").removeClass('t-dead');
	}else{
		$("#thumb-previous").addClass('t-dead');
	}
	if(Math.abs(l) < $("#thumb-inner").width()){
		$("#thumb-next").removeClass('t-dead');
	}else{
		$("#thumb-next").addClass('t-dead');
	}
	
}
function checkGalleryDirections(){
	var l = parseInt($("#gallery-inner").css('marginLeft')) -856;
	var r = parseInt($("#gallery-inner").css('marginLeft')) +856;
	
	if(r <= 0){
		$("#gallery-previous").removeClass('t-dead');
	}else{
		$("#gallery-previous").addClass('t-dead');
	}
	if(Math.abs(l) < $("#gallery-inner").width()){
		$("#gallery-next").removeClass('t-dead');
	}else{
		$("#gallery-next").addClass('t-dead');
	}
	
}

function screenCheck(){
	if($(window).width() < 1041){
		$("#content").css({overflow:'hidden'});
	}else{
		$("#content").css({overflow:'visible'});
	}
}
