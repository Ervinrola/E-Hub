<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('home');
    }

    public function community() {
        return view('community');
    }

    public function help() {
        return view('help');
    }

    public function button() {
        return view('button');
    }

    public function about() {
        return view('about');
    }

    public function page() {
        return view('page2');
    }

    public function search() {
        return view('search');
    }

    public function results1() {
        return view('results1');
    }

    public function results2() {
        return view('results2');
    }

    public function test() {
        return view('test');
    }

    public function article() {
        return view('article');
    }
    // public function contactPage() {
    //     return view('contactPage');
    // }
}
