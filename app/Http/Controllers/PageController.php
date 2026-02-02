<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function ourblog()
    {
        return view('blog.ourblog');
    }
    
    public function blog1()
    {
        return view('blog.blog1');
    }

    public function blog2()
    {
        return view('blog.blog2');
    }

    public function blog3()
    {
        return view('blog.blog3');
    }
    public function blog4()
    {
        return view('blog.blog4');
    }

    public function blog5()
    {
        return view('blog.blog5');
    }
}
