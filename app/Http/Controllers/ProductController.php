<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function eduGames(){
        return 'Marble Edu Games';
    }
    public function kidsGames(){
        return 'Marble and Friends Kids Games';
    }
    public function storyBooks(){
        return 'Riri Story Books';
    }
    public function kidsSongs(){
        return 'Kolak Kids Songs';
    }
}
