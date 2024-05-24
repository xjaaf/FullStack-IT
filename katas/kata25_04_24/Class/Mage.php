<?php 

class Mage extends Player {
    protected $spells = [];

    public function __construct($nickname, $x = 0, $y = 0) {
        parent::__construct($nickname, $x, $y);
    }

    public function addSpell($spell) {
        $this->spells[] = $spell;
    }

    public function useSpell($spellName) {
        if (in_array($spellName, $this->spells)) {
            echo "$this->nickname casts $spellName!\n";
        } else {
            echo "$this->nickname does not know $spellName!\n";
        }
    }
}


?>