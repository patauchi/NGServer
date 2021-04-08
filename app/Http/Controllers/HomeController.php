<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(News $news)
    {

    	$news = News::get();
        return view('home', compact('news'));

    	//return $news;

    }
}
