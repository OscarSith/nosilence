/*! WOW - v0.1.9 - 2014-05-10
* Copyright (c) 2014 Matthieu Aussaguel; Licensed MIT */(function(){var a,b,c=function(a,b){return function(){return a.apply(b,arguments)}};a=function(){function a(){}return a.prototype.extend=function(a,b){var c,d;for(c in a)d=a[c],null!=d&&(b[c]=d);return b},a.prototype.isMobile=function(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)},a}(),b=this.WeakMap||(b=function(){function a(){this.keys=[],this.values=[]}return a.prototype.get=function(a){var b,c,d,e,f;for(f=this.keys,b=d=0,e=f.length;e>d;b=++d)if(c=f[b],c===a)return this.values[b]},a.prototype.set=function(a,b){var c,d,e,f,g;for(g=this.keys,c=e=0,f=g.length;f>e;c=++e)if(d=g[c],d===a)return void(this.values[c]=b);return this.keys.push(a),this.values.push(b)},a}()),this.WOW=function(){function d(a){null==a&&(a={}),this.scrollCallback=c(this.scrollCallback,this),this.scrollHandler=c(this.scrollHandler,this),this.start=c(this.start,this),this.scrolled=!0,this.config=this.util().extend(a,this.defaults),this.animationNameCache=new b}return d.prototype.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0},d.prototype.init=function(){var a;return this.element=window.document.documentElement,"interactive"===(a=document.readyState)||"complete"===a?this.start():document.addEventListener("DOMContentLoaded",this.start)},d.prototype.start=function(){var a,b,c,d;if(this.boxes=this.element.getElementsByClassName(this.config.boxClass),this.boxes.length){if(this.disabled())return this.resetStyle();for(d=this.boxes,b=0,c=d.length;c>b;b++)a=d[b],this.applyStyle(a,!0);return window.addEventListener("scroll",this.scrollHandler,!1),window.addEventListener("resize",this.scrollHandler,!1),this.interval=setInterval(this.scrollCallback,50)}},d.prototype.stop=function(){return window.removeEventListener("scroll",this.scrollHandler,!1),window.removeEventListener("resize",this.scrollHandler,!1),null!=this.interval?clearInterval(this.interval):void 0},d.prototype.show=function(a){return this.applyStyle(a),a.className=""+a.className+" "+this.config.animateClass},d.prototype.applyStyle=function(a,b){var c,d,e;return d=a.getAttribute("data-wow-duration"),c=a.getAttribute("data-wow-delay"),e=a.getAttribute("data-wow-iteration"),this.animate(function(f){return function(){return f.customStyle(a,b,d,c,e)}}(this))},d.prototype.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),d.prototype.resetStyle=function(){var a,b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],e.push(a.setAttribute("style","visibility: visible;"));return e},d.prototype.customStyle=function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a},d.prototype.vendors=["moz","webkit"],d.prototype.vendorSet=function(a,b){var c,d,e,f;f=[];for(c in b)d=b[c],a[""+c]=d,f.push(function(){var b,f,g,h;for(g=this.vendors,h=[],b=0,f=g.length;f>b;b++)e=g[b],h.push(a[""+e+c.charAt(0).toUpperCase()+c.substr(1)]=d);return h}.call(this));return f},d.prototype.vendorCSS=function(a,b){var c,d,e,f,g,h;for(d=window.getComputedStyle(a),c=d.getPropertyCSSValue(b),h=this.vendors,f=0,g=h.length;g>f;f++)e=h[f],c=c||d.getPropertyCSSValue("-"+e+"-"+b);return c},d.prototype.animationName=function(a){var b;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=window.getComputedStyle(a).getPropertyValue("animation-name")}return"none"===b?"":b},d.prototype.cacheAnimationName=function(a){return this.animationNameCache.set(a,this.animationName(a))},d.prototype.cachedAnimationName=function(a){return this.animationNameCache.get(a)},d.prototype.scrollHandler=function(){return this.scrolled=!0},d.prototype.scrollCallback=function(){var a;return this.scrolled&&(this.scrolled=!1,this.boxes=function(){var b,c,d,e;for(d=this.boxes,e=[],b=0,c=d.length;c>b;b++)a=d[b],a&&(this.isVisible(a)?this.show(a):e.push(a));return e}.call(this),!this.boxes.length)?this.stop():void 0},d.prototype.offsetTop=function(a){for(var b;void 0===a.offsetTop;)a=a.parentNode;for(b=a.offsetTop;a=a.offsetParent;)b+=a.offsetTop;return b},d.prototype.isVisible=function(a){var b,c,d,e,f;return c=a.getAttribute("data-wow-offset")||this.config.offset,f=window.pageYOffset,e=f+this.element.clientHeight-c,d=this.offsetTop(a),b=d+a.clientHeight,e>=d&&b>=f},d.prototype.util=function(){return this._util||(this._util=new a)},d.prototype.disabled=function(){return!this.config.mobile&&this.util().isMobile(navigator.userAgent)},d}()}).call(this);
var loading = sessionStorage.getItem('home');
if (loading) {
	$('#loader').fadeOut();
} else {
	$(window).load(function () {
		"use strict";

		$('#loader').fadeOut();
		sessionStorage.setItem('home', 'S');
	});
}

$(document).ready(function ($) {
	"use strict";

	var headerEle = function () {
		var $headerHeight = $('header').height();
		$('.hidden-header').css({ 'height' : $headerHeight  + "px" });
	};

	$(window).load(function () {
	    headerEle();
	});

	$(window).resize(function () {
	    headerEle();
	});

    /*--------------------------------------------------*/
    /* Counter
    /*--------------------------------------------------*/
    $('.timer').countTo();

    $('.counter-item').appear(function() {
        $('.timer').countTo();
    },{accY: -100});

	/*----------------------------------------------------*/
	/*	Back Top Link
	/*----------------------------------------------------*/

    var offset = 200;
    var duration = 500;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(400);
        } else {
            $('.back-to-top').fadeOut(400);
        }
    });
    $('.back-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 600);
        return false;
    });

	/*----------------------------------------------------*/
	/*	Sliders & Carousel
	/*----------------------------------------------------*/

	////------- Touch Slider
	// var time = 4.4,
	// 	$progressBar,
	// 	$bar,
	// 	$elem,
	// 	isPause,
	// 	tick,
	// 	percentTime;

	// var $touchSlider = $('#touch-slider-us');
	// if ($touchSlider) {
	// 	$touchSlider.each(function(){
	// 		var owl = jQuery(this),
	// 			sliderNav = $(this).attr('data-slider-navigation'),
	// 			sliderPag = $(this).attr('data-slider-pagination'),
	// 			sliderProgressBar = $(this).attr('data-slider-progress-bar');

	// 		if ( sliderNav == 'false' || sliderNav == '0' ) {
	// 			var returnSliderNav = false
	// 		} else {
	// 			var returnSliderNav = true
	// 		}

	// 		if ( sliderPag == 'true' || sliderPag == '1' ) {
	// 			var returnSliderPag = true
	// 		}else {
	// 			var returnSliderPag = false
	// 		}

	// 		if ( sliderProgressBar == 'true' || sliderProgressBar == '1' ) {
	// 			var returnSliderProgressBar = progressBar
	// 			var returnAutoPlay = false
	// 		}else {
	// 			var returnSliderProgressBar = false
	// 			var returnAutoPlay = true
	// 		}

	// 		owl.owlCarousel({
	// 			navigation : returnSliderNav,
	// 			pagination: returnSliderPag,
	// 			slideSpeed : 400,
	// 			paginationSpeed : 400,
	// 			lazyLoad : true,
	// 			singleItem: true,
	// 			autoHeight : true,
	// 			autoPlay: returnAutoPlay,
	// 			stopOnHover: returnAutoPlay,
	// 			transitionStyle : "fade",
	// 		});
	// 	});
	// }

	////------- Projects Carousel
	$(".projects-carousel").owlCarousel({
		navigation : true,
		pagination: false,
		slideSpeed : 400,
		stopOnHover: true,
    	autoPlay: 3000,
    	items : 4,
    	itemsDesktopSmall : [900,3],
		itemsTablet: [600,2],
		itemsMobile : [479, 1]
	});
	/*----------------------------------------------------*/
	/*	Milestone Counter
	/*----------------------------------------------------*/

	jQuery('.milestone-block').each(function() {
		jQuery(this).appear(function() {
			var $endNum = parseInt(jQuery(this).find('.milestone-number').text());
			jQuery(this).find('.milestone-number').countTo({
				from: 0,
				to: $endNum,
				speed: 4000,
				refreshInterval: 60,
			});
		},{accX: 0, accY: 0});
	});





	/*----------------------------------------------------*/
	/*	Nivo Lightbox
	/*----------------------------------------------------*/

	// $('.lightbox').nivoLightbox({
	// 	effect: 'fadeScale',
	// 	keyboardNav: true,
	// 	errorMessage: 'The requested content cannot be loaded. Please try again later.'
	// });
	/*----------------------------------------------------*/
	/*	Change Slider Nav Icons
	/*----------------------------------------------------*/

	$('.touch-slider').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
	$('.touch-slider').find('.owl-next').html('<i class="fa fa-angle-right"></i>');
	$('.touch-carousel, .testimonials-carousel').find('.owl-prev').html('<i class="fa fa-angle-left"></i>');
	$('.touch-carousel, .testimonials-carousel').find('.owl-next').html('<i class="fa fa-angle-right"></i>');
	$('.read-more').append('<i class="fa fa-angle-right"></i>');

	/*----------------------------------------------------*/
	/*	Tooltips & Fit Vids & Parallax & Text Animations
	/*----------------------------------------------------*/

	// $("body").fitVids();

	// $('.itl-tooltip').tooltip();

	// $('.bg-parallax').each(function() {
	// 	$(this).parallax("30%", 0.2);
	// });

	$('.tlt').textillate({
		loop: true,
		in: {
			effect: 'fadeInUp',
			delayScale: 2,
			delay: 50,
			sync: false,
			shuffle: true,
			reverse: true,
		},
		out: {
			effect: 'fadeOutUp',
			delayScale: 2,
			delay: 50,
			sync: false,
			shuffle: true,
			reverse: true,
		},
	});





	/*----------------------------------------------------*/
	/*	Sticky Header
	/*----------------------------------------------------*/
	// (function() {

	// 	var docElem = document.documentElement,
	// 		didScroll = false,
	// 		changeHeaderOn = 100;
	// 		document.querySelector( 'header' );

	// 	function init() {
	// 		window.addEventListener( 'scroll', function() {
	// 			if( !didScroll ) {
	// 				didScroll = true;
	// 				setTimeout( scrollPage, 250 );
	// 			}
	// 		}, false );
	// 	}

	// 	function scrollPage() {
	// 		var sy = scrollY();
	// 		if ( sy >= changeHeaderOn ) {
	// 			$('.top-bar').slideUp(300);
	// 			$("header").addClass("fixed-header");
	// 			$('.navbar-brand').css({ 'padding-top' : 19 + "px", 'padding-bottom' : 19 + "px" });

	// 			if (/iPhone|iPod|BlackBerry/i.test(navigator.userAgent) || $(window).width() < 479 ){
	// 				$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 0 + "px", 'padding-bottom' : 0 + "px" })
	// 			}else{
	// 				$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 20 + "px", 'padding-bottom' : 20 + "px" })
	// 				$('.search-side').css({ 'margin-top' : -7 + "px" });
	// 			};

	// 		}
	// 		else {
	// 			$('.top-bar').slideDown(300);
	// 			$("header").removeClass("fixed-header");
	// 			$('.navbar-brand').css({ 'padding-top' : 27 + "px", 'padding-bottom' : 27 + "px" });

	// 			if (/iPhone|iPod|BlackBerry/i.test(navigator.userAgent) || $(window).width() < 479 ){
	// 				$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 0 + "px", 'padding-bottom' : 0 + "px" })
	// 			}else{
	// 				$('.navbar-default .navbar-nav > li > a').css({ 'padding-top' : 28 + "px", 'padding-bottom' : 28 + "px" })
	// 				$('.search-side').css({ 'margin-top' : 0  + "px" });
	// 			};

	// 		}
	// 		didScroll = false;
	// 	}

	// 	function scrollY() {
	// 		return window.pageYOffset || docElem.scrollTop;
	// 	}

	// 	init();
	// })();
});




/*----------------------------------------------------*/
/*	Portfolio Isotope
/*----------------------------------------------------*/

// jQuery(window).load(function(){

// 	var $container = $('#portfolio');
// 	$container.isotope({
// 		layoutMode : 'masonry',
// 		filter: '*',
// 		animationOptions: {
// 			duration: 750,
// 			easing: 'linear',
// 			queue: false,
// 		}
// 	});

// 	$('.portfolio-filter ul a').click(function(){
// 		var selector = $(this).attr('data-filter');
// 		$container.isotope({
// 			filter: selector,
// 			animationOptions: {
// 				duration: 750,
// 				easing: 'linear',
// 				queue: false,
// 			}
// 		});
// 	  return false;
// 	});

// 	var $optionSets = $('.portfolio-filter ul'),
// 	    $optionLinks = $optionSets.find('a');
// 	$optionLinks.click(function(){
// 		var $this = $(this);
// 		if ( $this.hasClass('selected') ) { return false; }
// 		var $optionSet = $this.parents('.portfolio-filter ul');
// 		$optionSet.find('.selected').removeClass('selected');
// 		$this.addClass('selected');
// 	});

// });
/* ----------------- End JS Document ----------------- */


// Styles Switcher JS
// function setActiveStyleSheet(title) {
//   var i, a, main;
//   for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
//     if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
//       a.disabled = true;
//       if(a.getAttribute("title") == title) a.disabled = false;
//     }
//   }
// }

// function getActiveStyleSheet() {
//   var i, a;
//   for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
//     if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
//   }
//   return null;
// }

// function getPreferredStyleSheet() {
//   var i, a;
//   for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
//     if(a.getAttribute("rel").indexOf("style") != -1
//        && a.getAttribute("rel").indexOf("alt") == -1
//        && a.getAttribute("title")
//        ) return a.getAttribute("title");
//   }
//   return null;
// }

// function createCookie(name,value,days) {
//   if (days) {
//     var date = new Date();
//     date.setTime(date.getTime()+(days*24*60*60*1000));
//     var expires = "; expires="+date.toGMTString();
//   }
//   else expires = "";
//   document.cookie = name+"="+value+expires+"; path=/";
// }

// function readCookie(name) {
//   var nameEQ = name + "=";
//   var ca = document.cookie.split(';');
//   for(var i=0;i < ca.length;i++) {
//     var c = ca[i];
//     while (c.charAt(0)==' ') c = c.substring(1,c.length);
//     if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
//   }
//   return null;
// }

// window.onload = function(e) {
//   var cookie = readCookie("style");
//   var title = cookie ? cookie : getPreferredStyleSheet();
//   setActiveStyleSheet(title);
// }

// window.onunload = function(e) {
//   var title = getActiveStyleSheet();
//   createCookie("style", title, 365);
// }

// var cookie = readCookie("style");
// var title = cookie ? cookie : getPreferredStyleSheet();
// setActiveStyleSheet(title);

// // Styles Switcher
// $(document).ready(function(){
// 	$('.open-switcher').click(function(){
// 		if($(this).hasClass('show-switcher')) {
// 			$('.switcher-box').css({'left': 0});
// 			$('.open-switcher').removeClass('show-switcher');
// 			$('.open-switcher').addClass('hide-switcher');
// 		}else if(jQuery(this).hasClass('hide-switcher')) {
// 			$('.switcher-box').css({'left': '-212px'});
// 			$('.open-switcher').removeClass('hide-switcher');
// 			$('.open-switcher').addClass('show-switcher');
// 		}
// 	});
// });

//Top Bar Switcher
$(".topbar-style").change(function(){
	if( $(this).val() == 1){
		$(".top-bar").removeClass("dark-bar"),
		$(".top-bar").removeClass("color-bar"),
		$(window).resize();
	} else if( $(this).val() == 2){
		$(".top-bar").removeClass("color-bar"),
		$(".top-bar").addClass("dark-bar"),
		$(window).resize();
	} else if( $(this).val() == 3){
		$(".top-bar").removeClass("dark-bar"),
		$(".top-bar").addClass("color-bar"),
		$(window).resize();
	}
});

//Layout Switcher
// $(".layout-style").change(function(){
// 	if( $(this).val() == 1){
// 		$("#container").removeClass("boxed-page"),
// 		$(window).resize();
// 	} else{
// 		$("#container").addClass("boxed-page"),
// 		$(window).resize();
// 	}
// });

//Background Switcher
// $('.switcher-box .bg-list li a').click(function() {
// 	var current = $('.switcher-box select[id=layout-style]').find('option:selected').val();
// 	if(current == '2') {
// 		var bg = $(this).css("backgroundImage");
// 		$("body").css("backgroundImage",bg);
// 	} else {
// 		alert('Please select boxed layout');
// 	}
// });

$('.boxgrid').BlackAndWhite({
	hoverEffect: true,
	webworkerPath: false,
	intensity: 1,
	speed: {
		fadeIn: 0,
		fadeOut: 500
	}
});

var wow = new WOW(
	  {
		boxClass:     'wow',      // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset:       10,          // distance to the element when triggering the animation (default is 0)
		mobile:       false       // trigger animations on mobile devices (true is default)
	  }
	);
	wow.init();