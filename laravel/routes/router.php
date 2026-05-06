<?php
 
class Router {
    private array $routes = [];
    private array $params = [];
 
    public function get(string $path, string $file): void {
        $this->routes['GET'][$path] = $file;
    }
 
    public function post(string $path, string $file): void {
        $this->routes['POST'][$path] = $file;
    }
 
    public function dispatch(): void {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri    = rtrim($uri, '/') ?: '/';
 
        $routes = $this->routes[$method] ?? [];
 
        foreach ($routes as $pattern => $file) {
            $regex = preg_replace('/\{([a-z_]+)\}/', '(?P<$1>[^/]+)', $pattern);
            $regex = '#^' . $regex . '$#';
 
            if (preg_match($regex, $uri, $matches)) {
                $this->params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                $_GET = array_merge($_GET, $this->params);
 
                if (file_exists($file)) {
                    require $file;
                    return;
                }
            }
        }
 
        http_response_code(404);
        require 'routes/not-found.php';
    }
 
    public function param(string $key): ?string {
        return $this->params[$key] ?? null;
    }
}