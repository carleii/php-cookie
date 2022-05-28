<?php
// REQUIREMENTS

use PHPcookie\CookieSession;
require_once './cookie.php';

// MAIN PROGRAMM
const COOKIE_NAME = "the name of the cookie dude";
const DEFAULT_COOKIE_TIME = 60*60*24*365; # one year duration
$cookie_value = "give a value to your cookie";

// INSTANTIATION
$cookie = new CookieSession(COOKIE_NAME, $cookie_value, time() + DEFAULT_COOKIE_TIME);

// LAUNCH
$answer = $cookie->start();
// you must redirect to another page for the cookie to exist
#header("Location: ./");

// UPDATE
$answer = $cookie->update(time() + 60 * 60);

// GET VALUE
$cookie_value = $cookie->getValue();
// DESTRUCTION

$answer = $cookie->stop();
// redirection to the login page or somethinglike
#header("Location: ./");