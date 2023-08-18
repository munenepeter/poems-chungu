<?php

namespace Chungu\Controllers;

use Chungu\Models\Poem;
use Chungu\Controllers\Controller;
use Chungu\Models\Category;

class PagesController extends Controller {

    public function __construct() {
        // $this->middleware('auth');
    }

    public function index() {
        $poems = Poem::all();
        $latestpoems = array_slice($poems, 0, 5);
        $featured_poem = $poems[array_rand($poems)];

        $categories = array_slice(Category::all(), 0, 4);

        return view('index', [
            'categories' => $categories,
            'poems' => $latestpoems,
            'featured_poem' => $featured_poem
        ]);
    }

    public function dashboard() {
        $this->middleware('auth');
        return view('dashboard');
    }
}
