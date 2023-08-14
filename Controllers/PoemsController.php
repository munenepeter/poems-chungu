<?php

namespace Chungu\Controllers;

class PoemsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('manage-poems');
    }

    public function create() {
       //
    }
}
