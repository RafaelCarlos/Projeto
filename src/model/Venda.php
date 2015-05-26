<?php

/**
 * Description of Venda
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="venda")
 */
class Venda {

    /**
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_venda")
     */
    private $id_venda;
    
    /**
     *
     * @Timestamp
     * @Column(name="data_venda",  nullable=false)
     */
    private $data_venda;
    
    /**
     *
     * @Column(type="float", name="valor_venda",  nullable=false)
     */
    private $valor_venda;
    
    /**
     *
     * @ManyToOne(targetEntity="Cliente", cascade={"all"}, fetch="LAZY")
     * @JoinColumn(name="cliente_id_cliente", referencedColumnName="id_cliente")
     */
    private $cliente_id_cliente;

    function __construct() {
        
    }

    function getId_venda() {
        return $this->id_venda;
    }

    function getData_venda() {
        return $this->data_venda;
    }

    function getValor_venda() {
        return $this->valor_venda;
    }

    function getCliente_id_cliente() {
        return $this->cliente_id_cliente;
    }

    function setId_venda($id_venda) {
        $this->id_venda = $id_venda;
    }

    function setData_venda($data_venda) {
        $this->data_venda = $data_venda;
    }

    function setValor_venda($valor_venda) {
        $this->valor_venda = $valor_venda;
    }

    function setCliente_id_cliente($cliente_id_cliente) {
        $this->cliente_id_cliente = $cliente_id_cliente;
    }

}
