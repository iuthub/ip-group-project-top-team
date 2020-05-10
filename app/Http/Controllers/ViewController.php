<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Good;
use App\GoodTag;
use App\Http\Requests\CommentRequest;
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
        $comments = Comment::all();
        $post = Good::where('id', '=' , $id)->first();
        $related = Good::where([['category_id', '=', $post->category_id], ['id', '!=', $id]])->take(6)->get();
        return view('post', [
            'tags' => $tags,
            'categories' => $categories,
            'post' => $post,
            'related' => $related,
            'comments' => $comments
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
            $goods = Good::where([['category_id', '=', $category], ['title', 'like', '%'.$req->input('title').'%']])->paginate(12);
        }
        return view('search', [
            'tags' => $tags,
            'categories' => $categories,
            'posts' => $goods,
        ]);
    }

    public function category($id){
        $categories = Category::all();
        $tags = Tag::all();
        $goods = null;
        if($id=-1){
            $goods = Good::where('id', '>', -1)->paginate(8);
        }else{
            $goods = Good::where('category_id', '=', $id)->paginate(8);
        }
        return view('category', [
            'tags' => $tags,
            'categories' => $categories,
            'posts' => $goods,
        ]);
    }

    public function tag($id){
        $categories = Category::all();
        $tags = Tag::all();
        $goods = null;
        if($id==-1){
            $goods = Good::where('id', '>', -1)->paginate(12);
        }else{
            $goods = Tag::where('id','=', $id)->first()->goods()->paginate(12);
        }
        return view('category', [
            'tags' => $tags,
            'categories' => $categories,
            'posts' => $goods,
        ]);
    }

    public function comment(CommentRequest $req){
        $comment = new Comment();
        $comment->content = $req->input('content');
        $comment->good_id = $req->input('good_id');
        $comment->user_id = $req->input('user_id');
        $comment->save();
        return redirect()->back();
    }
}
