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
  <link rel="icon" type="img/png" href="img/icons/icon-protocolo.png"/>


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

    </html>

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
		<option value='COESN'>COESN</option>
		<option value='ASCOM'>ASCOM</option>
		<option value='FMJE'>FMJE</option>
		<option value='ASPLAN'>ASPLAN</option>
		<option value='ASJUR'>ASJUR</option>
		<option value='CEGEA'>CEGEA</option>
		<option value='COPROJ'>COPROJ</option>
		<option value='COAFI'>COAFI</option>
		<option value='CETEC'>CETEC</option>
		<option value='FMDE'>FMDE</option>
		<option value='NUPES'>NUPES</option>
		<option value='Protocolo'>Protocolo</option>
		<option value='Gabinete'>Gabinete</option>
		<option value='COGITQ'>COGITQ</option>
		<option value='Externos COESN'>Externos COESN</option>

	</select> </td>
	</tr>
	
		<tr>
	  <td> PARA: </td>
	  <td><select name='funcionario2'>
	</select>

	<div class="hidden funcionario-fCOESN">
		<option value="">Escolha Funcionário</option>
		<option value='Joao Guilherme de Oliveira Rocha'>Joao Guilherme de Oliveira Rocha</option>
		<option value='Adroaldo Olinda Fernandes'>Adroaldo Olinda Fernandes</option>
		<option value='Ana Klyce Freire Mota'>Ana Klyce Freire Mota</option>
		<option value='Ana Raquel Ferrreira De Sousa'>Ana Raquel Ferrreira De Sousa</option>
		<option value='Claudio Marcos Lima da Silva'>Claudio Marcos Lima da Silva</option>
		<option value='Gardenia Mendes Torres'>Gardenia Mendes Torres</option>
		<option value='Joao Valter Gomes Filho'>Joao Valter Gomes Filho</option>
		<option value='José Barreto de Carvalho Neto'>José Barreto de Carvalho Neto</option>
		<option value='Julio Romeu Barbosa Mota'>Julio Romeu Barbosa Mota</option>
		<option value='Laryssa Kimbelle Bezerra'>Laryssa Kimbelle Bezerra</option>
		<option value='Liliane Candido Cabral de Queiroz'>Liliane Candido Cabral de Queiroz</option>
		<option value='Lucio Flavio Barbosa Jucá de Araujo'>Lucio Flavio Barbosa Juca de Araujo</option>
		<option value='Manoel Oliveira Silva'>Manoel Oliveira Silva</option>
		<option value='Maria Auristela Rabelo de Oliveira'>Maria Auristela Rabelo de Oliveira</option>
		<option value='Maria do Perpetuo Socorro Laborda'>Maria do Perpetuo Socorro Laborda</option>
		<option value='Maria Enilzete Sousa da Silva'>Maria Enilzete Sousa da Silva</option>
		<option value='Maria Eurenice Pereira de Araújo'>Maria Eurenice Pereira de Araújo</option>
		<option value='Maria Nazare Amaral Sales de Oliveira'>Maria Nazare Amaral Sales de Oliveira</option>
		<option value='Maria Tereza Pimentel Lopes'>Maria Tereza Pimentel Lopes</option>
		<option value='Marina Campos Matos'>Marina Campos Matos</option>
		<option value='Milena de Oliveira Lima'>Milena de Oliveira Lima</option>
		<option value='Nathalia Furtado Gurgel'>Nathalia Furtado Gurgel</option>
		<option value='Norma Maria Fernandes Guilherme'>Norma Maria Fernandes Guilherme</option>
		<option value='Otavio de Almeida Braga Filho'>Otavio de Almeida Braga Filho</option>
		<option value='Raimundo Jose Rodrigues Cruz'>Raimundo Jose Rodrigues Cruz</option>
		<option value='Sandra Paula Pereira de Araujo'>Sandra Paula Pereira de Araujo</option>
		<option value='Silesia Gomes de Andrade'>Silesia Gomes de Andrade</option>
		<option value='Solange Maria Santos Freire'>Solange Maria Santos Freire</option>
		<option value='Tereza Monica Bertini de Sales'>Tereza Monica Bertini de Sales</option>
	</div>

	<div class="hidden funcionario-fASCOM">
		<option value="">Escolha Funcionário</option>
		<option value='Dedson Pinheiro Martins'>Dedson Pinheiro Martins</option>
		<option value='Francisco Mardonio Soares Costa'>Francisco Mardonio Soares Costa</option>
		<option value='Maryana Correia de Souza Viana'>Maryana Correia de Souza Viana</option>
	</div>

	<div class="hidden funcionario-fFMJE">
		<option value="">Escolha Funcionário</option>
		<option value='David Wylkerson Rodrigues da Fonseca'>David Wylkerson Rodrigues da Fonseca</option>
		<option value='Joelma dos Santos Coelho Setubal'>Joelma dos Santos Coelho Setubal</option>
		<option value='Rafael Menezes Sales'>Rafael Menezes Sales</option>
	</div>

	<div class="hidden funcionario-fASPLAN">
		<option value="">Escolha Funcionário</option>
		<option value='Paula Magalhaes Rocha'>Paula Magalhaes Rocha</option>
		<option value='Vanilton Bezerra Pinto'>Vanilton Bezerra Pinto</option>
		
	</div>
	<div class="hidden funcionario-fASJUR">
		<option value="">Escolha Funcionário</option>
		<option value='Aline Alves Fernandes'>Aline Alves Fernandes</option>
		<option value='José Inácio Baima Costa Junior'>José Inácio Baima Costa Junior</option>
		<option value='Mariana do Vale Nogueira'>Mariana do Vale Nogueira</option>
		<option value='Samara Eugenia Bonfim Araujo'>Samara Eugenia Bonfim Araujo</option>
	</div>

	<div class="hidden funcionario-fCEGEA">
		<option value="">Escolha Funcionário</option>
		<option value='Adriano Araujo do Nascimento'>Adriano Araujo do Nascimento</option>
		<option value='Cristiana do Nascimento dos Santos'>Cristiana do Nascimento dos Santos</option>
		<option value='Diego Charles Lima Alves'>Diego Charles Lima Alves</option>
		<option value='Davi de Paula Freitas'>Davi de Paula Freitas</option>
		<option value='Enilton Ramos de Oliveira'>Enilton Ramos de Oliveira</option>
		<option value='Francisco Epifane Martins'>Francisco Epifane Martins</option>
		<option value='Francisco Jose da Silva'>Francisco Jose da Silva</option>
		<option value='Francisco Sales de Almeida Aires'>Francisco Sales de Almeida Aires</option>
		<option value='Gilberto Firmo de Almeida'>Gilberto Firmo de Almeida</option>
		<option value='Isabel Cristina Nobre Costa'>Isabel Cristina Nobre Costa</option>
		<option value='Jose Demostenes da Silva'>Jose Demostenes da Silva</option>
		<option value='Jose Edmar Ferreira Lima'>Jose Edmar Ferreira Lima</option>
		<option value='Jose Hudson Fontinelli Lima'>Jose Hudson Fontinelli Lima</option>
		<option value='Jucileide Santos de Andrade'>Jucileide Santos de Andrade</option>
		<option value='Laura Maria Campos de Pinho'>Laura Maria Campos de Pinho</option>
		<option value='Leones Batista Januario da Silva'>Leones Batista Januario da Silva</option>
		<option value='Lucas Bandeira Albuquerque'>Lucas Bandeira Albuquerque</option>
		<option value='Lucimar Lima da Rocha'>Lucimar Lima da Rocha</option>
		<option value='Manuel Carmosilo Matos de Mesquita'>Manuel Carmosilo Matos de Mesquita</option>
		<option value='Samy Silva Leite'>Samy Silva Leite</option>
		<option value='Victor Hugo Cabral da Costa'>Victor Hugo Cabral da Costa</option>
	</div>
	
	
	<div class="hidden funcionario-fCOPROJ">
		<option value="">Escolha Funcionário</option>
		<option value='Alessandra Maria dos Santos Barboza'>Alessandra Maria dos Santos Barboza</option>
		<option value='Davi Maia Sena'>Davi Maia Sena</option>
		<option value='Elayne Maria Benevides de Oliveira'>Elayne Maria Benevides de Oliveira</option>
		<option value='Lorena Silveira Prestes'>Lorena Silveira Prestes</option>
		<option value='Luciano Ibiapino dos Santos'>Luciano Ibiapino dos Santos</option>
		<option value='Mario Roberto de Carvalho Martin'>Mario Roberto de Carvalho Martin</option>
		<option value='Paulo Francisco Barbosa Sousa'>Paulo Francisco Barbosa Sousa</option>
		<option value='Thiago Rodrigues de Castro'>Thiago Rodrigues de Castro</option>
		
	</div>
	<div class="hidden funcionario-fCOAFI">
		<option value="">Escolha Funcionário</option>
		<option value='Frederico Alberto Sampaio Martins'>Frederico Alberto Sampaio Martins</option>
		<option value='Matheus Menezes de Mendonça'>Matheus Menezes de Mendonça</option>
	</div>
	<div class="hidden funcionario-fCETEC">
		<option value="">Escolha Funcionário</option>
		<option value='Italo Bruno Dantas da Silva'>Italo Bruno Dantas da Silva</option>
		<option value='Luiz Augusto Hensel'>Luiz Augusto Hensel</option>
		<option value='Maria Danielly de Sousa Araujo'>Maria Danielly de Sousa Araujo</option>
		<option value='Petrucius Gondim Coelho'>Petrucius Gondim Coelho</option>
	</div>
	<div class="hidden funcionario-fFMDE">
		<option value="">Escolha Funcionário</option>
		<option value='Aldaila Soares Pereira Cavalvante'>Aldaila Soares Pereira Cavalvante</option>
		<option value='Deborah Maria de Sousa Nascimento'>Deborah Maria de Sousa Nascimento</option>
		<option value='Francisco Ewerton Sombra de Mesquita'>Francisco Ewerton Sombra de Mesquita</option>
	</div>
	<div class="hidden funcionario-fNUPES">
		<option value="">Escolha Funcionário</option>
		<option value='Hermano Assunção de Oliveira'>Hermano Assunção de Oliveira</option>
		
		<option value='Vicente Firmino Beserra'>Vicente Firmino Beserra</option>
	</div>
	<div class="hidden funcionario-fProtocolo">
		<option value="">Escolha Funcionário</option>
		<option value='Debora Pinheiro Gomes'>Debora Pinheiro Gomes</option>
	</div>
	<div class="hidden funcionario-fGabinete">
		<option value="">Escolha Funcionário</option>
		<option value='Mosiah de Caldas Torgan'>Mosiah de Caldas Torgan</option>
		<option value='Estevao Sampaio Romcy'>Estevao Sampaio Romcy</option>
		<option value='Francisca Adriana Carias'>Francisca Adriana Carias</option>
		<option value='Nayara Nagila Virino de Lima'>Nayara Nagila Virino de Lima</option>
		<option value='Neila Moura Paz Barros Braga'>Neila Moura Paz Barros Braga</option>
		<option value='Paulo de Araujo Santos'>Paulo de Araujo Santos</option>
	</div>

	<div class="hidden funcionario-fCOGITQ">
		<option value="">Escolha Funcionário</option>
		<option value='Adriana Oliveira Carvalho'>Adriana Oliveira Carvalho</option>
		<option value='Douglas Bettiol Corrêa'>Douglas Bettiol Corrêa</option>
		<option value='Fernanda de Oliveira da Paz'>Fernanda de Oliveira da Paz</option>
		<option value='Inez Anilce Alencar David Gomes'>Inez Anilce Alencar David Gomes</option>
		<option value='Juliana Freire Soares'>Juliana Freire Soares</option>
		<option value='Liana de Cassia Bezerra Cavalcante'>Liana de Cassia Bezerra Cavalcante</option>
		<option value='Kellma Karine Silveira Lavor'>Kellma Karine Silveira Lavor</option>
		<option value='Luciana Amorim de Castro'>Luciana Amorim de Castro</option>
		<option value='Paulo Sadat Fernandes de Oliveira'>Paulo Sadat Fernandes de Oliveira</option>
		<option value='Patrick Everton Rodrigues de Freitas'>Patrick Everton Rodrigues de Freitas</option>
		<option value='Priscilla de Oliveira Borges Fontenele'>Priscilla de Oliveira Borges Fontenele</option>
		<option value='Sandra Oliveira de Almeida'>Sandra Oliveira de Almeida</option>
		<option value='Walquiria Carvalho Saraiva'>Walquiria Carvalho Saraiva</option>
	</div>

	<div class="hidden funcionario-fExternos COESN">
		<option value="">Escolha Funcionário</option>
		<option value='Evelyne Sales Melo (SRI)'>Evelyne Sales Melo (SRI)</option>
		<option value='Aline da Silva Salgado (SRII)'>Aline da Silva Salgado (SRII)</option>
		<option value='Cleide Maria Ferreira de Lima (SRIV)'>Cleide Maria Ferreira de Lima (SRIV)</option>
		<option value='Leonardo Gaudio Carcerelli (SRV)'>Leonardo Gaudio Carcerelli (SRV)</option>
		<option value='Evelane Silveira Farias (SRVI)'>Evelane Silveira Farias (SRVI)</option>
		<option value='Cleylson Santos de Andrade Oliveira (SERCEFOR)'>Cleylson Santos de Andrade Oliveira (SERCEFOR)</option>
		<option value='Maria de Lourdes Gomes de Lima (SERCEFOR)'>Maria de Lourdes Gomes de Lima (SERCEFOR)</option>
		<option value='Celisleda de Sousa da Silva (VV Messejana)'>Celisleda de Sousa da Silva (VV Messejana)</option>
		<option value='Flavio dos Santos Consul Junior (VV Messejana)'>Flavio dos Santos Consul Junior (VV Messejana)</option>
		<option value='John Herton Barroso da Silva (VV Antonio Bezerra)'>John Herton Barroso da Silva (VV Antonio Bezerra)</option>
		<option value='Pedro Rhuan Tessio Mendes Matos (VV Antonio Bezerra)'>Pedro Rhuan Tessio Mendes Matos (VV Antonio Bezerra)</option>
		<option value='Maryneide Ferreira Sampaio(ECOSOL)'>Maryneide Ferreira Sampaio (ECOSOL)</option>
		<option value='Filipe Pereira Vidal dos Santos(ECOSOL)'>Filipe Pereira Vidal dos Santos (ECOSOL)</option>
		<option value='Nara Thayanne Cardoso do Carmo (ECOSOL)'>Nara Thayanne Cardoso do Carmo (ECOSOL)</option>
		<option value='Francisca Helena Justino Evangelista (Quiosque Siqueira)'>Francisca Helena Justino Evangelista (Quiosque Siqueira)</option>
		<option value='Francisco Wellington Leite (Quiosque Siqueira)'>Francisco Wellington Leite (Quiosque Siqueira)</option>
		<option value='Evelyne Sales Melo (SRI)'>Claudio Marcos Lima da Silva (Virgilio Tavora)</option>
		<option value='Guacira de Sousa Pascoal'>Guacira de Sousa Pascoal</option>
		<option value='John Helton Barroso da Silva'>John Helton Barroso da Silva</option>
		<option value='Ana Sueld Luna Coelho (Lavanderia)'>Evelyne Sales Melo (Lavanderia)</option>

		
		
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
	<td>   </td>
	<td> (*) Favor anexar apenas PDF! </td>
	</tr>
	
	<tr>
	<td> Anexar arquivo: </td>
	<td><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	<input name="userfile" type="file" id="userfile"></td>
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
			<p id="rodape"> Versão 1.0.0 </p></br>
            
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
