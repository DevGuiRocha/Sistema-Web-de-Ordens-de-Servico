<?php

	include 'mysql_conect.php';

$id = $_POST ['num'];
$setor = $_POST ['setor3'];
$func = $_POST ['funcionario3'];
$msg2	= $_POST ['msg2'];
$de	= $_POST ['de'];
$status = $_POST['status'];

$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);



$sql = "UPDATE criar SET Enc_Setor = '$setor', Enc_Para = '$func' , Msg_Enc ='$msg2', Nome_A_Enc = '$fileName', 
		Tipo_A_Enc = '$fileType', Tamanho_A_Enc = '$fileSize', Conteudo_A_Enc = '$content' , Status = '$status' WHERE Num_Ci = '$id' AND De ='$de' ";


if ($conexao -> query ($sql) == TRUE) {
	echo "<script>alert('Encaminhada com sucesso!');document.location='http://localhost/sistema/index.php';</script>";
    } else {
	echo "Erro:" . $sql . "<br>" . $conexao -> error;
}		

if(isset($_POST['salvar']) && $_FILES['userfile']['size'] > 0)
{
 
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}



}


$conexao -> close ();
?>
