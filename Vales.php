<?php

Class Vales {

    private $nomeVale;
    private $valorVale;
    private $statusVale;

    function getNomeVale() {
        return $this->nomeVale;
    }

    function setNomeVale($nomeVale) {
        $this->nomeVale = $nomeVale;
    }

    function getValorVale() {
        return $this->valorVale;
    }

    function getStatusVale() {
        return $this->statusVale;
    }

    function setValorVale($valorVale) {
        $this->valorVale = $valorVale;
    }

    function setStatusVale($statusVale) {
        $this->statusVale = $statusVale;
    }

}

?>
