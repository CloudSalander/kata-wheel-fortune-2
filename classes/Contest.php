<?php

class Contest {
    
    const CONTESTANTS_NUMBER = 3;
    
    public function __construct(private Panel $panel, private array $contestants){
        $this->turnNumber = 0;
    }
    
    public function play(): void {
        while(!$this->panel->isSolved()) {
            $currentContestant = $this->turnNumber % self::CONTESTANTS_NUMBER;
            var_dump($currentContestant);
            $this->contestants[$currentContestant]->sayLetter(); 
            ++$this->turnNumber;
        }
        echo "The winner is...";
    }
}

?>