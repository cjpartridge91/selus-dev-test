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

