<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $title = "Welcome to our website!";
        return view('home', compact('title'));
    }

    public function about() {
        $info = "This website is built using Laravel and demonstrates the MVC pattern.";
        return view('about', compact('info'));
    }

    public function features() {
        $features = [
            "Clear MVC structure",
            "Easy and smooth routing",
            "Powerful Blade templates",
            "Database management with Eloquent"
        ];
        return view('features', compact('features'));
    }

    public function team() {
        $teamMembers = [
            ['name'=>'Ahmed','role'=>'Frontend Developer'],
            ['name'=>'Laila','role'=>'UI/UX Designer'],
            ['name'=>'Mohammed','role'=>'Backend Developer'],
            ['name'=>'Sara','role'=>'Project Manager']
        ];
        return view('team', compact('teamMembers'));
    }
}
