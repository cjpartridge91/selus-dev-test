'use strict';

// GLOBAL VARS

var winWidth = window.innerWidth;

// Document Ready
jQuery('document').ready(function () {
	console.log('Selus Test Theme');
	var scrollPos = $(document).scrollTop();

	//initMenu();
	setTimeout(function(){
		$('.loader-overlay').fadeOut();
	}, 750);
});

$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fadeIn").each(function() {
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      if (objectBottom < windowBottom) {
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
      } else {
        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
      }
    });
  }).scroll();
});

