<?php
class Luchador
{
    protected $nombre = "";
    protected $vida = 10;
    protected $fuerza = 10;
    protected $defensa = 10;

    public function __construct($nombre, $vida, $fuerza, $defensa){
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->fuerza = $fuerza;
        $this-> defensa = $defensa;
    }
    
    public function Peleas(){

        

    }
}
