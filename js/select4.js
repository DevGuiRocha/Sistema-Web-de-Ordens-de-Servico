$(function(){

	$('.hidden').hide();

  $('select[name=funcionario4]').html($('div.funcionario-f1').html());


	$('select[name=setor4]').change(function(){
		var id = $('select[name=setor4]').val();

		$('select[name=funcionario4]').empty();

		$('select[name=funcionario4]').html($('div.funcionario-f' + id).html());

	});

});
