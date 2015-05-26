<?php

/**
 * Description of Pagamento
 *
 * @author Rafael Carlos
 */

/**
 * @Entity
 * @Table(name="pagamento")
 */
class Pagamento {

    /**
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer", name="id_pagamento")
     */
    private $id_pagamento;

    /**
     *
     * @Column(type="double", name="valor",  nullable=false)
     */
    private $valor;

    /**
     *
     * @Column(type="string", length=15, name="tipo")
     */
    private $tipo;

    function __construct() {
        
    }

    function getId_pagamento() {
        return $this->id_pagamento;
    }

    function getValor() {
        return $this->valor;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setId_pagamento($id_pagamento) {
        $this->id_pagamento = $id_pagamento;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}
