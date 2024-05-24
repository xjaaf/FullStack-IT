<?php 

class Archer extends Player {
    protected $bow;
    protected $arrows;

    public function __construct($nickname, $bow, $arrows, $x = 0, $y = 0) {
        parent::__construct($nickname, $x, $y);
        $this->bow = $bow;
        $this->arrows = $arrows;
    }

    public function shoot() {
        if ($this->arrows > 0) {
            echo "$this->nickname shoots with $this->bow!\n";
            $this->arrows--;
        } else {
            echo "$this->nickname is out of arrows!\n";
        }
    }
}

?>