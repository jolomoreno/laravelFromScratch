<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($post)
    {
//        $posts = [
//            'my-first-post' => 'Hello, this is my first post',
//            'my-second-post' => 'Hello, this is my second post'
//        ]
//        if (! array_key_exists($post, $posts)) {
//            abort(404, 'Sorry, that post was not found');
//        }
        $post = DB::table('posts')->where('slug', $post)->first();
        if (! $post) {
            abort(404, 'Sorry, that post was not found');
        }
        return view('post', [
            'postVariable' => $post
        ]);
    }
}
