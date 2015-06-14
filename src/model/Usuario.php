<?php

/**
 * Description of Usuario
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="usuario")
 */
class Usuario {

    /**
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_usuario")
     */
    private $idUsuario;

    /**
     *
     * @Column(type="string", length=50, unique=true, nullable=false)
     */
    private $login;

    /**
     *
     * @Column(type="string", length=255, nullable=false)
     */
    private $senha;

    /**
     *
     * @Column(type="string", length=30, nullable=false)
     */
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
