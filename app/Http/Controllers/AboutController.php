<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $authorName = "Anna Marchewa";
        $authorDescription = "Dietetyk z pasją. Lorem ipsum dolor sit amet. Kurczak z warzywami bardzo dobra potrawa.";

        return view('about', compact('authorName', 'authorDescription'));
    }
}
