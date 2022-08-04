<?php

class Request {

    public $request;

    public function __construct()
    {
        $this->request =  $_REQUEST;
    }

    public function input($key = false)
    {
        if ($key) {
            return $this->request[$key];
        };

        return $this->request;
    }

    //verificar se a key passada como parametro existe na request
    public function has($key){

        if ( !isset($this->request[$key])) {
            return false;
        };

        return true;
    }
    


    


}

   
