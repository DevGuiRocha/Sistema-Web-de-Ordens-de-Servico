<?php
	include_once("mysql_conect.php");
	$id = $_GET['id'];
	$result = "SELECT * FROM criar WHERE ID = '$id' ";
	$resultado = mysqli_query ($conexao, $result);
	$row = mysqli_fetch_assoc ($resultado);
	if ($conexao->connect_error) {
			die("Falha ao realizar a conexão: " . $conexao->connect_error); }
?>


<!DOCTYPE html>
<html lang = "br">

<title> Visualização</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../css/form2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/oculta.js"></script>
<script type="text/javascript" src="../js/select.js"></script>

<script>

function toggle(obj) {
var el = document.getElementById(obj);
if ( el.style.display != 'none' ) {
el.style.display = 'none';
}
else {
el.style.display = '';
}
}

</script>

<div class="top">
</br>
		<p>C.I. recebida</p>
		<img id= "top" src = "../img/SDE.png"/>
</div>
</br>

<img id= "form" src = "../img/SDE.png"></img>


<form method="post" action="altera_ci2.php" enctype="multipart/form-data">

<fieldset>
</br>
</br>
</br>
	<table>	
	<tr>
	</tr>
	<tr> </tr>
	</br>
	</br>
	
	<tr style="
	margin-left:2px;
    margin-top: -22px;
    position: absolute;">	
	<td>C.I Nº: </td>
	<td style="
    position: absolute;
    margin-left: 170px;
    margin-top: -29px;" ><input type="text" name="num" size="10" readonly="true" value="<?php echo $row ['Num_ci']?> / 2019" /></td>

	<td> </td>
	</tr>
	
	
	<tr>
	<td rowspan="20"><td>Data:</td>
	<td><input type="date" name="data" readonly="true" value="<?php echo $row ['Data']?>" /></td></td>
	<td></td>
	</tr>
	
	<tr>
	  <td> Setor: </td>
	  
	  <td> <input type="text" name="setor" size="50" readonly="true" value="<?php echo $row ['Funcao_Setor_D']?>"> </td>
	</tr>
	
	<tr>
	  <td> DE: </td>
	  <td><input type="text" name="de" size="50" readonly="true" value="<?php echo $row ['De']?>"></td>
	</tr>

	<tr>
	  <td> Setor: </td>
	  <td> <input type="text" name="setor2" size="50" readonly="true" value="<?php echo $row ['Funcao_Setor_P']?>"> </td>
	</tr>
	
		<tr>
	  <td> PARA: </td>
	  <td><input type="text" name="para" size="50" readonly="true" value="<?php echo $row ['Para']?>"></td>
	</tr>
	
	
	<tr>
	  <td> Assunto: </td>
	  <td><input type="text" name="assunto" size="50" readonly="true" value="<?php echo $row ['Assunto']?>"></td>
	</tr>
	
	<tr>
	<td> Corpo da mensagem: </td>
	<td>         <div id="dvCentro">
            <textarea id="txtArtigo" name="txtArtigo" readonly="true"> <?php echo $row ['CI']?> </textarea>
        </div> </td>
	</tr>
	
	
		

	<td> </td>
	<td>  </td>
	</tr>
	
	<tr>
	<td>Resposta:</td>
	<td> 	
	<textarea id="msg2" name="msg2" ></textarea>
	</br>	
	</td>
	</tr>
	
	<tr>
	<td>   </td>
	<td> (*) Favor anexar apenas PDF! </td>
	</tr>
	
	<tr>
	<td> Anexar arquivo: </td>
	<td><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	<input name="userfile" type="file" id="userfile"></td>
	</tr>
	
	<tr>
	<td>Selecione o status da C.I.: </td>
	<td> <input type="radio" name="status" value="Respondida" required>Respondida</td>
	</tr>


	</table>

</br>
</br>
	
<table>	

	
	
	

</table>
	</fieldset>
	
	

	

		<button type="submit" id="add" name="salvar" value="Salvar">Enviar</button>
		<input id= "voltar2" type="button" value="Voltar" onClick="history.go(-1)">
		
		


	</form>
	</br>
	
	</html>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>CKEditor</title>
        <meta charset="utf-8" />
    </head>
    <body>

        <script src="../ckeditor/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'txtArtigo' );
				CKEDITOR.replace( 'msg2' );
        </script>
    </body>
</html>