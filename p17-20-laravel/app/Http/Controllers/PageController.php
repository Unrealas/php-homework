<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function index(){
        

        $posts= Post::orderBy('created_at', 'DESC')
            ->get();

        return view('main',[
            'pageTitle' => 'MainPage',
            'posts' => $posts,
        ]);
    }
    public function create(Request $request){
        if($request->isMethod('post')){

        $data = $request->all();
        $post = new Post();
        $post->title = $data['title'];
        $post->author = 0;
        $post->content = $data['content'];
        $post->save();

        return redirect(route("main_page"));
    }
        return view ('admin/create');
    }

    public function about(){
       return view('about', [
           'info' => [
               'name' => 'Admin',
               'phone' => '866000222',
               'email' =>'info@page.lt'
        ]
       ]);
    }
    public function deletePost($post_id){
        $post = Post::find($post_id);
        $post->delete();

        return redirect(route("main_page"));

    }
}

