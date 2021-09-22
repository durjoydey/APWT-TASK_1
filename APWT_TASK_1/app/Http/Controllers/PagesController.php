<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pageCheck(){
        return view('landingpage');
    }
    public function pageContact(){
        return view('contactpage');
    }
    public function pageService(){
        return view('servicepage');
    }   
    public function pageAbout(){
        return view('aboutpage');
    }
    public function pageTeams(){
        return view('teamspage');
    }
}
