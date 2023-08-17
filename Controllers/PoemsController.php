<?php

namespace Chungu\Controllers;

use Chungu\Models\Poem;
use Chungu\Controllers\Controller;

class PoemsController extends Controller {

    public function __construct() {
        //
    }

    public function index() {
        $this->middleware('auth');
        $poems = Poem::all();

        return view('manage-poems', [
            'poems' => $poems
        ]);
    }

    public function create() {
        $this->middleware('auth');

        $this->request()->validate([
            'title' => request('title'),
            'author' => request('author'),
            'body' => request('body')
        ], [
            'title' => 'required',
            'author' => 'required',
            'body' => 'required'
        ]);


        Poem::create([
            'title' => request('title'),
            'author' => request('author'),
            'body' => request('body')
        ]);

        $this->json('success', 200);

        redirect('/dashboard/poems');
    }

    public function show($id) {
        $poem = Poem::find($id);

        return view('poem', [
            'poem' => $poem
        ]);
    }
}
