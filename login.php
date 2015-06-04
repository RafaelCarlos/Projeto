<?php

//include_once './src/model/Usuario.php';
//include_once './src/dao/DaoUsuario.php';
//
//$login = $_POST['login'];
//$senha = $_POST['senha'];
//
//$dao = new DaoUsuario();
//$usu = new Usuario();
//
//
//if($login == $usu->getLogin() && $senha == $usu->getSenha())
//{
//$dao->login($login, $senha);
// echo "<script>alert('Login efetuado com sucesso!\\nFaça seu login agora');</script>";
// header('location:logado.php');
//}
//
//else
//{
//     echo "<script>alert('Login e/ou senha incorreto(s)!!\\nFaça seu login agora'); </script>";
//     header('location:index.php');
//}

session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

//Conexão
$con = mysql_connect("localhost", "root", "") or die("Sem conexão com o servidor.");
$select = mysql_select_db("dbComprasColetivas") or die("Sem acesso ao Banco de Dados.");

//Pegando o login e a senha da tabela usuário.
$result = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha= '$senha'");

//Verifica se foi encontrado algum registro idêntico.
if (mysql_num_rows($result) > 0) {
    $_SESSION['login'] = $login;
    header('location:home.php');
} else {
    unset($_SESSION['login']);
    header("Location: index.php?erro=1");
}

 
