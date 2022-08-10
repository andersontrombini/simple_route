<?php

namespace Andersontf\SimpleRoute\Core\Requests;


class Request implements RequestInterface
{

    public $request;

    public $files;

    public $raw;

    public function __construct()
    {
        $this->raw = json_decode(file_get_contents("php://input"), true) ?: [];
        $this->request = array_merge($_REQUEST, $this->raw);
        $this->files = $_FILES;
    }

    public function input($key = false)
    {
        if ($key) {
            return isset($this->request[$key])
                ? $this->request[$key]
                : false;
        };

        return $this->request;
    }

    public function has($key): bool
    {
        if (!isset($this->request[$key])) {
            return false;
        };

        return true;
    }

    public function file(string $key = '')
    {
        if ($this->file[$key]) {
            return isset($this->files[$key])
                ? $this->files[$key]
                : false;
        };

        return $this->files;
    }

    public function hasFile(string $key): bool
    {
        if (!isset($this->files[$key])) {
            return false;
        };

        return true;
    }

    public function server(): array
    {
        return $_SERVER;
    }

    public function baseUrl(): string
    {
        return $this->server()['HTTP_HOST'];
    }

    public function path(): string
    {
        return $this->server()['REQUEST_URI'];
    }

    public function method(): string
    {
        return $this->server()['REQUEST_METHOD'];
    }

    public function accepts(): array
    {
        return RequestService::explodeAccepts($this->server()['HTTP_ACCEPT']);
    }

    public function ip(): string
    {
        return $this->server()['REMOTE_ADDR'];
    }
   
}

   
