<?php
class Coche {
    public $marca;
    protected $modelo;
    protected $potencia;
    private $pvp;

    public function __construct($marca, $modelo, $potencia, $pvp)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->potencia = $potencia;
        $this->pvp = $pvp;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    public function getPotencia()
    {
        return $this->potencia;
    }

    public function setPotencia($potencia): void
    {
        $this->potencia = $potencia;
    }

    public function getPvp()
    {
        return $this->pvp;
    }

    public function setPvp($pvp): void
    {
        $this->pvp = $pvp;
    }

    public function __toString(): string
    {
        return "Marca: " . $this->marca .
            "<br>Modelo: " . $this->modelo .
            "<br>Potencia: " .$this->potencia .
            "<br>Pvp: " . $this->pvp;
    }
}