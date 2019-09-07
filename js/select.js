$(function(){

	$('.hidden').hide();

  $('select[name=funcionario]').html($('div.funcionario-f1').html());


	$('select[name=setor]').change(function(){
		var id = $('select[name=setor]').val();

		$('select[name=funcionario]').empty();

		$('select[name=funcionario]').html($('div.funcionario-f' + id).html());

	});

});
