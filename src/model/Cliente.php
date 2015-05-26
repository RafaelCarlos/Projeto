<?php

/**
 * Description of Cliente
 *
 * @author Rafael Carlos
 */
class Cliente {

    private $id_cliente;
    private $cpf;
    private $nome_cliente;
    private $rg_cliente;
    private $telefone_cliente;
    private $quantidade_clientes;
    private $sexo_cliente;
    private $data_nascimento;
    private $usuario_id_usuario;

    function __construct() {
        
    }

    function getId_cliente() {
        return $this->id_cliente;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getNome_cliente() {
        return $this->nome_cliente;
    }

    function getRg_cliente() {
        return $this->rg_cliente;
    }

    function getTelefone_cliente() {
        return $this->telefone_cliente;
    }

    function getQuantidade_clientes() {
        return $this->quantidade_clientes;
    }

    function getSexo_cliente() {
        return $this->sexo_cliente;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function getUsuario_id_usuario() {
        return $this->usuario_id_usuario;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setNome_cliente($nome_cliente) {
        $this->nome_cliente = $nome_cliente;
    }

    function setRg_cliente($rg_cliente) {
        $this->rg_cliente = $rg_cliente;
    }

    function setTelefone_cliente($telefone_cliente) {
        $this->telefone_cliente = $telefone_cliente;
    }

    function setQuantidade_clientes($quantidade_clientes) {
        $this->quantidade_clientes = $quantidade_clientes;
    }

    function setSexo_cliente($sexo_cliente) {
        $this->sexo_cliente = $sexo_cliente;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    function setUsuario(Usuario $idUsuario) {
        $this->usuario_id_usuario = $idUsuario->getId_suario();
    }

    function setUsuario_id_usuario($usuario_id_usuario) {
        $this->usuario_id_usuario = $usuario_id_usuario;
    }

}
