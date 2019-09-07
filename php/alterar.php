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

<script type="text/javascript" src="../js/select3.js"></script>


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


<form method="post" action="Altera_ci.php" enctype="multipart/form-data">

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
    margin-top: -21px;
    position: absolute;">	
	<td>C.I Nº: </td>
	<td style="
    position: absolute;
    margin-left: 118px;
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
	  <td><input type="text" name="de" size="50" readonly="true" id="categoria2" value="<?php echo $row ['De']?>"></td>
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
	<td> Conteúdo da C.I.: </td>
	<td>         <div id="dvCentro">
            <textarea id="txtArtigo" name="txtArtigo" readonly="true"> <?php echo $row ['CI']?> </textarea>
        </div> </td>
	</tr>

	<td> </td>
	<td>  </td>
	</tr>
	
	


	</table>

</br>
</br>

<table>	

<tr> </tr>

	<tr></tr><tr></tr>
	<tr></tr>
		<tr>
	  <td> Setor: </td>
	  
	  <td> <select name='setor3' style="
    margin-left: -45px;">
		<option>Escolha Setor</option>
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
		<option value='COGITQP'>COGITQP</option>
		<option value='Externos COESN'>Externos COESN</option>
	</select> </td>
	</tr>
	
	<tr>
	  <td> PARA: </td>
	  <td><select name='funcionario3' style="
    margin-left: -45px;">
	</select>
<div class="hidden funcionario-fCOESN">
		<option value="">Escolha Funcionário</option>
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
		<option value='Enilton Ramos de Oliveira'>Enilton Ramos de Oliveira</option>
		<option value='Francisco Epifane Martins'>Francisco Epifane Martins</option>
		<option value='Francisco Jose da Silva'>Francisco Jose da Silva</option>
		<option value='Francisco Sales de Almeida Aires'>Francisco Sales de Almeida Aires</option>
		<option value='Gilberto Firmo de Almeida'>Gilberto Firmo de Almeida</option>
		<option value='Lucas Bandeira Albuquerque'>Lucas Bandeira Albuquerque</option>
		<option value='Manuel Carmosilo Matos de Mesquita'>Manuel Carmosilo Matos de Mesquita</option>
		<option value='Sangela Sales de Oliveira'>Sangela Sales de Oliveira</option>
	</div>
	
	
	<div class="hidden funcionario-fCAF (Célula de Sup. Administrativo)">
		<option value="">Escolha Funcionário</option>
		<option value='Amanda Ribeiro Simoes'>Amanda Ribeiro Simoes</option>
		<option value='Davi de Paula Freitas'>Davi de Paula Freitas</option>
		<option value='Jose Demostenes da Silva'>Jose Demostenes da Silva</option>
		<option value='Jose Edmar Ferreira Lima'>Jose Edmar Ferreira Lima</option>
		<option value='Jose Hudson Fontinelli Lima'>Jose Hudson Fontinelli Lima</option>
		<option value='Jucileide Santos de Andrade'>Jucileide Santos de Andrade</option>
		<option value='Laura Maria Campos de Pinho'>Laura Maria Campos de Pinho</option>
		<option value='Leones Batista Januario da Silva'>Leones Batista Januario da Silva</option>
		<option value='Lucimar Lima da Rocha'>Lucimar Lima da Rocha</option>
		<option value='Samy Silva Leite'>Samy Silva Leite</option>
		<option value='Simone Maria Gomes Pereira'>Simone Maria Gomes Pereira</option>
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
		<option value='Isabel Cristina Nobre Costa'>Isabel Cristina Nobre Costa</option>
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

	<div class="hidden funcionario-fCOGITQP">
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
	<td>Conteúdo </br></br> para encaminhar:</td>
	
		<td>         <div id="dvCentro" style="margin-left: -45px;">
            <textarea id="msg2" name="msg2" ></textarea>
        </div> </td>
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
	<tr></tr>
	<tr></tr>
	<td>Selecione o status da C.I.: </td>
	<td> <input type="radio" name="status" value="Encaminhada" required>Encaminhada</td>
	</tr>

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