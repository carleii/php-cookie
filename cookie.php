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
        if (isset($_COOKIE[$this->cookie_name])) {
            $this->cookie_value = $_COOKIE[$this->cookie_name];
            $this->time = $time;
            $this->start();
            return  1;
            # code...
        } else {
            return "message d'erreur";
        }

        # code...
    }

    #READ COOKIE VALUE
    public function getValue()
    {
        return $this->cookie_value;
        # code...
    }

    #DESTRUCTION
    public function stop()
    {
        // Suppression du cookie 
        setcookie($this->cookie_name);
        // Suppression de la valeur du tableau $_COOKIE
        unset($_COOKIE[$this->cookie_name]);
        // redirection
        return 1;

        # code...
    }
}
