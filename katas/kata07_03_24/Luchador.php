<?php

class Luchador {
    private $nombre;
    private $vida;
    private $fuerza;
    private $defensa;

    public function __construct($nombre, $fuerza, $defensa, $vida = 10) {
        $this->nombre = $nombre;
        $this->vida = $vida;
        $this->fuerza = $fuerza;
        $this->defensa = $defensa;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getVida() {
        return $this->vida;
    }

    public function recibirAtaque($fuerzaAtacante) {
        $danio = $fuerzaAtacante - $this->defensa;
        if ($danio <= 0) {
            $danio = 1;
        }
        $this->vida -= $danio;
    }

    public function atacar() {
        return rand(1, $this->fuerza);
    }
}