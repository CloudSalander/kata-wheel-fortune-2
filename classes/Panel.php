<?php

class Panel {
    const MAX_CHARS_BY_LINE = 15;
    const HIDDEN_CHAR = "_";

    private array $textToSolve;
    private array $hiddenCharsMap;
    
    public function __construct(private string $clue, string $text) {
        $this->textToSolve = [];
        for($i = 0; $i < strlen($text); ++$i) {
            $this->textToSolve[] = $text[$i];
            $this->hiddenCharsMap[] = true;
        }
    }
    public function show() {
        $currentCharIndex = 0;
        while($currentCharIndex < count($this->textToSolve)) {
            if($this->isHiddenChar($currentCharIndex)) echo Panel::HIDDEN_CHAR; 
            else {
                echo $this->textToSolve[$currentCharIndex];
                $this->checkNewLine($currentCharIndex);
            
            }
            ++$currentCharIndex;
        }
        echo PHP_EOL.$this->clue;
    }

    public function isSolved(): bool {
        foreach($this->textToSolve as $index => $charToSolve) {
            if($charToSolve != " " && $this->hiddenCharsMap[$index]) return false;
        }
        return true;
    }

    private function checkNewLine(int $charsNumber): void  {
        if($charsNumber >= self::MAX_CHARS_BY_LINE) echo PHP_EOL;
        else echo " ";
    }

    private function isHiddenChar(int $index): bool {
        return $this->textToSolve[$index] != " " && $this->hiddenCharsMap[$index];
    }

} 

?>