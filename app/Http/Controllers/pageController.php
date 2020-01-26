<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function students()
    {
        return view('students');
    }
    public function cycles()
    {

        return view('cycles');
    }
    public function courses()
    {

        return view('courses');
    }
    public function branches()
    {

        return view('branches');
    }
    public function payments()
    {

        return view('payment');
    }
    public function status()
    {

        return view('stutus');
    }
    public function careers()
    {

        return view('career');
    }
    public function jobs()
    {

        return view('jobs');
    }
    public function salesman()
    {

        return view('salesman');
    }
    public function reports()
    {

        return view('reports');
    }
}
