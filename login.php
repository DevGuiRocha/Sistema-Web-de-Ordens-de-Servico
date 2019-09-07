<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
$conexao = mysqli_connect('localhost', 'root', '', 'trabalho');
//ajusta o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($conexao, 'utf8');

    if (isset($entrar)) {
             
		$verifica = "SELECT * FROM usuario WHERE Login = '$login' AND Senha= '$senha'";
		
		session_start();
	  
	  
		$result = $conexao->query($verifica);

		$row = $result->fetch_assoc();
		
        if ($row == null){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='http://localhost/sistema/index.html';</script>";
          die();
        }
		
		if ($senha == '123456'){
          echo"<script language='javascript' type='text/javascript'>alert('Você precisa alterar sua senha!');window.location.href='altera_senha.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:http://localhost/sistema/index.php");
        }
    }
?>