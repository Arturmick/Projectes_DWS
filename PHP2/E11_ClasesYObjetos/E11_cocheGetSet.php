<?php
class Coche {
    public $marca;
    public $modelo;
    public $potencia;
    public $pvp;

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
}