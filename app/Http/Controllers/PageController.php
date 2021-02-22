<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
      return view('pages.home');
    }

    public function blog()
    {
      return view('pages.blog');
    }

    public function about()
    {
      return view('pages.about');
    }

    public function contacts()
    {
      return view('pages.contacts');
    }
}
