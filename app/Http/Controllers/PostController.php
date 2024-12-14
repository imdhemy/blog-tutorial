<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
   public function index()
   {
       $posts = Post::all();

       return response()->json($posts,Response::HTTP_OK);
   }
   public function show(string $id)
   {
       $post = Post::findOrFail($id);

        return response()->json($post,Response::HTTP_OK);

   }

    public function update(UpdatePostRequest $request,string $id){
        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->getTitle(),
            'body'  => $request->getBody(),
        ]);

        return response()->json($post,Response::HTTP_OK);

    }

}
