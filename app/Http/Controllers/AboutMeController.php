<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){
        $aboutMeData = array(
            'name' => 'James Dando',
            'age' => 21,
            'email' => 'jamesluis0912@gmail.com'
        );
        return view('about', ['aboutMeData' => $aboutMeData]);
    }
}