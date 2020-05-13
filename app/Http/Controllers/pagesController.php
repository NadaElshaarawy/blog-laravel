<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
 public function prolang(){
     $langs = ['php', 'java','python'];
     return view('pages.prolanguage')->with('langs', $langs);
 }
}
