<?php

spl_autoload_register("autoloader");

function autoloader($class)
{
    $path = "models/";
    $ext = ".php";
    $fullpath = $path . $class . $ext;

    include_once $fullpath;
}
