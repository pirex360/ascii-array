<?php

namespace Tests\Unit;

use App\Ascii;
use PHPUnit\Framework\TestCase;

class AsciiTest extends TestCase
{

    public function test_random_array_contains_all_ascii_characters_from_comma_to_pipe(): void
    {
        $randomArray = (new Ascii())->getAsciiArray();

        $missingChars = array_diff(range(',', '|'), $randomArray);
        $this->assertEmpty($missingChars);
        $this->assertNotEmpty($randomArray);
        $this->assertCount(81, $randomArray);
    }

    public function test_random_array_do_not_contains_all_ascii_characters_from_comma_to_pipe(): void
    {
        $randomArray = (new Ascii())->getAsciiArray();
        $randomKey = array_rand($randomArray);

        unset($randomArray[$randomKey]);
        $missingChars = array_diff(range(',', '|'), $randomArray);
        $this->assertNotEmpty($missingChars);
    }


    public function test_can_remove_random_element()
    {
        $ascii = new Ascii();
        $initialCount = count($ascii->getAsciiArray());

        $ascii->removeRandomElement();

        $this->assertCount($initialCount - 1, $ascii->getAsciiArray());
    }


    public function test_can_get_missing_character()
    {
        $ascii = new Ascii();
        $ascii->removeRandomElement();

        $removedChar = $ascii->getMissingCharacter();
        $ascii->removeRandomElement();
        $missingChar = $ascii->getMissingCharacter();


        $this->assertIsString($removedChar);
        $this->assertIsString($missingChar);
        $this->assertEquals($removedChar, $missingChar);
    }

}
