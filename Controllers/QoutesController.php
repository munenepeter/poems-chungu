<?php

namespace Chungu\Controllers;

class QoutesController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('manage-qoutes');
    }

    public function create() {
  
        //
    }
}
