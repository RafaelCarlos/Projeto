<?php

/**
 * Description of Endererco
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="endereco")
 */
class Endererco {

    /**
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_endereco")
     */
    private $id_endereco;

    /**
     *
     * @Column(name="cidade",type="string", length=45, nullable=false)
     */
    private $cidade;

    /**
     *
     * @Column(name="bairro",type="string", length=45, nullable=false)
     */
    private $bairro;

    /**
     *
     * @Column(name="cep",type="string", length=10, nullable=false)
     */
    private $cep;

    /**
     *
     * @Column(name="estado",type="string", length=2, nullable=false)
     */
    private $estado;

    /**
     *
     * @Column(name="numero",type="int")
     */
    private $numero;

    /**
     *
     * @Column(name="complemento",type="string", length=100)
     */
    private $complemento;

    /**
     *
     * @OneToOne(targetEntity="Cliente")
     * @JoinColumn(name="cliente_id_cliente", referencedColumnName="id_cliente")
     */
    private $cliente_id_cliente;

    /**
     *
     * @OneToOne(targetEntity="FornecedorParceiro")
     * @JoinColumn(name="fornecedor_parceiro_id_fornecedor", referencedColumnName="id_fornecedor")
     */
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
