<?php

namespace Chungu\Controllers;

use Chungu\Models\Poem;
use Chungu\Models\Author;
use Chungu\Models\Category;
use Chungu\Controllers\Controller;

class PoemsController extends Controller {

    public function __construct() {
        //
    }

    public function index() {
        $this->middleware('auth');
        $poems = Poem::all();
        $categories = Category::all();
        $authors = Author::all();

        return view('manage-poems', [
            'poems' => $poems,
            'categories' => $categories,
            'authors' => $authors
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
            'author_id' => request('author'),
            'category_id' => request('category'),
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

    public function all() {
        $poems = Poem::all();

        return view('poems', [
            'poems' => $poems
        ]);
    }
}
