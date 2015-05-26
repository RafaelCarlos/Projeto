<?php 

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];


//Conexão
$con = mysql_connect("127.0.0.1", "root", "") or die ("Sem conexão com o servidor.");
$select = mysql_select_db("db_compras_coletiva") or die("Sem acesso ao Banco de Dados.");

//Pegando o login e a senha da tabela usuário.
$result = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha= '$senha'");

//Verifica se foi encontrado algum registro idêntico.
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:logado.php');


}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header("Location: index.php?erro=1");
        
	}

?>

