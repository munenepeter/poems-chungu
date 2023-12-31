<?php

namespace Chungu\Controllers;

use Chungu\Core\Mantle\Auth;
use Chungu\Core\Mantle\Session;
use Chungu\Controllers\Controller;

class AuthController extends Controller {
    public function index() {
        if (Session::get('loggedIn')) {
            return redirect('/dashboard');
        }

        return view('login');
    }

    public function login() {
        $this->validateLoginRequest();

        if (!Auth::login($this->request()->form('email'), $this->request()->form('password'))) {
            return view('login', [
                'errors' => Session::get('_msg_error')
            ]);
        }
        return redirect('/dashboard');
    }

    public function signout() {
        if (request('_logout') !== md5(Session::get('email'))) {
            logger("Warning", "Logout: Someone is trying to spoof logout for" . Session::get('email'));
            return redirect('/');
        }
        Auth::logout(Session::get('email'));
        return redirect('/');
    }

    private function validateLoginRequest() {
        $this->request()->validate($_POST, [
            'email' => 'required',
            'password' => 'required'
        ]);
    }
}
