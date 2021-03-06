<?php
//Initialize autoload class function
function __autoload($nameOfClass)
{
    if (file_exists('controller/' . $nameOfClass . '.php')) {
        require('controller/' . $nameOfClass . '.php');
    }
}
//Initialize model load function
function getModel($nameOfModell)
{
    if (file_exists('models/'.$nameOfModell.'.php')) {
        require('models/'.$nameOfModell.'.php');
    }
}
function url($full = null)
{
    if ($full == 'full') {
        $path = "%s://%s%s";
    } else {
        $path = "%s://%s";
    }
    return sprintf(
        $path,
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $_SERVER['REQUEST_URI']
    );
}

function reload($where = null)
{
    is_null($where) ? header("Location: /") : header("Location: ".$where."/");
}