$(document).ready(function(){
	
	$('.icon').click (function(event){
		event.preventDefault();
		if( $ (this).hasClass('inOut')  ){
			$('.tromas-option').stop().animate({right:'0px'},500 );
		} else{
			$('.tromas-option').stop().animate({right:'-200px'},500 );
		} 
		$(this).toggleClass('inOut');
		return false;

	}  );

	$('.select-layout .boxed').on( "click", function(){
		$('#layout').addClass('boxed-layout');
	});	

	$('.select-layout .full-width').on( "click", function(){
		$('#layout').removeClass('boxed-layout');
	});	

	$('.select-layout .boxed').on( "click", function(){
		$('body').addClass('box-bg');
	});	
	
	$(".color1" ).click(function(){
		$(".logo img" ).attr("src", "images/logo.png" );
		return false;
	});
	
	$(".color2" ).click(function(){
		$(".logo img" ).attr("src", "images/logo2.png" );
		return false;
	});
	$(".color3" ).click(function(){
		$(".logo img" ).attr("src", "images/logo3.png" );
		return false;
	});
	$(".color4" ).click(function(){
		$(".logo img" ).attr("src", "images/logo4.png" );
		return false;
	});
	$(".color5" ).click(function(){
		$(".logo img" ).attr("src", "images/logo5.png" );
		return false;
	});
	$(".color6" ).click(function(){
		$(".logo img" ).attr("src", "images/logo6.png" );
		return false;
	});
	
	$(".color7" ).click(function(){
		$(".logo img" ).attr("src", "images/logo7.png" );
		return false;
	});
	
	$(".color8" ).click(function(){
		$(".logo img" ).attr("src", "images/logo8.png" );
		return false;
	});
	
	
		
	$(".color1" ).click(function(){
		$("#tromas" ).attr("href", "css/skin/skin1.css" );
		return false;
	});
	
	$(".color2" ).click(function(){
		$("#tromas" ).attr("href", "css/skin/skin2.css" );
		return false;
	});
	
	$(".color3" ).click(function(){
		$("#tromas" ).attr("href", "css/skin/skin3.css" );
		return false;
	});
	
	$(".color4" ).click(function(){
		$("#tromas" ).attr("href", "css/skin/skin4.css" );
		return false;
	});
		
	$(".color5" ).click(function(){
		$("#tromas" ).attr("href", "css/skin/skin5.css" );
		return false;
	});
	
	$(".color6" ).click(function(){
		$("#tromas" ).attr("href", "css/skin/skin6.css" );
		return false;
	});
	
	$(".color7" ).click(function(){
		$("#tromas" ).attr("href", "css/skin/skin7.css" );
		return false;
	});
	
	$(".color8" ).click(function(){
		$("#tromas" ).attr("href", "css/skin/skin8.css" );
		return false;
	});
	
	$(".bg-one" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('images/bg-1.png')" );
		return false;
	});
		
	$(".bg-two" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('images/bg-2.png')" );
		return false;
	});
		
	$(".bg-three" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('images/bg-3.png')" );
		return false;
	});
		
	$(".bg-four" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('images/bg-4.png')" );
		return false;
	});
	
	$(".bg-five" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('images/bg-5.png')" );
		return false;
	});
	$(".bg-six" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('images/bg-6.png')" );
		return false;
	});
	$(".bg-seven" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('images/bg-7.png')" );
		return false;
	});
	$(".bg-eight" ).click(function(){
		$("#bg" ).attr("style", "background-image:url('images/bg-8.png')" );
		return false;
	});
		
	
} );
