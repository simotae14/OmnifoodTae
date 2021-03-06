$(document).ready(function () {
  
  /* Per la sticky navigation */
  
  $('.js--section-features').waypoint(function (direction) {
    if (direction === "down") {
      $('nav').addClass('sticky');
    } else {
      $('nav').removeClass('sticky');      
    }
  }, {
    offset: '60px'
  });
  
  /* Per lo scroll dei bottoni */
  $('.js--scroll-to-plans').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-plans').offset().top}, 1000);
  });
  /* Per lo scroll dei bottoni */
  $('.js--scroll-to-start').click(function () {
    $('html, body').animate({scrollTop: $('.js--section-features').offset().top}, 1000);
  });
  
  /* Scroll Navigazione */
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
        return false;
        }
      }
    });
  });
  
  /* Animazioni allo Scroll */
  $('.js--wp-1').waypoint(function (direction) {
    $('.js--wp-1').addClass('animated fadeIn');
  }, {
    offset: '50%'
  });
  $('.js--wp-2').waypoint(function (direction) {
    $('.js--wp-2').addClass('animated fadeInUp');
  }, {
    offset: '50%'
  });
  $('.js--wp-3').waypoint(function (direction) {
    $('.js--wp-3').addClass('animated fadeIn');
  }, {
    offset: '50%'
  });
  $('.js--wp-4').waypoint(function (direction) {
    $('.js--wp-4').addClass('animated pulse');
  }, {
    offset: '50%'
  });
  
  /* Maps */
  var map = new GMaps({
    div: '.map',
    lat: 45.6098934,
    lng: 9.2055871,
    zoom: 12
  })
  
  map.addMarker({
    lat: 45.6098934,
    lng: 9.2455871,
    title: 'Lissone',
    infoWindow: {
      content: '<p>La nostra filiale di Lissone</p>'
    }
  });

});