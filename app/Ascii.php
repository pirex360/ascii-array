<?php

namespace App;



class Ascii
{
    private array $asciiArray;


    public function __construct()
    {
        $this->asciiArray = array_map('chr', range(44, 124));
        shuffle($this->asciiArray);
    }

    public function removeRandomElement(): void
    {
        $randomIndex = array_rand($this->asciiArray);
        unset($this->asciiArray[$randomIndex]);
    }

    public function getMissingCharacter(): string|null
    {
        $allChars = implode($this->asciiArray);
        $missingChar = null;

        for ($i = 44; $i <= 124; $i++) {
            $char = chr($i);
            if (strpos($allChars, $char) === false) {
                $missingChar = $char;
                break;
            }
        }

        return $missingChar;
    }

    public function printArray():void
    {
        foreach ($this->asciiArray as $char) {
            echo $char . ' ';
        }
    }

    public function getAsciiArray(): array
    {
        return $this->asciiArray;
    }

}

