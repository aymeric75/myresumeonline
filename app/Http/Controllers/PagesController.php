<?php

namespace App\Http\Controllers;

use App\Cv;

use App\Skill;

use App\Language;

use App\Education;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {

    	$cvs = Cv::all();

    	$skills = Skill::all();

    	$languages = Language::all();

    	$educations = Education::all();

    	return view('welcome', ['cvs' => $cvs, 'skills' => $skills, 'languages' => $languages, 'educations' => $educations]);
    }
}
