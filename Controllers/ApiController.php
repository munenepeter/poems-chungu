<?php

namespace Chungu\Controllers;


use Chungu\Models\Poem;
use Chungu\Controllers\Controller;

/**
 * Api controller
 *
 * this resends database results in a json parsed way to the front-end
 *
 * @author Peter.Njega <munenenjega@gmail.com>
 *
 */

class ApiController extends Controller {
    public function __construct() {
        //$this->middleware('auth');
    }

    public function allpoems() {
        return $this->json(Poem::all());
    }
}
