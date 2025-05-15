<?php

class Panel {
    const MAX_CHARS_BY_LINE = 15;
    const HIDDEN_CHAR = "_";

    private array $textToSolve;
    
    public function __construct(private string $clue, private string $text){
        $this->textToSolve = [];
        for($i = 0; $i < strlen($this->text); ++$i) {
            $this->textToSolve[] = [$this->text[$i] => true];
        }
        var_dump($this->textToSolve);
    }
    public function show() {
        $currentLineCharsNumber = 0;
        foreach($this->textToSolve as $charToSolve) {
            var_dump(key($charToSolve));
            if($charToSolve)  {
                if($isHidden) echo Panel::HIDDEN_CHAR;
                else echo $charToSolve; 
            }
            else $this->checkNewLine($currentLineCharsNumber);
            ++$currentLineCharsNumber;
        }
        echo PHP_EOL.$this->clue;
    }

    private function checkNewLine(int $charsNumber): void  {
        if($charsNumber >= self::MAX_CHARS_BY_LINE) echo PHP_EOL;
        else echo " ";
    }
} 

?>