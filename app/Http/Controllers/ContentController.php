<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content_data;

class ContentController extends Controller
{
    function AddContent() {
        return view('AddContent');
    }
    function DataInsert(Request $request) {
        $title = $request->input('title');
        $author = $request->input('author');
        $data = $request->input('data');

        $isInsertSuccress = Content_data::insert(['title'=>$title,
                                                   'author' =>$author,
                                                   'data'=>$data]);
        
        return redirect('/community');
    }
}
