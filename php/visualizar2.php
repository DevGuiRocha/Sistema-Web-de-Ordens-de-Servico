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

<link rel="icon" type="img/png" href="icons/icon-protocolo.ico"/>

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
		<p>C.I. recebida</p>
		<img id= "top" src = "../img/SDE.png"/>	
</div>
</br>

<img id= "form" src = "../img/SDE.png"></img>

<form method="post" action="altera_ci3.php">

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
	
	<tr>	
	<td style="
    position: absolute;
    margin-top: -21px;
    margin-left: 4px;">C.I Nº: </td>
	<td><input style="position: absolute;margin-left: 
	168px;margin-top: -26px;" type="text" name="num" size="10" readonly="true"  value="<?php echo $row ['Num_ci']?> / 2019" /></td>

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
	  <td><input type="text" name="de" size="50" readonly="true" value="<?php echo $row ['De']?>"></td>
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
	<td> </br>Selecione o status da C.I.: </td>
	<td> </br> <input type="radio" name="status" value="Fechada" required>Confirmar Recebimento</td>
	</tr>
	
	</table>
	
	
	</fieldset>
	
	</br><a href="alterar.php?id=<?php echo $row ['ID']; ?>"><img id= "enc" src = "../img/encaminhar.png"/>	</a></br>
	</br><a href="alterar2.php?id=<?php echo $row ['ID']; ?>"><img id= "resp" src = "../img/responder.png"/></a>
	
	
	<button type="submit" id="adicionar">Enviar</button>

	</br>


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