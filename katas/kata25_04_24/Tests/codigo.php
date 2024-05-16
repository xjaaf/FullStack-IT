<?php

class Jugador {
    protected $nickname;
    protected $x;
    protected $y;

    public function __construct($nickname, $x, $y) {
        $this->nickname = $nickname;
        $this->x = $x;
        $this->y = $y;
    }
    public function mover($direccion) {
        switch($direccion) {
            case 'arriba':
                if ($this->x > 0) {
                    $this->x--;
                } else {
                    echo "No se puede mover más arriba.\n";
                }
                break;
            case 'abajo':
                if ($this->x <= 9) {
                    $this->x++;
                } else {
                    echo "No se puede mover más abajo.\n";
                }
                break;
            case 'izquierda':
                if ($this->y > 0) {
                    $this->y--;
                } else {
                    echo "No se puede mover más a la izquierda.\n";
                }
                break;
            case 'derecha':
                if ($this->y <= 9) {
                    $this->y++;
                } else {
                    echo "No se puede mover más a la derecha.\n";
                }
                break;
            default:
                echo "Dirección no válida.\n";
        }
    }

    public function obtenerPosicion() {
        return "($this->x, $this->y)";
    }
}
class Guerrero extends Jugador {
    protected $arma;

    public function __construct($nickname, $x, $y, $arma) {
        parent::__construct($nickname, $x, $y);
        $this->arma = $arma;
    }

    public function atacar() {
        echo "$this->nickname ataca con $this->arma.\n";
    }
    public function correr($direccion) {
        parent::mover($direccion);
        parent::mover($direccion); // Mover dos veces para correr
    }
}

class Mago extends Jugador {
    protected $hechizos;

    public function __construct($nickname, $x, $y, $hechizos) {
        parent::__construct($nickname, $x, $y);
        $this->hechizos = $hechizos;
    }

    public function lanzarHechizo($hechizo) {
        if (in_array($hechizo, $this->hechizos)) {
            echo "$this->nickname lanza el hechizo $hechizo.\n";
        } else {
            echo "Error\n";
        }
    }
}
class Arquero extends Jugador {
    protected $arco;
    protected $flechas;

    public function __construct($nickname, $x, $y, $arco, $flechas) {
        parent::__construct($nickname, $x, $y);
        $this->arco = $arco;
        $this->flechas = $flechas;
    }


    public function dispararFlecha() {
        if ($this->flechas > 0) {
            echo "$this->nickname dispara una flecha con $this->arco.\n";
            $this->flechas--;
        } else {
            echo "Error\n";
        }
    }
}

$guerrero = new Guerrero("Conan", 5, 5, "Espada");
$mago = new Mago("Gandalf", 3, 7, ["Fuego", "Rayo", "Hielo"]);
$arquero = new Arquero("Legolas", 1, 9, "Arco largo", 10);

$guerrero->mover('arriba');
$guerrero->atacar();
$guerrero->correr('derecha');

$mago->mover('izquierda');
$mago->lanzarHechizo("Fuego");
$mago->lanzarHechizo("Trueno");

$arquero->mover('abajo');
$arquero->dispararFlecha();
$arquero->dispararFlecha();
$arquero->dispararFlecha();
?>
