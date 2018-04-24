<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showHome(){
        return view('pages.index');
    }

    public function showFirst(){
        return view('pages.congrats-on-your-donation');
    }

}
