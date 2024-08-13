<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;
use Illuminate\View\View;
use PharIo\Manifest\Application;

class StaticPagesController extends Controller
{
    public function home(): Factory|View|Application
    {
        return view('static_pages/home');
    }

    public function help(): Factory|View|Application
    {
        return view('static_pages/help');
    }

    public function about(): Factory|View|Application
    {
        return view('static_pages/about');
    }
}
