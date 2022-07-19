<?php

namespace App\Helpers;

class Helpers
{

    public static function excerpt($text, $limit = 400)
    {

        $text = substr($text, 0, $limit);
        $text = $text . " ... ";
        return $text;
    }
}
