<?php

class Checking
{
    private $uu;
    private $pp;

    function __construct()
    {
        $this->uu = isset($_POST["username"]) ? $_POST["username"] : null;
        $this->pp = isset($_POST["password"]) ? $_POST["password"] : null;
    }

    function checking()
    {
        if( $this->uu == 'Sunny' && $this->pp == '12345'){
            echo "Welcome!";
        } else {
            echo "Try again!";
        }
    }
}