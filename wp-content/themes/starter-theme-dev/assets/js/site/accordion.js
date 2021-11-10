"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		accordionLink: $('.set > .accordion-cta-link'),
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){

			this.$dom.accordionLink.on("click", function(e) {
				e.preventDefault();
				if ($(this).hasClass("active")) {
					$(this).removeClass("active");
					$(this)
						.siblings(".accordion-content")
						.slideUp(500);
					$(".set > .accordion-cta-link i")
						.removeClass("icon-angle-up")
						.addClass("icon-angle-down");
						
					} else {
					$(".set > .accordion-cta-link i")
						.removeClass("icon-angle-up")
						.addClass("icon-angle-down");
					$(this)
						.find("i")
						.removeClass("icon-angle-down")
						.addClass("icon-angle-up");
					$(".set > .accordion-cta-link").removeClass("active");
					$(this).addClass("active");
					$(".accordion-content").slideUp(500);
					$(this)
						.siblings(".accordion-content")
						.slideDown(500);
					}
			});
		}
    },

};


  