<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return '<a href="https://www.educastudio.com/about-us">about-us</a>';
    }
}