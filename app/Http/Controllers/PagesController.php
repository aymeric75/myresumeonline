<?php

namespace App\Http\Controllers;

use App\Cv;

use App\Skill;

use App\Language;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {

    	$cvs = Cv::all();

    	$skills = Skill::all();

    	$languages = Language::all();

    	return view('welcome', ['cvs' => $cvs, 'skills' => $skills, 'languages' => $languages]);
    }
}
