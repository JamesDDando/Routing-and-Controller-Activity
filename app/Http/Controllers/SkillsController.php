<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){
        $skillsData = array(
            'skill1' => '-I am proficient with HTML, CSS, and JavaScript, as well as several backend programming 
            languages such as PHP, Python, and Java. I also have experience with multimedia software such as Filmora, 
            Audacity, Adobe, and other image/photo editing applications.',
            'skill2' => '-I am skilled at public speaking and have demonstrated leadership skills and quality 
            in many organizations where I have led and assisted, being that as former Theatro-Pino Vice Chairman.',
            'skill3' => '-I am an experienced dancer that brings a distinct and dynamic artistic flair to every stage 
            with my diverse proficiency as a visionary choreographer, expressive dancer, and compelling performer. 
            I create remarkable experiences by seamlessly fusing movement, emotion, and stage presence.'
        );
        return view('skills', ['skillsData' => $skillsData]);
    }
}
