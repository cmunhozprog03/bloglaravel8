<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 2)->latest('id')->paginate(8);
        return view('posts.index', compact('posts'));
    }
}
