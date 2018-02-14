<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('pages.index');
    }
    function motherboard(){
        return view('pages.tutorial.motherboard.motherboard');
    }
    function expansion_slots(){
        return view('pages.tutorial.motherboard.expansion_slots');
    }
}
