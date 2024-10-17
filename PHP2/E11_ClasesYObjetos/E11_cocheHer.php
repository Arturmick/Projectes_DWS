<?php
include ("E11_cochePadre.php");
class CocheHijo extends Coche {
    public $color;
    public array $extras = [];
    public function __construct($marca, $modelo, $portencia, $pvp,$color, array $extras)
    {
        parent::__construct($marca,$modelo,$portencia,$pvp);
        $this->color = $color;
        $this->extras = $extras;
    }

    public function mostrarColor()
    {
        return  "<h3>" . $this->color . "</h3>";
    }

    public function mostrarExtras()
    {
        $respuesta = "<ul>";
        foreach ($this->extras as $a){
            $respuesta .= "<li>$a</li>";
        }
        $respuesta .= "</ul>";
        return $respuesta;
    }

    public function __toString(): string
    {
        return "Marca: " . $this->marca .
            "<br>Modelo: " . $this->modelo .
            "<br>Potencia: " .$this->potencia .
            "<br>Pvp: " . $this->getPvp() .
            "<br>Color: " . $this->mostrarColor() .
            "<br>Extras: " . $this->mostrarExtras();
    }
}