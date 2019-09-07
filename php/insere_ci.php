<?php

	include 'mysql_conect.php';
$r;
$setor	= $_POST ['setor'];
$de		= $_POST ['funcionario'];
$data		= $_POST ['data'];
$setor2		= $_POST ['setor2'];
$para		= $_POST ['funcionario2'];
$assunto	= $_POST ['assunto'];
$msg	= $_POST ['msg'];
$status = $_POST ['status'];
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];



$sql = "INSERT INTO criar(ID, Funcao_Setor_D, De, Funcao_Setor_P, Para, Data, Assunto, CI, Status) 
		VALUES (DEFAULT, '$setor', '$de', '$setor2', '$para', '$data', '$assunto', '$msg', '$status')";

if ($conexao -> query ($sql) == TRUE) {
	
	$sql3 = "SELECT MAX(Num_ci) FROM criar WHERE Funcao_Setor_D = '$setor'";
	
	$result = mysqli_query($conexao, $sql3);
	$row = mysqli_fetch_row($result);
	$r = $row[0];
	$s = $r + 1;
	
	echo "<script>alert('C.I. numero $s/2019 enviada com sucesso! ');document.location='http://localhost/sistema/index.php';</script>";
    } else {
	echo "Erro:" . $sql . "<br>" . $conexao -> error;	
}

$sql4 = "UPDATE criar SET Num_ci = $r + 1 WHERE Num_ci = 0";

if ($conexao -> query ($sql4) == TRUE) {
	
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


