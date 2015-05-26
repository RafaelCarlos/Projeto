<?php
include_once '../model/Usuario.php';
include_once '../dao/UsuarioDao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

$dao = new UsuarioDao();
$usu = new Usuario();



$dao->login($login, $senha);
 