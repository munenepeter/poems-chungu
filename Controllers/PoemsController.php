<?php

namespace Chungu\Controllers;

use Chungu\Models\Poem;
use Chungu\Controllers\Controller;

class PoemsController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $poems = Poem::all();
        
        return view('manage-poems', [
            'poems' => $poems
        ]);
    }

    public function create() {
        $this->json(request()->all());
    }
}
