<?php

/**
 * Description of Oferta
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="oferta")
 */
class Oferta {

    /**
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_oferta")
     */
    private $id_oferta;

    /**
     *
     * @Column(type="double", name="valor_inicial" , nullable=false)
     */
    private $valor_inicial;

    /**
     *
     * @Column(type="double", name="valor_oferta", nullable=false)
     */
    private $valor_oferta;

    /**
     *
     * @Timestamp
     * @Column( name="duracao_oferta", nullable=false)
     */
    private $duracao_oferta;

    /**
     *
     * @Column(type="integer", name="quantidade_vendidos")
     */
    private $quantidade_vendidos;

    function __construct() {
        
    }

    function getId_oferta() {
        return $this->id_oferta;
    }

    function getValor_inicial() {
        return $this->valor_inicial;
    }

    function getValor_oferta() {
        return $this->valor_oferta;
    }

    function getDuracao_oferta() {
        return $this->duracao_oferta;
    }

    function getQuantidade_vendidos() {
        return $this->quantidade_vendidos;
    }

    function setId_oferta($id_oferta) {
        $this->id_oferta = $id_oferta;
    }

    function setValor_inicial($valor_inicial) {
        $this->valor_inicial = $valor_inicial;
    }

    function setValor_oferta($valor_oferta) {
        $this->valor_oferta = $valor_oferta;
    }

    function setDuracao_oferta($duracao_oferta) {
        $this->duracao_oferta = $duracao_oferta;
    }

    function setQuantidade_vendidos($quantidade_vendidos) {
        $this->quantidade_vendidos = $quantidade_vendidos;
    }

}
