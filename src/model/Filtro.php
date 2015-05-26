<?php

/**
 * Description of Filtro
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="filtro")
 */
class Filtro {

    /**
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_filtro")
     */
    private $id_filtro;
    
    /**
     *
     * @ManyToOne(targetEntity="Produto", cascade={"all"}, fetch="LAZY")
     * @JoinColumn(name="produto)id_produto", referencedColumnName="id_produto")
     */
    private $produto_id_produto;
    
    /**
     *
     *@ManyToOne(targetEntity="Cliente", cascade={"all"}, fetch="LAZY")
     * @JoinColumn(name="cliente_id_cliente", referencedColumnName="id_cliente")
     */
    private $cliente_id_cliente;

    function __construct() {
        
    }

    function getId_filtro() {
        return $this->id_filtro;
    }

    function getProduto_id_produto() {
        return $this->produto_id_produto;
    }

    function getCliente_id_cliente() {
        return $this->cliente_id_cliente;
    }

    function setId_filtro($id_filtro) {
        $this->id_filtro = $id_filtro;
    }

    function setProduto_id_produto($produto_id_produto) {
        $this->produto_id_produto = $produto_id_produto;
    }

    function setCliente_id_cliente($cliente_id_cliente) {
        $this->cliente_id_cliente = $cliente_id_cliente;
    }

}
