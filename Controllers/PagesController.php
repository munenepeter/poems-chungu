<?php

namespace Chungu\Controllers;
use Chungu\Models\Meeting;

class PagesController extends Controller {

    public function __construct() {
        // $this->middleware('auth');
       }

    public function index() {
        return view('index');
    }
 
 
}
