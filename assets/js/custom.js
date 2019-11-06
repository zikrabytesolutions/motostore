$(document).ready(function(){

// $('.carousel').carousel()

// $('.portfolio-carousel').owlCarousel({
// 			dots:false,
// 			loop:true,
// 			margin:30,
// 			responsiveClass:true,
// 			responsive:{
// 				0:{
// 					items:1,
// 				},
// 				600:{
// 					items:2,
// 				},
// 				1000:{
// 					items:2, 
// 				}
// 			}
// 		})


// $('.testimonial-carousel').owlCarousel({
// 			dots:false,
// 			loop:true,
// 			margin:30,
// 			responsiveClass:true,
// 			responsive:{
// 				0:{
// 					items:1,
// 				},
// 				600:{
// 					items:1,
// 				},
// 				1000:{
// 					items:1, 
// 				}
// 			}
// 		})


// $('.related-products-carousel').owlCarousel({
// 			dots:false,
// 			loop:true,
// 			margin:30,
// 			responsiveClass:true,
// 			nav: true,
// 		    navText: [
// 		        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
// 		        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
// 		    ],
// 					responsive:{
// 				0:{
// 					items:1,
// 				},
// 				600:{
// 					items:2,
// 				},
// 				1000:{
// 					items:3, 
// 				}
// 			}
// 		})


 $('.item-nav').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.items-nav'
});
$('.items-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.item-nav',
  dots: false,
  centerMode: false,
  focusOnSelect: true
});

// $('.items-nav').on('mouseenter', '.slick-slide', function (e) {
// var $currTarget = $(e.currentTarget), 
//     index = $currTarget.data('slick-index'),
//     slickObj = $('.item-nav').slick('getSlick');

// slickObj.slickGoTo(index);

// });

// $('.sim-thumb').on('click', function() {
//   $('#main-product-image').attr('src', $(this).attr('src'));
// })

// $('#main-product-image').on('click', function() {
//   $('.item-fancy').attr('href', $(this).attr('src'));
// })


// $('[data-fancybox="images"]').fancybox({
//   buttons : [ 
//     'slideShow',
//     'share',
//     'zoom',
//     'fullScreen',
//     'close'
//   ],
//   thumbs : {
//     autoStart : true
//   }
// });

//item calculate

// //Reduce quantity by 1 if clicked
// $(document).on("click", ".product-quantity-subtract", function(e){
//   var value = $("#product-quantity-input").val();
//   //console.log(value);
//   var newValue = parseInt(value) - 1;
//   if(newValue < 0) newValue=0;
//   $("#product-quantity-input").val(newValue);
// });

// //Increase quantity by 1 if clicked
// $(document).on("click", ".product-quantity-add", function(e){
//   var value = $("#product-quantity-input").val();
//   //console.log(value);
//   var newValue = parseInt(value) + 1;
//   $("#product-quantity-input").val(newValue);
// });


// Instantiate EasyZoom instances
var $easyzoom = $('.easyzoom').easyZoom();

// Get an instance API
var api = $easyzoom.data('easyZoom');


//map

// // Initialize and add the map
// function initMap() {
//   // The location of Uluru
//   var motocafe = {lat: 12.98760655, lng: 77.62060493};
//   // The map, centered at motocafe
//   var map = new google.maps.Map(
//       document.getElementById('map'), {zoom: 4, center: motocafe});
//   // The marker, positioned at Uluru
//   var marker = new google.maps.Marker({position: motocafe, map: map});
// }

// initMap();


//Contact form Submission

$('#motostoreContactForm').on('submit', function(e) {

	e.preventDefault();
	
	$('.has-error').removeClass('has-error');
	$('.js-show-feedback').removeClass('js-show-feedback');

	var form = $(this);
	var name = form.find('#name').val();
	var email = form.find('#email').val();
	var phone = form.find('#phone').val();
	var message = form.find('#message').val();
	//var ajaxurl = form.data('url');
	
	//Contact form Error

	if( name === '' ) {

		$('#name').parent('.form-group').addClass('has-error');
		return;

	}

	if( email === '' ) {

		$('#email').parent('.form-group').addClass('has-error');
		return;

	}

	if( phone === '' ) {

		$('#phone').parent('.form-group').addClass('has-error');
		return;

	}

	if( message === '' ) 
	{

		$('#message').parent('.form-group').addClass('has-error');
		return;

	}
})

// pricerange slider


// var snapSlider = document.getElementById('price-slider');
// var snapValues = [
// 	document.getElementById('slider-value-lower'),
// 	document.getElementById('slider-value-upper')
// ];
// var range =
//  {
//   'min': 500,
//   '10%': 500,
//   '20%': 1000,
//   '30%': 1500,
//   '40%': 2000,
//   '50%': 2500,
//   '60%': 3000,
//   '70%': 3500,
//   '80%': 4000,
//   '90%': 4500,
//   '100%': 5000,
//   'max': 5000
// };



// noUiSlider.create(snapSlider, {
// 	start: [ 500, 4000 ],
// 	snap: true,
// 	connect: true,
//   tooltips: false,
// 	range: range
// });

// snapSlider.noUiSlider.on('update', function( values, handle ) {
// 	snapValues[handle].innerHTML = values[handle];
// });

// $('#range').text(JSON.stringify(range, null, '\t'));

});

