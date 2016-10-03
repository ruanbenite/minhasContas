<?php

class Salario {

    private $valorBrutoSalario;
    private $valorLiquidoSalario;
    private $dataRecebimentoSalario;
    private $descontoTributosSalario;

    function getValorBrutoSalario() {
        return $this->valorBrutoSalario;
    }

    function setValorBrutoSalario($valorBrutoSalario) {
        $this->valorBrutoSalario = $valorBrutoSalario;
    }

    function getValorLiquidoSalario() {
        return $this->valorLiquidoSalario;
    }

    function setValorLiqueidoSalario($valorLiquidoSalario) {
        $this->valorLiquidoSalario = $valorLiquidoSalario;
    }

    function getDataRecebimentoSalario() {
        return $this->dataRecebimentoSalario;
    }

    function setDataRecebimentoSalario($dataRecebimentoSalario) {
        $this->dataRecebimentoSalario = $dataRecebimentoSalario;
    }

    function getDescontoTributosSalario() {
        return $this->descontoTributosSalario;
    }

    function setDescontoTributosSalario($descontoTributosSalario) {
        $this->descontoTributosSalario = $descontoTributosSalario;
    }

}
?>

