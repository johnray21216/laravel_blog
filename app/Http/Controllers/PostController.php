<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getIndex()
    {
      $posts = DB::table('posts')->orderByRaw('created_at DESC')->paginate(5);
      return view('post.index',['posts' => $posts]);
    }

    public function getArchive()
    {
      $posts = DB::table('posts')->orderByRaw('created_at DESC')->paginate(5);
      return view('post.archive',['posts' => $posts]);
    }

    public function getPost($id)
    {
        $post = Post::find($id);
        return view('post.single', ['post' => $post]);
    }
}
