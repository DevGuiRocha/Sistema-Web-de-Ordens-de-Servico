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
<script type="text/javascript" src="../js/select.js"></script>
<script type="text/javascript" src="../js/select2.js"></script>
<script type="text/javascript" src="../js/oculta.js"></script>

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
		<p>C.I. enviada</p>
		<a href="../index.php"><img id= "top" src = "../img/SDE.png"></img></a>
</div>
</br>

<img id= "form" src = "../img/SDE.png"></img>

<form>

<fieldset>
</br>
</br>
</br>

<form>	
	
	<table>
	<tr>
	</tr>
	<tr> </tr>
	</br>
	</br>
	
	<tr>	
	<td style="
    position: absolute;
    margin-top: -22px;
    margin-left: 4px;">C.I Nº: </td>
	<td style="margin-left: 143px;position: absolute;margin-top: -27px;"><input type="text" name="num" size="10" readonly="true"  value="<?php echo $row ['Num_ci']?> / 2019" /></td>

	<td> </td>
	</tr>
	
	
	<tr>
	<td rowspan="20"><td>Data:</td>
	<td><input type="date" name="data" readonly="true" value="<?php echo $row ['Data']?>" /></td></td>
	<td></td>
	</tr>
	
	<tr>
	  <td> Setor: </td>
	  
	  <td> <input type="text" name="assunto" size="50" readonly="true" value="<?php echo $row ['Funcao_Setor_D']?>"> </td>
	</tr>
	
	<tr>
	  <td> DE: </td>
	  <td><input type="text" name="assunto" size="50" readonly="true" value="<?php echo $row ['De']?>"></td>
	</tr>

	<tr>
	  <td> Setor: </td>
	  <td> <input type="text" name="assunto" size="50" readonly="true" value="<?php echo $row ['Funcao_Setor_P']?>"> </td>
	</tr>
	
		<tr>
	  <td> PARA: </td>
	  <td><input type="text" name="assunto" size="50" readonly="true" value="<?php echo $row ['Para']?>"></td>
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
	
	<tr>
	<td> Anexo: </br></td>
	<td><a target ="blank" href="abrir_arquivo.php?id=<?php echo $row ['ID']; ?>">(Clique para abrir o anexo)</a> </td>
	</tr>
	
		</table>


	</br>
	</br>
	<a style="
    margin-left: 8px;"onclick="toggle('maisinfo');">Clique para ver o histórico da C.I.</a>
	<div id="maisinfo" style="display:none" >
	
	</br>
	
	</br> <table style="
    margin-left: 19px;">
	<tr>
	
	<tr>
	<td style="position: absolute;margin-left: -15px; margin-top: 4px; ">Encaminhado para:</td>
	<td style="
    position: absolute;
    margin-left: 125px;" ><input type="text" name="assunto" size="50" readonly="true" value="<?php echo $row ['Enc_Para']?>"> </td>
	</tr>
	
	<tr>
	<td style="position: absolute;margin-left: -15px;margin-top: 125px;">Mensagem </br></br>encaminhada:</td>
		
		<td>         <div id="dvCentro"style="    margin-left: 58px; margin-top: 42px;">
            <textarea id="msg" name="msg" readonly="true"> <?php echo $row ['Msg_Enc']?></textarea>
        </div> </td>
	
	<tr>
	<td> Anexo: </br></td>
	<td><a target ="blank" href="abrir_arquivo_enc.php?id=<?php echo $row ['ID']; ?>">(Clique para abrir o anexo)</a> </td>
	</tr>

		</tr>
	
		<tr>
	<td >Resposta:</td>
	
	<td>         <div id="dvCentro"style="    margin-left: 58px; margin-top: 15px;">
            <textarea id="msg2" name="msg2" readonly="true"> <?php echo $row ['Resposta']?></textarea>
        </div> </td>
	 	</tr>
		
	<tr>
	<td> Anexo: </br></td>
	<td><a target ="blank" href="abrir_arquivo_res.php?id=<?php echo $row ['ID']; ?>">(Clique para abrir o anexo)</a> </td>
	</tr>

	

</tr>
</table>
</div>	
	

	</fieldset>

	</br>
<input id= "voltar" type="button" value="Voltar" onClick="history.go(-1)">	

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
				CKEDITOR.replace( 'msg' );
				CKEDITOR.replace( 'msg2' );
        </script>
    </body>
</html>