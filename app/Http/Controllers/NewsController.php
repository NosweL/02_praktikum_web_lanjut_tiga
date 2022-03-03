<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id)
    {
        if ($id == 1) {
            return '<a href="https://www.educastudio.com/news".$id>news</a>';
        } else {
            return '<a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19".$id>educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19</a>';
        }
    }
}