<!DOCTYPE html>
<html>

<head>
  <title>Criação de C.I.'s</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <link rel="icon" type="img/png" href="img/icons/icon-protocolo.ico"/>


  <script src="js/modernizr.custom.js"></script>
  <!-- =======================================================
    Theme Name: Mamba
    Theme URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

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


<body>
  <div class="menu-area">
    <div id="dl-menu" class="dl-menuwrapper">
      <button class="dl-trigger">Open Menu</button>
      <ul class="dl-menu">
        <li>
          <a href="#intro">Início</a>
        </li>
		<li><a href="#recebidas" >C.I.'s recebidas</a></li>
		<li><a href="#enviadas">C.I.'s enviadas</a></li>
        <li><a href="#criar">Criar C.I.</a></li>
        <li><a href="php/enviadas.php" target="blank">Pesquisar C.I.'s enviadas</a></li>
        <li><a href="php/recebidas.php" target="blank">Pesquisar C.I.'s recebidas</a></li>		
      </ul>
    </div>
    <!-- /dl-menuwrapper -->
  </div>

  <!-- intro area -->
  <div id="intro">

    <div class="intro-text">
      <div class="container">
        <div class="row">


          <div class="col-md-12">

            <div class="brand">
              <h1><a href="index.php">Criação de C.I.'s</a></h1>
              <div class="line-spacer"></div>
			  
	<p id="formlogin"> <?php
	$login_cookie = $_COOKIE['login'];
	
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie";
      echo "</br> </br><a id='link' title='Clique para sair do sistema' href=\"http://localhost/sistema/sair.php\">Sair do Sistema</a>";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"<br><a href='index.html'>Faça Login</a>";
    }
	?> </p>
              <p><span></span></p>
            </div>
			
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Works -->
  <section id="recebidas" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Últimas C.I.'s recebidas</h2>
            <p id="sub">Veja aqui as C.I's recebidas recentemente</p></br>
			
    </html>

    <?php
    include("mysql_conect.php");
	
		
	$cont = 0;

	if(isset($_POST["data"])){
        $sql = "SELECT * FROM `criar` WHERE Para = '$pessoa' AND Data LIKE '%{$_POST['data']}%'
        ORDER BY Num_ci DESC";
    }else{
        $sql = "SELECT * FROM `criar` WHERE Para = '$pessoa' ORDER BY Num_ci DESC";
    }


    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        echo "<table id= \"table\">";
        echo "<tr><th>N° da C.I.</th><th>Data</th><th>De</th><th>Setor</th><th>Status</th>";
        // output data of each row
        while($cont <= 15 && $row = $result->fetch_assoc()) {
			$id = $row["ID"];
          echo "<tr>
          <td>".$row["Num_ci"]."/2019</td>
		  <td>".date("d/m/Y", strtotime($row["Data"]))."</td>
          <td>".$row["De"]."</td>
		  <td>".$row["Funcao_Setor_P"]."</td>
		  <td>".$row["Status"]."</td>"; 
		  $cont++;
		  ?>
          <td><a style="
    color: black;" href="http://localhost/sistema/php/visualizar2.php?id=<?php echo $row ['ID']; ?>">(Clique para ver a C.I.)</a>
		 

      <?php
   }

        echo "</table>";
    } else {
        echo "</br>Nenhum resultado encontrado";
    }
    $conexao->close();

    ?>
			
			
          </div>
        </div>
      </div>
          </div>
  </section>

  

  <!-- Services -->
<!DOCTYPE html>
<html lang = "br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


  <section id="enviadas" class="home-section bg-white">
    <div class="container" id="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Últimas C.I.'s enviadas</h2>
            <p id="sub">Veja aqui as C.I's enviadas recentemente</p></br>
		<body>	    

    <?php
    include("mysql_conect.php");
	
		
	$cont = 0;

	if(isset($_POST["data"])){
        $sql = "SELECT * FROM `criar` WHERE De = '$pessoa' AND Data LIKE '%{$_POST['data']}%'
        ORDER BY Num_ci DESC";
    }else{
        $sql = "SELECT * FROM `criar` WHERE De = '$pessoa' ORDER BY Num_ci DESC";
    }


    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        echo "<table id= \"table\">";
        echo "<tr><th>N° da C.I.</th><th>Data</th><th>Para</th><th>Setor</th><th>Status</th>";
        // output data of each row
        while($cont <= 15 && $row = $result->fetch_assoc()) {
			$id = $row["ID"];
          echo "<tr>
          <td>".$row["Num_ci"]."/2019</td>
		  <td>".date("d/m/Y", strtotime($row["Data"]))."</td>
          <td>".$row["Para"]."</td>
		  <td>".$row["Funcao_Setor_P"]."</td>
		  <td>".$row["Status"]."</td>"; 
		  $cont++;
		  ?>
		  
		 
		  <td><a style="
    color: black;" href="http://localhost/sistema/php/visualizar.php?id=<?php echo $row ['ID']; ?>">(Clique para ver a C.I.)</a>
	
	<?php
		  

   }

        echo "</table>";
    } else {
        echo "</br>Nenhum resultado encontrado";
    }
    $conexao->close();

    ?>
			
		
			
          </div>
        </div>
      </div>
          </div>
  </section>


  
  
    <!-- About -->
  <section id="criar" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Criar C.I.</h2>
            <p></p>
			
			            <form method="post" action="php/insere_ci.php" enctype="multipart/form-data">

<fieldset>
</br>
</br>
</br>	
	
	
	<table style="
    margin-left: -63px;">
	<tr>
	</tr>
	<tr> </tr>
	</br>
	
	<tr>	
	<td> </td>

	<td> </td>
	</tr>
	
	
	<tr>
	<td rowspan="20"><td>Data:</td>
	<td><input type="date"  name="data" readonly="true" value="<?php echo date('Y-m-d'); ?>" /></td></td>
	<td></td>
	</tr>
	
	<tr>
	  <td> Setor: </td>
	  
	  <td> <input type="text" style="width: 167px;" name= "setor" readonly="true" value="<?php echo $set?>"> </td>
	</tr>
	
	<tr>
	  <td> DE: </td>
	  <td> <input type="text" size = "52" name= "funcionario" readonly="true" value="<?php echo $pessoa?>"> </td>
	  
	</tr>

	<tr>
	  <td> Setor: </td>
	  <td> <select name='setor2'>
		<option value="">Escolha Setor</option>
		<option value='Administrativo'>Administrativo</option>
		<option value='Financeiro'>Financeiro</option>
		<option value='Operacional'>Operacional</option>

	</select> </td>
	</tr>
	
		<tr>
	  <td> PARA: </td>
	  <td><select name='funcionario2'>
	</select>

	<div class="hidden funcionario-fAdministrativo">
		<option value="">Escolha Funcionário</option>
		<option value='Joao Guilherme'>Joao Guilherme</option>
		<option value='Adroaldo Olinda'>Adroaldo Olinda</option>
		<option value='Ana Klyce'>Ana Klyce</option>
		<option value='Ana Raquel'>Ana Raquel</option>
		<option value='Claudio Marcos'>Claudio Marcos</option>
	</div>

	<div class="hidden funcionario-fFinanceiro">
		<option value="">Escolha Funcionário</option>
		<option value='Dedson Pinheiro'>Dedson Pinheiro</option>
		<option value='Francisco Mardonio'>Francisco Mardonio</option>
		<option value='Maryana Correia'>Maryana Correia</option>
		<option value='José Barreto'>José Barreto</option>
		<option value='Julio Romeu'>Julio Romeu</option>
	</div>

	<div class="hidden funcionario-fOperacional">
		<option value="">Escolha Funcionário</option>
		<option value='David Wylkerson'>David Wylkerson</option>
		<option value='Joelma dos Santos'>Joelma dos Santos</option>
		<option value='Rafael Menezes'>Rafael Menezes</option>
		<option value='Gardenia Mendes'>Gardenia Mendes</option>
		<option value='Joao Valter'>Joao Valter</option>
	</div></br></td>
	</tr>
	
	
	<tr>
	  <td> Assunto: </td>
	  <td><input type="text" name="assunto" size="52"></td>
	</tr>
	
	<tr>
	<td> Corpo da mensagem: </td>
	
	<td> 
	<div id="dvCentro" >
            <textarea id="msg" name="msg"> 	</textarea>
        </div> </br>
	
	 </td>
	</tr>

	
	<tr>
	  <td> Status: </td>
	  <td> <select name='status' required>
		<option value="">Por favor escolha um estado</option>
		<option value='Aguardando recebimento'>Aguardando recebimento</option>
		<option value='Aguardando resposta'>Aguardando resposta</option>
	</tr>

	</table>
	</br><button id="salvar" type="submit" name="salvar" value="Salvar">Enviar</button>
	
	

	</form>

		   </div>
          </div>
        </div>
      </div>
      
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mamba
            -->
			</br> 
			
			<p id="rodape"> Desenvolvido por: Guilherme Rocha </p>
			<p id="rodape"> Versão 1.1.0 </p></br>
            
          </div>

        </div>
      </div>
    </div>
  </footer>

  <!-- js -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.smooth-scroll.min.js"></script>
  <script src="js/jquery.dlmenu.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/oculta.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'msg' );
        </script>
</body>

</html>
