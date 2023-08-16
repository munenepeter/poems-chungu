<?php

namespace Chungu\Controllers;

use Chungu\Models\Poem;
use Chungu\Controllers\Controller;

class PagesController extends Controller {

    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {

        $poems = Poem::all();
        $featured_poem = $poems[array_rand($poems)];

        return view('index',[
            'poems' => $poems,
            'featured_poem' => $featured_poem
        ]);
    }

    public function dashboard() {
        $this->middleware('auth');
        return view('dashboard');
    }
}
