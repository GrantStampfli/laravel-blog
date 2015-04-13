<?php namespace Blog\Http\Controllers;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
		$name = "Now Nerd";
		return view('about')->with('name', $name);
	}
	public function contact() {
		return view('contact');
	}
}
