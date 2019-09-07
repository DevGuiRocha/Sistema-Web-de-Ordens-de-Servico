<?php
include("mysql_conect.php");

$login = $_POST["login"];

$senha = $_POST['senha_atual'];
$senha_nova = $_POST['senha_nova'];
$confirme_senha = $_POST['confirme_senha'];

$sql="SELECT * FROM usuario WHERE Login = '$login'";
$sql2= "UPDATE usuario SET Senha='$confirme_senha' WHERE Login='$login'";

		$result = $conexao->query($sql);

		$row = $result->fetch_assoc();
		
		$result2 = $conexao->query($sql2);

		$row = $result->fetch_assoc();

$senha_banco = $row['Senha'];

if(($senha_nova=="") && ($confirme_senha=="") && ($senha_banco==""))
{
echo"<script>alert('Os campos não podem ser nulos!');
window.location='altera_senha.html';
</script>";
die();
}
if($senha_nova != $confirme_senha)
{
echo"<script>alert('Senhas digitadas incompatíveis!');
window.location='altera_senha.html';
</script>";
die();
}
else
{
if($result2 == "UPDATE usuario SET Senha='$confirme_senha' WHERE Login='$login'")
{
echo"<script>alert('Senha alterada com sucesso!');
window.location='index.html';
</script>";
}
}
?>
