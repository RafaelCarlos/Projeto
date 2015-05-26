<?php

/**
 * Description of FornecedorParceiroOferta
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="fornecedor_parceiro_oferta")
 */
class FornecedorParceiroOferta {
    
  

    /**
     *@Id
     * @ManyToOne(targetEntity="FornecedorParceiro", cascade={"all"}, fetch="LAZY") 
     * @Column(type="integer", name="fornecedor_parceiro_id_fornecedor")
     */
    private $fornecedor_parceiro_id_fornecedor;
    
    /**
     *
     * @Id
     * @ManyToOne(targetEntity="Oferta", cascade={"all"}, fetch="LAZY")
     * @Column(type="integer",name="oferta_id_oferta")
     */
    private $oferta_id_oferta;

    function __construct() {
        
    }
    
    function getFornecedor_parceiro_id_fornecedor() {
        return $this->fornecedor_parceiro_id_fornecedor;
    }

    function getOferta_id_oferta() {
        return $this->oferta_id_oferta;
    }

    function setFornecedor_parceiro_id_fornecedor($fornecedor_parceiro_id_fornecedor) {
        $this->fornecedor_parceiro_id_fornecedor = $fornecedor_parceiro_id_fornecedor;
    }

    function setOferta_id_oferta($oferta_id_oferta) {
        $this->oferta_id_oferta = $oferta_id_oferta;
    }







}
