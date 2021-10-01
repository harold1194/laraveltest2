<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome To Programming Language Project';
        return view('pages.index')->with('title', $title);
    }
    public function about()
    {
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Services', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
