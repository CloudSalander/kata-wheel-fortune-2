<?php

class Contest {
    public function __construct(private Panel $panel, private array $contestants){
        $this->turnNumber = 0;
    }
    
    public function play(): void {
        while(!$panel->isSolved()) {
            ++$this->turnNumber;
        }
        echo "The winner is...";
    }
}

?>