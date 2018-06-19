<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function renderForm() {

        return view('pages.create-post');
    }
    public function store() {
        $this->validate(request(),[
            'category' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create([
            'category' => request('category'),
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return redirect('/');
    }
    public function postEdit(Post $post) {
        if(Gate::denies('edit-post', $post)) {

            return view('pages.restrict');
        }
        else
            return view('pages.edit-post', compact('post'));
    }

    public function postUpdateStore(Request $request, Post $post) {
        $this->validate(request(), [
            'category' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::where('id', $post->id)->update($request->only(['category', 'title', 'body']));

        return redirect('/');
    }
    public function postDelete(Post $post) {

        if(Gate::denies('delete-post', $post)) {

            return view('pages.restrict');
        }
        else
            $post->delete();
            return redirect('/');
    }
    public function dashboard() {

        $posts = Post::all();

        return view('pages.dashboard', compact('posts'));
    }

}