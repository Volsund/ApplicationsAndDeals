<?php

namespace App\Core;

class View
{

    public static function show(string $path)
    {
        require 'app/Views/' . $path;
    }
}