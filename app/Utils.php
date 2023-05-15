<?php

namespace App;

class Utils
{
    public static function linebreak(int $lines = 1) :void
    {
        $output = "";
        for($i=0; $i < $lines; $i++)
        {
            $output.= (PHP_SAPI === 'cli') ? PHP_EOL : '<br>';
        }

        echo $output;
    }

}

