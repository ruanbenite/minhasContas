<?php

Class Contas {

    private $nomeConta;
    private $saldoConta;
    private $tipoConta;

    function getNomeConta() {
        return $this->nomeConta;
    }

    function setNomeConta($nomeConta) {
        $this->nomeConta = $nomeConta;
    }

    function getSaldoConta() {
        return $this->saldoConta;
    }

    function setSaldoConta($saldoConta) {
        $this->saldoConta = $saldoConta;
    }

    function getTipoConta() {
        return $this->tipoConta;
    }

    function setTipoCont($tipoConta) {
        $this->tipoConta = $tipoConta;
    }

}
?>


