<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
        return '<a href="https://www.educastudio.com/contact-us">contact-us</a>';
    }
}
