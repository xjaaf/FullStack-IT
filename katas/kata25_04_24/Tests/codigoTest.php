<?php

use PHPUnit\Framework\TestCase;

require_once 'codigo.php';

class JugadorTest extends TestCase
{
    public function testMoverArriba()
    {
        $jugador = new Jugador("Jugador1", 5, 5);
        $jugador->mover('arriba');
        $this->assertEquals('(4, 5)', $jugador->obtenerPosicion());
    }

    public function testMoverAbajo()
    {
        $jugador = new Jugador("Jugador2", 5, 5);
        $jugador->mover('abajo');
        $this->assertEquals('(6, 5)', $jugador->obtenerPosicion());
    }

    public function testMoverIzquierda()
    {
        $jugador = new Jugador("Jugador3", 5, 5);
        $jugador->mover('izquierda');
        $this->assertEquals('(5, 4)', $jugador->obtenerPosicion());
    }

    public function testMoverDerecha()
    {
        $jugador = new Jugador("Jugador4", 5, 5);
        $jugador->mover('derecha');
        $this->assertEquals('(5, 6)', $jugador->obtenerPosicion());
    }

    public function testMoverArribaLimite()
    {
        $jugador = new Jugador("Jugador5", 0, 5);
        $jugador->mover('arriba');
        $this->expectOutputString("No se puede mover más arriba.\n");
    }
}

class GuerreroTest extends TestCase
{
    public function testAtacar()
    {
        $guerrero = new Guerrero("Conan", 5, 5, "Espada");
        $this->expectOutputString("Conan ataca con Espada.\n");
        $guerrero->atacar();
    }

    public function testCorrer()
    {
        $guerrero = new Guerrero("Conan", 5, 5, "Espada");
        $guerrero->correr('arriba');
        $this->assertEquals('(3, 5)', $guerrero->obtenerPosicion());
    }
}

class MagoTest extends TestCase
{
    public function testLanzarHechizo()
    {
        $mago = new Mago("Gandalf", 3, 7, ["Fuego", "Rayo", "Hielo"]);
        $this->expectOutputString("Gandalf lanza el hechizo Fuego.\n");
        $mago->lanzarHechizo("Fuego");
    }
}

class ArqueroTest extends TestCase
{
    public function testDispararFlecha()
    {
        $arquero = new Arquero("Legolas", 1, 9, "Arco largo", 10);
        $this->expectOutputString("Legolas dispara una flecha con Arco largo.\n");
        $arquero->dispararFlecha();
    }

    public function testDispararFlechaSinFlechas()
    {
        $arquero = new Arquero("Legolas", 1, 9, "Arco largo", 0);
        $this->expectOutputString("Error\n");
        $arquero->dispararFlecha();
    }
}
