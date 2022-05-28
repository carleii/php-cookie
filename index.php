<?php
// REQUIREMENTS

use PHPcookie\CookieSession;
require_once './cookie.php';

// MAIN PROGRAMM

// INSTANTIATION
$cookie = new CookieSession('user', 'devcarle@gmail.com', time() + 15 * 3);

// LAUNCH
$answer = $cookie->start();
// header("Location: ./");

// UPDATE
$answer = $cookie->update(time() + 60 * 60);

// GET VALUE
$cookie_value = $cookie->getValue();
#echo "hey";
// DESTRUCTION
$answer = $cookie->stop();
