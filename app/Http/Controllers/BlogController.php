<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
class BlogController extends Controller
{
    //
    public function home(){
        $data=Blog::all();
        return view('home',compact('data'));
    }

    public function userdashboard(){
        $data = Blog::where('user_id', auth()->id())->get();
        return view('dashboard',compact('data'));
    }
    public function addform(){
        return view('blog.form');
    }

    public function post_blog(Request $req){
        $post=new Blog;
        $post->user_id=$req->user_id;
        $post->title=$req->title;
        $post->shortdes=$req->shortdes;
        $post->longdes=$req->longdes;
        $post->save();
        return redirect()->route('blog.form')->with('success','Blog added');
    }
    public function edit_form($id){
        $post=Blog::findOrFail($id);
        return view('blog.editform',compact('post'));
    }

    public function update_blog(Request $req,$id){
        $post=Blog::findOrFail($id);
        $post->title=$req->title;
        $post->shortdes=$req->shortdes;
        $post->longdes=$req->longdes;
        $post->save();
        return redirect()->route('blog.form')->with('success','Blog edited');
    }


    public function delete_blog($id){
        $post=Blog::findOrFail($id);
        $post->delete();
        return redirect()->route('home');
    }
}
