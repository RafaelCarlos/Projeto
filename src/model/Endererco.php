<?php

/**
 * Description of Endererco
 *
 * @author Rafael Carlos
 */
class Endererco {

    private $id_endereco;
    private $cidade;
    private $bairro;
    private $cep;
    private $estado;
    private $numero;
    private $complemento;
    private $cliente_id_cliente;
    private $fornecedor_parceiro_id_fornecedor;

    function __construct() {
        
    }

    function getId_endereco() {
        return $this->id_endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCep() {
        return $this->cep;
    }

    function getEstado() {
        return $this->estado;
    }

    function getNumero() {
        return $this->numero;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getCliente_id_cliente() {
        return $this->cliente_id_cliente;
    }

    function getFornecedor_parceiro_id_fornecedor() {
        return $this->fornecedor_parceiro_id_fornecedor;
    }

    function setId_endereco($id_endereco) {
        $this->id_endereco = $id_endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setCliente_id_cliente($cliente_id_cliente) {
        $this->cliente_id_cliente = $cliente_id_cliente;
    }

    function setFornecedor_parceiro_id_fornecedor($fornecedor_parceiro_id_fornecedor) {
        $this->fornecedor_parceiro_id_fornecedor = $fornecedor_parceiro_id_fornecedor;
    }

}
