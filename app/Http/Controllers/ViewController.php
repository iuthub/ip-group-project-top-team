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

    public function post($id){
        $categories = Category::all();
        $tags = Tag::all();
        $post = Good::where('id', '=' , $id)->first();
        $related = Good::where([['category_id', '=', $post->category_id], ['id', '!=', $id]])->take(6)->get();
        return view('post', [
            'tags' => $tags,
            'categories' => $categories,
            'post' => $post,
            'related' => $related
        ]);
    }

    public function search(Request $req){
        $categories = Category::all();
        $tags = Tag::all();
        $goods = null;
        $category = $req->input('category');
        if($category==-1){
            $goods = Good::where('title', 'like', '%'.$req->input('title').'%')->paginate(12);
        }else{
            Good::where([['category_id', '=', $category], ['title', 'like', '%'.$req->input('title').'%']]);
        }
        return view('search', [
            'tags' => $tags,
            'categories' => $categories,
            'posts' => $goods,
        ]);
    }
}
