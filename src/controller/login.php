<?php

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
    header('location:index.php');
} else {
    unset($_SESSION['login']);
    header("Location: index.php?erro=1");
}

 