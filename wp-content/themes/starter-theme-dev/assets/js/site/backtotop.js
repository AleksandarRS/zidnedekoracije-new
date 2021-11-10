"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		backToTop: $('#toTop'),
		toggleSearchIcon: $('.toggle-icon'),
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			$(window).scroll(function() {
				if ($(this).scrollTop()) {
					$('#toTop').fadeIn();
				} else {
					$('#toTop').fadeOut();
				}
			});
			// this.$dom.backToTop.click(function () {
			// 	console.log('clicked');
			// 	$("html, body").animate({scrollTop: 0}, 1000);
			// });
			this.$dom.backToTop.click(function(e) {
				e.preventDefault();
				$("html, body").animate({scrollTop: 0}, 1000);
			});
		}
    },

};


