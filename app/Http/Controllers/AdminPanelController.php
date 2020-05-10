<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\GoodRequest;
use App\Http\Requests\UserRequest;
use App\Http\Requests\TagRequest;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminPanelController extends Controller
{
    public function index(){
        return view('AdminPages.index');
    }

    # User section

    public function userList(){
        $fields = ['id','name','email', 'isAdmin'];
        $users = User::select($fields)->paginate(15);
        return view('AdminPages.list', [
            'fields' => $fields,
            'values' => $users
        ]);
    }

    public function userEdit($id){
        $fields = ['id','name','email', 'isAdmin'];
        $user = User::select($fields)->where('id', '=', $id)->first();
        $fields = [
            'id' => [
                'type' => 'number',
                'value' => $user['id'],
                ],
            'name' => [
                'type' => 'text',
                'value' => $user['name'],
            ],
            'email' => [
                'type' => 'email',
                'value' => $user['email'],
            ],
            'isAdmin' => [
                'type' => 'number',
                'value' => $user['isAdmin'],
            ],
            ];
        return view('AdminPages.action', [
            'fields'=>$fields,
            'action'=>'update'
        ]);
    }

    public function userUpdate(UserRequest $req){
        User::where('id', '=', $req->input('id'))->update(['name' => $req->input('name'), 'email' => $req->input('email'), 'isAdmin' => $req->input('isAdmin')]);
        return redirect(route('user-list'));
    }

    public function userDelete($id){
        User::where('id', '=' , $id)->delete();
        return redirect(route('user-list'));
    }

    public function userNew(){
        $fields = [
            'id' => [
                'type' => 'number',
                'value' => '',
            ],
            'name' => [
                'type' => 'text',
                'value' => '',
            ],
            'email' => [
                'type' => 'email',
                'value' => '',
            ],
            'password' =>[
                'type'=> 'password',
                'value' => '',
            ],
            'isAdmin' => [
                'type' => 'number',
                'value' => '0',
            ],
        ];
        return view('AdminPages.action', [
            'fields'=>$fields,
            'action'=>'create'
        ]);
    }

    public function userCreate(UserRequest $req){
        $user = new User();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->isAdmin = $req->input('isAdmin');
        $user->password = Hash::make($req->input('password'));
        $user->save();
        return redirect(route('user-list'));
    }

    # Category section

    public function categoryList(){
        $fields = ['id','title'];
        $categories = Category::select($fields)->paginate(15);
        return view('AdminPages.list', [
            'fields' => $fields,
            'values' => $categories
        ]);
    }

    public function categoryEdit($id){
        $fields = ['id','title'];
        $category = Category::select($fields)->where('id', '=', $id)->first();
        $fields = [
            'id' => [
                'type' => 'number',
                'value' => $category['id'],
            ],
            'name' => [
                'type' => 'text',
                'value' => $category['title']
            ]
        ];
        return view('AdminPages.action', [
            'fields'=>$fields,
            'action'=>'update'
        ]);
    }

    public function categoryUpdate(CategoryRequest $req){
        Category::where('id', '=', $req->input('id'))->update(['name' => $req->input('title') ]);
        return redirect(route('category-list'));
    }

    public function categoryDelete($id){
        Category::where('id', '=' , $id)->delete();
        return redirect(route('category-list'));
    }

    public function categoryNew(){
        $fields = ['id','title'];
        $fields = [
            'id' => [
                'type' => 'number',
                'value' => '',
            ],
            'title' => [
                'type' => 'text',
                'value' => ''
            ]
        ];
        return view('AdminPages.action', [
            'fields'=>$fields,
            'action'=>'create'
        ]);
    }

    public function categoryCreate(CategoryRequest $req){
        $category = new Category();
        $category->title = $req->input('title');
        $category->save();
        return redirect(route('category-list'));
    }

    # Tag Section
    public function tagList(){
        $fields = ['id','title'];
        $tags = Tag::select($fields)->paginate(15);
        return view('AdminPages.list', [
            'fields' => $fields,
            'values' => $tags
        ]);
    }

    public function tagEdit($id){
        $fields = ['id','title'];
        $tag = Tag::select($fields)->where('id', '=', $id)->first();
        $fields = [
            'id' => [
                'type' => 'number',
                'value' => $tag['id'],
            ],
            'name' => [
                'type' => 'text',
                'value' => $tag['title']
            ]
        ];
        return view('AdminPages.action', [
            'fields'=>$fields,
            'action'=>'update'
        ]);
    }

    public function tagUpdate(TagRequest $req){
        Tag::where('id', '=', $req->input('id'))->update(['name' => $req->input('title') ]);
        return redirect(route('tag-list'));
    }

    public function tagDelete($id){
        Tag::where('id', '=' , $id)->delete();
        return redirect(route('tag-list'));
    }

    public function tagNew(){
        $fields = ['id','title'];
        $fields = [
            'id' => [
                'type' => 'number',
                'value' => '',
            ],
            'title' => [
                'type' => 'text',
                'value' => ''
            ]
        ];
        return view('AdminPages.action', [
            'fields'=>$fields,
            'action'=>'create'
        ]);
    }

    public function tagCreate(TagRequest $req){
        $tag = new Tag();
        $tag->title = $req->input('title');
        $tag->save();
        return redirect(route('tag-list'));
    }


    # Good section

    public function goodList(){
        $fields = ['id','title', 'count', 'price', 'discount'];
        $categories = Good::select($fields)->paginate(15);
        return view('AdminPages.list', [
            'fields' => $fields,
            'values' => $categories
        ]);
    }

    public function goodEdit($id){

    }

    public function goodUpdate(CategoryRequest $req){

    }

    public function goodDelete($id){
        Good::where('id', '=' , $id)->delete();
        return redirect(route('good-list'));
    }

    public function goodNew(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('AdminPages.goods.create', [
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    public function goodCreate(GoodRequest $req){
        $good = new Good();
        $good->title = $req->input('title');
        $good->count = $req->input('count');
        $good->price = $req->input('price');
        $good->discount = $req->input('discount');
        $good->description = $req->input('description');
        $good->category_id = $req->input('category');
        $image = $req->file('image');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img/posts');
        $image->move($destinationPath, $name);
        $good->image = $name;
        $tags = $req->input('tags');
        $good->save();
        $tags_db = Tag::find($tags);
        $good->tags()->attach($tags_db);
        $good->save();
        return redirect(route('good-list'));
    }
}
