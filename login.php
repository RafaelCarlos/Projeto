<?php
include_once './src/model/Usuario.php';
include_once './src/dao/DaoUsuario.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$dao = new DaoUsuario();
$usu = new Usuario();


if($login == $usu->getLogin() && $senha == $usu->getSenha())
{
$dao->login($login, $senha);
 echo "<script>alert('Login efetuado com sucesso!\\nFaça seu login agora');</script>";
 header('location:logado.php');
}

else
{
     echo "<script>alert('Login e/ou senha incorreto(s)!!\\nFaça seu login agora'); </script>";
     header('location:index.php');
}
