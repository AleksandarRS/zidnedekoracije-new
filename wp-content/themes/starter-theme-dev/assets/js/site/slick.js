"use strict";

    
/**  
 * 1. Add [ "slick-carousel": "1.8.1" ], to package.json
 * 2. npm install
 * 3. Import slick scss file in assets/scss/plugins/slick.scss => @import "../../../node_modules/slick-carousel/slick/slick.scss";
 * 4. Add require('slick-carousel');
 * 5. Initialize slick
 * 
*/
require('slick-carousel');

module.exports = {
	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		slickSliderProducts: $(".products-slider-wrapper"),
		slickSliderTestimonials: $(".testimonials-slider"),
		slickSliderPagination: $(".slick-slider-dots"),
	},
	

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {

		// this.$dom.slickSlider.slick({
		// 	slidesToScroll: 1,
		// 	slidesToShow: 3,
		// 	centerMode: true,
		// 	centerPadding: 100,
		// 	dots: true,
		// 	arrows: true,
		// 	prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
		// 	nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
		// });

		
		
		if ($(".products-slider-wrapper").length) {
			var currentSlide;
			var slidesCount;
			var sliderCounter = document.createElement('div');
			sliderCounter.classList.add('slider__counter');
			
			var updateSliderCounter = function(slick) {
				currentSlide = slick.slickCurrentSlide() + 1;
				slidesCount = slick.slideCount;
				$(sliderCounter).html('<span>' + currentSlide + '/</span>' + '<span>' + slidesCount + '</span>')
			};
		  
			$(".products-slider-wrapper").on('init', function(event, slick) {
				$(".products-slider-wrapper").append(sliderCounter);
				updateSliderCounter(slick);
			});
		  
			$(".products-slider-wrapper").on('afterChange', function(event, slick, currentSlide) {
				updateSliderCounter(slick, currentSlide);
			});

			$(".products-slider-wrapper").slick({
				slidesToScroll: 1,
				slidesToShow: 1,
				dots: true,
				arrows: false,
				customPaging : function(slider, i) {
					var thumb = $(slider.$slides[i]).find('.slick-slider-dots');
					return thumb;
			   }
			// dotsClass: 'custom_paging',
			// 	customPaging: function (slider, i) {
			// 		//FYI just have a look at the object to find aviable information
			// 		//press f12 to access the console
			// 		//you could also debug or look in the source
			// 		return (i + 1) + '/' + slider.slideCount;
			// 	}
			});
		}

		// this.$dom.slickSliderPagination.slick({
		// 	dots: true,
		// 	focusOnSelect: true,
		// 	asNavFor: '.products-slider-wrapper',
		// });

		this.$dom.slickSliderTestimonials.slick({
			slidesToScroll: 1,
			slidesToShow: 4,
			infinite: true,
			variableWidth: true,
			dots: false,
			arrows: true,
			prevArrow: "<button type='button' class='slick-prev pull-left'><i class='icon icon-arrow-left' aria-hidden='true'></i></button>",
			nextArrow: "<button type='button' class='slick-next pull-right'><i class='icon icon-arrow-right' aria-hidden='true'></i></button>",
		});

	}
};