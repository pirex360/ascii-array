<?php
require __DIR__ . '/vendor/autoload.php';

use App\Ascii;
use App\Utils;


$randomArray = new Ascii();


echo "[UNTOUCHED RANDOM ASCII ARRAY]";
Utils::linebreak();
echo $randomArray->printArray();
Utils::linebreak(2);

$randomArray->removeRandomElement();
echo "[AFTER DISCARDING RANDOM ELEMENT]";
Utils::linebreak();
echo $randomArray->printArray();
Utils::linebreak(2);

echo "[DISCARDED SINGLE ELEMENT]";
Utils::linebreak();
echo $randomArray->getMissingCharacter();
Utils::linebreak();
