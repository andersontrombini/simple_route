<?php
namespace Andersontf\SimpleRoute\Core\Requests;

interface RequestInterface {

    /**
     * Input
     * retorna todos os input ou o input da chave escolhida
     * @param string $key
     */
    public function input(string $key = '');

    public function has(string $key) : bool;

    public function file(string $key = '');

    public function hasFile(string $key) : bool;

    public function server() : array;

    public function baseUri() : string;

    public function path() : string;

    public function method() : string; //retornara o verbo http para a solicitação

    public function accepts(array $accepts) : bool; //retorna os tipos de conteudo aceitos pela solicitação
    // ex ['text/html', 'application/json'].
    public function ip() :string; //retorna o ip do cliente que fez o request
}