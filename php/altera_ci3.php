<?php

	include 'mysql_conect.php';

$id = $_POST ['num'];
$de	= $_POST ['de'];
$status = $_POST ['status'];



$sql = "UPDATE criar SET Status = '$status' WHERE Num_Ci = '$id' AND De ='$de' ";



if ($conexao -> query ($sql) == TRUE) {
	echo "<script>alert('C.I. fechada com sucesso!');document.location='http://localhost/sistema/index.php';</script>";
    } else {
	echo "Erro:" . $sql . "<br>" . $conexao -> error;
}

$conexao -> close ();
?>
