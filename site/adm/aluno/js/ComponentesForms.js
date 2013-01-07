//Combo Box
$(document).ready(function(){
	$('.NFSelectRight').click(function(){		
		if($('.NFSelectTarget:hidden').length > 0){
			$('.NFSelectTarget:hidden').show();
		}else{
			$('.NFSelectTarget:visible').hide();
		}		
	});	
	
	$('.NFSelectOptions a').click(function(){		
		var valorSelecionado = $(this).attr("id");
		$('.NFOptionActive').removeClass('NFOptionActive');
		$(this).addClass('NFOptionActive');
		$('.NFSelectRight').html("R$"+valorSelecionado);
		$('.NFSelectTarget:visible').hide();
		$('#valorDeCompra').val(valorSelecionado);
		
	});	
	$('.NFSelectTarget, .NFSelectOptions').mouseleave(function(){
		$('.NFSelectTarget:visible').hide();
	})

});