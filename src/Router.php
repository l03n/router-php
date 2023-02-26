<?php

namespace L03n\RouterPhp;

class Router {
    public $uri;

    public function __construct() {
        $this->uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    }

    public function getURI() {
        return $this->uri;
    }
}
