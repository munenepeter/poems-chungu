<?php

namespace Chungu\Controllers;

use Chungu\Controllers\Controller;

class SubscribersController extends Controller{


    public function __construct()
    {
       //
    }


    public function create() {
        return $this->json(request()->all());
    }
}