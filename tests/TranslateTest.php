<?php

namespace Joshuaswarren\JackSparrow;

class TranslateTest extends \PHPUnit_Framework_TestCase
{
    public function testOutput()
    {
        $translator = new Translate;
        $result = $translator->toPirate("Hello world!");
        $this->assertEquals($result, "Ahoy world!");
    }
}
