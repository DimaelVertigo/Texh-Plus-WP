$(document).ready(function(){function e(e){return $($(e).attr("href").replace("#","."))}function n(){$(function(){function e(){function e(e,n,t,a){var o=1<<n;return window.matchMedia("(min-width: 1024px)").matches?new google.maps.LatLng(e.A+a/o,e.F-t/o):window.matchMedia("(max-width: 1024px)").matches?new google.maps.LatLng(e.A,e.F):void 0}t=new google.maps.LatLng(43.146916,5.763518);var a={center:e(t,14,400,130),zoom:14,scrollwheel:!1,mapTypeId:google.maps.MapTypeId.ROADMAP,mapTypeControl:!0,panControl:!0,panControlOptions:{position:google.maps.ControlPosition.RIGHT_CENTER},mapTypeControlOptions:{style:google.maps.MapTypeControlStyle.HORIZONTAL_BAR,position:google.maps.ControlPosition.BOTTOM_CENTER},zoomControl:!0,zoomControlOptions:{style:google.maps.ZoomControlStyle.LARGE,position:google.maps.ControlPosition.RIGHT_CENTER}};n=new google.maps.Map(document.getElementById("map"),a);var o=new google.maps.Marker({position:t,icon:image,animation:google.maps.Animation.DROP}),i=new google.maps.InfoWindow({content:"Centre d'entreprises le Val d'Aran, Bandol (83150) - France"});o.setMap(n),google.maps.event.addListener(o,"click",function(){i.open(n,o)})}var n,t;image=new google.maps.MarkerImage("/wp-content/themes/tech-plus/assets/images/map-point.png",null,null,null,new google.maps.Size(41,73)),document.getElementById("map")&&(google.maps.event.addDomListener(window,"resize",function(){var e=n.getCenter();google.maps.event.trigger(n,"resize"),n.setCenter(e)}),e(),m=!0)})}function t(){var e=$(".langue-nav"),n=e.find("#icon-lang");listLang=e.children(".sub-menu").find('[class *= "lang-"]'),lang=document.location.href.match(/\?(lang=..)/)[1].replace("=","-"),n.addClass(lang),listLang.each(function(e,n){$(this).hasClass(lang)&&$(this).closest(".level-two").remove()})}var a=$("html"),o=a.hasClass("touch"),i=$(".threed-model"),s='<iframe src="http://www.sculpteo.com/fr/embed/design/uq5zeguU?viewer=static&amp;click=none&amp;panel=0" scrolling="auto" width="100%" height="100%" class="sculpteo-viewer"></iframe>',l=$(".section"),m=!1,c=o?0:88,r=$(".slider-list li"),p=$(".btn-mobile-menu");if(i.one("click",function(){$(this).addClass("active-model"),$(s).appendTo(i)}),p.on("click",function(){var e=$(this),n=e.siblings(".main-nav");n.toggleClass("active-mobile-menu")}),!o){var h=$(".main-header-top");mnbottom=$(".main-header-bottom"),mns="main-nav-scrolled",mh=$(".main-header"),hdr=$(".main-header").height()-c-2,$(window).scroll(function(){$(this).scrollTop()>=hdr?(mh.css("padding-top","88px"),h.addClass(mns)):(mh.css("padding-top","0"),h.removeClass(mns))})}setTimeout(function(){mnbottom.addClass("anim-bg"),r.each(function(e,n){$(n).addClass("anim-item")})},500),l.waypoint({handler:function(e){if($(this.element).hasClass("company")&&!o){var t=$(this.element).find('[class *= "ico-a-"]');t.each(function(e,n){$(n).addClass("anim-item")})}else if($(this.element).hasClass("renting")&&!o){var t=$(this.element).find(".wrap-circle");t.each(function(e,n){$(n).addClass("anim-item")})}else $(this.element).hasClass("contacts")&&!m&&n()},offset:"40%"}),$(".main-nav > li").on({mouseenter:function(){$(this).children(".sub-menu").addClass("active-sub-menu")},mouseleave:function(){$(this).children(".sub-menu").removeClass("active-sub-menu")}}),$(".js-blog-langue-nav").on({mouseenter:function(){$(this).children(".sub-menu").addClass("active-sub-menu")},mouseleave:function(){$(this).children(".sub-menu").removeClass("active-sub-menu")}}),$(".slider-services").owlCarousel({items:1,autoHeight:!0,nav:!0,navText:!1}),$(".main-nav a:not(.langue-nav a)").on("click",function(n){var t=50;n.preventDefault(),$(this).closest(".active-mobile-menu").removeClass("active-mobile-menu"),e(this).hasClass("contacts")?$("html,body").stop().animate({scrollTop:e(this).offset().top-c+t}):$("html,body").stop().animate({scrollTop:e(this).offset().top-c})}),$(".gall-picture").each(function(){var e=$(this),n=function(){var n=[];return e.find("a").each(function(){var e=$(this).attr("href"),t=$(this).data("size").split("x"),a=t[0],o=t[1],i={src:e,w:a,h:o};n.push(i)}),n},t=n(),a=$(".pswp")[0];e.on("click","li",function(e){e.preventDefault();var n=$(this).index(),o={index:n,bgOpacity:.7,showHideOpacity:!0},i=new PhotoSwipe(a,PhotoSwipeUI_Default,t,o);i.init()})}),t();var d=$(".wpcf7-form");d.on("blur","textarea, input:not(.novalid)",function(){var e=$(this);val=e.val(),val.length?e.parent().parent().addClass("inp-highlight"):e.parent().parent().removeClass("inp-highlight")})});