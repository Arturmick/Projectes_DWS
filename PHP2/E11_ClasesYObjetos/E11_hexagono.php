<?php
include_once "E11_interFiguraGeom.php";
class E11_hexagono implements E11_interFiguraGeom {
    private $lado;
    private $apotema;


    public function __construct(string $lado, string $apotema)
    {
        $this->lado = $lado;
        $this->apotema = $apotema;
    }

    public function getLado(): string
    {
        return $this->lado;
    }

    public function setLado(string $lado): void
    {
        $this->lado = $lado;
    }

    public function getApotema(): string
    {
        return $this->apotema;
    }

    public function setApotema(string $apotema): void
    {
        $this->apotema = $apotema;
    }

    public function calcularArea()
    {
        return ($this->calcularPerimetro() * $this->apotema)/2;
    }

    public function calcularPerimetro()
    {
        return $this->lado * 6;
    }
}