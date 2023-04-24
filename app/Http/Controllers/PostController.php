<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function search(Request $request) {
        return view('search.search');
    }
}
