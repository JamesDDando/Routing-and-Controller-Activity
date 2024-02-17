<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $hobbiesData = array(
            'hobby1' => '-Playing Games',
            'hobby2' => '-Dancing',
            'hobby3' => '-Watching Movies',
            'hobby4' => '-Watching Anime',
            'hobby5' => '-Solving Puzzles',
            'hobby6' => '-Singing'
        );
        return view('hobbies', ['hobbiesData' => $hobbiesData]);
    }
}