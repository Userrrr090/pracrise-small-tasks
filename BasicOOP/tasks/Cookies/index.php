<?php

class CookieShell
{
    private int $count = 0;

    public function count ()
    {
        setcookie('count', isset($_COOKIE['count']) ? $_COOKIE['count']++ : 1);
    }

    public function setCookie ($name, $value, $time)
    {
        setcookie($name, $value, time() + $time);

        $_COOKIE[$name] = $value;
    }

    public function get ($name)
    {
        var_dump($_COOKIE[$name]);
    }

}

$test = new CookieShell();
$test->setCookie('test', '123', 10);
$test->get('test');
$test->count();