<?php
namespace PHPcookie;

/**
 * COOKIE SESSION
 */
class CookieSession
{
    public $cookie_name ;
    public $cookie_value ;
    public $time;

    // CREATION
    function __construct($name, $value, $time)
    {
        // INSTATIATION OF THE COOKIE
        $this->cookie_name = $name;
        $this->cookie_value = $value;
        $this->time = $time;
        # code...
    }

    // CHECK IF THE COOKIE EXISTS
    public function exist()
    {
        return (isset($_COOKIE[$this->cookie_name]))? 1:0;
        # code...
    }

    #LAUNCH
    public function start()
    {
        // CREAT THE COOKIE
        setcookie($this->cookie_name, $this->cookie_value, $this->time);
        return 1;
        # code...
    }

    #UPDATE THE COOKIE SESSION
    public function update($time)
    {
        // CHECKING IF THE COOKIE ALREADY EXIST
        if ($this->exist()== 1) {
            $this->cookie_value = $_COOKIE[$this->cookie_name];
            $this->time = $time;
            $this->start();
            return  1;
            # code...
        } else {
            return 0;
        }

        # code...
    }

    #READ COOKIE VALUE
    public function getValue()
    {
        ($this->exist()== 1)? $this->cookie_value:trigger_error("session cookie does not exist", E_USER_ERROR);
        # code...
    }

    #DESTRUCTION
    public function stop()
    {
        // deletion of the cookie 
        setcookie($this->cookie_name);
        // Removed super global value $_COOKIE
        unset($_COOKIE[$this->cookie_name]);
        return 1;

        # code...
    }
}
