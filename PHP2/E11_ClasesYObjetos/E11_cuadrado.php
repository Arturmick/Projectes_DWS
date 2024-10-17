<?php
include_once "E11_interFiguraGeom.php";
class E11_cuadrado implements E11_interFiguraGeom {
    private $lado;

    function __construct($lado) {
        $this->lado = $lado;
    }

    public function getLado(): string
    {
        return $this->lado;
    }

    public function setLado(string $lado): void
    {
        $this->lado = $lado;
    }

    public function calcularArea()
    {
        return $this->lado * $this->lado;
    }

    public function calcularPerimetro()
    {
        return $this->lado * 4;
    }
}