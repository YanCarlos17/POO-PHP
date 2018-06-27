<?php

    class telefono{
        
        public $marca;
        public $modelo;
        protected $alambrico=true;
        protected $comunicacion;

        public function __construct($marca,$modelo,$alambrico,$cominicacion){
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->comunicacion=($this->alambrico)?'Alambríco':'Inalambríco';
        }

        public function llamar(){
            echo '<p>Riiiiing - - Riiiiing</p>';

        }
        public function info(){
            echo    
            '<ul>
                <li>Marca<b>'. $this->marca .'</b></li>
                <li>Modelo<b>'. $this->modelo .'</b></li>
                <li>Comunicación<b>'. $this->comunicacion .'</b></li>
            </ul>';
        }
    }

    class celular extends telefono{

    }

    class smathphone extends celular{

    }

    $house_phone = new telefono('Panasonic','TXT-365S','Alambríco') ;

    echo '<h4>The phone evolution is</h4>';
    echo '<h5>Phone:'.$house_phone->info().'</h5>';

?>
