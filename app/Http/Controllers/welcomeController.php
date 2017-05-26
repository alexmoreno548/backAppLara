<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class welcomeController extends Controller
{
    public function index()
    {
    	return view ('welcome', ['Posts' => Post::all()]);
    }
}
