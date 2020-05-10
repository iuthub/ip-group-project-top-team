<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Tag;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        $categories = Category::all();
        $tags = Tag::all();
        $discounts = Good::orderBy('discount','desc')->take(6)->get();
        $newest = Good::latest()->take(6)->get();
        return view('welcome', [
            'tags' => $tags,
            'categories' => $categories,
            'discounts' => $discounts,
            'newest' => $newest
        ]);
    }
}
