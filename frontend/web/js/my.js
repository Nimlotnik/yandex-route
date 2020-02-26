$('document').ready(function(){
	$('.abs').addClass('zoomInDown').addClass('animated')
	
	$('.agr-item').hover(function(){
		$(this).addClass('pulse').addClass('animated');
	}, function(){
		$(this).removeClass('pulse').removeClass('animated');
	})
	$('.service-item').hover(function(){
		$(this).addClass('shake').addClass('animated');
	},function(){
		$(this).removeClass('shake').removeClass('animated');
	})
	$('.btn-order').hover(function(){
		$(this).addClass('shake').addClass('animated');
	},function(){
		$(this).removeClass('shake').removeClass('animated');
	})  
	
	
	
	
})
