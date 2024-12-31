<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): View|Factory|Application
    {
        $hasBackButton = false;
        $posts = Post::latest()->paginate(9);

        return view('articles.index', compact('posts', 'hasBackButton'));
    }

    public function show(Post $post): View|Factory|Application
    {
        $hasBackButton = true;

        return view('articles.show', compact('post', 'hasBackButton'));
    }
}
