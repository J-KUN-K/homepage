

function layer_open(el){

	var temp = $('#' + el);
	var bg = temp.prev().hasClass('bg');

	if(bg){
		$('.layer').fadeIn();
	}else{
		temp.fadeIn();
	}

	if (temp.outerHeight() < $(document).height() ) temp.css('margin-top', '-'+temp.outerHeight()/2+'px');
	else temp.css('top', '0px');
	if (temp.outerWidth() < $(document).width() ) temp.css('margin-left', '-'+temp.outerWidth()/2+'px');
	else temp.css('left', '0px');

	temp.find('a.cbtn').click(function(e){
		if(bg){
			$('.layer').fadeOut();
		}else{
			temp.fadeOut();
		}
		e.preventDefault();
	});

	$('.layer .bg').click(function(e){
		$('.layer').fadeOut();
		e.preventDefault();
	});

}

function numberCounter(target_frame, target_number) {
    this.count = 0; this.diff = 0;
    this.target_count = parseInt(target_number);
    this.target_frame = document.getElementById(target_frame);
    this.timer = null;
    this.counter();
};
    numberCounter.prototype.counter = function() {
        var self = this;
        this.diff = this.target_count - this.count;
    
        if(this.diff > 0) {
            self.count += Math.ceil(this.diff / 10);
        }
    
        this.target_frame.innerHTML = this.count.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    
        if(this.count < this.target_count) {
            this.timer = setTimeout(function() { self.counter(); }, 30);
        } else {
            clearTimeout(this.timer);
        }
    this.target_frame.innerHTML = this.formatNumber(this.count);
 
        if(this.count < this.target_count) {
            this.timer = setTimeout(function() { self.counter(); }, 30);
        } else {
            clearTimeout(this.timer);
        }
    };

    numberCounter.prototype.formatNumber = function(num) {
        num+= '';
        x = num.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(d+)(d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    };

	/* <![CDATA[ */
	jQuery(document).ready(function ($) {
		'use strict';

		// MASTER SLIDER START
		var slider = new MasterSlider();
	   //slider.control('bullets');
		slider.setup('masterslider', {
			width: 1140, // slider standard width
			height: 854, // slider standard height
			space: 0,
			speed: 50,
			view: 'fadeBasic',
			layout: "fullwidth",
			centerControls: false,
			loop: false,
			autoplay: false
					// more slider options goes here...
					// check slider options section in documentation for more options.
		});
		// adds Arrows navigation control to the slider.
		slider.control('arrows');


		// TESTIMONIAL MASTER SLIDER START
		var slider = new MasterSlider();
		slider.setup('testimonials-slider', {
			loop: true,
			width: 70,
			height: 70,
			speed: 30,
			view: 'fadeBasic',
			preload: 0,
			space: 65,
			autoplay: true
		});
		slider.control('arrows');
		//slider.control('slideinfo', {insertTo: '#staff-info'});
/*
		// CLIENTS CAROUSEL START
		$('#client-carouse').owlCarousel({
			items: 4,
			autoPlay: 3000,
			stopOnHover: true,
			slideSpeed : 200,
			paginationSpeed : 1000,
			singleItem:false,
			navigationText : ["",""],
			itemsCustom: [
				[0, 2],
				[600, 3],
				[1000, 4],
				[1200, 4]
			]
		});
*/

$('.bxslider').bxSlider({
    minSlides: 3,
    maxSlides: 3,
    slideWidth: 420,
	slideMargin: 80,
	speed:500,
	auto: false,
	autoHover: true 
});

	// CLIENTS CAROUSEL START
		$('#client-carousel').owlCarousel({
			loop:true,
			stopOnHover: true,
			items: 4,
	        margin:50,
			navigation: true,
			pagination: false,
			navigationText : ["",""],
			itemsCustom: [
				[0, 2],
				[600, 3],
				[1000, 3],
				[1200, 3]
			]
		});

		$('#client-ex').owlCarousel({
		loop:true,
		items: 4,	
		slideSpeed : 300,
		paginationSpeed : 1000,
		navigation: true,
		pagination: true,
        stopOnHover: false,
		singleItem:false,
		navigationText: [
		  "<i class='icon-chevron-left icon-white' style='vertical-align:middle;font-size:18px;'><</i>",
		  "<i class='icon-chevron-right icon-white' style='vertical-align:middle;font-size:18px;'>></i>"
		]

		});

		(function () {
			var cnt = 0;
			var scrollPercent;
			$(window).scroll(function(){
			scrollPercent = ($(window).scrollTop()/ ($(document).height()-$(window).height())) * 100;
			if(scrollPercent > 30 && cnt === 0){
				(function($) {
					$.fn.countUp = function(options) {
					var start_num = Number($(this).text());
					var d = {
					start: 0,
					last: 100,
					duration: 1000,
					frame: 33,
					update: null,
					complete: null
					};
					var o = $.extend(d, options);
					var $that = $(this);

					o.last = parseInt(o.last);
					o.duration = parseInt(o.duration);
					o.frame = parseInt(o.frame);

					$that.each(function(i) {
						var $t = $(this);
						var total_frame = 0;
						var split = (o.last - o.start) / (o.duration / 33);
						var value = o.start;

						 var clear = setInterval(function() {
						value = Math.round(value + split);
						$t.text(value);

						if (typeof o.update == 'function') {
						  o.update.call($t, value);
						}

						if (total_frame > o.duration) {
						  clearInterval(clear);
						  $t.text(o.last);

						  if (typeof o.complete == 'function') {
								o.complete.call($t, value);
							}
						}
						total_frame += o.frame;
					  }, o.frame);
					});
					return $that;
				  };
				})(jQuery);

				var param1 = {
					start: 400,
					last: 120,
					duration: 1000,
					frame: 1000 / 30,
					update: function( value ){
					},
					complete: function( value ){
					 }
				};

				$('.text1').countUp(param1);

				var param2 = {
					start: 298,
					last: 73,
					duration: 1500,
					frame: 1000 / 30,
					update: function( value ){
					},
					complete: function( value ){
					}
					};
				$('.text2').countUp(param2);	
				
				var param3 = {
					start: 211,
					last: 120,
					duration: 2000,
					frame: 1000 / 30,
					update: function( value ){
					},
					complete: function( value ){
					}
				};
				$('.text3').countUp(param3);	

				var param4 = {
					start: 97,
					last: 12,
					duration: 2500,
					frame: 1000 / 30,
					update: function( value ){
				  },
				  complete: function( value ){
				  }
				};
				$('.text4').countUp(param4);

				var param5 = {
				  start: 80,
				  last: 2,
				  duration: 3000,
				  frame: 1000 / 30,
				  update: function( value ){
				  },
				  complete: function( value ){
				  }
				};
				$('.text5').countUp(param5);

				cnt++;
				}
			});
		}());
	});


(function () {
	var scrollPercent2;

	$(window).scroll(function(){
	scrollPercent2 = ($(window).scrollTop()/ ($(document).height()-$(window).height())) * 100;
	if(scrollPercent2 > 3){
//			$("#header-wrapper").css('background-color','#184f8f');
			//$("#header-wrapper").css('opacity','0.5');
//			$("#header-wrapper li a").css('opacity','0');
			$("#header-wrapper").css('background','none');
			$("#header-wrapper").css('background-color','#fff');
			$("#header .navbar-default .navbar-nav > li > a").css('color','#184f8f');
			$(".logo a img").attr("src","/img/main/logo_color.png");
		}else{	
			$("#header-wrapper").css({"background":"url('/img/main/bg_header.png')", 'background-repeat' : 'no-repeat', 'background-position':'center center','background-size':'cover'});
			$("#header .navbar-default .navbar-nav > li > a").css('color','#fff');
			$(".logo a img").attr("src","/img/main/logo_white.png");
		};
	});
}());
