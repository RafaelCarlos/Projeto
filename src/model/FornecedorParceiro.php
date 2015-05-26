<?php

/**
 * Description of FornecedorParceiro
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="fornecedor_parceiro")
 */
class FornecedorParceiro {

    /**
     *
     * @Id
     * @GeneratedValue(strategy="AUTO") 
     * @Column(type="integer",name="id_fornecedor")
     */
    private $id_fornecedor;
    
    /**
     *
     * @Column(name="razao_social",type="string", length=100, nullable=false)
     */
    private $razao_social;
    
    /**
     *
     * @Column(name="telefone",type="string", length=15, nullable=false)
     */
    private $telefone;
    
    /**
     *
     * @Column(name="cnpj",type="string", length=20, nullable=false)
     */
    private $cnpj;
    
    /**
     *
     * @OneToOne(targetEntity="Usuario.class.php") 
     * @JoinColumn(name="usuario_id_usuario", referencedColumnName="id_usuario")
     */
    private $usuario_id_usuario;

    function __construct() {
        
    }

    function getId_fornecedor() {
        return $this->id_fornecedor;
    }

    function getRazao_social() {
        return $this->razao_social;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getUsuario_id_usuario() {
        return $this->usuario_id_usuario;
    }

    function setId_fornecedor($id_fornecedor) {
        $this->id_fornecedor = $id_fornecedor;
    }

    function setRazao_social($razao_social) {
        $this->razao_social = $razao_social;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setUsuario_id_usuario($usuario_id_usuario) {
        $this->usuario_id_usuario = $usuario_id_usuario;
    }

}
