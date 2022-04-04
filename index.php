<?php
// REQUIREMENTS
require_once './package.php';
// MAIN PROGRAMM

// INSTANTIATION
$cookie = new cookie_session('user', 'devcarle@gmail.com', time() + 15 * 3);

// LAUNCH
$answer = $cookie->start();
header("Location: ./");

// UPDATE
$answer = $cookie->update(time() + 60 * 60);

// GET VALUE
$cookie_value = $cookie->get_value();

// DESTRUCTION
$answer = $cookie->stop();
