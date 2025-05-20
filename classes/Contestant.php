<?php
class Contestant {

    private string $name;
    private int $points;

    public function __construct(string $name){
        $this->name = $name;
        $this->points = 0;
    }
    public function sayLetter(): string { 
        //TODO: Check right input here. Just one char. Char must be an allowed letter.
        return strtoupper(readline());
    }

    public function getName(): string {
        return $this->name;
    }
}

?>