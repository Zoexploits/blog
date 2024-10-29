<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
       public function index(){

         $posts=Post::orderBy('updated_at')
         ->orderBy('id', 'desc')
         ->get();

         return view('posts.index',['posts'=>$posts]);

       }


       public function show($id){
         $post=Post::find($id);
         
        return view('posts.post', ['post' => $post]);
      
  }
       




       
       public function create(){

      

        return view('posts.create', );

      }
      public function edit($id, Request $request):View{
        // $posts = Post::findOrFail($id);
        $posts=Post::find($id);
          return view('posts.edit',['post'=>$posts]);
        // return the edit view with the task data
        // return view('posts.edit', ['posts' => $request->post($id)]);
      }

      public function update($id, Request $request){
         $request->validate([
              'title'=>'required|string',
              'content'=>'string|required',
              'photo'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);
             

          $validatedData=$request->all();
          $posts = Post::findOrFail($id);
          $posts->update($validatedData);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
        // return view('posts.index',['posts'=>$posts]);
      }



Public function store(Request $request){
    $request->validate([
        'title' => 'required|string',
        'content' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
    ]);

    // Initialize validated data
    $post = new Post;
    $post->title = $request->title;
    $post->content = $request->content;
    $post->user_id = Auth::id();
    // $validatedData = $request->all();
    // $validatedData['user_id'] = Auth::user()->id;

    // Handle the image upload
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = time() . '.' .$photo->getClientOriginalExtension();
        $photo->move(public_path(), $photoName);
        $post->photo = $photoName;
    }

    // Create the post
    // Post::create($validatedData);
    $post->save(); // This will save the post to the database along with the image file if one is provided.  // Also, it will automatically associate the post with the authenticated user.  // Note: If you don't want to associate the post with the authenticated user, you'll need to add an additional field to the posts table for the user_id.  // Also, you'll need to uncomment the line where the photo is moved to the public directory in the store method.  // Also, you'll need to uncomment the line where the photo is validated and moved in the store method.  // Also, you'll need to uncomment the line where the photo is associated with the post in the store method.  // Also, you'll need to uncomment the line where the photo is deleted in the destroy method.  // Also, you'll need to uncomment the line where the photo is deleted in the edit method.  // Also, you'll need to uncomment the line

    // Redirect to index or wherever you'd like
    return redirect()->route('posts.index')->with('success', 'Post created successfully.');
}


      

      public function destroy($id){
        $posts = Post::findOrFail($id)->first(); // 
        $posts->delete();
        return redirect()->route('posts.index', )->with('success', 'Post deleted successfully.');
        // return view('posts.index',['posts'=>$posts]);
      }
}
