<?php 

class Warrior extends Player {
    protected $weapon;

    public function __construct($nickname, $weapon, $x = 0, $y = 0) {
        parent::__construct($nickname, $x, $y);
        $this->weapon = $weapon;
    }

    public function attack() {
        echo "$this->nickname attacks with $this->weapon!\n";
    }

    public function run($direction) {
        parent::move($direction);
        parent::move($direction); 
    }
}



?>