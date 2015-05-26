<?php

/**
 * Description of VendaProduto
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="venda_produto")
 */
class VendaProduto {

    /**
     *
     * @Id
     * @ManyToOne(targetEntity="Venda", cascade={"all"}, fetch="LAZY")
     * @Column(type="integer", name="venda_id_venda")
     */
    private $venda_id_venda;

    /**
     *
     * @Id
     * @ManyToOne(targetEntity="Produto", cascade={"all"}, fetch="LAZY")
     * @Column(type="integer", name="produto_id_produto)
     */
    private $produto_id_produto;

    function __construct() {
        
    }

    function getVenda_id_venda() {
        return $this->venda_id_venda;
    }

    function getProduto_id_produto() {
        return $this->produto_id_produto;
    }

    function setVenda_id_venda($venda_id_venda) {
        $this->venda_id_venda = $venda_id_venda;
    }

    function setProduto_id_produto($produto_id_produto) {
        $this->produto_id_produto = $produto_id_produto;
    }

}
