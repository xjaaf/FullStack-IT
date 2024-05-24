<?php 

class Player {
    protected $nickname;
    protected $x;
    protected $y;

    public function __construct($nickname, $x = 0, $y = 0) {
        $this->nickname = $nickname;
        $this->x = $x;
        $this->y = $y;
    }

    public function move($direction) {
        switch($direction) {
            case 'UP':
                if($this->x > 0)
                    $this->x--;
                else
                    echo "Error: Can't move up.\n";
                break;
            case 'DOWN':
                if($this->x < 9)
                    $this->x++;
                else
                    echo "Error: Can't move down.\n";
                break;
            case 'LEFT':
                if($this->y > 0)
                    $this->y--;
                else
                    echo "Error: Can't move left.\n";
                break;
            case 'RIGHT':
                if($this->y < 9)
                    $this->y++;
                else
                    echo "Error: Can't move right.\n";
                break;
            default:
                echo "Invalid direction.\n";
        }
    }

    public function getPosition() {
        return "($this->x, $this->y)";
    }
}




?>