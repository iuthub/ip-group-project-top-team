<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Good;
use App\GoodTag;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\KorzinaRequest;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{

    public function index(){
        $discounts = Good::orderBy('discount','desc')->take(6)->get();
        $newest = Good::latest()->take(6)->get();
        return view('welcome', [
            'discounts' => $discounts,
            'newest' => $newest
        ]);
    }

    public function post($id){
        $comments = Comment::all();
        $post = Good::where('id', '=' , $id)->first();
        $related = Good::where([['category_id', '=', $post->category_id], ['id', '!=', $id]])->take(6)->get();
        return view('post', [
            'post' => $post,
            'related' => $related,
            'comments' => $comments
        ]);
    }


    public function search(Request $req){
        $goods = null;
        $category = $req->input('category');
        if($category==-1){
            $goods = Good::where('title', 'like', '%'.$req->input('title').'%')->paginate(12);
        }else{
            $goods = Good::where([['category_id', '=', $category], ['title', 'like', '%'.$req->input('title').'%']])->paginate(12);
        }
        return view('search', [
            'posts' => $goods,
        ]);
    }

    public function category($id){
        $goods = null;
        if($id == -1){
            $goods = Good::where('id', '>', -1)->paginate(8);
        }else{
            $goods = Good::where('category_id', '=', $id)->paginate(8);
        }
        return view('category', [
            'posts' => $goods,
        ]);
    }

    public function tag($id){
        $goods = null;
        if($id==-1){
            $goods = Good::where('id', '>', -1)->paginate(12);
        }else{
            $goods = Tag::where('id','=', $id)->first()->goods()->paginate(12);
        }
        return view('category', [
            'posts' => $goods,
        ]);
    }

    public function comment(CommentRequest $req, $id){
        $comment = new Comment();
        $post = Good::where('id', '=', $id)->first();
        $user = Auth::user();
        $comment->content = $req->input('content');
        $comment->user_id = $user->id;
        $comment->good_id = $post->id;
        $comment->save();
        return redirect()->back();
    }

    public function korzina(KorzinaRequest $req){
        return redirect()->back();
    }
}
