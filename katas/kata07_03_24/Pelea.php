<?php

require_once 'Luchador.php';

class Pelea {
    private $luchador1;
    private $luchador2;

    public function __construct($luchador1, $luchador2) {
        $this->luchador1 = $luchador1;
        $this->luchador2 = $luchador2;
    }

    public function iniciarCombate() {
        while ($this->luchador1->getVida() > 0 && $this->luchador2->getVida() > 0) {
            $this->realizarAtaque($this->luchador1, $this->luchador2);
            if ($this->luchador2->getVida() <= 0) {
                echo $this->luchador1->getNombre() . " es el ganador!\n";
                break;
            }
            $this->realizarAtaque($this->luchador2, $this->luchador1);
            if ($this->luchador1->getVida() <= 0) {
                echo $this->luchador2->getNombre() . " es el ganador!\n";
                break;
            }
        }
    }

    private function realizarAtaque($atacante, $atacado) {
        $fuerzaAtacante = $atacante->atacar();
        $fuerzaAtacado = $atacado->atacar();
        if ($fuerzaAtacante === $fuerzaAtacado) {
            if (rand(0, 1) === 0) {
                $atacado->recibirAtaque($fuerzaAtacante);
            } else {
                $atacante->recibirAtaque($fuerzaAtacado);
            }
        } elseif ($fuerzaAtacante > $fuerzaAtacado) {
            $atacado->recibirAtaque($fuerzaAtacante);
        } else {
            $atacante->recibirAtaque($fuerzaAtacado);
        }
    }
}
