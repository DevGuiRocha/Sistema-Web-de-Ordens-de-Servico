$(function(){

	$('.hidden').hide();

  $('select[name=funcionario2]').html($('div.funcionario-f1').html());


	$('select[name=setor2]').change(function(){
		var id = $('select[name=setor2]').val();

		$('select[name=funcionario2]').empty();

		$('select[name=funcionario2]').html($('div.funcionario-f' + id).html());

	});

});
