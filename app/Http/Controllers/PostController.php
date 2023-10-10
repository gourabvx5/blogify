<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts_index()
    {
        return view('pages.post.home.author-home');
    }

    public function posts_singleshow()
    {
        $posts = Post::find($id);
        return view('posts.post', ['posts' => $posts]);
    }
    
    public function posts_create()
    {
        return view();
    }

    public function posts_store(Request $request)
    {
        $data = $request->validate([
            'post_title'=> 'required',
            'post_desc'=> 'required'
        ]);

        Post::create($data);

        return redirect()->route('/')->with('success', 'Blog post created successfully.');
    }

    public function posts_edit()
    {
        $posts = Post::findOrFail($id);
        return view('posts.edit', ['posts' => $posts]);
    }

    public function update(Request $request, $id,Post $posts)
   {   
    //    if($posts->user_id != auth()->id()){
    //     abort(403,"Unauthorized Access");
    //     }
        
        $validatedData = $request->validate([
            'post_title' => 'required',
            'post_desc' => 'required'
        ]);

        $posts = Post::findOrFail($id);
        $posts->update($validatedData);

        return redirect()->route('/')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();

        return redirect()->route('posts.posts');
    }


}
