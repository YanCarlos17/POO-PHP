<?php

    class carro{
    public $marca;
    public $modelo;
    public $color;

        public function __construct($marca,$modelo,$color){
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->color=$color;
        }

        public function frase(){
            return $this->marca.' '.$this->modelo.' '.$this->color;
        }
    }

    $carro1= new carro('Chevrolet','95','Azul');
    $carro2= new carro('Mazda','98','Gris');
    $carro3= new carro('Toyota','00','Rojo');

    echo   "Atributos Chevette:{$carro1->frase()} <br>
            Atributos Mazda:{$carro2->frase()} <br>
            Atributos Toyota:{$carro3->frase()}";

?>
