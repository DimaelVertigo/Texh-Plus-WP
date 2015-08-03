<<<<<<< HEAD
$(document).ready(function(){function e(e){return $($(e).attr("href").replace("#","."))}function n(){$(function(){function e(){function e(e,n,t,a){var o=1<<n;return window.matchMedia("(min-width: 1024px)").matches?new google.maps.LatLng(e.A+a/o,e.F-t/o):window.matchMedia("(max-width: 1024px)").matches?new google.maps.LatLng(e.A,e.F):void 0}t=new google.maps.LatLng(43.146916,5.763518);var a={center:e(t,14,400,130),zoom:14,scrollwheel:!1,mapTypeId:google.maps.MapTypeId.ROADMAP,mapTypeControl:!0,panControl:!0,panControlOptions:{position:google.maps.ControlPosition.RIGHT_CENTER},mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.HORIZONTAL_BAR,position:google.maps.ControlPosition.BOTTOM_CENTER},zoomControl:!0,zoomControlOptions:{style:google.maps.ZoomControlStyle.LARGE,position:google.maps.ControlPosition.RIGHT_CENTER}};n=new google.maps.Map(document.getElementById("map"),a);var o=new google.maps.Marker({position:t,icon:image,animation:google.maps.Animation.DROP}),i=new google.maps.InfoWindow({content:"Centre d'entreprises le Val d'Aran, Bandol (83150) - France"});o.setMap(n),google.maps.event.addListener(o,"click",function(){i.open(n,o)})}var n,t;image=new google.maps.MarkerImage("/wp-content/themes/tech-plus/assets/images/map-point.png",null,null,null,new google.maps.Size(41,73)),document.getElementById("map")&&(google.maps.event.addDomListener(window,"resize",function(){var e=n.getCenter();google.maps.event.trigger(n,"resize"),n.setCenter(e)}),e(),m=!0)})}function t(){var e=$(".langue-nav"),n=e.find("#icon-lang");listLang=e.children(".sub-menu").find('[class *= "lang-"]'),lang=document.location.href.match(/\?(lang=..)/)[1].replace("=","-"),n.addClass(lang),listLang.each(function(e,n){$(this).hasClass(lang)&&$(this).closest(".level-two").remove()})}var a=$("html"),o=a.hasClass("touch"),i=$(".threed-model"),s='<iframe src="http://www.sculpteo.com/fr/embed/design/uq5zeguU?viewer=static&amp;click=none&amp;panel=0" scrolling="auto" width="100%" height="100%" class="sculpteo-viewer"></iframe>',l=$(".section"),m=!1,c=o?0:88,r=$(".slider-list li"),p=$(".btn-mobile-menu");if(i.one("click",function(){$(this).addClass("active-model"),$(s).appendTo(i)}),p.on("click",function(){var e=$(this),n=e.siblings(".main-nav");n.toggleClass("active-mobile-menu")}),!o){var h=$(".main-header-top");mnbottom=$(".main-header-bottom"),mns="main-nav-scrolled",mh=$(".main-header"),hdr=$(".main-header").height()-c-2,$(window).scroll(function(){$(this).scrollTop()>=hdr?(mh.css("padding-top","88px"),h.addClass(mns)):(mh.css("padding-top","0"),h.removeClass(mns))})}setTimeout(function(){mnbottom.addClass("anim-bg"),r.each(function(e,n){$(n).addClass("anim-item")})},500),l.waypoint({handler:function(e){if($(this.element).hasClass("company")&&!o){var t=$(this.element).find('[class *= "ico-a-"]');t.each(function(e,n){$(n).addClass("anim-item")})}else if($(this.element).hasClass("renting")&&!o){var t=$(this.element).find(".wrap-circle");t.each(function(e,n){$(n).addClass("anim-item")})}else $(this.element).hasClass("contacts")&&!m&&n()},offset:"40%"}),$(".main-nav > li").on({mouseenter:function(){$(this).children(".sub-menu").addClass("active-sub-menu")},mouseleave:function(){$(this).children(".sub-menu").removeClass("active-sub-menu")}}),$(".js-blog-langue-nav").on({mouseenter:function(){$(this).children(".sub-menu").addClass("active-sub-menu")},mouseleave:function(){$(this).children(".sub-menu").removeClass("active-sub-menu")}}),$(".slider-services").owlCarousel({items:1,autoHeight:!0,nav:!0,navText:!1}),$(".main-nav a:not(.langue-nav a)").on("click",function(n){var t=50;n.preventDefault(),$(this).closest(".active-mobile-menu").removeClass("active-mobile-menu"),e(this).hasClass("contacts")?$("html,body").stop().animate({scrollTop:e(this).offset().top-c+t}):$("html,body").stop().animate({scrollTop:e(this).offset().top-c})}),$(".gall-picture").each(function(){var e=$(this),n=function(){var n=[];return e.find("a").each(function(){var e=$(this).attr("href"),t=$(this).data("size").split("x"),a=t[0],o=t[1],i={src:e,w:a,h:o};n.push(i)}),n},t=n(),a=$(".pswp")[0];e.on("click","li",function(e){e.preventDefault();var n=$(this).index(),o={index:n,bgOpacity:.7,showHideOpacity:!0},i=new PhotoSwipe(a,PhotoSwipeUI_Default,t,o);i.init()})}),t();var d=$(".wpcf7-form");d.on("blur","textarea, input:not(.novalid)",function(){var e=$(this);val=e.val(),val.length?e.parent().parent().addClass("inp-highlight"):e.parent().parent().removeClass("inp-highlight")})});
=======
$(document).ready(function() {

	var $html = $('html'),
		$isTouch = $html.hasClass('touch'),
		threeDModel = $('.threed-model'),
		iFrame3D = '<iframe src="http://www.sculpteo.com/fr/embed/design/uq5zeguU?viewer=static&amp;click=none&amp;panel=0" scrolling="auto" width="100%" height="100%" class="sculpteo-viewer"></iframe>',
		section = $('.section'),
		flagGoogleMap = false,
		menuOffSet = !$isTouch ? 88 : 0,
		sliderList = $('.slider-list li'),
		btnMM = $('.btn-mobile-menu');

	threeDModel.one('click', function() {
		$(this).addClass('active-model');
		$(iFrame3D).appendTo(threeDModel);
	});

	btnMM.on('click', function() {
		var _this = $(this),
			btnMenu = _this.siblings('.main-nav');
		btnMenu.toggleClass('active-mobile-menu');
	});

	if ( !$isTouch ) {
		var mn = $(".main-header-top");
			mns = "main-nav-scrolled";
			mh = $('.main-header'),
			hdr = $('.main-header').height() - menuOffSet -2;

		$(window).scroll(function() {
			if( $(this).scrollTop() >= hdr ) {
				mh.css('padding-top', '88px');
				mn.addClass(mns);
			} else {
				mh.css('padding-top', '0');
				mn.removeClass(mns);
			}
		});

	}

	setTimeout(function() {
		$('.main-header').addClass('anim-bg');
		sliderList.each(function(index, el) {
			$(el).addClass('anim-item');
		});
	}, 500);

	section.waypoint({
		handler: function(direction) {
			if ( $(this.element).hasClass('company') && !$isTouch ) {
				var $elems = $(this.element).find('[class *= "ico-a-"]');
				$elems.each(function(index, el) {
					$(el).addClass('anim-item');
				});
			} else if ( $(this.element).hasClass('renting') && !$isTouch ) {
				var $elems = $(this.element).find('.wrap-circle');
				$elems.each(function(index, el) {
					$(el).addClass('anim-item');
				});
			} else if ( $(this.element).hasClass('contacts') && !flagGoogleMap ) {
				helloGoogleMap();
			}
		},
		offset: '40%'
	});

	$('.main-nav > li').on({
		mouseenter: function() {
			$(this).children('.sub-menu').addClass('active-sub-menu');
		},
		mouseleave: function() {
			$(this).children('.sub-menu').removeClass('active-sub-menu');
		}
	});

	$('.slider-services').owlCarousel({
		items: 1,
		autoHeight : true,
		nav: true,
		navText: false
	});

	function getRelatedContent(el){
		return $($(el).attr('href').replace('#', '.'));
	}

	$('.main-nav a:not(.langue-nav a)').on('click',function(e){
		var offsetContact = 50;
		e.preventDefault();
		$(this).closest('.active-mobile-menu').removeClass('active-mobile-menu');
		if (getRelatedContent(this).hasClass('contacts')) {
			$('html,body')
			  .stop()
			   .animate({scrollTop: getRelatedContent(this).offset().top - menuOffSet + offsetContact});
		} else {
			$('html,body')
			  .stop()
			   .animate({scrollTop: getRelatedContent(this).offset().top - menuOffSet});
		}
	});

	// $('.js-open-threed-model').magnificPopup({
	// 	type: 'ajax'
	// });
	
	$('.gall-picture').each( function() {
		var $pic     = $(this),
			getItems = function() {
				var items = [];
				$pic.find('a').each(function() {
					var $href   = $(this).attr('href'),
						$size   = $(this).data('size').split('x'),
						$width  = $size[0],
						$height = $size[1];
	 
					var item = {
						src : $href,
						w   : $width,
						h   : $height
					}
	 
					items.push(item);
				});
				return items;
			}
	 
		var items = getItems();

		var $pswp = $('.pswp')[0];
		$pic.on('click', 'li', function(e) {
			e.preventDefault();
			 
			var $index = $(this).index();
			var options = {
				index: $index,
				bgOpacity: 0.7,
				showHideOpacity: true
			}
			 
			// Initialize PhotoSwipe
			var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
			lightBox.init();
		});
	});

	function helloGoogleMap() {
		$(function() {
			var map, myLatLng;
				image = new google.maps.MarkerImage("/wp-content/themes/tech-plus/assets/images/map-point.png", null, null, null, new google.maps.Size(41,73));

			function initMap() {
				myLatLng = new google.maps.LatLng(43.146916, 5.763518);
				var mapOptions = {
				  center: latLngOffSet(myLatLng, 14, 400, 130),
				  zoom: 14,
				  scrollwheel: false,
				  mapTypeId: google.maps.MapTypeId.ROADMAP,
				  mapTypeControl: true,
				  panControl: true,
				  panControlOptions: {
				  	position: google.maps.ControlPosition.RIGHT_CENTER
				  },
				  mapTypeControlOptions: {
				      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
				      position: google.maps.ControlPosition.BOTTOM_CENTER
				  },
				  zoomControl: true,
				  zoomControlOptions: {
				      style: google.maps.ZoomControlStyle.LARGE,
				      position: google.maps.ControlPosition.RIGHT_CENTER
				  }
				};
				map = new google.maps.Map(document.getElementById('map'), mapOptions);
				var marker = new google.maps.Marker({
				  position: myLatLng,
				  icon: image,
				  animation: google.maps.Animation.DROP
				});
				
				var infowindow = new google.maps.InfoWindow({
				  content: "Centre d'entreprises le Val d'Aran, Bandol (83150) - France"
				});
				marker.setMap(map);
				//infowindow.open(map, marker);
				google.maps.event.addListener(marker, 'click', (function() {
				  infowindow.open(map, marker);
				}));
				function latLngOffSet(lat, zoom, x, y){
					var scale =  1 << zoom;
					if (window.matchMedia("(min-width: 1024px)").matches) {
						return new google.maps.LatLng(lat.A + y / scale, lat.F - x / scale);
					} else if (window.matchMedia("(max-width: 1024px)").matches) {
						return new google.maps.LatLng(lat.A, lat.F);
					}
				}
			}
			if (document.getElementById('map')) {
				//google.maps.event.addDomListener(window, 'load', initMap);
				google.maps.event.addDomListener(window, 'resize', function() {
				  var center = map.getCenter();
				  google.maps.event.trigger(map, 'resize');
				  map.setCenter(center);
				});
				initMap();
				flagGoogleMap = true;
			}
		});
	}

	function changeLang() {
		var langNav = $('.langue-nav'),
			selectedLang = langNav.find('#icon-lang');
			listLang = langNav.children('.sub-menu').find('[class *= "lang-"]');
			lang = document.location.href.match(/\?(lang=..)/)[1].replace('=', '-');

		selectedLang.addClass(lang);
		listLang.each(function(index, el) {
			if ($(this).hasClass(lang)) {
				$(this).closest('.level-two').remove();
			}
		});
	}

	changeLang();
	
	// Form Highlight
	var formHighlight = $('.wpcf7-form');

	formHighlight.on('blur', 'textarea, input:not(.novalid)', function() {
		var _this = $(this);
			val = _this.val();
		if ( val.length ) {
			_this.parent().parent().addClass('inp-highlight');
		} else {
			_this.parent().parent().removeClass('inp-highlight');
		}
	});

	

});


>>>>>>> f117fe679672d6595e7c3e324774a00f7be82033
