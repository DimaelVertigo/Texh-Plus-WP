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
			hdr = $('.main-header').height() - menuOffSet;

		$(window).scroll(function() {
			if( $(this).scrollTop() > hdr ) {
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
		e.preventDefault();
		$(this).closest('.active-mobile-menu').removeClass('active-mobile-menu');
		$('html,body').stop().animate({scrollTop: getRelatedContent(this).offset().top - menuOffSet});
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
				image = new google.maps.MarkerImage("assets/images/map-point.png", null, null, null, new google.maps.Size(41,73));

			function initMap() {
				myLatLng = new google.maps.LatLng(43.146916, 5.763518);
				var mapOptions = {
				  center: latLngOffSet(myLatLng, 15, 400, 130),
				  zoom: 15,
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

});