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
    public function has($key = false){

        if ( !isset($this->request[$key])) {
            return 'Não existe esse parâmetro informado na request';
        };

        return 'Existe esse parâmetro informado na request';
    }
    


    


}

   
