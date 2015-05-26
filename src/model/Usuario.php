<?php

/**
 * Description of Usuario
 *
 * @author Rafael Carlos
 */
class Usuario {

    private $idUsuario;
    private $login;
    private $senha;
    private $apelido;

    function __construct() {
        
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getApelido() {
        return $this->apelido;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setApelido($apelido) {
        $this->apelido = $apelido;
    }

}
