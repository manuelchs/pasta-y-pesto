$(function(){
    var transicion1 = 300;
	var tiempoAutoplay = 6000;
	$(".slider-item:last").insertBefore(".slider-item:first");
	$("#slider").css('margin-left','-'+100+'%');
	
	$("#moveDER").click(function(){
        moverD();
        clearInterval(interval);
        autoplay();
    });
	
	$("#moveIZQ").click(function(){
        moverI();
        clearInterval(interval);
        autoplay();
        
    });
	
	function moverD() {
		$("#slider").animate({marginLeft:"-"+200+"%"},transicion1,function(){
			$(".slider-item:first").insertAfter(".slider-item:last");
			$("#slider").css("margin-left","-"+100+"%");
		});
	}
	
	function moverI() {
		$("#slider").animate({marginLeft: 0},transicion1,function(){
			$(".slider-item:last").insertBefore(".slider-item:first");
			$("#slider").css("margin-left","-"+100+"%");
		});
	}
	
	function autoplay()
	{
		interval = setInterval(function(){moverD();}, tiempoAutoplay);
	}
	
	autoplay();
});