<!DOCTYPE html>
<html lang = "br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
  <title> C.I.'s recebidas </title>
  
  <link rel="stylesheet" type="text/css" href="../css/busca.css">

</head>

<div class="top">
</br>
		<p>C.I.'s recebidas</p>
		<a href="../index.php" ><img id= "top" src = "../img/SDE.png"/></a>
</div>
</br>
			
		<body>	    
		<form method="post" id="formPesquisar">

		<input type="date" name="data" placeholder="Pesquise por: data" size ="50">
        <button type="submit" id="pesquisar" >Pesquisar</button>
		</br>

    </form>
    </body>
    </html>
	
	<?php

	include 'mysql_conect.php';

$login = $_COOKIE ['login'];



$sql = "SELECT * FROM usuario WHERE Login = '$login' ";



if ($conexao -> query ($sql) == TRUE) {
    } else {
	echo "Erro:" . $sql . "<br>" . $conexao -> error;
}

    $result = $conexao->query($sql);

	$row = $result->fetch_assoc();

	$pessoa = $row["Nome"];
	$set = $row["Funcao_Setor"];

$conexao -> close ();
?>
	

    <?php
    include("mysql_conect.php");

	if(isset($_POST["data"])){
        $sql = "SELECT * FROM `criar` WHERE Para = '$pessoa' AND Data LIKE '%{$_POST['data']}%'
        ORDER BY Num_ci DESC";
    }else{
        $sql = "SELECT * FROM `criar` WHERE Para = '$pessoa' ORDER BY Num_ci DESC";
    }


    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        echo "</br><table id= \"table\">";
        echo "<tr><th>N° da C.I.</th><th>Data</th><th>De</th><th>Setor</th><th>Status</th><th>Açao</th>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
			$id = $row["ID"];
          echo "<tr>
          <td>".$row["Num_ci"]."/2019</td>
		  <td>".date("d/m/Y", strtotime($row["Data"]))."</td>
          <td>".$row["De"]."</td>
		  <td>".$row["Funcao_Setor_D"]."</td>
		  <td>".$row["Status"]."</td>";
		  
		     
   		  ?>
		  
		  <td><a style="
    color: black; text-decoration:none;" href="visualizar2.php?id=<?php echo $row ['ID']; ?>">(Clique para ver a C.I.)</a>
	
	<?php

    }

        echo "</table>";
    } else {
        echo "</br>Nenhum resultado encontrado";
    }
    $conexao->close();

    ?>