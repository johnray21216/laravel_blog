<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use App\Post;
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')->orderByRaw('created_at DESC')->paginate(5);
        return view('admin.admin-list',['posts' => $posts]);
    }

    /**
     * Show post form
     *
     */
    public function getPostForm()
    {
        return view('post.admin-post');
    }

    public function createPost(Request $request)
    {
      request()->validate([
            'title' => 'required|string',
            'contents' => 'required|string',
            'image' => 'required|image'
          ]);

      $image = $request->file('image');
      $extension = $image->getClientOriginalExtension();
      Storage::disk('public')->put($image->getFileName().'.'.$extension, File::get($image));

      /**$post = new Post();
      $post->title = $request->title;
      $post->contents = $request->contents;
      $post->mime = $image->getClientMimeType();
      $post->original_filename = $image->getClientOriginalName();
      $post->filename = $image->getFileName.'.'.$extension;
      $post->save();
      **/

      $post = Post::create(array(
         'title' => Input::get('title'),
         'contents' => Input::get('contents'),
         'mime' => $image->getClientMimeType(),
         'original_filename' => $image->getClientOriginalName(),
         'filename' => $image->getFileName().'.'.$extension
      ));

      return redirect()->route('home')->with('sucess','Post Added Successfully!');

      }

      public function editPost($id)
      {
          $post = Post::find($id);
          return view('post.edit-post', ['post' => $post]);
      }

      public function edit(Request $request)
      {
          request()->validate([
                'title' => 'required|string',
                'contents' => 'required|string',
                'image' => 'required|image'
              ]);
          $image = $request->file('image');
          $extension = $image->getClientOriginalExtension();
          Storage::disk('public')->put($image->getFileName().'.'.$extension, File::get($image));

          Post::where('id',Input::get('id'))->update(array(
           'title' => Input::get('title'),
           'contents' => Input::get('contents'),
           'mime' => $image->getClientMimeType(),
           'original_filename' => $image->getClientOriginalName(),
           'filename' => $image->getFileName().'.'.$extension
        ));
        return redirect()->route('home')->with('status','Post Edit Successfully!');
      }
}
