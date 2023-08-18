<?php

namespace Chungu\Core\Mantle;

class Router {

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function __call($method, $arguments) {
        if (in_array($method, ['get', 'post'], true)) {
            [$uri, $controller] = $arguments;
            $this->addRoute(strtoupper($method), $uri, $controller);
        }
    }

    protected function addRoute($requestType, $uri, $controller) {
        $uri = $this->prepareUri($uri);
        $this->routes[$requestType][$uri] = $controller;
    }

    protected function prepareUri($uri) {
        return preg_replace('/{[^}]+}/', '([^\/]+)', $uri);
    }

    public function direct($uri, $requestType) {
        $routes = $this->routes[$requestType];
        foreach ($routes as $route => $controller) {
            if (preg_match("#^{$route}$#", $uri, $matches)) {
                array_shift($matches); // Remove the full match
                $this->callAction($controller, ...$matches);
                return;
            }
        }
        $this->handleNotFound($uri, $requestType);
    }

    protected function callAction($controller, ...$params) {
        [$controllerName, $action] = explode('@', $controller);
        $controllerName = "Chungu\\Controllers\\$controllerName";

        if (class_exists($controllerName)) {
            $controllerInstance = new $controllerName();
            if (method_exists($controllerInstance, $action)) {
                $controllerInstance->$action(...$params);
                return;
            }
        }

        $this->handleActionNotFound($controllerName, $action);
    }

    protected function handleNotFound($uri, $requestType) {
        $message = "There is no route to handle " . strtoupper($requestType) . " /{$uri}";
        logger("Debug", $message);
        $this->abortWithError($message, 404);
    }

    protected function handleActionNotFound($controller, $action) {
        $message = "$controller does not respond to $action Method!";
       // logger("Debug", $message);
        $this->abortWithError($message, 500);
    }

    protected function abortWithError($message, $code) {
        http_response_code($code);
        view('_error', [
            'code' => $code,
            'message' => $message
        ]);
        exit;
    }
}
