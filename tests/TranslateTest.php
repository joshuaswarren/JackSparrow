<?php

namespace Joshuaswarren\JackSparrow;

class TranslateTest extends \PHPUnit_Framework_TestCase
{
    public function testFriend()
    {
        $translator = new Translate;
        $result = $translator->toPirate("friend");
        $this->assertEquals($result, "mate");
    }

    public function testBeer()
    {
        $translator = new Translate;
        $result = $translator->toPirate("beer");
        $this->assertEquals($result, "grog");
    }


}
