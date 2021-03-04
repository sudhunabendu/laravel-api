<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
    public function addPost()
    {
        $post = new Post();
        $post->title = "second post";
        $post->body = "second post description";
        $post->save();
        return "Post has been saved";
    }

    public function addComments($id)
    {
        $post = Post::find($id);
        $com = new Comment();
        $com->comment = "this is first comments";
        $post->comments->save($com);
        return "comments has been saved";
    }

    public function index($id)
    {
        return Post::find($id)->comments;
    }
}
