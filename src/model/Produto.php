<?php

/**
 * Description of Produto
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="produto")
 */
class Produto {

    /**
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_produto")
     */
    private $id_produto;

    /**
     *
     * @Column(type="string", length=255, name="descricao", nullable=false)
     */
    private $descricao;

    /**
     *
     * @Column(type="double", name="valor", nullable=false)
     */
    private $valor;

    /**
     *
     * @Column(type="string", length=20, name="marca_produto", nullable=false)
     */
    private $marca_produto;

    /**
     *
     * @Column(type="integer", name="quantidade", nullable=false)
     */
    private $quantidade;

    /**
     *
     * @File
     * @Column(name="imagem")
     */
    private $imagem;

    /**
     *
     * @OneToOne(targetEntity="Oferta")
     */
    private $oferta_id_oferta;

    function __construct() {
        
    }

    function getId_produto() {
        return $this->id_produto;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getMarca_produto() {
        return $this->marca_produto;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getOferta_id_oferta() {
        return $this->oferta_id_oferta;
    }

    function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setMarca_produto($marca_produto) {
        $this->marca_produto = $marca_produto;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setOferta_id_oferta($oferta_id_oferta) {
        $this->oferta_id_oferta = $oferta_id_oferta;
    }

}
