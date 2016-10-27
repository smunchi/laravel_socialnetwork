<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
    
    public function getDashboard() {
        $posts = Post::all();
        return view('dashboard', ['posts'=>$posts]);
    }
    
    public function postCreatePost(Request $request) {
        $this->validate($request, [
            'body'=>'required|max:1000'
        ]);
        $post = new Post();
        $post->body = $request['body'];
        
        $message = 'There was an error';
        
        if($request->user()->posts()->save($post)) {
            $message = 'Post successfuly created';
        }
        
        return redirect()->route('dashboard')->with(['message'=>$message]);
    }
    
    public function getDeletePost($post_id) {
        $post = Post::where('id', $post_id)->first();
        $post->delete();
        
        return redirect()->route('dashboard')->with(['message'=>'Successfully deleted!']);
    }
}
