$(document).ready(function(){$(".js--section-features").waypoint(function(a){"down"===a?$("nav").addClass("sticky"):$("nav").removeClass("sticky")},{offset:"60px"}),$(".js--scroll-to-plans").click(function(){$("html, body").animate({scrollTop:$(".js--section-plans").offset().top},1e3)}),$(".js--scroll-to-start").click(function(){$("html, body").animate({scrollTop:$(".js--section-features").offset().top},1e3)}),$(function(){$('a[href*="#"]:not([href="#"])').click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash);if(a=a.length?a:$("[name="+this.hash.slice(1)+"]"),a.length)return $("html, body").animate({scrollTop:a.offset().top},1e3),!1}})}),$(".js--wp-1").waypoint(function(a){$(".js--wp-1").addClass("animated fadeIn")},{offset:"50%"}),$(".js--wp-2").waypoint(function(a){$(".js--wp-2").addClass("animated fadeInUp")},{offset:"50%"}),$(".js--wp-3").waypoint(function(a){$(".js--wp-3").addClass("animated fadeIn")},{offset:"50%"}),$(".js--wp-4").waypoint(function(a){$(".js--wp-4").addClass("animated pulse")},{offset:"50%"});var a=new GMaps({div:".map",lat:45.6098934,lng:9.2055871,zoom:12});a.addMarker({lat:45.6098934,lng:9.2455871,title:"Lissone",infoWindow:{content:"<p>La nostra filiale di Lissone</p>"}})});