<?php

class Gastos {

    private $nomeGasto;
    private $valorGasto;
    private $gastoFixo;
    private $metodoPagamentoGasto;
    private $statusGasto;

    function getNomeGasto() {
        return $this->nomeGasto;
    }

    function setNomeGasto($nomeGasto) {
        $this->nomeGasto = $nomeGasto;
    }

    function getValorGasto() {
        return $this->valorGasto;
    }

    function setValorGasto($valorGasto) {
        $this->valorGasto = $valorGasto;
    }

    function getGastoFixo() {
        return $this->gastoFixo;
    }

    function setGastoFixo($gastoFixo) {
        $this->gastoFixo = $gastoFixo;
    }

    function getMetodoPagamentoGastoint() {
        return $this->metodoPagamentoGasto;
    }

    function setMetodoPagamentoGastoint($metodoPagamentoGasto) {
        $this->getMetodoPagamentoGasto = $metodoPagamentoGasto;
    }

    function getStatusGasto() {
        return $this->statusGasto;
    }

    function setStatusGasto($statusGasto) {
        $this->statusGasto = $statusGasto;
    }

}

?>