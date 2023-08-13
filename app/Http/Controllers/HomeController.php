<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    
    public function single()
    {
        return view('single');
    }
    public function double()
    {
        return view('double');
    }
    public function triple()
    {
        return view('triple');
    }
    public function twin()
    {
        return view('twin');
    }
    public function family()
    {
        return view('family');
    }
    public function suite()
    {
        return view('suite');
    }


    public function type()
    {
        return view('type');
    }
    public function signup()
    {
        return view('signup');
    }
    public function login()
    {
        return view('login');
    }
}
