$('.cycle-slideshow').on( 'cycle-after', function( event, opts ) {
	var imgAtivo = (opts.slideNum - 1);
	removeSelecionado();
	$('.img-'+imgAtivo).addClass('borda-azul');	
});

function removeSelecionado() {
	$('.thumb').removeClass('borda-azul');
}