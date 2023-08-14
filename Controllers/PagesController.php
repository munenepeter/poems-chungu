<?php

namespace Chungu\Controllers;

use Chungu\Controllers\Controller;

class PagesController extends Controller {

    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {
        return view('index');
    }

    public function dashboard() {
        $this->middleware('auth');
        return view('dashboard');
    }
}
