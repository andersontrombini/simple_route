<?php
namespace Andersontf\SimpleRoute\Core\Requests;

interface RequestInterface {

       /**
     * input
     * return all inputs received by request
     * @param string $key
     */
    public function input(string $key = '');

    /**
     * has
     * return a boolen based if key exist over request
     */
    public function has(string $key) : bool;

    /**
     * file
     * get file tha was in key, if this on exist
     * @param string $key
     * @return void
     */
    public function file(string $key = '');

    /**
     * hasFile
     * check if exist a file on request key passed
     * @param string $key
     * @return boolean
     */
    public function hasFile(string $key) : bool;

    /**
     * server
     * return all server variables that was got over request
     *
     * @return array
     */
    public function server() : array;

    /**
     * baseUri
     * return the host of url address 
     * @return string
     */
    public function baseUrl() : string;

    /**
     * path
     * return the uri of url adress
     * @return string
     */
    public function path() : string;

    /**
     * method
     * return the method of request
     * @return string
     */
    public function method() : string; //retornara o verbo http para a solicitação

    /**
     * accepts
     * return the accepts of request
     * @param array $accepts
     * @return boolean
     */
    public function accepts(array $accepts) : bool; 
    
    /**
     * ip
     * return the client ip
     * @return string
     */
    public function ip() :string; //retorna o ip do cliente que fez o request
}