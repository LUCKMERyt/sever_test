<?php
class Route
{

    static function getRoute($route)
    {
        if($route === '/myserver/register')
            require 'register.php';
        elseif($route === '/myserver/get_kafe')
            require 'get_kafe.php';
        elseif($route === '/myserver/pc_catig')
            require 'pc_catig.php';
        else
            require '404.php';
    }
}