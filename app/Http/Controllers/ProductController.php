<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function eduGames(){
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">marble-edu-games</a>';
    }
    public function kidsGames(){
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">marbel-and-friends-kids-games</a>';
    }
    public function storyBooks(){
        return '<a href="https://www.educastudio.com/category/riri-story-books">riri-story-books</a>';
    }
    public function kidsSongs(){
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">kolak-kids-songs</a>';
    }
}