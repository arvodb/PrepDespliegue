<?php

class Numero
{
    public $valor; 
    public $estado; #positivo o negativo

    public function __construct($a1,$a2)
    {
        $this->valor=$a1;
        $this->estado=$a2;
    }

    public function decremento(){
        $this->valor-=1;
        if ($this->valor < 0) {
            $this->estado='negativo';
        }
        return $this->valor;
    }

    public function aumento(){
        $this->valor+=1;
        if ($this->valor >= 0) {
            $this->estado = 'positivo';
        }
        return $this->valor;
    }
}
?>
