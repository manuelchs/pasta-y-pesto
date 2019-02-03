$(function(){
    var transicion1 = 300;
	var tiempoAutoplay = 6000;
	$(".slider-sucursal-item:last").insertBefore(".slider-sucursal-item:first");
	$("#slider-sucursal").css('margin-left','-'+100+'%');
	
	$("#sucursalDER").click(function(){
        moverSucursalD();
    });
	
	$("#sucursalIZQ").click(function(){
        moverSucursalI();
    });
	
	function moverSucursalD() {
		$("#slider-sucursal").animate({marginLeft:"-"+200+"%"},transicion1,function(){
			$(".slider-sucursal-item:first").insertAfter(".slider-sucursal-item:last");
			$("#slider-sucursal").css("margin-left","-"+100+"%");
		});
	}
	
	function moverSucursalI() {
		$("#slider-sucursal").animate({marginLeft: 0},transicion1,function(){
			$(".slider-sucursal-item:last").insertBefore(".slider-sucursal-item:first");
			$("#slider-sucursal").css("margin-left","-"+100+"%");
		});
	}
});