<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => 'Hello, this is my first post',
            'my-second-post' => 'Hello, this is my second post'
        ];
        if (! array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that post was not found');
        }
        return view('post', [
            'postVariable' => $posts[$post] ]);
    }
}
