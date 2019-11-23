$(document).ready(function() {

$('.carousel').carousel()

$('.portfolio-carousel').owlCarousel({
			dots:false,
			loop:true,
			margin:30,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:2,
				},
				1000:{
					items:2, 
				}
			}
		})


$('.testimonial-carousel').owlCarousel({
			dots:false,
			loop:true,
			margin:30,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
				},
				600:{
					items:1,
				},
				1000:{
					items:1, 
				}
			}
		})


$('.related-products-carousel').owlCarousel({
			dots:false,
			loop:true,
			margin:30,
			responsiveClass:true,
			nav: true,
		    navText: [
		        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
		        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
		    ],
					responsive:{
				0:{
					items:1,
				},
				600:{
					items:2,
				},
				1000:{
					items:3, 
				}
			}
		})


var itemNav = document.getElementById('item-nav');

if(itemNav){

	$('#item-nav').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '#items-nav'
	});

}

var itemsNav = document.getElementById('items-nav');

if(itemsNav){

	$('#items-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '#item-nav',
		dots: false,
		centerMode: false,
		focusOnSelect: true
	});

}

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

//Reduce quantity by 1 if clicked
$(document).on("click", ".product-quantity-subtract", function(e){
  var value = $("#product-quantity-input").val();
  //console.log(value);
  var newValue = parseInt(value) - 1;
  if(newValue < 1) newValue=1;
  $("#product-quantity-input").val(newValue);
});


//Increase quantity by 1 if clicked
$(document).on("click", ".product-quantity-add", function(e){
  var value = $("#product-quantity-input").val();
  //console.log(value);
  var newValue = parseInt(value) + 1;
  $("#product-quantity-input").val(newValue);
});


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

	if( message === '' ) {

		$('#message').parent('.form-group').addClass('has-error');
		return;

	}
})

// pricerange slider

if(document.getElementById('price-slider')) {


var snapSlider = document.getElementById('price-slider');
var snapValues = [
	document.getElementById('slider-value-lower'),
	document.getElementById('slider-value-upper')
];
var range = {
  'min': 0,
  '10%': 50,
  '10.1%': 51,
  '10.2%': 52,
  '10.25%': 52.5,
  '20%': 100,
  '30%': 150,
  '35%': 160,
  '40%': 500,
  '42.3%': 666,
  '50%': 800,
  'max': 1000
};



noUiSlider.create(snapSlider, {
	start: [ 0, 500 ],
	snap: true,
	connect: true,
  tooltips: false,
	range: range
});

snapSlider.noUiSlider.on('update', function( values, handle ) {
	snapValues[handle].innerHTML = values[handle];
});

}

$('#range').text(JSON.stringify(range, null, '\t'));



//show password
$(document).ready(function(){
$('#hidePw').hide();
$('#hidePw1').hide();
})

var showPW = document.getElementById('showPw');

if(showPW){

showPw.addEventListener('click', showPassword);
function showPassword() {
	$('#showPw').hide();
	$('#hidePw').show();

$('#showPw').toggleClass('shw');			
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

}

var hidePW = document.getElementById('hidePw');

if(hidePW){

hidePw.addEventListener('click', hidePassword);
function hidePassword() {
	$('#showPw').show();
	$('#hidePw').hide();

$('#hidePw').toggleClass('shw');			
  var x = document.getElementById("password1");
  if (x.type === "text") {
    x.type = "password";
  } else {
    x.type = "text";
  }
}

}

var showPW1 = document.getElementById('showPw1');

if(showPW1){

showPw1.addEventListener('click', showPassword1);
function showPassword1() {
	$('#showPw1').hide();
	$('#hidePw1').show();

$('#showPw1').toggleClass('shw');			
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

}

var hidePW1 = document.getElementById('hidePw1');

if(hidePW1){

hidePw.addEventListener('click', hidePassword1);
function hidePassword1() {
	$('#showPw1').show();
	$('#hidePw1').hide();

$('#hidePw1').toggleClass('shw');			
  var x = document.getElementById("password");
  if (x.type === "text") {
    x.type = "password";
  } else {
    x.type = "text";
  }
}

}







//datepicker

$('[data-toggle="datepicker"]').datepicker();

});

$('.category-carousel').owlCarousel({
			dots:false,
			loop:true,
			margin:30,
			responsiveClass:true,
			nav: true,
		    navText: [
		        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
		        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
		    ],
					responsive:{
				0:{
					items:1,
				},
				600:{
					items:2,
				},
				1000:{
					items:4, 
				}
			}
		})
$('.pay-book-carousel').owlCarousel({
			dots:false,
			loop:true,
			margin:30,
			responsiveClass:true,
			nav: true,
		    navText: [
		        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
		        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
		    ],
					responsive:{
				0:{
					items:1,
				},
				600:{
					items:2,
				},
				1000:{
					items:3, 
				}
			}
		})

		$('.checkout').find("input[type=checkbox][name=shipDiffAdd]").on('change', function() {
			$("#shipToDiffAdd").fadeToggle(200);
		});

$('.checkout').find("input[type=checkbox][value=haveAcc]").on('change', function() {
	$("#addPw").fadeToggle(200);
	$("#addmsg").hide(200);
	$("input[value='createAcc']").prop('checked', false);
});

$("#addmsg").hide(200);
$('.checkout').find("input[type=checkbox][value=createAcc]").on('change', function() {
	$("#addmsg").fadeToggle(200);
	$("#addPw").hide(200);
	$("input[value='haveAcc']").prop('checked', false);
});


$('.search-ico').on('click', function() {
	$(".search-bar").toggle(200);
});
$('.close-ico').on('click', function() {
	$(".search-bar").toggle(200);
});
  

// var min = "<?= $min; ?>";
// var max = "<?= $max; ?>";
// $( function() {
// $("#slider-range" ).slider({
// 	range: true,
// 	min: 0,
// 	max: 100000,
// 	values: [min , max ],
// 	step: 100,
// 	slide: function( event, ui ) 
// 	{
// 		$( "#min" ).val(  ui.values[ 0 ]);
// 		$( "#max" ).val( ui.values[ 1 ] );
	   
// 	}
	
// });
// $( "#min" ).val(min);
// $( "#max" ).val(max);

// } );

$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
