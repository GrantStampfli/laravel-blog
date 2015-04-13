<?php namespace Blog\Http\Controllers;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticlesController extends Controller {

    public function archive()
    {
        return view('archive');
    }

}
