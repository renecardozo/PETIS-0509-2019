<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to laravel application';
        return view('pages.index', compact('title'));
    }

    public function about() {
        $title_about = 'Welcome to about page';
        return view('pages.about')->with('title_about', $title_about);
    }

    public function services() {
        $data = array(
            'title' => 'Welcome to services page',
            'services' => ['Web Design', 'Programing', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
