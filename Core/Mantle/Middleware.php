<?php

namespace Chungu\Core\Mantle;

class Middleware {

    protected $middleware = [
        'auth', 'admin', 'api'
    ];

    public function middleware(string $middleware) {
        if (!in_array($middleware, $this->middleware)) {
            throw new \Exception("This {$middleware} middleware doesn't exist", 500);
        }
        $this->$middleware();
    }

    private function auth() {
        if (!auth()) {
            return redirect('/auth/login');
        }
    }
    private function admin() {
        if (!isAdmin()) {
            return redirectback();
        }
    }
 
}
