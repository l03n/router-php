<?php

namespace L03n\RouterPhp;

// Router PHP
// class Router {
//     public $uri;

//     public function __construct() {
//         $this->uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//     }

//     public function getURI() {
//         return $this->uri;
//     }
// }


class Router {
    public $uri;

    public $routes = [
        '/' => 'hello routes',
    ];

    public function __construct() {
        $this->uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    }

    public function getRoutes() {
        if ($this->uri == '/') {
            echo 'good uri; good boy<br><br>';
            echo 'good start<br><br>' . $this->routes['/'];
        } else {
            echo 'come back to the base boy, missing some rocky';
        }
    }
}
