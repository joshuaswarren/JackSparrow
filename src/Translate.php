<?php

namespace Joshuaswarren\JackSparrow;

class Translate
{
    /**
     *  Endpoint to send translation requests to
     */
    protected $endpoint;

    public function __construct()
    {
        $this->endpoint = "http://isithackday.com/arrpi.php";
    }

    public function toPirate($text)
    {
        $toTranslate = urlencode($text);
        $translateUrl = $this->endpoint . '?text=' . $toTranslate;
        $result = file_get_contents($translateUrl);
        return $result;
    }
}
