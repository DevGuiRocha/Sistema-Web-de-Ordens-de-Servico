$(function(){

	$('.hidden').hide();

  $('select[name=funcionario3]').html($('div.funcionario-f1').html());


	$('select[name=setor3]').change(function(){
		var id = $('select[name=setor3]').val();

		$('select[name=funcionario3]').empty();

		$('select[name=funcionario3]').html($('div.funcionario-f' + id).html());

	});

});
