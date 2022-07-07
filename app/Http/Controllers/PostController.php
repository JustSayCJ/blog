<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        if (auth()->guest()) {
            abort(403);
        }

        return view('opstellen');
    }

    public function store()
    {
        if (auth()->guest()) {
            abort(403);
        }

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $post = new Post($attributes);
        $post->title = request('title');
        $post->slug = request('slug');
        $post->excerpt = request('excerpt');
        $post->body = request('body');
        $post->save();

        return redirect('/');
    }
}
