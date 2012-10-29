$(document).ready(function() {
	$('ul').roundabout({
		 btnNext: ".proximo",
		 btnPrev: ".anterior"
	}).ready(function () {
		var obj = $('.roundabout-in-focus');
		var span = obj.children('span'); 	
		
		$("#informacoes").html(span.html());
		
	}).bind("animationEnd",function () {
		var obj = $('.roundabout-in-focus');
		var span = obj.children('span'); 	
		
		$("#informacoes").html(span.html());
	});
	
	$('#valores table tr:odd').css("background","#efdbb6");
});

function mostra(id,cod_filme,nome) {	
	var obj = $("#informacoes #"+id);
	var link = $("#informacoes a");
	
	var url = "ajax/filmes.ajax.php";
	
	if (obj.hasClass("min")) {

		$.post(url,{
			acao: 'min',
			cod_filme: cod_filme
		},function (retorno) {
			var html = "<h2  onclick=\"mostra('"+id+"',"+cod_filme+",'"+nome+"')\">"+nome+"<h4 class=\"aolado_seta\">Menos Informações</h4></h2><a href=\"javascript:void(0)\" class=\"cima\" onclick=\"mostra('"+id+"',"+cod_filme+",'"+nome+"')\"></a>"	
			obj.html(html+retorno);
		});
		
		obj.removeClass("min");
		link.removeClass("baixo").addClass("cima");
		
	} else {
		$.post(url,{
			acao: 'min',
			cod_filme: cod_filme
		},function (retorno) {
			var html = "<h2  onclick=\"mostra('"+id+"',"+cod_filme+",'"+nome+"')\">"+nome+"<h4 class=\"aolado_seta\">Mais Informações</h4></h2><a href=\"javascript:void(0)\" class=\"baixo\" onclick=\"mostra('"+id+"',"+cod_filme+",'"+nome+"')\"></a>"	
			obj.html(html+retorno);
		});
		
		obj.addClass("min");
		link.removeClass("cima").addClass("baixo");
	}
}

function dias_programacao(dia, num_prox, link, num_dia_semana) {
	
	$('.links').removeClass('ativo');
	$(link).addClass('ativo');
	
	var id = $('#pro');
	var dia = dia;
	var num = num_prox;
	var num_dia_semana = num_dia_semana;
	
	var url = 'ajax/programacao.ajax.php';
	
	var dados = {
		acao: 'mudar_dia',
		dia: dia,
		num: num,
		num_dia_semana: num_dia_semana
	}
	
	$.post(url, dados, function(data) {
		$('#pro').html(data);
	});
}

function tab(id) {
	
	switch (id) {
		
		case 'sinopse': 
		
			$('#sinopse').show().removeClass('hidden');
			$('#ficha_tecnica').hide().addClass('hidden');
			
			$('.sinopse').addClass('ativo');
			$('.ficha_tecnica').removeClass('ativo');
		
		break;
		
		case 'ficha_tecnica': 
		
			$('#ficha_tecnica').show().removeClass('hidden');
			$('#sinopse').hide().addClass('hidden');
			
			$('.ficha_tecnica').addClass('ativo');
			$('.sinopse').removeClass('ativo');
		
		break;
		
	}
	
}
