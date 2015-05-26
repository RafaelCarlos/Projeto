<?php

include_once '../model/Usuario.php';
include_once '../dao/DaoUsuario.php';

//$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$apelido = $_POST['apelido'];


$vrObj = new DaoUsuario();

$no = new Usuario();



//$no->setNome($nome);
$no->setLogin($email);
$no->setSenha($senha);
$no->setApelido($apelido);

$vrObj->inserir($no);